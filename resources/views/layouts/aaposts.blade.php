@extends('layouts',[
    'title'=>'Blog'
])

@section('content')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3> 
            <p>
                <small class="text-muted">Author By: <a href="/blog?author={{ $posts[0]->author->username }}" 
                    class="text-decoration-none">{{ $posts[0]->author->name }}</a> In 
                    <a href="/blog?category={{$posts[0]->category->slug }}" 
                    class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-danger">Read More</a>
            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                <div class="position-absolute bg-dark px-3 py-2" 
                style="background-color:rgba(0, 0, 0, 0.5)"><a href="/blog?category={{$post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">Author By: <a href="/blog?author={{ $post->author->username }}" 
                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                    <p>{{ $post->excerpt }}</p>
                                </small>
                            </p>
                        <p class="card-text">{{ $post->exceprt }}</p>
                        <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Go to Read</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Posts Found.</p>
    @endif

    {{ $posts->links() }}
{{-- 
    @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-3">
            <h2>
                <a href="/blog/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
            </h2>
            <p>Author By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In 
                        <a href="/categories/{{$post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach --}}
@endsection

