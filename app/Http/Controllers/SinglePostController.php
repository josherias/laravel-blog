<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{


    public function show(Post $post)
    {
        return view('blog.show')->with('post', $post)
            ->with('categories', Category::all())
            ->with('postslimit', Post::paginate(2));
    }
}
