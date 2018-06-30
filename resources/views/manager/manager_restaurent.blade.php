@extends('manager_layout')
@section('content')



	  <div class="card">
		 <div class="card-body">
			              <h2 class="card-title">Restaurent table</h2>

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
                      	  <th>Restaurent  ID</th> 
                          <th>Restaurent Name</th>
                          <th>Restaurent Phone</th>
                         
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach($restaurent_info as $v_restaurent)
                      <tr>                         
                          <td>{{$v_restaurent->restaurent_id}}</td>
                           <td>{{$v_restaurent->restaurent_name}}</td>
                          <td>{{$v_restaurent->restaurent_phone}}</td>  
                         
                   
                          <td>                           
                            <a href="{{ URL('/restaurent_edit_manager/'.$v_restaurent->restaurent_id) }}"><button class="btn btn-outline-warning">Edit</button></a>
                          
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