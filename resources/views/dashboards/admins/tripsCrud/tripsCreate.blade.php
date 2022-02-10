@extends('layouts.adminApp')
@section('pageTitle','New tripsCrud')

@section('content')
    <h3>Add New Trips</h3>
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create trip
            </h1>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form method="POST" action="{{ route('admin.tripsCrud.tripsStore') }}" enctype="multipart/form-data">
            @include('dashboards.admins.parts.formTrips', ['create' => true])
        </form>
    </div>


@endsection
