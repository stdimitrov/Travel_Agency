@extends('layouts.adminApp')
@section('pageTitle','New User')

@section('content')
    <h3>Add New User</h3>
    <div class="container">
        <div class="row justify-content-center">
            <ul>
                <li>
                    <form method="POST" action="{{ route('admin.usersCrud.usersProfileStore') }}">
                        @csrf
                        Name:
                        <input type="text" name="name" class="form-control"/>
                        <br />
                        Email:
                        <input type="email" name="email" class="form-control"/>
                        Name:
                        <input type="password" name="password" class="form-control"/>
                        <input type="submit" value="Save" class="btn btn-primary"/>
                    </form>
                </li>
            </ul>

        </div>
    </div>
@endsection
