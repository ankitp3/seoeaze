<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Plan;
use App\Models\Coupon;
use App\Models\Group;
use App\Models\Order;
use App\Models\Post;
use App\Models\All_plan;
use App\Models\Get_a_quote;
use App\Models\Invoice;
use App\Models\Coupouns_flat;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct(User $user , Get_a_quote $get_a_quote , Plan $plan  , Coupon $coupon , Service $service ,Group $group , All_plan $all_plan , Coupouns_flat $coupons_flat, Order $order , Invoice $invoice , \Mailchimp $mailchimp )
    {
        $this->user = $user;
        $this->plan = $plan;
        $this->service = $service;
        $this->coupon = $coupon;
        $this->group = $group;
        $this->all_plan = $all_plan;
        $this->coupons_flat  = $coupons_flat;
        $this->order = $order;
        $this->invoice = $invoice;
        $this->mailchimp = $mailchimp;
        $this->get_a_quote  = $get_a_quote;
        $posts = Post::published()->where('post_type' , 'post')->take(3)->orderBy('ID' , 'desc')->get();
        \View::share('posts' , $posts);
    }

    public function getEmail(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!\Session::has('cart')){
            return view('pages.forgot_pass' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = \Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.forgot_pass' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function postEmail(ForgotPasswordRequest $forgotPasswordRequest)
    {


        $result = $this->user->where('email', $forgotPasswordRequest->get('email'))->first();
        if ($result == null) {
            return redirect()->back()->withErrors(['massage' => Lang::get('auth.email.error')]);
        } else {
            \Session::put('token', $forgotPasswordRequest->get('_token'));
            \Session::put('user_reco_code', $this->randomPassword());
            \Session::put('email' ,$forgotPasswordRequest->get('email'));
            $data_admin['email_to'] = 'admin@erpscloud.com';
            $data_admin['email_subject'] = 'Password Resset';
            $data_admin['email_type'] = 'auth.reset_password';
            $data_admin['key']  = \Session::get('user_reco_code');
            $data_admin['email_name'] = 'Artyom';
            $data_admin['token'] = $forgotPasswordRequest->get('_token');
            $data['user'] = 'name';
            $data['key']  = \Session::get('user_reco_code');
            $data['email_to'] = $forgotPasswordRequest->get('email');
            $data['token'] = $forgotPasswordRequest->get('_token');
            $data['email_name'] = 'Artyom';
            $data['email_type'] = 'auth.reset_password';
            $data['email_subject'] = 'Password Resset';
            $user['token'] = $forgotPasswordRequest->get('_token');
            $user['email'] = $forgotPasswordRequest->get('email');
            $this->sendEmail($data);
            $this->sendMailToAdmin($data_admin);
            $data = $this->plan->get();
            $services = $this->service->get();
            if(!\Session::has('cart')){
                return view('pages.forgot_pass_massage' , ['data' => $data , 'services' => $services , 'user' => $user]);
            }else{
                $oldCart  = \Session::get('cart');
                $cart  = new Cart($oldCart);
                return view('pages.forgot_pass_massage' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  , 'user' => $user]);
            }

        }
    }
    public function sendEmail($data)
    {
        return Mail::queue('emails.'.$data['email_type'], $data, function ($message) use ($data) {
            $message->to($data['email_to'], $data['email_name'])->subject($data['email_subject']);
        });

    }

    public function sendMailToAdmin($data_admin){
        return Mail::queue('emails.'.$data_admin['email_type'], $data_admin, function ($message) use ($data_admin) {
            $message->to($data_admin['email_to'], $data_admin['email_name'])->subject($data_admin['email_subject']);
        });
    }

    public function getReset($token){
        if(\Session::get('token') != $token){
            return redirect()->to('/password/email')->withErrors(['massage' => 'Wrong token please use link we send in your email']);
        }
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!\Session::has('cart')){
            return view('pages.forgot_password_key' , ['data' => $data , 'services' => $services, 'token' => $token ]);
        }else{
            $oldCart  = \Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.forgot_password_key' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services , 'token' => $token  ]);
        }
    }

    public function postReset(Request $request){
        if(\Session::get('user_reco_code') != $request->get('user_code')){
            return redirect()->back()->withErrors(['massage' => 'Invalid code please insert the code we send you in email']);
        }
        else{
            $data = $this->plan->get();
            $services = $this->service->get();
            $recover_user =  $this->user->where('email' , \Session::get('email'))->first();
            if(!\Session::has('cart')){
                return view('pages.password_reset' , ['data' => $data , 'services' => $services , 'user' => $recover_user]);
            }else{
                $oldCart  = \Session::get('cart');
                $cart  = new Cart($oldCart);
                return view('pages.password_reset' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services , 'user' => $recover_user ]);
            }
        }
    }

    public function postResetPass(Request $request){
        $this->validate($request, [
            'password' => 'required',
            're_password' => 'required',
        ]);
        if($request->password != $request->re_password){
            return redirect()->back()->withErrors(['massage' => 'Passwords doesnt match']);
        }else{
            if($this->user->where('email' ,  \Session::get('email'))->update(['password' => bcrypt($request->password)])){
                return redirect()->to('/login')->with('sucessfull' , 'Password Successfully Changed');
            }
        }
    }
    public function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890/&^$#^&*(';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
