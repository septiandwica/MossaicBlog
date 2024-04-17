@extends('admin.layouts.app')
@section('contents')

@include('admin.layouts.sessionmessage')
    
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashbord</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
</div>

<section class="section dashboard">
      <div class="row">
        @if (Auth::user()->role_id== 1)

        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

          

            <div class="card-body">
              <h5 class="card-title">Users </h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <a href="">
                <div class="ps-3">
                  <h1><strong>{{$getUser->total()}}</strong></h1>
                 

                </div>
                </a>
              </div>
            </div>

          </div>
        </div>
        @endif
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

          

            <div class="card-body">
              <h5 class="card-title">Category </h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-folder"></i>
                </div>
                <a href="">
                <div class="ps-3">
                  <h1><strong>{{$getCategory->count()}}</strong></h1>
                 

                </div>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

          

            <div class="card-body">
              <h5 class="card-title">Blog </h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-card-list"></i>
                </div>
                <a href="{{ route('dashboard/blog/list') }}">
                <div class="ps-3">
                  <h1><strong>{{$getBlog->count()}}</strong></h1>
                 

                </div>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
</section>

@endsection
