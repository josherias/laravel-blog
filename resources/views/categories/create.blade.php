@extends('layouts.app')


@section('content')


<div class="col-lg-9 col-md-10 mx-auto my-5">
    <div class="card">
        <div class="card-header">
            <h4>{{ isset($category) ? 'Edit Category' : 'Create Category'  }}</h4>
        </div>
        <div class="card-body">
            <!-- include error files -->
            @include('partials.errors')
            <form action="{{ isset($category) ? route('categories.update',$category->id) : route('categories.store')  }}" method="POST">
                @csrf

                @if(isset($category))
                @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" value="{{ isset($category) ? $category->name : '' }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{
                        isset($category) ? 'Update' : 'Create'
                    }}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>







@endsection