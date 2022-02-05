<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $posts = Post::all();
            return response()->json(['massage' => 'success', 'data' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($title)
    {
            $result = Post::where('title', 'LIKE', '%' . $title . '%')->get();
            if (count($result)) {
                return Response()->json($result);
            } else {
                return response()->json(['Result' => 'No Data not found'], 404);
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => $this->title,
        //     'slug' => $this->slug,
        //     'image' => $this->image,
        //     'category_id' => $this->category_id,
        //     'body' => $this->body,
        // ]);

        // $file = $request->file('post-images');
        // $filename = time() . '.' . $file->getClientOriginalExtension();
        // $img = Image::make($file);
        // if (Image::make($file)->width() > 720) {
        //     $img->resize(800, 512, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        // }
        // $img->save(public_path('post-images/') . $filename);

        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData['user_id']  = auth()->user()->id;
        // $validatedData['excerpt']  = Str::limit(strip_tags($request->body), 200);

        $posts = Post::create($request->all());
        return response()->json(['massage' => 'success', 'data' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $rules = [
        //     'title' => 'required|max:255',
        //     'image' => 'image|file|max:2048',
        //     'category_id' => 'required',
        //     'body' => 'required',
        // ];
        // if ($request->slug != $post->slug) {
        //     $rules['slug'] = 'required|unique:posts';
        // }



        // $validatedData = $request->validate($rules);

        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData['user_id']  = auth()->user()->id;
        // $validatedData['excerpt']  = Str::limit(strip_tags($request->body), 200);

        // $validatedData = Post::where('id', $post->id)
        //     ->update($validatedData);
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json(['massage' => 'post update successfully', 'data' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::destroy($id);
        return response()->json(['massage' => 'posts hash been deleted', 'data' => $post]);
    }

    /**
     * Check slug
     * 
     */
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
