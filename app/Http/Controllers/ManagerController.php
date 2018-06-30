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
     $this->AdminAuthCheck2();

       return view('manager.manager_dashboard');
	}


    //Manager View His Profile
    public function manager_viewprofile()
    {
       $this->AdminAuthCheck2();

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
        // Session::put('manager_name',null);
        // Session::put('manager_id',null);
       Session::flush();
       return Redirect::to('/');
    }
        

    //Setting Section
    public function manager_setting()
    {
       $this->AdminAuthCheck2();

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
    



    //To Show Restaurent in the table
    public function manager_restaurent()
    { 
       $this->AdminAuthCheck2();

        $manager_id= Session::get('manager_id');
        $restaurent_info=DB::table('restaurent_tbl')                   
                   ->select('restaurent_tbl.*')
                   ->where('restaurent_tbl.manager_id','=', $manager_id)
                   ->get();

        $restaurent_view=view('manager.manager_restaurent')
        ->with('restaurent_info', $restaurent_info);

        return view('manager_layout')
        ->with('manager_restaurent', $restaurent_view);

    }



    //Manager information Edit mathod
    public function restaurent_edit_manager($restaurent_id)
    {
       $this->AdminAuthCheck2();
       
      $restaurent_description_view=DB::table('restaurent_tbl')
        ->select('*')
        ->where('restaurent_id', $restaurent_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_restaurent=view('manager.manager_restaurent_edit')
        ->with('restaurent_description_profile', $restaurent_description_view);

        return view('manager_layout')
        ->with('manager_restaurent_edit', $manage_description_restaurent);
    }


    //Restaurent information Update mathod
    public function update_restaurent_manager(Request $request,$restaurent_id)
    {
      $data = array();

      $data['restaurent_name']=$request->restaurent_name;    
      $data['restaurent_address']=$request->restaurent_address;
      $data['restaurent_phone']=$request->restaurent_phone; 
      $data['restaurent_open_time']=$request->restaurent_open_time;
      $data['restaurent_close_time']=$request->restaurent_close_time;      
            

      DB::table('restaurent_tbl')
      ->where('restaurent_id', $restaurent_id)
      ->Update($data);

      Session::put('exception', 'Restaurent Info Update Successfully!!');
      return Redirect::to('/manager_restaurent');
    }





    ///Auth Function
    public function AdminAuthCheck2()
    {
        $manager_id=Session::get('manager_id');
        if ($manager_id) {
            return;
        }else{
            return Redirect::to('/login_manager')->send();
        }
    }


    
}
