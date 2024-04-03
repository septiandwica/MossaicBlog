@extends('admin.layouts.app') @section('contents')
<div class="pagetitle">
    <h1>Add User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('dashboard/users/add')}}" method="POST">      
                        {{csrf_field()}}               
                        <div class="col-12 flex-column ">
                            <label for="inputNanme4" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputNanme4">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-12 flex-column">
                            <label for="yourUsername" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    id="yourUsername"
                                    required="required">
                                    @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                            </div>
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                       
                        <div class="col-12 flex-column">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection