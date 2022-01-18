<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::latest()->get();
        return view('dashboard.categories.index',$data);
    }
}
