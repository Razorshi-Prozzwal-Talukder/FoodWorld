<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
use DB;

class AllmanagerController extends Controller
{
	//to Show manager in the table
   public function allmanager()
  	{
        $allmanager_info=DB::table('manager_tbl')
        ->get();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_manager=view('admin.allmanager')
        ->with('all_manager_info', $allmanager_info);

        return view('layout')
        ->with('allmanager', $manage_manager);

  	}


  //Delete the selected Manager 
    public function manager_delete ($manager_id)
     {
        DB::table('manager_tbl')
      ->where('manager_id', $manager_id)
      ->delete();
      return Redirect::to('/allmanager');

     } 


  //Manager information view mathod
    public function manager_view($manager_id)
    {
      $manager_description_view=DB::table('manager_tbl')
        ->select('*')
        ->where('manager_id', $manager_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_manager=view('admin.managerview')
        ->with('manager_description_profile', $manager_description_view);

        return view('layout')
        ->with('managerview', $manage_description_manager);
    }


  //Manager information Edit mathod
    public function manager_edit($manager_id)
    {
      $manager_description_view=DB::table('manager_tbl')
        ->select('*')
        ->where('manager_id', $manager_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_manager=view('admin.manageredit')
        ->with('manager_description_profile', $manager_description_view);

        return view('layout')
        ->with('manageredit', $manage_description_manager);
    }


  //Manager information Update mathod
    public function manager_update(Request $request,$manager_id)
    {
      $data = array();

      $data['manager_name']=$request->manager_name;
      $data['manager_father_name']=$request->manager_father_name;
      $data['manager_mother_name']=$request->manager_mother_name;
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
      return Redirect::to('/allmanager');
    }
}
