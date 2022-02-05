@extends('layouts.main',[
    'title' => 'All Post'
])

@section('content')
<!--Blog Post -->
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="blog-three-mini">
            <h4 class="blog-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
            <div class="blog-three-attrib">
                <span class="icon-calendar"></span> {{ $post->created_at->diffForHumans() }} | 
                <span class=" icon-pencil"></span><a href="/blog?author={{ $post->author->username }}"> {{ $post->author->name }} | 
                <span class=" icon-pricetags"></span><a href="/blog?category={{$post->category->slug }}"> {{ $post->category->name }}
                </a>
            </div>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->category->name }}" class="img-responsive" style="max-height: 518px">
            @else
                <img src="https://source.unsplash.com/800x518?{{ $post->category->name }}" class="img-responsive" alt="image blog">
            @endif
            <p class="mt25">
                {{ $post->excerpt }}                            
            </p>
            <a href="/blog/{{ $post->slug }}" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    </div>
    @endforeach

    <div class="row mt25 animated" data-animation="fadeInUp" data-animation-delay="800">
        {{ $posts->links() }}
    </div>
@endsection