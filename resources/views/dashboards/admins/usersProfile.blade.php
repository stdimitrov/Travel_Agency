@extends('layouts.adminApp')
@section('pageTitle','Users')

@section('content')
    <h3></h3>
    <h3>Users</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Users</h2>
                        <a class="btn btn-sm float-right"
                           href="{{ route('admin.usersCrud.usersProfileCreate') }}">
                            Create some new asshole
                        </a>
                    </div>
                    <div class="card-body">

                        <br/>
                        <br/>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if($user->role==1)
                                        <td>Admin</td>
                                    @elseif($user->role==0)
                                        <td>User</td>
                                    @else
                                        <td>Someting is wrong</td>
                                    @endif

                                    <td>
                                        <a href="{{ route('admin.usersCrud.usersProfileEdit', $user->id) }}"
                                           class="btn btn-sm">
                                            View / Edit
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm "
                                                onclick="event.preventDefault();
                                                    document.getElementById('delete-user {{ $user->id }}').submit();">
                                            Delete the Asshole
                                        </button>
                                        <form id="delete-user {{ $user->id }}"
                                              action="{{ route('admin.usersCrud.usersProfileDelete', $user->id) }}"
                                              method="POST"
                                              style="display:none " class="btn btn-sm">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
