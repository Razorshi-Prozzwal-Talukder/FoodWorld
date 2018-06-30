@extends('layout')
@section('content')





<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form For Edit Restaurent Description</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/update_restaurent',$restaurent_description_profile->restaurent_id) }}" >
                          		{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent Name</label>
                                  <input type="text" class="form-control p-input" name="restaurent_name" value="{{($restaurent_description_profile->restaurent_name)}}">
                              </div>   


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Address</label>
                                  <input type="text" class="form-control p-input" name="restaurent_address" value="{{($restaurent_description_profile->restaurent_address)}}">
                              </div>                          


                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Phone</label>
                                  <input type="text" class="form-control p-input" name="restaurent_phone" value="{{($restaurent_description_profile->restaurent_phone)}}">
                              </div> 
                              

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Open Time</label>
                                  <input type="text" class="form-control p-input" name="restaurent_open_time" value="{{($restaurent_description_profile->restaurent_open_time)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Close Time</label>
                                  <input type="text" class="form-control p-input" name="restaurent_close_time" value="{{($restaurent_description_profile->restaurent_close_time)}}">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Manager's id</label>
                                  <input type="text" class="form-control p-input" name="manager_id" value="{{($restaurent_description_profile->manager_id)}}">
                              </div> 


                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection