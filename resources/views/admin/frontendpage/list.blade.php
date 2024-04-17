@extends('admin.layouts.app')
@section('contents')

<div class="pagetitle">
    <h1>Page List</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Page</li>
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
                    
                    <h5 class="card-title ">Page List
                        <a href="{{route('dashboard/frontendpage/add')}}" class="btn btn-primary float-end">Add New</a> 
                    </h5>
                   <hr>                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Title</th>
                                <th scope="col">Meta Title</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($getPage as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                               
                                <td>{{ $value->slug }}</td>
                                <td>{{ $value->title}}</td>
                                <td>{{ $value->meta_title}}</td>
                                
                                <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('dashboard/frontendpage/edit', ['id' => $value->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                            @empty  
                            <tr>
                                <td colspan="100%" class="text-center">Page Not Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {!! $getPage->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}  --}}
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
