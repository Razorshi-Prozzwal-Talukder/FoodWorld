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

                            
                              {{-- <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="manager_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div> --}}


                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>


@endsection