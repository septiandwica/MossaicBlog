@extends('admin.layouts.app') 
@section('contents')

<div class="pagetitle">
    
    <h1>Account Settings</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Account Settings</li>

        </ol>
    </nav>
</div>
@include('admin.layouts.sessionmessage')
  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ $getUser->getProfile()}}" alt="Profile" class="rounded-circle">
            <h2>{{$getUser->name}}</h2>
            <div class="social-links mt-2">
                @if(!empty($getUser->instagram))
                <a target="_blank" href="{{'https://instagram.com/'. $getUser->instagram}}"><i class="bi bi-instagram"></i></a>
                @endif
                @if(!empty($getUser->linkedin))
                <a target="_blank" href="{{'https://linkedin.com/in/'. $getUser->linkedin }}"><i class="bi bi-linkedin"></i></a>
                @endif
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">About</h5>
                <p class="small fst-italic">{{$getUser->about}}</p>

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8">{{$getUser->name}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{$getUser->email}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8">{{$getUser->username}}</div>
                  </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                 <form class="row g-3" action="{{ route('account-settings') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <!-- Profile Picture -->
                        <div class="col-12">
                            <label for="profilePicture" class="form-label">Profile Picture</label>
                            <br>
                            <img class="my-3" src="{{ $getUser->getProfile()}}" alt="" width="100px" height="100px"> 

                            <input type="file" class="form-control" id="profilePicture" name="image_file">
                        </div>  
                        <!-- Name -->
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" value="{{$getUser->name}}" class="form-control" id="inputName" name="name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Username -->
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name="username" class="form-control" id="yourUsername" value="{{$getUser->username}}">
                            </div>
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" readonly value="{{$getUser->email}}" class="form-control" id="inputEmail" name="email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                       
                        <div class="col-12">
                            <label for="about" class="form-label">About</label>
                            <div class="input-group">
                               <textarea name="about" id="about" cols="100%" rows="5cd">{{$getUser->about}}</textarea>
                            </div>
                            @error('about')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- About -->
                        
                        <!-- Social Media -->
                        <div class="row my-3">
                            <strong>Social Media</strong> 
                            <i>*username</i>
                            <div class="col-6">
                                <label for="instagramUsername" class="form-label">Instagram</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="ri-instagram-line"></i></span>
                                    <input type="text" name="instagram_username" value="{{$getUser->instagram}}" class="form-control" id="instagramUsername">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="linkedinUsername" class="form-label">LinkedIn</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="ri-linkedin-box-line"></i></span>
                                    <input type="text" name="linkedin_username" value="{{$getUser->linkedin}}"  class="form-control" id="linkedinUsername">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
              </div>



              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form class="row g-3" action="{{ route('change-password') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="currentpassword" type="password" class="form-control" id="currentPassword">
                    </div>
                    
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                   
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="confirmpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                    
                  </div>

                
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
