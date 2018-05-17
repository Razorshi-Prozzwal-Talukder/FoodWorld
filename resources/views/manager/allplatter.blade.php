@extends('manager_layout')
@section('content')



    <div class="card">
        <div class="card-body">
                    <h2 class="card-title">All Platter table</h2>

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
                          <th>Platter's Name</th>
                          <th>Platter's Image</th>
                          <th>Platter's Price</th>                         
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allplatter_info as $v_platter)
                      <tr>
                          <td>{{$v_platter->platter_name}}</td>
                          <td><img src="{{ URL::to($v_platter->platter_image) }}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_platter->platter_price}}</td>                        
                   
                          <td>
                            <a href="{{ URL('/platter_view/'.$v_platter->platter_id) }}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{ URL('/platter_edit/'.$v_platter->platter_id) }}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{ URL::to('/platter_delete/'.$v_platter->platter_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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