@extends('admin.layouts.app') @section('contents')

<div class="pagetitle">
    <h1>Add Page</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Page</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div>
<section class="section">                           
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Page Data</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('dashboard/frontendpage/add')}}" method="POST">      
                        {{csrf_field()}}       
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Slug *</label>
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="inputName4">
                            @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>        
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputName4">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Meta Title *</label>
                            <input type="text" name="meta_tit" class="form-control @error('meta_tit') is-invalid @enderror" id="inputName4">
                            @error('meta_tit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 flex-column">
                            <label for="inputName4" class="form-label">Description</label>
                            <textarea name="desc" class="tinymce-editor  form-control @error('desc') is-invalid @enderror" id="" cols="30" rows="3" style="resize: none;"></textarea>
                            @error('desc')
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