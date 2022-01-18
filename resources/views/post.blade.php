@extends('layouts.main',[
    'title'=>'detail post'
])

@section('content')
    <div class="col-md-8 col-md-offset-2">               
        <div class="blog-three-mini">
            <h2 class="color-dark"><a href="#">{{$posts->title}}</a></h2>
            <div class="blog-three-attrib">
                <div><i class="fa fa-calendar"></i>{{ $posts->created_at->diffForHumans() }}</div> | 
                <div><i class="fa fa-pencil"></i><a href="#">{{ $posts->author->username }}</a></div> | 
                <div><i class="fa fa-comment-o"></i><a href="#">{{ $posts->category->name }}</a></div> | 
                <div><a href="#"><i class="fa fa-thumbs-o-up"></i></a>150 Likes</div> | 
            </div>
            <img src="https://source.unsplash.com/950x500?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-responsive">
            <article class="mt25">
                    {!! $posts->body !!}
            </article>
            <div class="blog-post-read-tag mt50">
                <i class="fa fa-tags"></i> Tags:
                <a href="#"> Javascript</a>,
                <a href="#"> HTML</a>,
                <a href="#"> Wordpress</a>,
                <a href="#"> Tutorial </a>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="bg-gray pt5 bp10 pl10">Related Articles</h5>
            </div>
            <!--Blog Post -->
            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                <div class="blog-three">
                    <h4 class="blog-title"><a href="#">Amazing Blog Post Title</a></h4>
                    <div class="blog-three-attrib">
                        <span class="icon-calendar"></span>Dec 15 2015 | 
                        <span class=" icon-pencil"></span><a href="#">Harry Boo</a>
                    </div>
                    <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image">
                    <p class="mt25">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.                            
                    </p>
                    <a href="#" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>

            <!--Blog Post -->
            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                <div class="blog-three">
                    <h4 class="blog-title"><a href="#">Amazing Blog Post Title</a></h4>
                    <div class="blog-three-attrib">
                        <span class="icon-calendar"></span>Dec 15 2015 | 
                        <span class=" icon-pencil"></span><a href="#">Harry Boo</a>
                    </div>
                    <img src="assets/img/blog/img-blog-2.jpg" class="img-responsive" alt="image">
                    <p class="mt25">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.                            
                    </p>
                    <a href="#" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            
            <!--Blog Post -->
            <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                <div class="blog-three">
                    <h4 class="blog-title"><a href="#">Amazing Blog Post Title</a></h4>
                    <div class="blog-three-attrib">
                        <span class="icon-calendar"></span>Dec 15 2015 | 
                        <span class=" icon-pencil"></span><a href="#">Harry Boo</a>
                    </div>
                    <img src="assets/img/blog/img-blog-3.jpg" class="img-responsive" alt="image">
                    <p class="mt25">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.                            
                    </p>
                    <a href="#" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="blog-post-author mb50 pt30 bt-solid-1">
            <img src="assets/img/other/photo-1.jpg" class="img-circle" alt="image">
            <span class="blog-post-author-name">John Boo</span> <a href="https://twitter.com/booisme"><i class="fa fa-twitter"></i></a>
            <p>
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
            </p>
        </div>
        
        <div class="blog-post-comment-container">
            <h5><i class="fa fa-comments-o mb25"></i> 20 Comments</h5>
            
            <div class="blog-post-comment">
                <img src="assets/img/other/photo-2.jpg" class="img-circle" alt="image">
                <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
                <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
                <p>
                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                </p>
            </div>
            
            <div class="blog-post-comment">
                <img src="assets/img/other/photo-4.jpg" class="img-circle" alt="image">
                <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
                <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
                <p>
                    Adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.
                </p>
                
                <div class="blog-post-comment-reply">
                    <img src="assets/img/other/photo-2.jpg" class="img-circle" alt="image">
                    <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
                    <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
                    <p>
                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                    </p>
                </div>
                
            </div>
            
            <div class="blog-post-comment">
                <img src="assets/img/other/photo-1.jpg" class="img-circle" alt="image">
                <span class="blog-post-comment-name">John Boo</span> Jan. 20 2016, 10:00 PM
                <a href="#" class="pull-right text-gray"><i class="fa fa-comment"></i> Reply</a>
                <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit.
                </p>
            </div>
            
            <button class="button button-default button-sm center-block button-block mt25 mb25">Load More Comments</button>

            
        </div>
        
        <div class="blog-post-leave-comment">
            <h5><i class="fa fa-comment mt25 mb25"></i> Leave Comment</h5>
            
            <form>
                <input type="text" name="name" class="blog-leave-comment-input" placeholder="name" required>
                <input type="email" name="name" class="blog-leave-comment-input" placeholder="email"  required>
                <input type="url" name="name" class="blog-leave-comment-input" placeholder="website">
                <textarea name="message" class="blog-leave-comment-textarea"></textarea>
                <button class="button button-pasific button-sm center-block mb25">Leave Comment</button>                            
            </form>
            
        </div>
    </div>
@endsection