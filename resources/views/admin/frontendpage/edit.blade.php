@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor/tagstyle/bootstrap-tagsinput.css')}}">

@endsection
@section('contents')

<div class="pagetitle">
    <h1>Edit Page Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Page</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Page Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/frontendpage/edit', ['id' => $getPage->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Slug *</label>
                            <input type="text" name="slug" value="{{ $getPage->slug }}" class="form-control @error('slug') is-invalid @enderror" id="inputName4">
                            @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Title *</label>
                            <input type="text" name="title" value="{{ $getPage->title }}" class="form-control @error('title') is-invalid @enderror" id="inputName4">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Title</label>
                            <input name="meta_tit" class="form-control @error('meta_tit') is-invalid @enderror" id=""  value="{{ $getPage->meta_title }}">
                            @error('meta_tit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    
                
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Description *</label>
                            <textarea class="tinymce-editor form-control" name="desc" class="form-control @error('desc') is-invalid @enderror">{{ $getPage->description }}</textarea>
                            @error('desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    
                    
                        <!-- Penambahan value pada input meta_desc -->
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Description</label>
                            <textarea name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" id="" cols="30" rows="3" style="resize: none;">{{ $getPage->meta_description }}</textarea>
                            @error('meta_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Penambahan value pada input meta_keys -->
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keys" value="{{ $getPage->meta_keywords }}" class="form-control @error('meta_keys') is-invalid @enderror" id="inputName4">
                            @error('meta_keys')
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
@section('scripts')
    <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/tagstyle/bootstrap-tagsinput.js')}}"></script>

    <script type="text/javascript">
        $("#tagsinput").tagsinput();
    </script>
@endsection