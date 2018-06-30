@extends('layout')
@section('content')





<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form of Add Restaurent</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/save_restaurent') }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent Name</label>
                                  <input type="text" class="form-control p-input" name="restaurent_name" aria-describedby="emailHelp" placeholder="Enter Restaurent Nmae">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Address</label>
                                  <input type="text" class="form-control p-input" name="restaurent_address" aria-describedby="emailHelp" placeholder="Enter Restaurent Address">
                              </div>                            


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Phone</label>
                                  <input type="text" class="form-control p-input" name="restaurent_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                              </div>                          



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Open Time</label>
                                  <input type="text" class="form-control p-input" name="restaurent_open_time" aria-describedby="emailHelp" placeholder="Enter Restaurent Open Hour">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Close Time</label>
                                  <input type="text" class="form-control p-input" name="restaurent_close_time" aria-describedby="emailHelp" placeholder="Enter Restaurent Close Hour">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Manager's id</label>
                                  <input type="text" class="form-control p-input" name="manager_id" aria-describedby="emailHelp" placeholder="Enter Manager Id">
                              </div>
                              


                              <button type="submit" class="btn btn-success">Submit</button>


                          </form>
                      </div>
                  </div>
              </div>





@endsection