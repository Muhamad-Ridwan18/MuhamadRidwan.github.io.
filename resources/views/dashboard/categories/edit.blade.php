@extends('dashboard.layouts.main', [
    'title' => 'Add Post'
])

@section('content')
    <div id="flStackForm" class="col-lg-10 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">                                
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Category</h4>
                    </div>                                                                        
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form method="post" action="/dashboard/categories/{{ $category->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name Category</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $category->name ) }}" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $category->slug) }}">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Post</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?title=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
@endsection