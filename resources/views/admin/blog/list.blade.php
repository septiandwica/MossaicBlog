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

    <div class="row ">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body table-responsive">
                    
                    <h5 class="card-title ">Blog List
                        <a href="{{route('dashboard/blog/add')}}" class="btn btn-primary float-end">Write Now</a>
                    </h5>
                    <form class="row my-3" action="{{ route('dashboard/blog/list') }}" method="GET">
                        @if (Auth::user()->role_id== 1)
                        <div class="col-md-2">
                            <label class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" value="{{ request()->input('author') }}" >
                        </div>
                        @endif
                        <div class="col-md-4">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ request()->input('title') }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control" value="{{ request()->input('category') }}">
                        </div>
                        <div class="col-md-3 flex-column">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="" selected disabled>Status</option>
                                <option value="1" {{ (request()->input('status') == 1) ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ (request()->input('status') == 2) ? 'selected' : '' }}>Inactive</option>
                                {{-- <option value="100" {{ (request()->input('status') == 100) ? 'selected' : '' }}>Publish</option> --}}
                            </select>
                        </div>
                        <div class="text-left my-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('dashboard/blog/list') }}" class="btn btn-secondary">Reset</a>
                        </div>
                    </form>
<hr>                    
                    <table class="table">
                        <div class="my-3">
                            <sp>Total Article: </span><strong> {{ $getArticle->total()}}</strong>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                @if (Auth::user()->role_id== 1)
                                <th scope="col">Author</th>
                                @endif
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($getArticle as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    @if(!empty($value))
                                        <img src="{{ $value->getImage()}}" style="width: 200px" alt="">
                                    @endif
                                </td>
                                @if (Auth::user()->role_id== 1)
                                <td>{{ $value->author }}</td>
                                @endif
                                <td>{{ $value->title}}</td>
                                <td>{{ $value->category_name}}</td>

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
                                <td colspan="100%" class="text-center">Blog Not Found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $getArticle->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!} 
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
