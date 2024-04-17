@extends('admin.layouts.app') 
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor/tagstyle/bootstrap-tagsinput.css')}}">

@endsection
@section('contents')

@include('admin.layouts.sessionmessage')

<div class="pagetitle">
    <h1>Add Blog</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Blog Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('dashboard/blog/add')}}" method="POST" enctype="multipart/form-data">      
                        {{csrf_field()}}               
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputName4">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Category *</label>
                            <select class="form-control" name="category_id" id="">
                                <option selected disabled>Choose Category</option>
                                @foreach ($getCategory as $value);;
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Image Banner</label>
                            <input type="file" name="image_file" class="form-control @error('image_file') is-invalid @enderror" id="inputEmail4">
                            @error('image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Description *</label>
                            <textarea class="tinymce-editor form-control " type="text" name="desc" class="form-control @error('desc') is-invalid @enderror"></textarea>
                            @error('desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Tags *</label>
                            <input type="text" name="tags" class="form-control @error('tags') is-invalid @enderror" id="tagsinput">
                            @error('tags')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <h5 class="card-title">Search Engine Optimization Data</h5>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Description</label>
                            <textarea name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" id="" cols="30" rows="3" style="resize: none;"></textarea>
                            @error('meta_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keys" class="form-control @error('meta_keys') is-invalid @enderror" id="inputName4">
                            @error('meta_keys')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        <hr>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Status *</label>
                            <select class="form-control" name="status" id="">
                                <option selected disabled>Set Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
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