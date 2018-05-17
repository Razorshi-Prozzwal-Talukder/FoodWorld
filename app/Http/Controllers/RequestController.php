<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
use DB;

class RequestController extends Controller
{
   //to Show Owner request
   public function request()
  	{
        $allowner_info=DB::table('form_tbl')
        ->get();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_owner=view('admin.request')
        ->with('all_owner_info', $allowner_info);

        return view('layout')
        ->with('request', $manage_owner);

  	}


  	//Request Form view mathod
    public function request_view($owner_id)
    {
      $owner_description_view=DB::table('form_tbl')
        ->select('*')
        ->where('owner_id', $owner_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_owner=view('admin.request_details_view')
        ->with('owner_description_profile', $owner_description_view);

        return view('layout')
        ->with('request_details_view', $manage_description_owner);
    }


    //Delete the Request Form 
    public function request_delete ($owner_id)
     {
        DB::table('form_tbl')
      ->where('owner_id', $owner_id)
      ->delete();
      return Redirect::to('/request');

     } 
}
