@extends('admin.layouts.app')
@section('contents')
<div class="pagetitle">
    <h1>Blog List</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </nav>
</div>

<section class="section">   
    @include('admin.layouts.sessionmessage')

    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body table-responsive">
                    <h5 class="card-title ">Blog List
                        <a href="{{route('dashboard/blog/add')}}" class="btn btn-primary float-end">Add New</a>
                    </h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Title</th>
                                <th scope="col">Meta Description</th>
                                <th scope="col">Meta Keywords</th>
                                <th scope="col">Meta Keywords</th>

                                <th scope="col">Status</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getRecord as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->slug}}</td>
                                <td>{{ $value->meta_title}}</td>
                                <td>{{ $value->meta_description}}</td>
                                <td>{{ $value->meta_keywords}}</td>
                                <td >
                                    <span class="badge bg-{{ $value->status === 1 ? 'success' : 'danger' }}">
                                        {{ $value->status === 1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                
                                <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('dashboard/blog/edit', ['id' => $value->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('dashboard/blog/delete', ['id' => $value->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty  
                            <tr>
                                <td colspan="100%" class="text-center">blog Not Found.</td>
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
