@extends('layout')

@section('content')

            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Total Restaurent</h2>

                  {{-- Show How many Restaurent --}}
                  @php
                    $manager=DB::table('manager_tbl')
                    ->count('manager_id');
                  @endphp
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">{{$manager}}</p>


                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Total Rating</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            


@endsection