@extends('layouts.adminApp')
@section('pageTitle','New tripsCrud')

@section('content')
    <h3>Add New Trips</h3>
    <form method="POST" action="{{ route('admin.tripsCrud.tripsStore') }}" enctype="multipart/form-data">
        {{--@include('dashboards.admins.parts.formTrips', ['create' => true])--}}
    </form>
@endsection
