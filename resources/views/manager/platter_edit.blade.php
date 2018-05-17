@extends('manager_layout')
@section('content')





			  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form For Edit Platter</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                        <form class="forms-sample" method="post" action="{{ URL::to('/update_platter',$platter_description_profile->platter_id) }}" >
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Platter's Name</label>
                                  <input type="text" class="form-control p-input" name="platter_name" value="{{($platter_description_profile->platter_name)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Platter's Price</label>
                                  <input type="text" class="form-control p-input" name="platter_price" value="{{($platter_description_profile->platter_price)}}">
                              </div>


                              <div class="form-group">
      		                      <label for="ccomment">Platter's Item</label>
      		                      <textarea id="ccomment" class="form-control" name="platter_item" value="{{($platter_description_profile->platter_item)}}"></textarea>
		                      </div>

		                      <div class="form-group">
                                  <label for="exampleInputPassword1">Platter Starting From</label>
                                  <input type="date" class="form-control p-input" name="platter_starting" value="{{($platter_description_profile->platter_starting)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Platter End In</label>
                                  <input type="date" class="form-control p-input" name="platter_finishing" value="{{($platter_description_profile->platter_finishing)}}">
                              </div>

                              
                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection