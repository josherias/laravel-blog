<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;


class WelcomeController extends Controller
{
    public function show()
    {


        $search = request()->query('search');

        //dd($search);

        if ($search) {
            $post = Post::where('title', 'LIKE', "%{$search}%")->published()->simplePaginate(5);
        } else {
            $post = Post::published()->simplePaginate(5);
        }


        return view('welcome')->with('posts', $post)
            ->with('categories', Category::select('name')->get())
            ->with('users', User::select('name')->get())
            ->with('postslimit', Post::published()->orderBy('published_at', 'DESC')->paginate(2));
    }
}
