<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::latest()->filter([
                'search' => request('search'),
                'category' => request('category'),
                'author' => request('author')
            ])->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $posts)
    {
        return view('post', [
            "title" => "Single Post",
            "posts" => $posts
        ]);
    }

    public function store()
    {
        $data['posts'] = Post::latest()->get();
        return view('dashboard.data.index', $data);
    }

    public function category()
    {
        $post_category = DB::table('post_category')->where('category_id')->get();
        $post = DB::table('posts')->whereIn('id', $post_category->pluck('post_id'))->get();
    }
}
