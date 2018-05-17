<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class PlatterController extends Controller
{
    //To go Add Platter page
    public function addplatter()
	{
       return view('manager.addplatter');
	}

	//Save Platter which is added
    public function save_platter(Request $request)
	{
        $data=array();

    	$data['platter_name']=$request->platter_name;
    	
    	$data['platter_item']=$request->platter_item; 
    	$data['platter_price']=$request->platter_price; 
    	$data['platter_starting']=$request->platter_starting; 
    	$data['platter_finishing']=$request->platter_finishing;   	

    	$image=$request->file('platter_image');

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
    			$data['platter_image']=$image_url;

    			DB::table('platter_tbl')->insert($data);
    			Session::put('exception', 'Platter Added uccessfully!!');
    			return Redirect::to('/addplatter');
    		}

    	}
    	$data['image']=$image_url;
    	DB::table('platter_tbl')->insert($data);
    	Session::put('exception', 'Platter Added successfully!!');
    	return Redirect::to('/addplatter');
	}



    //To Show All Platter in the table
    public function allplatter()
    {
        $allplatter_info=DB::table('platter_tbl')
        ->get();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_platter=view('manager.allplatter')
        ->with('allplatter_info', $allplatter_info);

        return view('manager_layout')
        ->with('allplatter', $manage_platter);
    }


    //Platter Description view mathod
    public function platter_view($platter_id)
    {
      $platter_description_view=DB::table('platter_tbl')
        ->select('*')
        ->where('platter_id', $platter_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_platter=view('manager.platterview')
        ->with('platter_description_profile', $platter_description_view);

        return view('manager_layout')
        ->with('platterview', $manage_description_platter);
    }


    //Platter information Edit mathod
    public function platter_edit($platter_id)
    {
      $platter_description_view=DB::table('platter_tbl')
        ->select('*')
        ->where('platter_id', $platter_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_platter=view('manager.platter_edit')
        ->with('platter_description_profile', $platter_description_view);

        return view('manager_layout')
        ->with('platter_edit', $manage_description_platter);
    }

    //Platter Edit information Update mathod
    public function update_platter(Request $request,$platter_id)
    {
      $data = array();

      $data['platter_name']=$request->platter_name;
      $data['platter_price']=$request->platter_price;  
      $data['platter_item']=$request->platter_item;
      $data['platter_starting']=$request->platter_starting;  
      $data['platter_finishing']=$request->platter_finishing;
         
   
      DB::table('platter_tbl')
      ->where('platter_id', $platter_id)
      ->Update($data);

      Session::put('exception', 'Item Updated Successfully!!');
      return Redirect::to('/allplatter');
    }


    //Delete the selected Platter 
    public function platter_delete ($platter_id)
     {
        DB::table('platter_tbl')
      ->where('platter_id', $platter_id)
      ->delete();
      return Redirect::to('/allplatter');

     } 
}
