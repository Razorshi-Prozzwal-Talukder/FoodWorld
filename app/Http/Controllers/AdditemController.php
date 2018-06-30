<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdditemController extends Controller
{
	//To go additem page
    public function additem()
	{
       $this->AdminAuthCheck2();
       return view('manager.additem');
	}

	//Save item
    public function save_item(Request $request)
	{
       $data=array();

    	$data['item_name']=$request->item_name;
    	$data['item_price']=$request->item_price;  
      $data['manager_id']=$request->manager_id;  	

    	DB::table('additem_tbl')->insert($data);
    	Session::put('exception', 'Item added successfully!!');
    	return Redirect::to('/additem');
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
