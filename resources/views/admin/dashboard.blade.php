@extends('admin.layouts.app')
@section('contents')
    
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

      </div>
</section>

@endsection
