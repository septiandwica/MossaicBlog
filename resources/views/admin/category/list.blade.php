@extends('admin.layouts.app')
@section('contents')
<div class="pagetitle">
    <h1>Category List</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Category</li>
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
                    <h5 class="card-title ">Category List
                        <a href="{{route('dashboard/category/add')}}" class="btn btn-primary float-end">Add New</a>
                    </h5>


                    <table class="table">
                        <div class="my-3">
                            <sp>Total Category: </span><strong> {{ $getCategory->total()}}</strong>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getCategory as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    @if(!empty($value))
                                        <img src="{{ $value->getImage()}}" style="width: 200px" alt="">
                                    @endif
                                </td>
                                <td>{{ $value->name }}</td>
                                <td >
                                    <span class="badge bg-{{ $value->status === 1 ? 'success' : 'danger' }}">
                                        {{ $value->status === 1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                
                                <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('dashboard/category/edit', ['id' => $value->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('dashboard/category/delete', ['id' => $value->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty  
                            <tr>
                                <td colspan="100%" class="text-center">Category Not Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $getCategory->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!} 
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
