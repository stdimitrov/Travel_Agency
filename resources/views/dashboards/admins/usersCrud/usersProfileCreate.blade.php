@extends('layouts.adminApp')
@section('pageTitle','New User')

@section('content')
    <h3>Add New User</h3>
    <div class="card">
        <form method="POST" action="{{ route('admin.usersCrud.usersProfileStore') }}" enctype="multipart/form-data">
            @include('dashboards.admins.parts.formUsers', ['create' => true])
        </form>
    </div>
@endsection
