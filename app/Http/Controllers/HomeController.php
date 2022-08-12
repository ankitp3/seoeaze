<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\All_plan;
use App\Models\Tabs_and_plan;
use App\Models\Card;
use Session;
use App\Models\Post;
use App\Models\Service;
use App\Models\Cart;
use App\Http\Requests;
use PulkitJalan\GeoIP\GeoIP;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(Plan $plan , Card $card , Service $service , All_plan $all_plan , Tabs_and_plan $tabs_and_plan , Post  $post )
    {
        $this->plan = $plan;
        $this->card = $card;
        $this->tabs_and_plan = $tabs_and_plan;
        $this->service = $service;
        $this->all_plan = $all_plan;
        $this->post = $post;

         $posts = Post::published()->where('post_type' , 'post')->take(3)->orderBy('ID' , 'desc')->get();
         logger($posts);
        \View::share('posts' , $posts);
    }

    public function index()
    {
        $services = $this->service->get();

        return view('pages.home' , ['services' => $services ]);
    }


    public function seoService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Seo Service';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }
        
        $geoip = new GeoIP();
        $geoip->setIp(\Request::ip());
        $country_code = $geoip->getCountryCode();

        if(!Session::has('cart')){
            return view('pages.seo_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service, 'country_code' => $country_code]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.seo_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services, 'country_code' => $country_code]);
        }
    }


    public function schema(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.schema' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.schema' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function siteMap(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.site_map' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.site_map' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }



    public function contentDevelopment(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.content_development' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.content_development' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function contentWritingService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Content Writing';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.content_writing_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.content_writing_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }

    public function PandaPenguin(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.Panda_Penguin_Recovery_Service' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.Panda_Penguin_Recovery_Service' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function reputationManagementService(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.reputation_management_service' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.reputation_management_service' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function blogManagement(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.blog_management' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.blog_management' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function localSeo(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.local_seo' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.local_seo' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }
    public function guestPosting(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.guest_posting_service' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.guest_posting_service' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function privacy(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.privacy' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.privacy' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function refund(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.refund' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.refund' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function career(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.career' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.career' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }



    public function advancedSeoAudit(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.advanced_seo_audit' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.advanced_seo_audit' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


     public function webDevelopment(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.web_development' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.web_development' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }



     public function customContentWritingQuotation(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.custom_content_writing_quotation' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.custom_content_writing_quotation' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
     }



    public function dedicatedSeoTeam(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.dedicated_seo_team' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.dedicated_seo_team' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function mobTest(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.qwerqwer123' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.qwerqwer123' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function requestConsultation(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.request_consultation' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.request_consultation' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function ppc(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'PPC';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.ppc' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.ppc' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }

    public function contentualLinkBuilding(){
        $data = $this->plan->get();
        return view('pages.continental_link_building' , ['data' => $data]);
    }

    public function guestBloggingService(){
        $data = $this->plan->get();
        $services= $this->service->get();
        if(!Session::has('cart')){
            return view('pages.guest_blogging_service' , ['data' => $data]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.guest_blogging_service' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data]);
        }
    }
    /*
    public function linkWheelService(){
        $data = $this->plan->get();
        $services= $this->service->get();
        if(!Session::has('cart')){
            return view('pages.link_wheel_service' , ['data' => $data , 'services' =>  $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.link_wheel_service' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' =>  $services]);
        }
    }
    */
    public function partner(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.partner' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.partner' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }

    public function caseStudy(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.case_study' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.case_study' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }

    public function contact(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.contact' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.contact' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }

    public function portfolio(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.portfolio' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.portfolio' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }


    public function company(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.company' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.company' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }





    public function socialMediaMarketing(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Social Media Marketing';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.social_media_marketing' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.social_media_marketing' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }

    public function shopingCard(){
        $services= $this->service->get();
        if(!Session::has('cart')){
            return view('pages.shoping_card' , ['services' =>  $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.shoping_card' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'services' =>  $services]);
        }

        $data =   $this->card->where('token' , \Session::get('token'))->groupBy('product_id')->get();
        return view('pages.shoping_card' , ['data' => $data]);
    }


    public function updateShopingCard(Request $request , $id , $service_name){
        $product = $this->plan->find($id);
        $product['service_name'] = $service_name;
        $oldCart = Session::has('cart') ?  Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart' , $cart);
        return \Response::json(['massage' => 'true']);


    }

    public function updateShopingCardCount(Request $request){
       if($this->card->where('product_id' , $request->get('id'))->where('token' , $request->get('token'))->update(['count' => $request->get('count')])){
           return \Response::json(['massage' => 'true']);
       }
    }

    public function checkout( Request $request){
        $services= $this->service->get();
        if(!Session::has('cart')){
            return view('pages.checkout' , ['services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.checkout' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'services' => $services ]);
        }
        return view('pages.checkout');
    }

    public function removeItem( Request $request , $id){
        $product = $this->plan->find($id);
        $oldCart = Session::has('cart') ?  Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($product, $product->id);
        $request->session()->put('cart' , $cart);

        return redirect()->back();

    }

    public function plusItem(Request $request , $id){
        $product = $this->plan->find($id);
        $oldCart = Session::has('cart') ?  Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart' , $cart);

        return redirect()->back();
    }

    public function minusItem(Request $request , $id){
        $product = $this->plan->find($id);
        $oldCart = Session::has('cart') ?  Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->minus($product, $product->id);
        $request->session()->put('cart' , $cart);

        return redirect()->back();
    }

    public function testingRoutes($test){
        $service = $this->service->where('service_link' , $test)->first();
        if($service->all_plan_id != '' ) {
            foreach (\json_decode($service->all_plan_id, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }
        
        $geoip = new GeoIP();
        $geoip->setIp(\Request::ip());
        $country_code = $geoip->getCountryCode();
        
        $services = \App\Models\Service::get();
        if(!Session::has('cart')){
            return view('pages.link_wheel_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service, 'country_code' => $country_code ]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.link_wheel_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'service_info' => $service, 'services' => $services, 'country_code' => $country_code]);
        }
    }


    public function testimonials(){
        $data = $this->plan->get();
        $services = $this->service->get();
        if(!Session::has('cart')){
            return view('pages.testimonial' , ['data' => $data , 'services' => $services]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.testimonial' , ['products' => $cart->items , 'totalPrice' =>  $cart->totalPrice , 'data' => $data , 'services' => $services  ]);
        }
    }
    public function awards() {
        $services = $this->service->get();
        return view('pages.awards', ['services' => $services]);
    }

    //new

    public function articlesubmissionService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Seo Service';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.article_submission_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.article_submission_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }
    public function forumlinkbuildingService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Seo Service';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.forum_link_building_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.forum_link_building_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }
    public function completelinkbuildingService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Seo Service';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.complete_link_building_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.complete_link_building_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }
    //     public function guestPosting(){
    //     $services = $this->service->get();
    //     $name = explode('/' ,\Request::url());
    //     $servname = end($name);
    //     $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
    //     $service['service_name'] = 'Seo Service';
    //     if(isset($service->tabs)) {
    //         foreach (\json_decode($service->tabs, true) as $all_plan_id) {
    //             $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
    //             $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
    //         }
    //     }else{
    //         $data[] = '';
    //         $plan_name[] = '';
    //     }

    //     if(!Session::has('cart')){
    //         return view('pages.guest_posting' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
    //     }else{
    //         $oldCart  = Session::get('cart');
    //         $cart  = new Cart($oldCart);
    //         return view('pages.guest_posting' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
    //     }
    // }

    public function linkwheelService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Seo Service';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.link_wheel_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.link_wheel_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }
    public function searchenginesubmissionService(){
        $services = $this->service->get();
        $name = explode('/' ,\Request::url());
        $servname = end($name);
        $service = $this->tabs_and_plan->where('service_link' , $servname)->first();
        $service['service_name'] = 'Seo Service';
        if(isset($service->tabs)) {
            foreach (\json_decode($service->tabs, true) as $all_plan_id) {
                $data[] = $this->plan->where('all_plan_id', $all_plan_id)->orderBy(\DB::raw('ABS(amount)'), 'asc')->get();
                $plan_name[] = $this->all_plan->where('id', $all_plan_id)->first();
            }
        }else{
            $data[] = '';
            $plan_name[] = '';
        }

        if(!Session::has('cart')){
            return view('pages.search_engine_submission_service' , ['data' => $data , 'services' => $services , 'plan_name' => $plan_name, 'service_info' => $service]);
        }else{
            $oldCart  = Session::get('cart');
            $cart  = new Cart($oldCart);
            return view('pages.search_engine_submission_service' , ['products' => $cart->items , 'plan_name' => $plan_name,  'totalPrice' =>  $cart->totalPrice ,  'data' => $data , 'service_info' => $service, 'services' => $services]);
        }
    }

}
