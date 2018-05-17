<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class ManagerController extends Controller
{

	//Login dashboard for manager
    public function managerlogin(Request $request)
    {
    	//Return view('admin.dashboard');
    	$email=$request->manager_email;
    	$password=md5($request->manager_password);
    	$result =DB::table('manager_tbl')
    	-> where('manager_email',$email)
    	-> where('manager_password',$password)
    	-> first();

    	if($result)
    	{
    		Session::put('manager_email', $result->manager_email);
    		Session::put('manager_id', $result->manager_id);
    		return Redirect::to('/manager_dashboard');
    	}
    	else
    	{
    		session::put('exception','Email or Password Invalid');
    		return Redirect::to('/login_manager');
    	}
    }

    public function manager_dashboard()
	{
       return view('manager.manager_dashboard');
	}


    //Manager View His Profile
    public function manager_viewprofile()
    {
        $manager_id = Session::get('manager_id');
        $manager_profile = DB::table('manager_tbl')
                         ->select('*')
                         ->where('manager_id', $manager_id)
                         ->first();

                // echo "</pre>";
                // print_r($manager_profile);   {check, is it work properly or not}
                // echo "</pre>";         
        
        $manage_manager=view('manager.manager_profile_view')
        ->with('manager_profile', $manager_profile);

        return view('manager_layout')
        ->with('manager_profile_view', $manage_manager);
    }
    


    //Logout Section
    public function manager_logout()
    {
        Session::put('manager_name',null);
        Session::put('manager_id',null);
       return Redirect::to('/');
    }
        

    //Setting Section
    public function manager_setting()
    {
       $manager_id= Session::get('manager_id');
       $manager_description_view=DB::table('manager_tbl')
        ->select('*')
        ->where('manager_id', $manager_id)
        ->first();//if want show one row then use first() function
                

        $manage_description_manager=view('manager.manager_setting')
        ->with('manager_description_profile', $manager_description_view);

        return view('manager_layout')
        ->with('manager_setting', $manage_description_manager);
    } 


    //Manager information Update mathod
    public function manager_own_update(Request $request)
    {
     
      $manager_id= Session::get('manager_id');

      $data = array();

      
      $data['manager_email']=$request->manager_email;
      $data['manager_password']=$request->manager_password;
      $data['manager_phone']=$request->manager_phone;
      $data['manager_address']=$request->manager_address;
      $data['manager_restaurent_name']=$request->manager_restaurent_name;
      $data['manager_restaurent_address']=$request->manager_restaurent_address;
      $data['manager_open_time']=$request->manager_open_time;
      $data['manager_close_time']=$request->manager_close_time;
      

      DB::table('manager_tbl')
      ->where('manager_id', $manager_id)
      ->Update($data);

      Session::put('exception', 'Manager Profile Update Successfully!!');
      return Redirect::to('/manager_setting');
    }


    
}
