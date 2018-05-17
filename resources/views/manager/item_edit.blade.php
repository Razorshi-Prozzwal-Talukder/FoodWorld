@extends('manager_layout')
@section('content')





			  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form For Edit Item List</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/update_item',$item_description_profile->item_id) }}" >
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Item's Name</label>
                                  <input type="text" class="form-control p-input" name="item_name" value="{{($item_description_profile->item_name)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Item's Price</label>
                                  <input type="text" class="form-control p-input" name="item_price" value="{{($item_description_profile->item_price)}}">
                              </div>

                             
                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection