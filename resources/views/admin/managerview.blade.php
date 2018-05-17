@extends('layout')
@section('content')

<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">INFO</h2>
                  <img src="{{ URL::to('$manager_description_profile->manager_image') }}" alt="">
                  <p class="name">{{ $manager_description_profile->manager_name }}</p>                 
                  <a class="email" href="#">{{ $manager_description_profile->manager_email }}</a>
                  <a class="number">{{ $manager_description_profile->manager_phone }}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">

                  <ul class="achivements">
                    <h1 style="color: maroon; font-family: cursive; font-weight: bolder;"> <span>{{ $manager_description_profile->manager_restaurent_name }}</span> </h1>
                  </ul>
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>All Details are Describe in BelloW</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Father Name:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_father_name) }}</span>
                    </a>
                    
                    <a class="website">
                      <i class="icon-globe icon">Mother Name:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_mother_name) }}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_address) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Name:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_restaurent_name) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Address:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_restaurent_address) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Opening Time:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_open_time) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Closeing Time:</i>
                      <span>{{ strtoupper($manager_description_profile->manager_close_time) }}</span>
                    </a>
                     
                  </div>
                </div>
              </div>
            </div>            
          </div>    




@endsection()