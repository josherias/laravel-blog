@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="d-flex flex-wrap my-3 justify-content-center">
            <div class="card text-white bg-primary m-3 border-0 rounded-0 m-3" style="max-width: 18rem; width:18rem; height:10rem">
                <div class="card-body d-flex  justify-content-between">
                    <div>
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="text-center">
                        <p class="card-text">Users</p>
                        <h4 class="card-title"> + {{ $users->count() }}</h4>
                    </div>
                </div>
            </div>


            <div class="card text-white bg-success m-3 border-0 rounded-0 m-3" style="max-width: 18rem; width:18rem; height:10rem">
                <div class="card-body d-flex  justify-content-between">
                    <div>
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="text-center">
                        <p class="card-text">Categories</p>
                        <h4 class="card-title"> + {{ $categories->count() }}</h4>
                    </div>
                </div>
            </div>


            <div class="card text-white bg-warning m-3 border-0 rounded-0 m-3" style="max-width: 18rem; width:18rem; height:10rem">
                <div class="card-body d-flex  justify-content-between">
                    <div>
                        <i class="fas fa-mail-bulk"></i>
                    </div>
                    <div class="text-center">
                        <p class="card-text">Posts</p>
                        <h4 class="card-title"> + {{ $posts->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('css')
<style>
    .card i {
        font-size: 4rem;
        margin: 2px 5px;
    }

    .card-text {
        font-size: 1.6rem;
    }

    .card-title {
        font-size: 2rem;
    }
</style>
@endsection