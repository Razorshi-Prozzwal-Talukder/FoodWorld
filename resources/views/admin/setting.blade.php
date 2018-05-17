@extends('layout')
@section('content')



<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Admin Profile</h2>

				                 <p class="alert-success"><?php
                          $exception=Session::get('exception');
                          
                          if($exception)
                          {
                            echo $exception;
                            Session::put('exception', null);
                          }
                          
                         ?></p>


                          <form class="forms-sample" method="post" action="{{ URL::to('/update_admin') }}" >
                          	{{ csrf_field() }}
                             

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="admin_email" value="{{($admin_description_view->admin_email)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Password</label>
                                  <input type="password" class="form-control p-input" name="admin_password" value="{{($admin_description_view->admin_password)}}">
                              </div> 
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" class="form-control p-input" name="admin_phone" value="{{($admin_description_view->admin_phone)}}">
                              </div>

                             
                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>





@endsection