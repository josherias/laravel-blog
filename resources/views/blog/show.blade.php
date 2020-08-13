@extends('layouts.blog')

@section('content')
<div class="col-sm-9 my-5">

    <h2 class="py-3">{{ $post->title }}</h2>

    <div class=" my-3">
        Wriiten By : <span class="mr-1 badge badge-danger"> {{ $post->  user->name }}</span><span class="mr-5">@ {{ $post->user->name }} </span>/ &nbsp; &nbsp; &nbsp; <span> {{ $post->published_at}}</span>
    </div>
    <img src="{{ asset('/storage/'.$post->image) }}" width="100%" alt="img">

    <div class="my-3">
        <span>Category</span> : <span class="badge badge-danger"> {{ $post->category->name }}</span>
    </div>

    <div class="mb-5">
        {!! $post->content !!}
    </div>

    <!-- disquss -->

    <div id="disqus_thread" class="mt-5"></div>
</div>


<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

    var disqus_config = function() {
        this.page.url = "{{ config('app.url')}}/blog/posts/{{ $post->id }}"; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = "{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://laravel-blog-tqcs3frcgh.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



@include('partials.blogSidebar')

@endsection