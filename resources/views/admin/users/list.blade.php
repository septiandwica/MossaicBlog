@extends('admin.layouts.app')
@section('contents')
<div class="pagetitle">
    <h1>Users List</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </nav>
</div>

<section class="section">   
    @include('admin.layouts.sessionmessage')

    <div class="row ">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body table-responsive">
                    <h5 class="card-title ">Users List
                        <a href="{{route('dashboard/users/add')}}" class="btn btn-primary float-end">Add New</a>
                    </h5>


                    <table class="table">
                        <div class="my-3">
                            <sp>Total Users: </span><strong> {{ $getRecord->total()}}</strong>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getRecord as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->username }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('dashboard/users/edit', ['id' => $value->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('dashboard/users/delete', ['id' => $value->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="100%" class="text-center">User Account Not Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!} 
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
