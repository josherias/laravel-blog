@extends('layouts.app')

@section('content')
<div>
    <div class="col-sm-12 mx-auto">

        <h2 class="my-5">Users Section</h2>

        <div class="card">
            <div class="card-header">
                <h3>Users</h3>
            </div>
            <div class="card-body">
                @if($users->count() !== 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Toggle Role</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>


                            <td>
                                {{ $user->name }}
                            </td>

                            <td>
                                {{ $user->role }}
                            </td>

                            <td>
                                {{ $user->email }}
                            </td>

                            <th>
                                @if(!$user->isAdmin())
                                <span>
                                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary btn-sm">Make Admin</button>
                                    </form>
                                </span>
                                @else
                                <button type="submit" disabled class="btn btn-primary btn-sm">Already Admin</button>
                                @endif
                            </th>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h4>There are currently no users</h4>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection