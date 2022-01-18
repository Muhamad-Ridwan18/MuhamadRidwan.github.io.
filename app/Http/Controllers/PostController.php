<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $title = '';
        // if ($request->category) {
        //     if (request('category')) {
        //     $category = Category::where('name', 'like', '%'.$request->category.'%')->get();
        //     $title = ' In ' . $category->name;  
        //     }    
        // }else{
        //     if (request('category')) {
        //         $category = Category::firstWhere('slug', request('category'));
        //         $title = ' In ' . $category->name;
        //     }
        // }
        

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        return view('posts',[
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(['search', 'category', 'author'])->paginate(6)->withQueryString()
        ]);

        
    }

    public function show(Post $posts)
    {
        return view('post',[
            "title" => "Single Post",
            "posts" => $posts
        ]);
    }

    public function store()
    {
        $data['posts'] = Post::latest()->get();
        return view('dashboard.data.index',$data);
    }

    public function category()
    {
        $post_category = DB::table('post_category')->where('category_id')->get();
        $post = DB::table('posts')->whereIn('id', $post_category->pluck('post_id'))->get();
    }
}
