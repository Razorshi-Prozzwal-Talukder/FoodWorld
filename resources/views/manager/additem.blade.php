@extends('manager_layout')
@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form of Add Item	</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/save_item') }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Item's Name</label>
                                  <input type="text" class="form-control p-input" name="item_name" aria-describedby="emailHelp" placeholder="Enter Item Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Item's Price (TK)</label>
                                  <input type="text" class="form-control p-input" name="item_price" aria-describedby="emailHelp" placeholder="Enter Item's Price">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Manager Id</label>
                                  <input type="text" class="form-control p-input" name="manager_id" aria-describedby="emailHelp" placeholder="Enter Your Id">
                              </div>

                              

                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>


@endsection