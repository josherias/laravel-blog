@extends('layouts.app')

@section('content')





<div class="col-sm-12 mx-auto">

    <h2 class="my-5">Categories Section</h2>

    <div class="my-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success text-light">Add New category</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Categories</h3>
        </div>
        <div class="card-body">
            @if($categories->count() !== 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>

                        <th>Posts count</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <!-- category name -->
                        <td>{{ $category->name }}</td>


                        <!-- posts count -->
                        <td>
                            <span class="badge badge-primary">
                                {{ $category->posts->count() }}
                            </span>
                        </td>

                        <!-- edit & delete actions -->
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-danger btn-sm">Edit</a>

                            <form action="{{ route('categories.destroy', $category->id) }}" style="display: inline;" method="POST">
                                @csrf
                                <!-- directive makes sure its a delete request -->
                                @method('DELETE')
                                <button type="submit" class="btn btn-success btn-sm">Trash</button>
                            </form>
                        </td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h4>There arent any categories in database</h4>
            @endif

        </div>
    </div>
</div>









@endsection