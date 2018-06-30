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
       $this->AdminAuthCheck();

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
       $this->AdminAuthCheck();

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
       $this->AdminAuthCheck();
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
      $data['manager_restaurent_phone']=$request->manager_restaurent_phone;
      

      DB::table('manager_tbl')
      ->where('manager_id', $manager_id)
      ->Update($data);

      Session::put('exception', 'Manager Profile Update Successfully!!');
      return Redirect::to('/allmanager');
    }









    //------------------Restaurent Part------------------

    //ALL restaurent show 
     public function allrestaurent()
    {
       $this->AdminAuthCheck();

        $allrestaurent_info=DB::table('restaurent_tbl')
        ->get();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_restaurent=view('admin.allrestaurent')
        ->with('all_restaurent_info', $allrestaurent_info);

        return view('layout')
        ->with('allrestaurent', $manage_restaurent);

    }



    //Restaurent information Edit mathod
    public function restaurent_edit($restaurent_id)
    {
       $this->AdminAuthCheck();
       
      $restaurent_description_view=DB::table('restaurent_tbl')
        ->select('*')
        ->where('restaurent_id', $restaurent_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_restaurent=view('admin.restaurentedit')
        ->with('restaurent_description_profile', $restaurent_description_view);

        return view('layout')
        ->with('restaurentedit', $manage_description_restaurent);
    }


    //Restaurent information Update mathod
    public function update_restaurent(Request $request,$restaurent_id)
    {
      $data = array();

      $data['restaurent_name']=$request->restaurent_name;    
      $data['restaurent_address']=$request->restaurent_address;
      $data['restaurent_phone']=$request->restaurent_phone; 
      $data['restaurent_open_time']=$request->restaurent_open_time;
      $data['restaurent_close_time']=$request->restaurent_close_time;
      $data['manager_id']=$request->manager_id;
            

      DB::table('restaurent_tbl')
      ->where('restaurent_id', $restaurent_id)
      ->Update($data);

      Session::put('exception', 'Restaurent Info Update Successfully!!');
      return Redirect::to('/allrestaurent');
    }


    //Delete the selected Restaurent 
    public function restaurent_delete ($restaurent_id)
     {
        DB::table('restaurent_tbl')
      ->where('restaurent_id', $restaurent_id)
      ->delete();
      return Redirect::to('/allrestaurent');

     } 







     ///Auth Function
    public function AdminAuthCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }


}
