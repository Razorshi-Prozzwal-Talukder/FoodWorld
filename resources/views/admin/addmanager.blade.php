@extends('layout')
@section('content')





<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form of Add Manager</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/save_manager') }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Manager's Name</label>
                                  <input type="text" class="form-control p-input" name="manager_name" aria-describedby="emailHelp" placeholder="Enter Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="manager_father_name" aria-describedby="emailHelp" placeholder="Enter Father's Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="manager_mother_name" aria-describedby="emailHelp" placeholder="Enter Mother's Name">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control p-input" name="manager_email" placeholder="Enter Email">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="manager_password" placeholder="Enter Password">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" class="form-control p-input" name="manager_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control p-input" name="manager_address" aria-describedby="emailHelp" placeholder="Enter Manager's Address">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent Name</label>
                                  <input type="text" class="form-control p-input" name="manager_restaurent_name" aria-describedby="emailHelp" placeholder="Enter Restaurent Nmae">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Address</label>
                                  <input type="text" class="form-control p-input" name="manager_restaurent_address" aria-describedby="emailHelp" placeholder="Enter Restaurent Address">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Restaurent's Phone</label>
                                  <input type="text" class="form-control p-input" name="manager_restaurent_phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                              </div>
                             
                              <div class="form-group">
                                  <label>Upload Owner's Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="manager_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>

                              
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection