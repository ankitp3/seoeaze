<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayU;
use Redirect;
use Auth;
use App\Models\Paypal_data;
use App\Models\Cart;
use App\Models\Invoice;
use App\User;
use Tzsk\Payu\Facade\Payment;
use Softon\Indipay\Facades\Indipay;
use App\Models\Order;
use App\Http\Requests;
use App\Models\OrderCount;
use Riazxrazor\Payumoney\Payumoney;

class PayumoneyController extends Controller
{

    public $mailchimp;

    public $listId = '4663717bea';
    private $_apiContext;

    public function __construct(\Mailchimp $mailchimp , Paypal_data $paypal_data , User $user, Order $order , Invoice $invoice , OrderCount $orderCount ,PayU $payU )
    {
        $this->mailchimp   = $mailchimp;
        $this->paypal_data = $paypal_data;
        $this->user        = $user;
        $this->order       = $order;
        $this->invoice     = $invoice;
        $this->count       =  $orderCount;
        $this->payu        = $payU;

    }


    public function getCheckout(Request $request)
    {
        /* Getting ORder number from database*/

        $order_numb = $this->count->latest()->pluck('number')->first();
        $orderNumber =   $order_numb+1;
        $orderNumber = $this->count->create(['number' => $orderNumber]);
        $order_numb = $this->count->latest()->pluck('number')->first();
        /* If User is Auth and use the Login Form as well */
        if($request->get('form_action') == 'login') {
            if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
                $user = Auth::user();
            } else {
                return redirect()->back()->withErrors(['massage' => 'Email or password incorect']);
            }
            if (\Session::has('cart')) {
                $oldCart = \Session::get('cart');
                $cart = new Cart($oldCart);
            } else {
                return redirect()->back()->withErrors(['massage' => 'Cart cant be empty']);
            }
            if ($cart->items == []) {
                return redirect()->back()->withErrors(['massage' => 'Cart cant be empty']);
            }

            $data = [];
            $j = 0;

            /* Checking is session ha Discount */

            if (\Session::has('discount')) {
                $discount = \Session::get('discount');
                if ($discount->coupon_percent == 0) {
                    $price_percent = $cart->totalPrice - $discount->coupon_flat;
                    $percent = $price_percent * 100 / $cart->totalPrice;
                    $coupon = 100 - $percent;
                } else {
                    $coupon = $discount->coupon_percent;
                }


                \Session::put('invoice_no', $orderNumber);
                foreach ($cart->items as $oldCart) {
                    $data['items'][$j++] =
                        [
                            'productinfo' => "Service Name-" . $oldCart['service_name'] . " PLan Name-" . $oldCart['item']['plan_name'] . "",
                            'amount' => round($oldCart['price'] - $oldCart['price'] * $coupon / 100),
                        ];
                }
            } else {
                \Session::put('invoice_no', $orderNumber);
                $service_name_plan = $cart->price;

                foreach ($cart->items as $oldCart) {
                    $data['items'][$j++] =
                        [
                            'productinfo' => "Service Name-" . $oldCart['service_name'] . " PLan Name-" . $oldCart['item']['plan_name'] . "",
                            'amount' => round($oldCart['price']),
                        ];
                }
            }

            /*Putiing For each elemt to cart*/
            foreach ($cart->items as $car) {
                $this->order->create([
                    'user_id' => $user->id,
                    'service_name' => $car['service_name'],
                    'plan_name' => $car['item']['plan_name'],
                    'qty' => $car['qty'],
                    'order_id' => \Session::get('invoice_no'),
                    'price' => $car['price']
                ]);
            }

            $data['txnid'] = $order_numb;
            $data['productinfo'] = "Order #$data[txnid] Invoice";
            $data['firstname'] = 'John';
            $data['email'] = Auth::user()->email;
            $data['phone'] = '';

            $total = 0;
            foreach ($data['items'] as $item) {
                $total += $item['amount'];
            }
            $data['amount'] = $total;
            \Session::put('data', $data);
            logger('logged', [\Session('data')]);
            /* return Payment::make($data, function ($then) {
                 $then->redirectRoute('payment_status');*/
            $order = Indipay::gateway('payumoney')->prepare($data);
            return Indipay::process($order);


        }else{
            $this->validate($request, [
                'email' => 'required|unique:users|email',
                'g-recaptcha-response' => 'required|recaptcha',
            ]);
            if ($request->get('subscribe') == 'yes') {
                $this->validate($request, [
                    'email' => 'required|email',
                ]);

                try {
                    $this->mailchimp
                        ->lists
                        ->subscribe(
                            $this->listId,
                            ['email' => $request->input('email'), 'fname' => 'Artyom']
                        );


                } catch (\Mailchimp_List_AlreadySubscribed $e) {
                    return redirect()->back()->with('massage',  'Email is Already Subscribed');
                } catch (\Mailchimp_Error $e) {
                    return redirect()->back()->with('error', 'Error from MailChimp');
                }
            }
            if ($this->sendRegistrationMassages($request->all())) {
                if ($this->user->create(['email' => $request->get('email'), 'password' => bcrypt(\Session::get('temp_pass')), 'identifycator' => \Session::get('temp_id'), 'role_id' => 4])) {
                    $user = $this->user->where('email', $request->get('email'))->first();

                    if (\Session::has('cart')) {
                        $oldCart = \Session::get('cart');
                        $cart = new Cart($oldCart);
                    } else {
                        return redirect()->back()->withErrors(['massage' => 'Cart cant be empty']);
                    }
                    $service_name = [];
                    $plan_name = [];
                    $data = [];
                    $j = 0;
                    if (\Session::has('discount')) {
                        $discount = \Session::get('discount');
                        if ($discount->coupon_percent == 0) {
                            $price_percent = $cart->totalPrice - $discount->coupon_flat;
                            $percent = $price_percent * 100 / $cart->totalPrice;
                            $coupon = 100 - $percent;
                        } else {
                            $coupon = $discount->coupon_percent;
                        }
                        \Session::put('invoice_no', $orderNumber);
                        foreach ($cart->items as $oldCart) {
                            $data['items'][$j++] =
                                [
                                    'productinfo' => "Service Name-" . $oldCart['service_name'] . " PLan Name-" . $oldCart['item']['plan_name'] . "",
                            'amount' => round($oldCart['price'] - $oldCart['price'] * $coupon / 100),
                                ];

                        }

                    } else {
                        \Session::put('invoice_no', $orderNumber);
                        foreach ($cart->items as $oldCart) {
                            $data['items'][$j++] =
                                [
                                    'productinfo' => "Service Name-" . $oldCart['service_name'] . " PLan Name-" . $oldCart['item']['plan_name'] . "",
                            'amount' => round($oldCart['price']),
                                ];
                        }
                    }

                    foreach ($cart->items as $car) {
                        $this->order->create([
                            'user_id' => $user->id,
                            'service_name' => $car['service_name'],
                            'plan_name' => $car['item']['plan_name'],
                            'qty' => $car['qty'],
                            'order_id' =>\Session::get('invoice_no'),
                            'price' => $car['price']
                        ]);


                    }


                    $data['txnid'] = $orderNumber;
                    $data['productinfo'] = "Order #$data[txnid] Invoice";
                    $data['firstname'] = 'John';
                    $data['email'] = Auth::user()->email;
                    $data['phone'] = '';

                    $total = 0;
                    foreach ($data['items'] as $item) {
                        $total += $item['amount'];
                    }
                    $data['amount'] = $total;

                    \Session::put('data' , $data);
                    $order = Indipay::gateway('payumoney')->prepare($data);
                    return Indipay::process($order);

                }

            }
        }

    }


    public function invoicePay($id){
        $order_numb = $this->count->latest()->pluck('number')->first();
        $orderNumber =   $order_numb+1;
        $orderNumber = $this->count->create(['number' => $orderNumber]);
        $order_numb = $this->count->latest()->pluck('number')->first();
        $invoice = $this->invoice->where('crypted' , $id)->first();


        $data = [];
        $data['items'] = [
            [
                'name' => $invoice['item'],
                'price' => $invoice['amount'],
                'qty' => $invoice['qty']
            ],
        ];
     $data['txnid'] = $order_numb;
        $data['productinfo'] = "Order #$data[txnid] Invoice";
        $data['firstname'] = Auth::user()->first_name;
        $data['email'] = Auth::user()->email;
        $data['phone'] = '';
        $data['amount'] = $invoice->amount;
        \Session::put('invoice_id' , $id);
        $order = Indipay::gateway('payumoney')->prepare($data);
        return Indipay::process($order);
    }

    public  function getCancel(){
        $payment = Payment::capture();
        if($payment->get('status') == 'failure'){
            if(\Session::has('invoice_id')){
                $this->invoice->where('crypted' ,\Session::get('invoice_id'))->update(['payed' => 'canceled']);
            }
            if(\Session::has('order_invoice_id')){
                $this->order->where('order_id' ,\Session::get('order_invoice_id'))->update(['order_status' => 'cancel']);
            }
            if(\Session::has('invoice_no')){
                $this->order->where('order_id' , \Session::get('invoice_no'))->update(['order_status' => 'cancel' , 'order_id' => $this->count->latest()->pluck('number')->first() ]);
            }
            $user =  $this->user->orderBy('id' , 'desc')->first();

            $data =  $this->payu->orderBy('id' , 'desc')->first();
            if(!Auth::user()){
                if(\Auth::attempt(['password' => \Session::get('temp_pass') , 'identifycator' => \Session::get('temp_id')])) {
                    return view('admin.get_cancel' , ['data' => $data]);
                }else{
                    return false;
                }
            }else{
                return view('admin.get_cancel' , ['data' => $data]);
            }
        }else{

            if(\Session::has('invoice_id')){
                $this->invoice->where('crypted' ,\Session::get('invoice_id'))->update(['payed' => 'payed']);
                $invoice = $this->invoice->where('crypted' , \Session::get('invoice_id'))->first();
                $this->order->create([
                    'user_id' => Auth::user()->id,
                    'service_name' => $invoice->service_name,
                    'plan_name' =>$invoice->item,
                    'qty' => $invoice->qty,
                    'order_id' => $this->count->latest()->pluck('number')->first(),
                    'price' => $invoice->amount
                ]);
            }

            if(\Session::has('order_invoice_id')){

                $this->invoice->where('order_id' ,\Session::get('order_invoice_id'))->update(['payed' => 'payed']);
                $invoice = $this->invoice->where('order_id' , \Session::get('order_invoice_id'))->first();

                $this->order->create([
                    'user_id' => Auth::user()->id,
                    'service_name' => $invoice->service_name,
                    'plan_name' =>$invoice->item,
                    'qty' => $invoice->qty,
                    'order_id' => $this->count->latest()->pluck('number')->first(),
                    'price' => $invoice->amount
                ]);
            }
            if(\Session::has('invoice_no')){
                $this->order
                    ->where('order_id' , \Session::get('invoice_no'))
                    ->update(['order_status' => 'payed' , 'order_id' => $this->count->latest()->pluck('number')->first()]);
            }
            $user =  $this->user->orderBy('id' , 'desc')->first();
            $data =  $this->payU->orderBy('id' , 'desc')->first();
            if(!Auth::user()){
                if(\Auth::attempt(['password' => \Session::get('temp_pass') , 'identifycator' => \Session::get('temp_id')])) {
                    return view('admin.get_done' , ['data' => $data]);
                }else{
                    return false;
                }
            }else{
                return view('admin.get_done' , ['data' => $data]);
            }
        }
    }

    public function sendRegistrationMassages($array){
        $data['user'] = 'name';
        $data['password'] = $this->randomPassword();
        $data['identyfi'] = $this->randomid();
        $data['email_to'] = $array['email'];
        $data['token'] = csrf_token();
        $data['email_name'] = 'SEO EAZE';
        $data['email_type'] = 'activation';
        $data['email_subject'] = 'Welcome!';
        \Session::put('temp_pass', $data['password']);
        \Session::put('temp_id', $data['identyfi']);
        \Session::put('registr_token', $data['token']);
        $this->user->where('email' , $array['email'])->update(['password' => bcrypt($data['password'])]);
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function sendEmail($data)
    {
        return \Mail::queue('emails.'.$data['email_type'], $data, function ($message) use ($data) {
            $message->to($data['email_to'], $data['email_name'])->subject($data['email_subject']);
        });

    }
    public function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890&$&*';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function randomid() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $rand_id = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $rand_id[] = $alphabet[$n];
        }
        return implode($rand_id); //turn the array into a string
    }


    public function randomInvoice() {
        $alphabet = '1234567890';
        $inovice_nomber = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i <= 6; $i++) {
            $n = rand(0, $alphaLength);
            $inovice_nomber[] = $alphabet[$n];
        }
        return implode($inovice_nomber); //turn the array into a string
    }

}
