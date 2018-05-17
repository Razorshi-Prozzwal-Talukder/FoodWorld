@extends('manager_layout')
@section('content')



	  <div class="card">
		 <div class="card-body">
			              <h2 class="card-title">All Item table</h2>

			              <p class="alert-success"><?php
			                  $exception=Session::get('exception');
			                                
			                   if($exception)
			                    {
			                        echo $exception;
			                        Session::put('exception', null);
                                }                                
               			?></p>
               
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Item's Name</th>
                          <th>Item's Price</th>                         
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allitem_info as $v_item)
                      <tr>
                          <td>{{$v_item->item_name}}</td>
                          <td>{{$v_item->item_price}}</td>                        
                   
                          <td>                           
                            <a href="{{ URL('/item_edit/'.$v_item->item_id) }}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{ URL::to('/item_delete/'.$v_item->item_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
      </div>




@endsection