@extends('layout')
@section('content') 
          
       
         
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All Restaurent table</h2>

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
                          <th>Restaurent_name</th>
                          <th>Restaurent_address</th> 
                          <th>Restaurent_phone</th>
                          <th>Manager_id</th>                         
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all_restaurent_info as $v_restaurent)
                      <tr>
                          <td>{{$v_restaurent->restaurent_name}}</td>
                          <td>{{$v_restaurent->restaurent_address}}</td>
                          <td>{{$v_restaurent->restaurent_phone}}</td>                          
                          <td>{{$v_restaurent->manager_id}}</td>
                         
                                        
                          <td>                            
                            <a href="{{ URL('/restaurent_edit/'.$v_restaurent->restaurent_id) }}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{ URL::to('/restaurent_delete/'.$v_restaurent->restaurent_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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