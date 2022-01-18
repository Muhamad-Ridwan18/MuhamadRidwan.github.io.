@extends('dashboard.layouts.main', [
    'title' => 'Detail Post'
])

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-8">
                    <h1 class="mb-3">{{$post->title}}</h1>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning" role="button"><i data-feather="edit-2"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')"><i data-feather="trash-2"></i>Hapus</button>
                    </form>
                    @if ($post->image)
                        <div style="max-height: 450px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->category->name }}" class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    @endif
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>    
                    <a href="/dashboard/posts" class="btn btn-success" role="button"><i data-feather="arrow-left"></i> Back To All Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



