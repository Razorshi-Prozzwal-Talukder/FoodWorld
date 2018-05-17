<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AddmanagerController extends Controller
{
	
    public function addmanager()
	{
       return view('admin.addmanager');
	}

	//Add manager Saving part
	public function save_manager(Request $request)
	{
       $data=array();

    	$data['manager_name']=$request->manager_name;
    	$data['manager_father_name']=$request->manager_father_name;
    	$data['manager_mother_name']=$request->manager_mother_name;
    	$data['manager_email']=$request->manager_email;
    	$data['manager_password']=md5($request->manager_password);
    	$data['manager_phone']=$request->manager_phone;
    	$data['manager_address']=$request->manager_address;
    	$data['manager_restaurent_name']=$request->manager_restaurent_name;
    	$data['manager_restaurent_address']=$request->manager_restaurent_address;
    	$data['manager_open_time']=$request->manager_open_time;
    	$data['manager_close_time']=$request->manager_close_time;
    	$image=$request->file('manager_image');

    	if($image)
    	{
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if($success)
    		{
    			$data['manager_image']=$image_url;

    			DB::table('manager_tbl')->insert($data);
    			Session::put('exception', 'Manager added successfully!!');
    			return Redirect::to('/addmanager');
    		}

    	}
    	$data['image']=$image_url;
    	DB::table('manager_tbl')->insert($data);
    	Session::put('exception', 'Manager added successfully!!');
    	return Redirect::to('/addmanager');
	}

	
}
