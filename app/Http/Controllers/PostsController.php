<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreatePostsRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;


class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {

        //upload image to storage in posts directory
        $image = $request->image->store('posts');

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $image,
            'published_at' => $request->published_at,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id

        ]);


        session()->flash('success', 'Post created Successfully');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //get only specicif results from the request object
        $data = $request->only(['title', 'description', 'published_at', 'content']);

        //check if request obj has a file present
        if ($request->hasFile('image')) {

            //upload current file

            $image = $request->image->store('posts');

            //delete the old file
            $post->deleteImage();

            //add the new image to current image in data array to update
            $data['image'] = $image;
        }


        //update post
        $post->update($data);


        session()->flash('success', 'Post has been Updated');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        //delete related image post from storage
        $post->deleteImage();

        session()->flash('success', 'Post Deleted Successfully.');

        return redirect(route('posts.index'));
    }
}
