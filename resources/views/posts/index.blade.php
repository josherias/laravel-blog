@extends('layouts.app')

@section('content')



<div class="col-sm-12 mx-auto">

    <h2 class="my-5">Posts Section</h2>

    <div class="my-3">
        <a href="{{ route('posts.create') }}" class="btn btn-success text-light">Add Posts</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Posts</h3>
        </div>
        <div class="card-body">
            @if($posts->count() !== 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>

                        <th>Title</th>

                        <th>Category</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            <img src="{{asset('/storage/'.$post->image)}}" alt="img" width="100px" height="60px">
                        </td>

                        <td>
                            {{ Str::limit($post->title , 40) }}
                        </td>


                        <td>
                            {{ $post->category->name }}
                        </td>


                        <td class="">

                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a>

                            <span>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </span>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h4>There arent any posts availbale</h4>
            @endif

        </div>
    </div>
</div>













@endsection