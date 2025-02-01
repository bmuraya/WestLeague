<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\CreatePostRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
     
 
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        // Ensure published_at is in the correct format
        $publishedAt = Carbon::createFromFormat('d-m-Y', $request->published_at)->format('Y-m-d');
    
        // Handle image upload
        $image = $request->file('image')->store('posts', 'public');

        

    
        // Create post
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $image,
            'published_at' => $publishedAt, // Use the formatted date
        ]);
    
        session()->flash('success', 'Post created successfully');
    
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = Post::withTrashed()->where('id', $id)->firstOrFail();

    if ($post->trashed()) {
        // Get the full image path
       
        Storage::delete('public/' . $post->image);

      
        // Permanently delete the post
        $post->forceDelete();

    } else {
        // Move the selected post to the trash (soft delete)
        $post->delete();
    }

    session()->flash('success', 'Post Deleted successfully');

    return redirect(route('posts.index'));
}

    

    /**
     * Display a listing of trashed posts.
     */

     public function trashed()
     {
         $trashed = Post::onlyTrashed()->get();

         return view('posts.index')->withPosts($trashed);
     }
}
