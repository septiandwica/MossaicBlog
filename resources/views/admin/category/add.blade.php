@extends('admin.layouts.app') @section('contents')

<div class="pagetitle">
    <h1>Add Category</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Category</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Category Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('dashboard/category/add')}}" method="POST" enctype="multipart/form-data">      
                        {{csrf_field()}}               
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName4">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Title *</label>
                            <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" id="inputName4">
                            @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
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
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Image Banner</label>
                            <input type="file" name="image_file" class="form-control @error('image_file') is-invalid @enderror" id="inputEmail4">
                            @error('image_file')
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
<script>
    function previewImage(input) {
        var preview = document.getElementById('preview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>