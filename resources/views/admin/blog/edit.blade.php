@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor/tagstyle/bootstrap-tagsinput.css')}}">

@endsection
@section('contents')

@include('admin.layouts.sessionmessage')
<div class="pagetitle">
    <h1>Edit Blog Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Blog Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/blog/edit', ['id' => $getArticle->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Title *</label>
                            <input type="text" name="title" value="{{ $getArticle->title }}" class="form-control @error('title') is-invalid @enderror" id="inputName4">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Category *</label>
                            <select class="form-control" name="category_id" id="">
                                <option selected disabled>Choose Category</option>
                                @foreach ($getCategory as $value)
                                    <option {{ ($getArticle->category_id == $value->id) ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Image Banner</label>
                            <br>
                            @if(!empty($value))
                                    <img src="{{ $getArticle->getImage()}}" style="width: 400px" alt="">
                            @endif
                            <input type="file" name="image_file" class="form-control mt-2 @error('image_file') is-invalid @enderror" id="inputEmail4">
                            @error('image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Description *</label>
                            <textarea class="tinymce-editor form-control" name="desc" class="form-control @error('desc') is-invalid @enderror">{{ $getArticle->description }}</textarea>
                            @error('desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Penambahan value pada input tags -->
                        <div class="col-12 flex-column">
                            @php
                                $tags = '';
                                foreach($getArticle->getTags as $value){
                                    $tags .= $value->name. ',';
                                }
                            @endphp
                            
                            <label for="inputName4" class="form-label">Tags *</label>
                            <input type="text" name="tags" value="{{ $tags }}" class="form-control @error('tags') is-invalid @enderror" id="tagsinput">
                            
                            @error('tags')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Penambahan value pada input meta_desc -->
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Description</label>
                            <textarea name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" id="" cols="30" rows="3" style="resize: none;">{{ $getArticle->meta_description }}</textarea>
                            @error('meta_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Penambahan value pada input meta_keys -->
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keys" value="{{ $getArticle->meta_keywords }}" class="form-control @error('meta_keys') is-invalid @enderror" id="inputName4">
                            @error('meta_keys')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Status *</label>
                            <select class="form-control" name="status" id="">
                                <option selected disabled>Set Status</option>
                                <option value="1" {{ ($getArticle->status == 1) ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ ($getArticle->status == 0) ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
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