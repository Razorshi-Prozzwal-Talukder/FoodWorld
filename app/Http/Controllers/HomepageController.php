<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class HomepageController extends Controller
{
	//About
    public function about()
    {
    	return view('home.about');
    }

    //Contact
    public function contact()
    {
    	return view('home.contact');
    }

    //Suggestion
    public function suggestion()
    {
    	return view('home.suggestion');
    }    

    //login
    public function login()
    {
    	return view('home.login');
    }

    //manager_login section
    public function login_manager()
    {
        return view('manager.manager_login');
    }

    //FormFillup
    public function formfillup()
    {
        return view('home.formfillup');
    }

    //Add Owner request part
    public function save_form(Request $request)
    {
       $data=array();

        $data['owner_name']=$request->owner_name;
        $data['owner_father_name']=$request->owner_father_name;
        $data['owner_mother_name']=$request->owner_mother_name;
        $data['owner_email']=$request->owner_email;       
        $data['owner_phone']=$request->owner_phone;
        $data['owner_address']=$request->owner_address;
        $data['owner_restaurent_name']=$request->owner_restaurent_name;
        $data['owner_restaurent_address']=$request->owner_restaurent_address;
        $data['owner_restaurent_phone']=$request->owner_restaurent_phone;
        $data['owner_open_time']=$request->owner_open_time;
        $data['owner_close_time']=$request->owner_close_time;
        $image=$request->file('owner_image');

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
                $data['owner_image']=$image_url;

                DB::table('form_tbl')->insert($data);
                Session::put('exception', 'Fillup Form successfully. Please Wait For Replay!!');
                return Redirect::to('/formfillup');
            }

        }
        $data['image']=$image_url;
        DB::table('form_tbl')->insert($data);
        Session::put('exception', 'Fillup Form successfully. Please Wait For Replay!!');
        return Redirect::to('/formfillup');
    }
}
