@extends('layout')
@section('content')

		<div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Request Form</h2>
                  <img src="{{ URL::to('$owner_description_profile->owner_image') }}" alt="">
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">

                  
                  
                  
                  <div class="info-links">

                    <a class="website">
                      <i class="icon-globe icon">Name:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_name) }}</span>
                    </a>

                    <a class="website">
                      <i class="icon-globe icon">Father Name:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_father_name) }}</span>
                    </a>
                    
                    <a class="website">
                      <i class="icon-globe icon">Mother Name:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_mother_name) }}</span>
                    </a>

                    <a class="Email">
                      <i class="icon-globe icon">Email:</i>
                      <span>{{ $owner_description_profile->owner_email }}</span>
                    </a>

                    <a class="Number">
                      <i class="icon-globe icon">Phone number:</i>
                      <span>{{ $owner_description_profile->owner_phone }}</span>
                    </a>

                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_address) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Name:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_restaurent_name) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Address:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_restaurent_address) }}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Restaurent Phone Number:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_restaurent_phone) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Opening Time:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_open_time) }}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Restaurent Closeing Time:</i>
                      <span>{{ strtoupper($owner_description_profile->owner_close_time) }}</span>
                    </a>
                     
                  </div>
                </div>
              </div>
            </div>            
          </div>    




@endsection()