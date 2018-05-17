<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{
    //Login dashboard for admin
    public function adminlogin(Request $request)
    {
    	//Return view('admin.dashboard');
    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
    	$result =DB::table('admin_tbl')
    	-> where('admin_email',$email)
    	-> where('admin_password',$password)
    	-> first();

    	if($result)
    	{
    		Session::put('admin_email', $result->admin_email);
    		Session::put('admin_id', $result->admin_id);
    		return Redirect::to('/admin_dashboard');
    	}
    	else
    	{
    		session::put('exception','Email or Password Invalid');
    		return Redirect::to('/admin');
    	}
    }
    public function admin_dashboard()
	{
       return view('admin.admin_dashboard');
	}



    //Logout Section
    public function adminlogout()
    {
       Session::put('admin_name',null);
       Session::put('admin_id',null);

       return Redirect::to('/');
    }

    //View Profile Section
    public function admin_viewprofile()
    {
       return view('admin.view');
    }


    //Setting Section
    public function admin_setting()
    {
        $admin_id= Session::get('admin_id');

        $admin_description_view=DB::table('admin_tbl')
        ->select('*')
        ->where('admin_id', $admin_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_admin=view('admin.setting')
        ->with('admin_description_view', $admin_description_view);

        return view('layout')
        ->with('setting', $manage_description_admin);
    }


    //Admin Update mathod
    public function update_admin(Request $request)
    {
        $admin_id = Session::get('admin_id');

        $data = array();
       
        $data['admin_email']=$request->admin_email;
        $data['admin_password']=$request->admin_password;
        $data['admin_phone']=$request->admin_phone;

        DB::table('admin_tbl')
        ->where('admin_id', $admin_id)
        ->Update($data);

        // echo "/pre";
        // print_r($data);

        Session::put('exception', 'Admin Profile Update Successfully!!');
        return Redirect::to('/admin_setting');
    }
}
