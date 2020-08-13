@extends('layouts.blog')

@section('showcase')

<section class="showcase mb-3">
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="showcase d-flex justify-content-center align-items-center flex-column px-3" style="height: 80vh;">
                    <h2 class="display-4 text-center">Creativity Is A Wild Mind & <br> A Disciplined Eye</h2>
                    <h5 class="text-center my-3">Free Blogs at your dispose everyday by <span class="text-success">Laravel Blog Team</span></h5>
                    <div class="buttons d-flex py-2">
                        <a href="{{ route('register') }}" class="btn btn-info text-light btn-lg rounded-pill mx-2" style="font-size:1.4rem">
                            Join Us
                        </a>

                        <a href="https://wck.org/" class="btn btn-danger text-light btn-lg rounded-pill mx-2" style="font-size:1.4rem">
                            Donate
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection




@section('content')

<div class="col-sm-9">
    @forelse($posts as $post)

    <div class="post mx-auto my-5">

        <div class="row">
            <div class="col-sm-4 mb-3">
                <img class="img-fluid " src="{{ asset('/storage/'. $post->image) }}" style="object-fit: cover; width:100%" alt="">
            </div>

            <div class="col-sm-8 mb-3">
                <h4 class="mb-3"> <a href="{{ route('blog.show', $post->id) }}" class="text-dark">{{ Str::limit($post->title, 100) }}</a> </h4>
                <p class="mb-3">{{ Str::limit($post->description, 100) }}</p>
                <p class="text-muted mb-3"> <i class="fas fa-user mr-2"></i> Written by : {{ $post->user->name }}</p>
                <span class="text-secondary">{{ $post->published_at }}</span> <span class="float-right"><a href="{{ route('blog.show', $post->id) }}" class="btn btn-secondary btn-sm">View full Post</a></span>
            </div>
        </div>


    </div>

    <hr>

    @empty

    <div class="card">
        <h3 class="text-center py-5 text-danger">No results found for your search </h3>
        <a href="{{ route('welcome')}}" class="btn btn-danger btn-large">Click to Go Back</a>
    </div>
    @endforelse

    <!-- pagination -->
    <div class="text-center my-5 d-flex justify-content-center">
        {{ $posts->appends(['search' => request()->query('search')])->links()}}
    </div>
</div>

<!-- sidebar -->

@include('partials.blogSidebar')


@endsection