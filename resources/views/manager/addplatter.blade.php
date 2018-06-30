@extends('manager_layout')
@section('content')



			  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Form of Add Platter</h2>

				                 <p class="alert-success"><?php
				                  $exception=Session::get('exception');
				                  
				                  if($exception)
				                  {
				                  	echo $exception;
				                  	Session::put('exception', null);
				                  }
				                 	
				                 ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/save_platter') }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Platter's Name</label>
                                  <input type="text" class="form-control p-input" name="platter_name" aria-describedby="emailHelp" placeholder="Enter Platter Name">
                              </div>


                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="platter_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">Upload The Platter's Image</small>
                                    </div>
                                  </div>
                              </div>


                              
                              {{-- <div class="form-group">
      		                        <label for="ccomment">Platter's Description</label>
      		                        <textarea id="ccomment" class="form-control" name="platter_description" placeholder="Enter Platter's Description" required></textarea>
		                           </div> --}}

                              <div class="control-group hidden-phone">
                                  <label class="control-label" for="textarea2">Platter's Description</label>
                                  <div class="controls">
                                  <textarea class="cleditor" name="platter_description" required="" rows="3"></textarea>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Platter's Price (TK)</label>
                                  <input type="text" class="form-control p-input" name="platter_price" aria-describedby="emailHelp" placeholder="Enter Platter's Price">
                              </div>                               
                              

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Platter Starting From</label>
                                  <input type="date" class="form-control p-input" name="platter_starting" placeholder="Enter Platter Starting Date">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Platter End In</label>
                                  <input type="date" class="form-control p-input" name="platter_deadline" placeholder="Enter Platter Finishing Date">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Manager Id</label>
                                  <input type="text" class="form-control p-input" name="manager_id" aria-describedby="emailHelp" placeholder="Enter Platter's Price">
                              </div>  


                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection