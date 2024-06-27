<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
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
use App\Models\Order_request;
use Symfony\Component\HttpFoundation\Cookie;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
use App\Http\Requests;

class UsersController extends Controller
{

    public $mailchimp;

    public $listId = '9e4bf1598b';

    public function __construct(User $user ,Order_request  $order_request, Get_a_quote $get_a_quote , Plan $plan  , Coupon $coupon , Service $service ,Group $group , All_plan $all_plan , Coupouns_flat $coupons_flat, Order $order , Invoice $invoice , \Mailchimp $mailchimp )
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
        $this->order_request = $order_request;

      $posts = Post::published()->where('post_type' , 'post')->take(3)->orderBy('ID' , 'desc')->get();
        \View::share('posts' , $posts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!\Session::has('cart')){
            return view('admin.login_in' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = \Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('admin.login_in' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function login(Request $request  ){

    $this->validate($request, [
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        if(Auth::attempt(['email' => $request->get('email') , 'password' => $request->get('password')])){
            return redirect()->to('/dashboard');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Wrong  password or email']);
        }
    }

    public function registration(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!\Session::has('cart')){
            return view('admin.registration' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = \Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('admin.registration' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }

    public function registrationAsReseller(Request $request){

        if($request->get('subscribe') == 'yes'){
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
        $inputs = $request->except('_token' , 'subscribe');
        $inputs['role_id'] = '5';
        if($this->user->create($inputs)){
            $data = $this->plan->get();
            $services = $this->service->get();
            return view('pages.reseller_thank_you' ,['data' => $data , 'services' => $services] );
        }else{
            return redirect()->back()->withErrors(['massage' => ' try again']);
        }

    }


    public function thankYou(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!\Session::has('cart')){
            return view('pages.thank_you' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = \Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.thank_you' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }

    public function signup(Request $request){
        $this->validate($request, [
            'email' => 'required|unique:users|email',
            'password' => 'required',
            're_password' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        if($request->get('password') != $request->get('re_password')){
            return redirect()->back()->withErrors(['massage' => 'Passwords doesnt match']);
        }else{
            $inputs['email'] = $request->get('email');
            $inputs['password'] = bcrypt($request->get('password'));
            $inputs['first_name'] = $request->get('first_name');
            $inputs['role_id'] = 4;
            if($this->user->create($inputs)){
                if($this->sendSignupEmail($inputs)){
                    return redirect()->to('/thank_you');
                }else{
                    return redirect()->back()->withErrors(['massage' => 'Try again']);
                }
            }else{
               return redirect()->back()->withErrors(['massage' => 'Try again']);
            }
        }
    }
    public function sendSignupEmail($array){
        $data['user'] = $array['first_name'];
        $data['email_to'] = $array['email'];
        $data['username'] = $array['email'];
        $data['email_name'] = 'SEO EAZE';
        $data['email_type'] = 'signup';
        $data['email_subject'] = 'Welcome!';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function transaction(){
        return view('admin.transactions');
    }


    #Users Editing  ==========================


    public function users(){
       $data =  $this->user->where('id' , '!=' , Auth::user()->id)->get();
        return view('admin.users' , ['users' => $data]);
    }

    public function changeUserRole( Request $request){
        if($this->user->where('id' , $request->get('id'))->update(['role_id' => $request->get('role')])){
            return \Response::json(['massage' => 'succes']);
        }else{
            return \Response::json(['massage' => 'error']);
        }
    }

    public function deleteUser($id){
        if($this->user->where('id' , $id)->delete()){
            return redirect()->back()->with('success' , 'The user was deleted');
        }
        else{
            return redirect()->back()->withErrors(['success' => 'Cannot deleted']);
        }
    }


    public function userProfile($id){
        $user = $this->user->where('id' , $id)->first();
        return view('admin.user_profile', ['user' => $user]);
    }

    public function quickRegistration(Request $request){
        $this->validate($request, [
            'email' => 'required|unique:users|email',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        dd($request->all());
        if($this->user->create($request->all())){

            }
        else{

        }

    }

    public function sendRegistrationMassages($array){
        $data['user'] = 'name';
        $data['password'] = $this->randomPassword();
        $data['email_to'] = $array['email'];
        $data['token'] = csrf_token();
        $data['email_name'] = 'SEO EAZE';
        $data['email_type'] = 'activation';
        $data['email_subject'] = 'Welcome!';
        \Session::put('temp_pass', $data['password']);
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

    public function test(){
        return view('pages.test');
    }

    public function adminLogin(Request $request){

        if(Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')])){
            return redirect()->to('/dashboard');
        }else{
            return redirect()->back()->withErrors(['massage' => 'wrong username or password']);
        }
    }

    public function dashboard(){
        $data = Auth::user();
        if(Auth::user()->role_id == 1 ){

             $orders = $this->user->join('orders', 'users.id', '=', 'orders.user_id')
         ->where('order_efit_status' , '!=' , 'done')
         ->where('order_status' , '=' , 'payed')
         ->where('order_efit_status' , '!=' , 'cancel')
        ->orderBy('orders.updated_at'  , 'desc')
         ->get();
        }
        else if(Auth::user()->role_id == 3 ){
          $orders = $this->user->join('orders', 'users.id', '=', 'orders.user_id')
         ->where('order_efit_status' , '!=' , 'done')
         ->where('order_status' , '=' , 'payed')
         ->where('order_efit_status' , '!=' , 'cancel')
              ->orderBy('orders.updated_at'  , 'desc')
              ->get();

        }
        else{


          $orders = $this->user
         ->join('orders', 'users.id', '=', 'orders.user_id')
         ->where('order_efit_status' , '!=' , 'done')
         ->where('order_status' , '=' , 'payed')
         ->where('order_efit_status' , '!=' , 'cancel')
         ->where('orders.user_id' , Auth::user()->id)
              ->orderBy('orders.updated_at'  , 'desc')
              ->get();

        }
        return view('admin.dashboard' , ['user' => $data , 'orders' => $orders]);
    }


    public function logout(){
        Auth::logout();
        return redirect()->to('/login');

    }

    public function setings(){
        return view('admin.setings', ['user' => Auth::user()]);
    }

    public function services(){
       $data =  $this->service->get();

        return view('admin.get_all_services' , ['data' => $data]);
    }

    public function addService(){
        $data =  $this->group->get();
        $plans = $this->all_plan->get();
        return view('admin.services' , ['data' => $data , 'plans' => $plans]);
    }

    public function editService($id){
        $service_info = $this->service->where('id' , $id)->first();
        $data =  $this->group->get();
        $plans = $this->all_plan->get();
        return view('admin.edit_service' , ['data' => $data , 'plans' => $plans , 'service_info' => $service_info  , 'id' => $id]);
    }

    public function deleteService($id){
        $this->service->where('id' , $id)->delete();
        return redirect()->back();
    }


    public function personalDatas(){
        $user = Auth::user();
        return view('admin.personal_datas' , ['user' => $user]);
    }

    public function passwordUpdate(Request $request){
        if($request->get('password') != $request->get('re_password')){
            return redirect()->back()->withErrors(['massge' => 'Password dont much']);
        }else{
            if($this->user->where('id' , Auth::user()->id)->update(['password' => bcrypt($request->get('password'))])){
                return redirect()->back()->with('massage' , 'Sucessfully changed');
            }
        }
    }

    public function updateImage(Request $request){
        $image = $this->getImagesName($request->file());
        $images = $image['0']['avatar'];
       if($this->user->where('id' , Auth::user()->id)->update(['avatar' => $images])){
           return redirect()->back()->with('massage' , 'The avatar was changed');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Canot change the image']);
       }
    }

    public function changeUserImage(Request $request){
        $image = $this->getImagesName($request->file());
        $images = $image['0']['avatar'];
       if($this->user->where('id' , $request->get('id'))->update(['avatar' => $images])){
           return redirect()->back()->with('massage' , 'The avatar was changed');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Canot change the image']);
       }
    }

    public function changeUserPassword(Request $request){
        if($request->get('password') != $request->get('re_password')){
            return redirect()->back()->withErrors(['massge' => 'Password dont much']);
        }else{
            if($this->user->where('id' , $request->get('id'))->update(['password' => bcrypt($request->get('password'))])){
                return redirect()->back()->with('massage' , 'Sucessfully changed');
            }
        }
    }

    public function updateUserInfo(Request $request){
        if($this->user->where('id' , $request->get('id'))->update($request->all())){
            return redirect()->back()->with('massage' , 'Profile datas saved');
        }
        else{
            return redirect()->back()->withErrors(['massage' => 'Something goes wrong']);
        }
    }
    public function updateInfo(Request $request){
       if($this->user->where('id' , Auth::user()->id)->update($request->all())){
            return redirect()->back()->with('massage' , 'Profile datas saved');
        }
        else{
          return redirect()->back()->withErrors(['massage' => 'Something goes wrong']);
        }
    }

    #====================== Plans ==============================


    public function allPlans(){
        $data = $this->all_plan->get();
        return view('admin.plan_main_page' , ['data' => $data]);
    }

    public function addNewPlanGroup(){
        return view('admin.add_plan_main');
    }

    public function addNewMainPlan( Request $request){
        if($this->all_plan->create($request->all())){
            return redirect()->back()->with('succes' , 'Successfully plan created');
        }
    }
    public function plans($id){
        $data = $this->plan->where('all_plan_id' , $id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
        return view('admin.plans', ['user' => Auth::user() , 'data' => $data , 'id' => $id]);
    }

    public function addCourentPlans($id){
        $this->all_plan->where('id' , $id)->delete();
        $this->plan->where('all_plan_id'  , $id)->delete();
        return redirect()->back();
    }


    public function  editCorentPlan($id){
        $data = $this->plan->where('id' , $id)->first();
        $datas = json_decode($data->option , true);
        $coupons = $this->coupon->get();
        return view('admin.edit_corent_plan', ['data' => $data , 'coupons' => $coupons ,  'id' => $id , 'datas' => $datas]);
    }

    public function updatePlan(Request $request){
        $input = $request->all();
        $inpputs = array_splice($input , 0 , 6);
        $data =  json_encode($input);
        $inpputs['option'] = $data;
        if($request->get('coupon_id') == 0){
            $inpputs['coupon_percent'] = '';
            $inpputs['coupon_name'] = '';
        }else{
            $coupons = $this->coupon->where('id' , $request->get('coupon_id'))->first();
            $inpputs['coupon_name'] = $coupons->coupon_name;
            $inpputs['coupon_percent'] = $coupons-> percent;
        }


        if($this->plan->where('id' , $request->get('id'))->update($inpputs)){
            return redirect()->back()->with(['succes' => 'Soceesfully  updated']);
        }else{
            return redirect()->back()->withErrors(['massage' => 'Oops Something goes wrong']);
        }
    }

    public function addNewPlan($id){

        return view('admin.add_new_plan' , ['id' => $id]);
    }

    public function addNewPlanPost(Request $request){
        $input = $request->all();
        $inpputs = array_splice($input , 0 , 4);
        $data =  json_encode($input);
        $inpputs['option'] = $data;
        if($this->plan->create($inpputs)){
            return redirect()->back()->with(['succes' => 'Successfully Added']);
        }else{
            return redirect()->back()->withErrors(['massage' => 'Oops Something goes wrong']);
        }
    }

    public function deleteCorentPlan($id){
        if($this->plan->where('id' , $id)->delete()){
            return redirect()->back()->with(['succes' => 'Soceesfully  deleted']);
        }else{
            return redirect()->back()->withErrors(['massage' => 'Oops Something goes wrong']);
        }
    }


    #===================== Discounts ===========================

    public function coupons(){
        $data = $this->coupon->get();
        return view('admin.list_of_coupons' , ['data' => $data]);
    }

    public function addNewCoupons(Request $request){
            if($this->coupon->create($request->all())){
                return redirect()->back()->with(['succes' => 'Soceesfully  addet']);
            }else {
                return redirect()->back()->withErrors(['massage' => 'Oops Something goes wrong']);
            }
    }

    public function editCorentCoupon($id){
        $data = $this->coupon->where('id' , $id)->first();
        return view('admin.edit_corent_coupon', ['data' => $data]);
    }

    public function deleteCorentCoupon($id){
        if($this->coupon->where('id' , $id)->delete()){
            return redirect()->back()->with(['succes' => 'Soceesfully  deleted']);
        }else{
            return redirect()->back()->withErrors(['massage' => 'Oops Something goes wrong']);
        }
    }

    public function addNewCouponsGet(){
        return view('admin.coupons');
    }





    public function saveTotal(Request $request){
        \Session::put('total' , $request->get('sum'));
    }




    #=======================================Coupons ===========================


    public function getCouponsMain(){
        $coupuns =  $this->coupons_flat->get();
        return view('admin.coupons_main_page' , ['coupons' => $coupuns]);
    }

    public function addCouponNew(){
        return view('admin.add_new_coupons');
    }


    public function postAddCouponNew( Request $request){
        if($this->coupons_flat->create($request->all())){
            return redirect()->back()->with('succes' , 'Coupon created sucessfully');
        }else{
            return redirect()->back()->withErrors('massage' , 'Cant create the coupon');
        }
    }


    public function deleteCoupons($id){
        if($this->coupons_flat->where('id', $id)->delete()){
            return redirect()->back()->with('succes' , 'Succesfully deleted');
        }
        else{
            return redirect()->back()->withErrors('massage' , 'Cant delete the coupon');
        }
    }

    public function editCoupons($id){
        $coupon =  $this->coupons_flat->where('id', $id)->first();
        return view('admin.edit_courent_coupons' , ['coupon' => $coupon ,'id' => $id]);
    }


    public function postEditCoupons(Request $request){
        if($this->coupons_flat->where('id' ,$request->get('id'))->update($request->all())){
            return redirect()->back()->with('succes' , 'Succesfully edited');
        }
        else{
            return redirect()->back()->withErrors('massage' , 'Cant edit the coupon');
        }
    }

    public function chechCoupon(Request $request){
        $data = $this->coupons_flat->where('coupon_code' , $request->get('coupon_code'))->where('expiry_date' , '>' , \Carbon\Carbon::today())->first();
       if($data !=  null) {
           \Session::put('discount' , $data);
           return \Response::json(['massage' => $data]);
       }
       else{
           return \Response::json(['massage' => 'false']);
       }
    }




    #============ Orders =================


    public  function  orders(){

        if(Auth::user()->role_id == 1){
         $orders = $this->user->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('order_efit_status' , '!=' , 'done')
            ->where('order_status' , '=' , 'payed')
            ->where('order_efit_status' , '!=' , 'cancel')
             ->orderBy('orders.id' , 'desc')
            ->get();

        }
        else if(Auth::user()->role_id == 3){
               $orders = $this->user->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('order_efit_status' , '!=' , 'done')
            ->where('order_status' , '=' , 'payed')
            ->where('order_efit_status' , '!=' , 'cancel')
            ->orderBy('orders.id' , 'desc')
            ->get();

        }
        else
        {
        $orders = $this->user
         ->join('orders', 'users.id', '=', 'orders.user_id')
         ->where('order_efit_status' , '!=' , 'done')
         ->where('order_status' , '=' , 'payed')
         ->where('order_efit_status' , '!=' , 'cancel')
         ->where('orders.user_id' , Auth::user()->id)
            ->orderBy('orders.id' , 'desc')
            ->get();
        }
        return view('admin.orders' , ['orders' => $orders] );
    }


    public  function  completedOrders(){
        if(Auth::user()->role_id ==1){
            $order = $this->user
                ->join('orders', 'users.id', '=', 'orders.user_id')
                ->where('order_efit_status' , '=' , 'done')
                ->orderBy('orders.updated_at' , 'desc')->get();
        }
         else if(Auth::user()->role_id == 3){
         	 $order = $this->user
                 ->join('orders', 'users.id', '=', 'orders.user_id')
                 ->where('order_efit_status' , '=' , 'done')
                 ->orderBy('orders.updated_at' , 'desc')
                 ->get();
         }

        else{
            $order = $this->user->join('orders', 'users.id', '=', 'orders.user_id')
        ->where('orders.order_efit_status' , '=' , 'done')
        ->where('orders.user_id' , Auth::user()->id)
        ->orderBy('orders.updated_at' , 'desc')
        ->get();

        }
        return view('admin.complated_order' , ['orders' => $order] );
    }

    public function incomplateOrders(){
        if(Auth::user()->role_id ==1){

           $order = $this->user
               ->join('orders', 'users.id', '=', 'orders.user_id')
               ->where('order_status' , '=' , 'cancel')
               ->where('order_efit_status' , '=' , '')
               ->orderBy('orders.updated_at' , 'desc')
               ->get();

        }
          else if(Auth::user()->role_id == 3){
          $order = $this->user
              ->join('orders', 'users.id', '=', 'orders.user_id')
              ->where('order_status' , '=' , 'cancel')
              ->where('order_efit_status' , '=' , '')
              ->orderBy('orders.updated_at' , 'desc')
              ->get();
          }
        else{
          $order = $this->order
              ->where('order_status' , '=' , 'cancel')
              ->where('order_efit_status' , '=' , '')
              ->where('user_id' , Auth::user()->id)
              ->orderBy('updated_at' , 'desc')
              ->get();
        }
        return view('admin.incomplate_orders' , ['orders' => $order] );
    }

    public function editOrder($id){
       $order =  $this->order->where('id' , $id)->first();

       return view('admin.edit_order' , ['id' => $id , 'order' => $order]);
    }

    public function viewOrder($id){
       $order =  $this->order->where('id' , $id)->first();
        return view('admin.view_order' , ['id' => $id , 'order' => $order]);
    }

    public function postEditOrder(Request $request){
        $inputs = $request->all();
        $inpputs = array_splice($inputs , 0 , 2);
        if(isset($inputs['onoffswitch'])){
            $inpputs['content_preview_status'] = $inputs['onoffswitch'];
            $inpputs['other_details'] = $inputs['other_details'];
            $order =  array_pop($inputs);
            $order =  array_pop($inputs);
            $order_info = json_encode($inputs);
        }else{
            $inpputs['content_preview_status']  = 'off';
            $inpputs['other_details'] = $inputs['other_details'];
            $order =  array_pop($inputs);
            $order_info =json_encode($inputs);
        }
        $orders = $this->order->where('id' , $inpputs['id'])->first();
        $inpputs['order_info'] = $order_info;
        $this->sendEmailorderDetasilsSubmited($orders , $inpputs , Auth::user());
        if($this->order->where('id' , $inpputs['id'])->update($inpputs)){
            return redirect()->back()->with('success' , 'The information has successfully updated');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot update']);
        }
    }


     public function sendEmailorderDetasilsSubmited($order ,$inpputs,  $user){
        $data['email_to'] = 'info@seoeaze.com';
        $data['user'] = $user->email;
        $data['order'] = $order;
        $data['inpputs'] = $inpputs;
        $data['email_name'] = 'New Order Details for '.$order->service_name.' Service - '.$order->plan_name.' Plan- Order ID - '.$order->order_id.'';
        $data['email_type'] = 'submit_order_details';
        $data['email_subject'] = 'New Order Details for '.$order->service_name.' Service - '.$order->plan_name.' Plan- Order ID - '.$order->order_id.'';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function changeOrderStatus(Request $request){
      $order = $this->order->where('id' , $request->get('id'))->first();

        if($request->get('status') == 'done'){
            $user = $this->user->where('id' , $order->user_id)->first();
            $this->sendEmailOrderComplated($user->email , $order);
        }
       if($this->order->where('id' , $request->get('id'))->update(['order_efit_status' => $request->get('status')])){
           return \Response::json(['massage' => 'succes']);
       }else{
           return \Response::json(['massage' => 'error']);
       }
    }




    public function sendEmailOrderComplated($email  ,$array){
        $data['email_to'] = $email;
        $data['service_name'] = $array->service_name;
        $data['item'] = $array->plan_name;
        $data['email_name'] = 'One of Your Order is Complete – Report(s) Available for Download –SeoEaze';
        $data['email_type'] = 'complated_order';
        $data['email_subject'] = 'One of Your Order is Complete – Report(s) Available for Download –SeoEaze';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }


    public function updateSimpleReport($id){
        return view('admin.update_report' , ['id'  => $id]);
    }

    public function uploadReport(Request $request){
    	$order = $this->order->where('id' , $request->get('id'))->first();
        $user =  $this->user->where('id' ,$order->user_id)->first();
        $email_name = 'One of Your Order is Complete – Report(s) Available for Download –SeoEaze';
        $this->sendOrderComplate($order ,  $user->email , $email_name );
        $inputs = $request->except('_token');
        $file = $this->getSampleReportName($request->file());
        $inputs['sample_report'] = $file['0']['sample_report'];
        if($this->order->where('id' , $request->get('id'))->update(['sample_report'  => $inputs['sample_report']])){
            return redirect()->back()->with('succes' , 'Sucessfully Updated');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Try again']);
        }
    }

    public function sendOrderComplate($array , $email_to  , $email_name){
        $data['email_to'] = $email_to;
        $data['item'] = $array->plan_name;
        $data['service_name']  = $array->service_name;
        $data['username'] = $array['email'];
        $data['email_name'] = $email_name;
        $data['email_type'] = 'order_email_send';
        $data['email_subject'] = $email_name;
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }


    /*=========== Usable function =============*/

    public function getImagesName($files)
    {
        $file_names = [];
        if ($files) {
            foreach ($files as $file) {
                $filename = str_random(20) . "." . $file->getClientOriginalExtension();
                $file_names[]['avatar'] = $filename;
                $file->move(public_path() . '/assets/img/', $filename);
            }
            return $file_names;
        }
        return '';
    }

    public function getSampleReportName($files)
    {
        $file_names = [];
        if ($files) {
            foreach ($files as $file) {
                $filename = str_random(20) . "." . $file->getClientOriginalExtension();
                $file_names[]['sample_report'] = $filename;
                $file->move(public_path() . '/assets/files/', $filename);
            }
            return $file_names;
        }
        return '';
    }








    /* Invoice */

    public function invoices(){
        if(Auth::user()->role_id == 1){
            $data = $this->invoice->get();
        }else{
            $data = $this->invoice->where('email' , Auth::user()->email)->get();
        }
        return view('admin.invoices' , ['invoices' => $data]);
    }

    public function invoice($id){

        $services = $this->service->get();
        $plan = $this->plan->get();
        $user = $this->user->where('id' , $id)->first();
        return view('admin.invoice' , ['user' => $user , 'services' => $services , 'plans' => $plan]);
    }

    public function remindInvoice($id){
        $data = $this->invoice->where('id' , $id)->first();
        $email_name = 'Pending Invoice Reminder – SeoEaze';
        if($this->sendInvoiceRemindEmail($data  , $email_name)){
            return redirect()->back()->with('success', 'The invoice was sent');
        } else {
            return redirect()->back()->withErrors(['massage' => 'Can\'t send the invoice']);
        }
    }

    public function sendInvoiceRemindEmail($array  , $email_name){
        $data['email_to'] = $array['email'];
        $data['amount'] = $array->amount;
        $data['qty'] = '1';
        $data['crypted'] = $array->crypted;
        $data['invoice_no'] = $array['invoice_no'];
        $data['item'] = $array->item;
        $data['service_name']  = $array->service_name;
        $data['username'] = $array['email'];
        $data['email_name'] = $email_name;
        $data['email_type'] = 'invoice';
        $data['email_subject'] = $email_name;
        $data['custom_message'] = $array['message'];
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendInvoice(Request $request){
        $email_name = 'New Payment Invoice Generated – SeoEaze';
        $inputs = $request->except('_token');
        if($request->input('service_name') == 'custom') {
            $inputs['service_name'] = $request->input('name');
            $plan = $request->input('package');
        }  elseif ($request->get('plan_name') == 'custom_plan') {
            $plan = $request->input('package');
        } else  {
            $plan_object =  $this->plan->where('id' , $request->get('plan_name'))->first();
            $plan = $plan_object->plan_name;
        }
        $inputs['message'] = $request->input('message');
        $inputs['crypted'] = $this->randomCrypt();
        $inputs['invoice_no'] = $this->randomInvoice();

        if(!empty($request->amount)){
           $amount = $request->input('amount');
        }else{
            $plan_object = $this->plan->where('id' , $request->get('plan_name'))->first();
            $amount = $plan_object->amount;
        }
        if($this->sendInvoiceEmail($inputs  ,  $plan , $amount , $email_name)) {
            if ($this->invoice->create(['amount' => $amount ,
                'qty' => '1' ,
                'item' => $plan,
                'invoice_no' => $inputs['invoice_no'] ,
                'email' => $inputs['email'] ,
                'crypted' => $inputs['crypted'],
                'service_name' => $inputs['service_name'],
                'message' => $inputs['message']
            ])) {
                return redirect()->back()->with('success', 'The invoice was sent');
            } else {
                return redirect()->back()->withErrors(['massage' => 'Can\'t send the invoice']);
            }
        }else{
            return redirect()->back()->withErrors(['massage' => 'Wrong email.']);
        }
    }


    public function sendInvoiceEmail($array , $plan , $amount , $email_name){
        $data['email_to'] = $array['email'];
        $data['amount'] = $amount;
        $data['qty'] = '1';
        $data['crypted'] = $array['crypted'];
        $data['invoice_no'] = $array['invoice_no'];
        $data['item'] = $plan;
        $data['service_name']  = $array['service_name'];
        $data['username'] = $array['email'];
        $data['email_name'] = $email_name;
        $data['email_type'] = 'invoice';
        $data['email_subject'] = $email_name;
        $data['custom_message'] = $array['message'];
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function getPlansJson(Request $request){
        $data = [];
        foreach ($request->get('ids') as $id){
            array_push($data, $this->plan->where('all_plan_id'  , $id)->get());
        }
        return \Response::json(['massage' => $data]);
    }







    public function randomCrypt() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890&$&*';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 32; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


    # Support Massage

    public function supportMassage(Request $request){
        if($this->sendSupportEmail($request->all())){
            return redirect()->back()->with('sample_report' , 'Message Sent Successfully!! Our Support Staff will get back to you soon.');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Please try again']);
        }
    }


    public function sendSupportEmail($array ){
        $data['email_to'] = 'info@seoeaze.com';
        $data['subject'] = $array['subject'];
        $data['massage'] = $array['massage'];
        $data['email_name'] = 'Support Massage';
        $data['email_type'] = 'support_massage';
        $data['email_subject'] = 'Support Massage';
        $data['email'] = Auth::user()->email;
        $data['name'] = Auth::user()->first_name;
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

        public function sendGetAQuoteEmail($array ){
        $data['email_to'] = 'info@seoeaze.com';
          $data['email_name'] = 'Get a quote Request';
        $data['email_type'] = 'get_a_quote';
        $data['email_subject'] = 'Get a quote Request';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function sendSocialMediaEmail($array){
        $data['data'] = $array;
        $data['email_to'] = 'info@seoeaze.com';
        $data['email_name'] = $array['email_name'];
        $data['email_type'] = 'get_a_quote';
        $data['email_subject'] = $array['email_name'];
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function randomInvoice() {
        $alphabet = '1234567890';
        $inovice_nomber = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 10; $i++) {
            $n = rand(0, $alphaLength);
            $inovice_nomber[] = $alphabet[$n];
        }
        return implode($inovice_nomber); //turn the array into a string
    }


    # Get a Quote


    public function getAQuote(Request $request){


        $this->validate($request , [
           'g-recaptcha-response' => 'required|recaptcha'
        ]);


        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Get a quote Inquiry';
        $inputs['status'] = 'open';
        if($request->has('options')){
            $inputs['options'] = json_encode( $inputs['options']);
        }
        if($this->sendSocialMediaEmail($inputs)){
            if($this->get_a_quote->create($inputs)){
                return redirect()->to('/thank_you');
            }
            else{
                return redirect()->back()->withErrors(['massage' => 'please try again']);
            }
        }
        else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }

    }


    #Social Media Form

    public function socialMediaForm(Request $request){

        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Social Media Inquiry';
         if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }


    #Reputation Managment

    public function reputationManagmentPost(Request $request){
	$inputs = $request->except('_token');
	$inputs['email_name'] = 'New Reputation Managment Inquiry';
	if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
	    return redirect()->to('/thank_you');
	}else{
	    return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
	}
    }


    #Blog Managment Post

    public function blogMenegmentPost(Request $request){
	$inputs = $request->except('_token');
	$inputs['email_name'] = 'New Reputation Managment Inquiry';
	if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
	    return redirect()->to('/thank_you');
	}else{
	    return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
	}
    }


    #PPc

    public function ppcSendingForm(Request $request){
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New PPC Audit Inquiry ';
        if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }


      public function seoSendingForm(Request $request){

        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Seo Packages requests';
        if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }

    # Panda Penguin

	public function pandaPenguinPost(Request $request){
	    $inputs = $request->except('_token');
	    $inputs['email_name'] = 'New Panda Penguing Audit Inquiry ';
	     if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
	        return redirect()->to('/thank_you');
	    }else{
	        return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
	    }
	}


    #Request A conslutation


    public function requestConsultationForm( Request $request)
    {
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Request Consultation Inquiry';
        if($this->sendSocialMediaEmail($inputs)){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }


    #Web development Form


 public function webDevelopmentPost( Request $request)
    {
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Web Development  Inquiry';
        if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }

        #Get a Quotes


    public function getAQuotes(){
        $data = $this->get_a_quote->get();
        return view('admin.get_a_quote' , ['quotes' => $data]);
    }


    public function deleteAQuote($id){
        if($this->get_a_quote->where('id' , $id)->delete()){
            return redirect()->back()->with('success' , 'Successfuly deleted');
        }else{
            return redirect()->back()->withErrors(['massage' , 'Cannot delete']);
        }
    }

    public function  changeAQuote(Request $request){
        if($this->get_a_quote->where('id' , $request->get('id'))->update(['status' => $request->get('status')])){
            return \Response::json(['massage' => 'succes']);
        }else{
            return \Response::json(['massage' => 'error']);
        }

    }


        #Career Post


    public function carrerPost(Request $request)
    {
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Career Resume';
        if($this->sendCareerEmail($inputs , $request->file())){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }


    }

    #Email To complate ORder

    public  function  emailToComplateOrder($email , $id){
        if($this->sendemailToComplateOrder($email , $id)){
            return redirect()->back()->with('success' , 'Massage Sended');
        }else{
            return redirect()->back();
        }
    }

    public function sendemailToComplateOrder($email , $id){
        $data['email_to'] = $email;
        $data['id'] = $id;
        $data['email_name'] = 'Complete your order today: Plus a 10%* coupon code';
        $data['email_type'] = 'incomplate_order';
        $data['email_subject'] = 'Complete your order today: Plus a 10%* coupon code';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }


    public function sendCareerEmail($array ,$file ){
        $data['first_name'] = $array['name'];
        $data['email'] = $array['email'];
        $data['age'] = $array['age'];
        $data['city'] = $array['city'];
        $data['phone'] = $array['phone'];
        $data['position'] = $array['position'];
        $data['solary'] = $array['solary'];
        $data['experience'] = $array['experience'];
        $data['namak'] = $array['experience'];

        $resume = $this->getSampleReportName($file);
        $data['pathToFile'] = public_path() . '/assets/files/'.$resume['0']['sample_report'];
        $data['email_to'] = 'support@seoeaze.com';
        $data['email_name'] = $array['email_name'];
        $data['email_type'] = 'career';
        $data['email_subject'] = $array['email_name'];
        if($this->sendEmailCareer($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }


  /*  public function getSampleReportName($files)
    {
        $file_names = [];
        if ($files) {
            foreach ($files as $file) {
                $filename = str_random(20) . "." . $file->getClientOriginalExtension();
                $file_names[]['sample_report'] = $filename;
                $file->move(public_path() . '/assets/files/', $filename);
            }
            return $file_names;
        }
        return '';
    }*/


    public function sendEmailCareer($data)
    {
        return \Mail::queue('emails.'.$data['email_type'], $data, function ($message) use ($data) {
            $message->attach($data['pathToFile']);
            $message->to($data['email_to'], $data['email_name'])->subject($data['email_subject']);
        });

    }

    public function homePageForm(Request $request){
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New SEO AUDIT Inquiry ';
        if($this->sendSocialMediaEmail($inputs)){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }
    
        public function askaquote(Request $request){
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'GET IN TOUCH ';
        if($this->sendSocialMediaEmail($inputs)){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }
    }

        public  function  contactUsPost(Request $request){
        if ($request->get('subscribe') == 'yes') {
            $this->validate($request, [
                'email' => 'required|email',
                'g-recaptcha-response' => 'required|recaptcha'
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
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Contact US Inquiry';
        if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }

    }


     public  function  customContentPost(Request $request){
        $inputs = $request->except('_token');
        $inputs['email_name'] = 'New Contact US Inquiry';
        if($this->sendSocialMediaEmail($inputs) && $this->sendEmailsToUsers($inputs['email'])){
            return redirect()->to('/thank_you');
        }else{
            return redirect()->back()->withErrors(['massage' => 'Cannot send email']);
        }

    }


    public function sendEmailsToUsers($email){
        $data['email_to'] = $email;
        $data['email_name'] = 'Seoaze';
        $data['email_type'] = 'email_to_user';
        $data['email_subject'] = 'Seoaze';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }


    public function sendAdminChangeRequestOrder($id){
        $order = $this->order->where('id' , $id)->first();
        $user = $this->user->where('id' , $order->user_id)->first();
      	$this->sendRequestEmail($order , $user);
        if($this->order_request->create(['user_id' => $user->id , 'order_id' => $order->id])){
            return redirect()->back()->with('success' , 'Your request received');
        }
        else{
            return redirect()->back()->withErrors(['massage' => 'Please try again']);
        }
    }


    public function sendRequestEmail($order , $user){
        $data['email_to'] = 'info@seoeaze.com';
        $data['user'] = $user->email;
        $data['order'] = $order;
        $data['email_name'] = 'Order details submitted successfully Order ID :'.$order->order_id.''  ;
        $data['email_type'] = 'request_order';
        $data['email_subject'] = 'Order details submitted successfully Order ID : '.$order->order_id.'';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }


    public function orderRequests(){
    	$data = $this->order_request->get();

    	return view('admin.requests' , ['data' => $data]);
    }


    public function approveOrder($id){
    	$order = $this->order->where('id' , $id)->first();
    	$this->order->where('id' , $id)->update(['order_info' => '']);
    	$answer = 'Approved';
    	$this->order_request->where('order_id' , $id)->delete();
    	$user = $this->user->where('id' , $order->user_id)->first();
    	$this->sendUserRequestAnswer($user , $answer );
    	return redirect()->back();
    }

    public function rejectOrder($id){
    	$order = $this->order->where('id' , $id)->first();
    	$answer = 'Rejected';
    	$user = $this->user->where('id' , $order->user_id)->first();
    	$this->sendUserRequestAnswer($user , $answer );
    	return redirect()->back();
    }


      public function sendUserRequestAnswer($user , $answer ){
        $data['email_to'] = $user->email;
	$data['answer'] = $answer;
        $data['email_name'] = 'Your Request to change Order Details '.$answer.''  ;
        $data['email_type'] = 'answer_to_user';
        $data['email_subject'] = 'Your Request to change Order Details '.$answer.'';
        if($this->sendEmail($data) == 0){
            return true;
        }
        else{
            return false;
        }
    }

   public function getServicePlanName(Request $request){
        if($request->get('service_name') == 'Seo Packages'){
            $plan = $this->plan->where('all_plan_id', '17')->get();
            return \Response::json(['massage' => $plan]);
        }elseif($request->get('service_name') == 'Content Writing'){
            $plan = $this->plan->where('all_plan_id', '24')->get();
            return \Response::json(['massage' => $plan]);
        }else {
            $service = $this->service->where('service_name', $request->get('service_name'))->first();
            $serivce = \json_decode($service->all_plan_id);
            $plan = $this->plan->where('all_plan_id', $serivce['0'])->get();
            return \Response::json(['massage' => $plan]);
        }

    }

    public function deleteOrders($id){
       $this->order->where('id' , $id)->delete();
       return redirect()->back();
    }
}
