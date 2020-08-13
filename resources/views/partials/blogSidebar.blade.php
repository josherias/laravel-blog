<div class="col-sm-3 text-center my-5 d-none d-md-block d-xl-block">
    <br><br><br>
    <form action="{{ route('welcome') }}" method="GET">

        <div class="form-group">
            <label for="search"></label>
            <h5>SEARCH HERE</h5>
            </label>
            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request()->query('search') }}">
        </div>
        <div class="form-group">

        </div>
    </form>
    <br>
    <br>
    <div class="my-5">
        <h5>Categories</h5>

        @foreach($categories as $category)
        <span class="badge badge-primary p-1 my-2">{{ $category->name }}</span>
        @endforeach
    </div>

    <br><br><br>

    <h5 class="mt-5">Recent Posts</h5>
    @foreach($postslimit as $post)
    <div class="card my-3 mx-auto" style="width: 180px;">
        <div class="card-img">
            <img src="{{ asset('/storage/'. $post->image) }}" width="100%" alt="">
        </div>
        <div class="card-body">
            {{ Str::limit($post->title, 10) }}
        </div>
    </div>
    @endforeach

</div>