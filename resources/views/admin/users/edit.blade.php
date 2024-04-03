@extends('admin.layouts.app') @section('contents')
<div class="pagetitle">
    <h1>Edit User Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit User Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/users/edit', ['id' => $getRecord->id]) }}" method="POST">
                        {{ csrf_field()}}
                        <!-- Profile Picture -->
                        <div class="col-12">
                            <label for="profilePicture" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" id="profilePicture" name="profile_picture">
                        </div>                        
                        <!-- Name -->
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" value="{{$getRecord->name}}" class="form-control" id="inputName" name="name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Username -->
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name="username" class="form-control" id="yourUsername" value="{{$getRecord->username}}">
                                @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" value="{{$getRecord->email}}" class="form-control" id="inputEmail" name="email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Password -->
                        <div class="col-12">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <p class="my-2" style="font-size: 12px; color:red;">* Do you want to want to change your Password?? Please fill out the Password input</p>
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
                                    <input type="text" name="instagram_username" class="form-control" id="instagramUsername">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="linkedinUsername" class="form-label">LinkedIn</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="ri-linkedin-box-line"></i></span>
                                    <input type="text" name="linkedin_username" class="form-control" id="linkedinUsername">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
