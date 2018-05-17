@extends('layout')
@section('content') 
          
       
         
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All Request From Restaurent's Owner</h2>

              <p class="alert-success"><?php
                                $exception=Session::get('exception');
                                
                                if($exception)
                                {
                                  echo $exception;
                                  Session::put('exception', null);
                                }
                                
               ?></p>
               
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Manager_name</th>                         
                          <th>Manager_image</th>
                          <th>Restaurent_name</th>                                                   
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_owner_info as $v_owner)
                      <tr>
                          <td>{{$v_owner->owner_name}}</td> 
                          <td><img src="{{ URL::to($v_owner->owner_image) }}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_owner->owner_restaurent_name}}</td>                         
                                        
                          <td>
                            <a href="{{ URL('/request_view/'.$v_owner->owner_id) }}"><button class="btn btn-outline-primary">View</button></a>
                            
                            <a href="{{ URL::to('/request_delete/'.$v_owner->owner_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
      


@endsection