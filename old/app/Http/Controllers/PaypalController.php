<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
use Redirect;
use Auth;
use App\Models\Paypal_data;
use App\Models\Cart;
use App\Models\Invoice;
use App\User;
use App\Models\Order;
use App\Http\Requests;
use App\Models\OrderCount;

class PaypalController extends Controller
{
    public $mailchimp;

    public $listId = '4663717bea';
    private $_apiContext;

    public function __construct(\Mailchimp $mailchimp , Paypal_data $paypal_data , User $user, Order $order , Invoice $invoice , OrderCount $orderCount )
    {
        $this->mailchimp   = $mailchimp;
        $this->paypal_data = $paypal_data;
        $this->user        = $user;
        $this->order       = $order;
        $this->invoice     = $invoice;
        $this->count       =  $orderCount;

    }

    public function payPremium()
    {
        return view('pages.cancel_payment');
    }

    public function getCheckout(Request $request)
    {
        $order_numb = $this->count->latest()->pluck('number')->first();
        $orderNumber =   $order_numb+1;
        $orderNumber = $this->count->create(['number' => $orderNumber]);
        if($request->get('form_action') == 'login'){

            if(Auth::attempt(['email' => $request->get('email') , 'password' => $request->get('password')])){
                $user = Auth::user();
            }else{
                return redirect()->back()->withErrors(['massage' =>  'Email or password incorect']);
            }
            if (\Session::has('cart')) {
                $oldCart = \Session::get('cart');
                $cart = new Cart($oldCart);
            } else {
                return redirect()->back()->withErrors(['massage' => 'Cart cant be empty']);
            }
            if($cart->items == []){
                return redirect()->back()->withErrors(['massage' => 'Cart cant be empty']);
            }
            $service_name = [];
            $plan_name = [];
                   
			
            $provider = new ExpressCheckout;
            
            $data = [];
            $j = 0;
            if (\Session::has('discount')) {
                $discount = \Session::get('discount');
                if ($discount->coupon_percent == 0) {
                    $price_percent = $cart->totalPrice - $discount->coupon_flat;
                    $percent = $price_percent * 100 / $cart->totalPrice;
                    $coupon = 100 - $percent;
                }
                else {
                    $coupon = $discount->coupon_percent;
                }


                \Session::put('invoice_no', $orderNumber);
                foreach ($cart->items as $oldCart) {
                    $data['items'][$j++] =
                        [
                            'name' => "Service Name-".$oldCart['service_name'] ." PLan Name-". $oldCart['item']['plan_name']."",
                            'price' => round($oldCart['price'] - $oldCart['price'] * $coupon / 100),
                            'qty' => $oldCart['qty']
                        ];
                }
            } else {
                \Session::put('invoice_no', $orderNumber);

                foreach ($cart->items as $oldCart) {
                    $data['items'][$j++] =
                        [
                            'name' => "Service Name-".$oldCart['service_name'] ." PLan Name-". $oldCart['item']['plan_name']."",
                            'price' => round($oldCart['price']),
                            'qty' => $oldCart['qty']
                        ];
                }
            }
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

            $data['invoice_id'] = \Session::get('invoice_no');
            $data['invoice_description'] = "Order #$data[invoice_id] Invoice";
            $data['return_url'] = url('/getDone');
            $data['cancel_url'] = url('/getCancel');

            $total = 0;
            foreach ($data['items'] as $item) {
                $total += $item['price'] * $item['qty'];
            }
            $data['total'] = $total;
            \Session::put('data' , $data);
            $response = $provider->setExpressCheckout($data);
            return redirect($response['paypal_link']);

        }
        else {
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
                    return redirect()->back()->with('massage', 'Email is Already Subscribed');
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
                   
			
                    $provider = new ExpressCheckout;


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
                                    'name' => "Service Name-".$oldCart['service_name'] ." PLan Name-". $oldCart['item']['plan_name']."",
                                    'price' => round($oldCart['price'] - $oldCart['price'] * $coupon / 100),
                                    'qty' => $oldCart['qty']
                                ];


                        }
                        
                    } else {
                        \Session::put('invoice_no', $orderNumber);

                        foreach ($cart->items as $oldCart) {
                            $data['items'][$j++] =
                                [
                                    'name' => "Service Name-".$oldCart['service_name'] ." PLan Name-". $oldCart['item']['plan_name']."",
                                    'price' => round($oldCart['price']),
                                    'qty' => $oldCart['qty']
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


                    $data['invoice_id'] = \Session::get('invoice_no');
                    $data['invoice_description'] = "Order #$data[invoice_id] Invoice";
                    $data['return_url'] = url('/getDone');
                    $data['cancel_url'] = url('/getCancel');

                    $total = 0;
                    foreach ($data['items'] as $item) {
                        $total += $item['price'] * $item['qty'];
                    }
                    $data['total'] = $total;
                    
                    \Session::put('data' , $data);
                    $response = $provider->setExpressCheckout($data);
                    return redirect($response['paypal_link']);

                }
            }
        }
    }

    public function getDone(Request $request)
    {


        $token  = $request->get('token');
        $data = \Session::get('data');
        $PayerID = $request->get('PayerID');
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($token);
      	$response = $provider->doExpressCheckoutPayment(\Session::get('data'), $token, $PayerID);
        /*$response = $provider->doExpressCheckoutPayment($data, $token, $PayerID);*/
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
        $this->paypal_data->create([$response , 'user_id' => $user->id]);
        $data =  $this->paypal_data->orderBy('id' , 'desc')->first();
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

    public function getCancel(Request $request)
    {
    	
        $token  = $request->get('token');
        $provider = new ExpressCheckout;
        $PayerID = $request->get('PayerID');
        $response = $provider->getExpressCheckoutDetails($token);
        /*$response = $provider->doExpressCheckoutPayment($data, $token, $PayerID);*/
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
        $this->paypal_data->create($response , ['user_id' => $user->id]);
       
        $data =  $this->paypal_data->orderBy('id' , 'desc')->first();
        if(!Auth::user()){
            if(\Auth::attempt(['password' => \Session::get('temp_pass') , 'identifycator' => \Session::get('temp_id')])) {
                return view('admin.get_cancel' , ['data' => $data]);
            }else{
                return false;
            }
        }else{
            return view('admin.get_cancel' , ['data' => $data]);
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
    
    public function complateOrder($order_id){
       $invoice =  $this->order->where('order_id' , $order_id)->first();
       \Session::put('order_invoice_id' , $order_id);
        $provider = new ExpressCheckout;
        $data = [];
        $data['items'] = [
            [
                'name' => $invoice['plan_name'],
                'price' => number_format($invoice['price'] - $invoice['price']*10/100 , 2, '.', ''),
                'qty' => $invoice['qty']
            ],
        ];

        $data['invoice_id'] = $invoice['invoice_no'];
        $data['invoice_description'] = "Order #$data[invoice_id] Invoice";
        $data['return_url'] = url('/getDone');
        $data['cancel_url'] = url('/getCancel');



        $data['total'] = number_format($invoice['price'] - $invoice['price']*10/100 , 2, '.', '');
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }



    public function invoicePay($id){
        $invoice = $this->invoice->where('crypted' , $id)->first();
    
       
        $provider = new ExpressCheckout;
        $data = [];
        $data['items'] = [
            [
                'name' => $invoice['item'],
                'price' => $invoice['amount'],
                'qty' => $invoice['qty']
            ],
        ];
        
         \Session::put('invoice_id' , $id);
         
        $data['invoice_id'] = $invoice['invoice_no'];
        $data['invoice_description'] = "Order #$data[invoice_id] Invoice";
        $data['return_url'] = url('/getDone');
        $data['cancel_url'] = url('/getCancel');
        $data['total'] = $invoice['amount'];
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);

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
