<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Models\Service;
use App\Models\Tabs_and_plan;
use File;
use App\Models\Plan;
use App\Models\All_plan;
use Mockery as m;

class ServiceController extends Controller
{


    public  function  __construct( Service $service , Plan $plan ,All_plan $all_plan , Tabs_and_plan $tabs_and_plan)
    {
        $this->service = $service;
        $this->plan = $plan;
        $this->all_plan = $all_plan;
        $this->tabs_and_plans = $tabs_and_plan;
    }

    public function createAFile(Request $request){
        $input = $request->all();
        $img = $this->getFilesName($request->file());
        $inpputs = array_splice($input , 0 , 23);
        $benefit =  $request->get('benefit_field');
        $benefit =  json_encode($benefit);
        
        if(!isset($input['benefit_field'])){
           if(!isset($input['simple_report'])){
               $faqs = json_encode($input);
           }else{
                $faqs = array_pop($input);
                  $faqs = json_encode($input);
           }
               
        }
        else{
            if(!isset($input['simple_report'])){
          
                $faqs = array_pop($input);
                $faqs = json_encode($input);
            }
            else{
         
                $faqs = array_pop($input);
                $faqs = array_pop($input);
                $faqs = json_encode($input);
            }
        }
        $inpputs['faqs_options'] = $faqs;
        $inpputs['all_plan_id'] = json_encode($inpputs['all_plan_id']);
        if(!empty($img)){
            $inpputs['simple_report'] = $img[0]['simple_report'];
        }

        $inpputs['benefit_options'] = $benefit;
        if($this->service->create($inpputs)){
            return redirect()->back()->with('sucess' , 'Service created sucessfully');
        }else{
            return redirect()->back()->with('sucess' , 'Cant create');
        }

    }


    public function editServices( Request $request){
        $input = $request->except('id');
        $img = $this->getFilesName($request->file());
         if(!isset($input['simple_report'])){
        	$inpputs = array_splice($input , 0 , 23);
        }else{
        	$inpputs = array_splice($input , 0 , 23);
        }
        $benefit =  $request->get('benefit_field');

        $benefit =  json_encode($benefit);
    
        if(!isset($input['benefit_field'])){
           if(!isset($input['simple_report'])){
               $faqs = json_encode($input);
           }else{
                $faqs = array_pop($input);
                  $faqs = json_encode($input);
           }
               
        }
        else{
            if(!isset($input['simple_report'])){
          
                $faqs = array_pop($input);
                $faqs = json_encode($input);
            }
            else{
         
                $faqs = array_pop($input);
                $faqs = array_pop($input);
                $faqs = json_encode($input);
            }
        }
            
        $inpputs['faqs_options'] = $faqs;
   
        if(!empty($img)){
            $inpputs['simple_report'] = $img[0]['simple_report'];
        }
        $inpputs['benefit_options'] = $benefit;
        $inpputs['all_plan_id'] = json_encode($inpputs['all_plan_id']);

        if($this->service->where('id' , $request->get('id'))->update($inpputs)){
            return redirect()->back()->with('sucess' , 'Service updated sucessfully');
        }else{
            return redirect()->back()->with('sucess' , 'Cant update');
        }
    }

   /* public function testExecuteProcess() {
        $router = $this->routerFactory($args = array('/test', 'ServiceController@test'));
        $view = m::mock('Illuminate\View\View');
        $view->shouldReceive('render')->once();
        $env = m::mock('Illuminate\View\Factory');
        $env->shouldReceive('make')->once()->with('test', array('top' => "first\nsecond", 'bottom' => "bottom first"))->andReturn($view);
        $layout = m::mock('DeSmart\Layout\Layout');
        $layout->shouldReceive('dispatch')->once()->with('Top\First', $args)->andReturn('first');
        $layout->shouldReceive('dispatch')->once()->with('Top\Second', $args)->andReturn('second');
        $layout->shouldReceive('dispatch')->once()->with('Bottom\First', $args)->andReturn('bottom first');
        dd($layout);
        $controller = new Controller;
        // create layout instance manually, normally callAction() is responsible for this
        return $router;
    }


    private function routerFactory($args) {
        $router = m::mock('Illuminate\Routing\Router');
        $route = m::mock('Illuminate\Routing\Route');
        $router->shouldReceive('getCurrentRoute')->once()->andReturn($route);
        $route->shouldReceive('parametersWithoutNulls')->once()->andReturn($args);
        return $router;
    }*/

    public function getFilesName($files)
    {
        $file_names = [];
        if($files) {
            foreach ($files as $file) {

                $filename = str_random(20).".".$file->getClientOriginalExtension();
                $file_names[]['simple_report'] = $filename;
                $file->move(public_path().'/assets/files', $filename);
            }
            return $file_names;
        }
        return '';
    }


    #=======Plans and Tabs

    public function createTabs(){
        $plans =  $this->all_plan->get();
        return view('admin.add_new_plans_tab' , ['plans' => $plans]);
    }

    public function createTabWihPlan(Request $request){
        $this->validate($request, [
            'service_link' => 'required|unique:tabs_and_plans',
        ]);
        $inputs = $request->all();
        $inpputs = array_splice($inputs , 0 , 2);
        $tabs =  json_encode($inputs['all_plan_id']);

         if($this->tabs_and_plans->create(['service_link' => $inpputs['service_link'] , 'tabs' => $tabs])){
             return redirect()->back()->with('succes', 'Succesfuly created');
        }

    }

    public function listPlansAndTabs(){
        $tabs = $this->tabs_and_plans->get();
        return view('admin.plans_and_tabs_main' , ['tabs' => $tabs]);
    }

    public function deleteCorentTab($id)
    {
        if ($this->tabs_and_plans->where('id', $id)->delete()) {
            return redirect()->back()->with('succes', 'Succesfuly deleted');
        } else {
            return redirect()->back()->withErrors(['massage' => 'Canot change the image']);
        }
    }

    public function editCorentTab($id){
        $plans =  $this->all_plan->get();
        $tabs  =   $this->tabs_and_plans->where('id' , $id)->first();
        return view('admin.plans_tabs' , ['tabs' => $tabs , 'plans' => $plans , 'id' => $id]);
    }

    public function editTabPlans(Request $request){
        $input = $request->all();
        $data = array_splice($input , 0 , 3);
        $tabs = json_encode($input['all_plan_id']);

        if($this->tabs_and_plans->where('id', $request->get('id'))->update(['tabs' => $tabs])){
            return redirect()->back()->with('success' , 'successfully updated');
        }
        else{
            return redirect()->back()->withErrors(['massage' => 'Try again']);
        }
    }
}
