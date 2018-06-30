@extends('layout')
@section('content')

<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">INFO</h2>
                  <img src="{{ URL::to('$platter_description_profile->platter_image') }}" alt="">
                  <p class="name">{{ $platter_description_profile->platter_price }}/=</p>                 
                  {{-- <a class="email" href="#">{{ $manager_description_profile->manager_email }}</a>
                  <a class="number">{{ $manager_description_profile->manager_phone }}</a> --}}
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">

                  <ul class="achivements">
                    <h1 style="color: maroon; font-family: cursive; font-weight: bolder;"> <span>{{ $platter_description_profile->platter_name }}</span> </h1>
                  </ul>
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>All Details are Describe in BelloW</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Including Item:</i>
                      <span>{{ strtoupper($platter_description_profile->platter_description) }}</span>
                    </a>
                    
                    <a class="website">
                      <i class="icon-globe icon">Platter Starting Time:</i>
                      <span>{{ strtoupper($platter_description_profile->platter_starting) }}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Platter Finishing Time:</i>
                      <span>{{ strtoupper($platter_description_profile->platter_deadline) }}</span>
                    </a>
                     
                     
                  </div>
                </div>
              </div>
            </div>            
          </div>    




@endsection()