@extends('layout')
@section('content') 
          
       
         
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All Manager table</h2>

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
                          <th>Manager_email</th>
                          <th>Manager_phone</th>
                          <th>Manager_image</th>
                          <th>Restaurent_name</th>
                          <th>Restaurent_address</th>                          
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_manager_info as $v_manager)
                      <tr>
                          <td>{{$v_manager->manager_name}}</td>
                          <td>{{$v_manager->manager_email}}</td>
                          <td>{{$v_manager->manager_phone}}</td>
                          <td><img src="{{ URL::to($v_manager->manager_image) }}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_manager->manager_restaurent_name}}</td>
                          <td>{{$v_manager->manager_restaurent_address}}</td>
                                        
                          <td>
                            <a href="{{ URL('/manager_view/'.$v_manager->manager_id) }}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{ URL('/manager_edit/'.$v_manager->manager_id) }}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{ URL::to('/manager_delete/'.$v_manager->manager_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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