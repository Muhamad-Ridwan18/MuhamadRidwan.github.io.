@extends('layouts',[
    'title'=>'detail'
])

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{$posts->title}}</h1>
                <p>Author By: <a href="/blog?author={{ $posts->author->username }}"
                    class="text-decoration-none">{{ $posts->author->name }}</a> In 
                    <a href="/blog?category={{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
                    <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}"
                    alt="{{ $posts->category->name }}" class="img-fluid">
                    <article class="my-3 fs-5">
                        {!! $posts->body !!}
                    </article>    
                <a href="/blog" class="btn btn-success fa fa-arrow-circle-left" role="button"> Back To All Post</a>
            </div>
        </div>
    </div>

    
    {{-- <p>Author By: <a href="/author/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> In 
        <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
    {!! $posts->body !!}

    <a href="/blog">back to posts</a> --}}
@endsection