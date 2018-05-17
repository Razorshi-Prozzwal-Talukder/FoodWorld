<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllitemController extends Controller
{
   //To Show All item in the table
   public function allitem()
  	{
        $allitem_info=DB::table('additem_tbl')
        ->get();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_item=view('manager.allitem')
        ->with('allitem_info', $allitem_info);

        return view('manager_layout')
        ->with('allitem', $manage_item);

  	}


    //Item information Edit mathod
    public function item_edit($item_id)
    {
      $item_description_view=DB::table('additem_tbl')
        ->select('*')
        ->where('item_id', $item_id)
        ->first();//if want show one row then use first() function
                //or for show all database row, then use get() function
        $manage_description_item=view('manager.item_edit')
        ->with('item_description_profile', $item_description_view);

        return view('manager_layout')
        ->with('item_edit', $manage_description_item);
    }

    //Item Edit information Update mathod
    public function update_item(Request $request,$item_id)
    {
      $data = array();

      $data['item_name']=$request->item_name;
      $data['item_price']=$request->item_price;    
   
      DB::table('additem_tbl')
      ->where('item_id', $item_id)
      ->Update($data);

      Session::put('exception', 'Item Updated Successfully!!');
      return Redirect::to('/allitem');
    }

    //Delete the selected Item 
    public function item_delete ($item_id)
     {
        DB::table('additem_tbl')
      ->where('item_id', $item_id)
      ->delete();
      return Redirect::to('/allitem');

     } 


  	
}
