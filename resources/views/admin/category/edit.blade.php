@extends('admin.layouts.app') @section('contents')
<div class="pagetitle">
    <h1>Edit User Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit User Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{ route('dashboard/category/edit', ['id' => $getCategory->id]) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}               
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Name *</label>
                            <input type="text" value="{{ old('name', $getCategory->name) }}" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName4">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <strong>SEO - Search Engine Optimization</strong>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Title *</label>
                            <input type="text" value="{{ old('meta_title', $getCategory->meta_title) }}" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" id="inputName4">
                            @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Description</label>
                            <textarea name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" id="meta_desc" rows="3" style="resize: none;">{{ old('meta_desc', $getCategory->meta_description) }}</textarea>
                            <p id="meta_desc_chars" class="text-muted mb-0">0 characters (Max: 100)</p>
                            @error('meta_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keys" value="{{ old('meta_keywords', $getCategory->meta_keywords) }}" class="form-control @error('meta_keys') is-invalid @enderror" id="inputName4">
                            @error('meta_keys')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputEmail4" class="form-label">Image Banner</label>
                            <input type="file" name="image_file" class="form-control @error('image_file') is-invalid @enderror" id="inputEmail4">
                            <p class="my-2" style="font-size: 12px; color:red;">*Make sure the file is in png format</p>
                            @error('image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <hr>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Status *</label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status" id="">
                                <option disabled>Set Status</option>
                                <option {{ ($getCategory->status == 1) ? 'selected' : ''}} value="1">Active</option>
                                <option {{ ($getCategory->status == 0) ? 'selected' : ''}} value="0">Inactive</option>
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

<script>
    const metaDesc = document.getElementById('meta_desc');
const metaDescChars = document.getElementById('meta_desc_chars');

metaDesc.addEventListener('input', function() {
  const charCount = metaDesc.value.length;
  metaDescChars.textContent = `${charCount} characters (Max: 100)`;

  if (charCount > 100) {
    metaDesc.classList.add('is-invalid');
  } else {
    metaDesc.classList.remove('is-invalid');
  }
});
    </script>
@endsection