@extends('layouts.app')


@section('content')







<div class="col-lg-9 col-md-10 mx-auto my-5">
    <div class="card">
        <div class="card-header">
            <h4>{{ isset($post) ? 'Edit Post' : 'Create Post'  }}</h4>
        </div>
        <div class="card-body">
            <!-- include error files -->
            @include('partials.errors')
            <form action="{{ isset($post) ? route('posts.update',$post->id) : route('posts.store')  }}" method="POST" enctype="multipart/form-data">
                @csrf

                @isset($post)
                @method('PUT')
                @endisset

                <!-- title -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ isset($post) ? $post->title : '' }}">
                </div>

                <!-- description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="5" rows="5"> {{ isset($post) ? $post->description : '' }} </textarea>
                </div>

                <!-- content -->
                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}">
                    <trix-editor input="content"> </trix-editor>
                </div>

                <!-- published at -->
                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" id="published_at" name="published_at" class="form-control" value="{{ isset($post) ? $post->published_at : '' }}">
                </div>

                @isset($post)
                <div class="form-group my-3">
                    <label for=""> Image </label>
                    <img src="{{asset('/storage/'.$post->image)}}" alt="img" width="100%">
                </div>
                @endisset

                <!-- image file -->
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <!-- category -->
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @isset($post) @if($post->category_id === $category->id)
                            selected
                            @endif
                            @endisset>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{
                        isset($post) ? 'Update' : 'Create'
                    }}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>





@endsection

@section('css')
<!-- trixeditor css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css" crossorigin="anonymous" />
<!-- flat picker  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.css" crossorigin="anonymous" />
@endsection

@section('js')
<!-- trix editor js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.js" crossorigin="anonymous"></script>

<!-- flat picker  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js" crossorigin="anonymous"></script>

<script>
    flatpickr('#published_at', {
        enableTime: true
    });
</script>
@endsection