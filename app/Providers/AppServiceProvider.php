<?php

namespace App\Providers;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //sharing data to all views of application
        // View::share('users', User::all());
        // View::share('categories', Category::all());

        // View::share('posts', Post::simplePaginate(5));

        // View::share('postslimit', Post::paginate(2));
    }
}
