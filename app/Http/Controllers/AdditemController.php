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
       return view('manager.additem');
	}

	//Save item
    public function save_item(Request $request)
	{
       $data=array();

    	$data['item_name']=$request->item_name;
    	$data['item_price']=$request->item_price;   	

    	DB::table('additem_tbl')->insert($data);
    	Session::put('exception', 'Item added successfully!!');
    	return Redirect::to('/additem');
	}
  
}
