@extends('welcome_layout')
@section('content')





			<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Fill The Form</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/save_form') }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" name="owner_name" aria-describedby="emailHelp" placeholder="Enter Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="owner_father_name" aria-describedby="emailHelp" placeholder="Enter Father's Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="owner_mother_name" aria-describedby="emailHelp" placeholder="Enter Mother's Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control p-input" name="owner_email" placeholder="Enter Email">
                              </div>
                              

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" class="form-control p-input" name="owner_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control p-input" name="owner_address" aria-describedby="emailHelp" placeholder="Enter Manager's Address">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent Name</label>
                                  <input type="text" class="form-control p-input" name="owner_restaurent_name" aria-describedby="emailHelp" placeholder="Enter Restaurent Nmae">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Address</label>
                                  <input type="text" class="form-control p-input" name="owner_restaurent_address" aria-describedby="emailHelp" placeholder="Enter Restaurent Address">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Phone</label>
                                  <input type="text" class="form-control p-input" name="owner_restaurent_phone" aria-describedby="emailHelp" placeholder="Enter Restaurent's Phone Number">
                              </div>
                             
                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="owner_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Open Time</label>
                                  <input type="text" class="form-control p-input" name="owner_open_time" aria-describedby="emailHelp" placeholder="Enter Restaurent Open Hour">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Close Time</label>
                                  <input type="text" class="form-control p-input" name="owner_close_time" aria-describedby="emailHelp" placeholder="Enter Restaurent Close Hour">
                              </div>
                              <button type="submit" class="btn btn-success">Sent</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection