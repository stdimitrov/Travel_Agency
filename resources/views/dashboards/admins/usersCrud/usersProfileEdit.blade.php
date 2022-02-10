@extends('layouts.adminApp')
@section('pageTitle','Edit User')

@section('content')
    <div class="card">
        <div class="container">
        <form method="POST" action="{{ route('admin.usersCrud.usersProfileUpdate', $user->id) }}" enctype="multipart/form-data">
            @method('POST')
            @include('dashboards.admins.parts.formUsers')
        </form>
        </div>
    </div>
@endsection
