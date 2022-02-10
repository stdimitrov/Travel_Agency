@extends('layouts.adminApp')
@section('pageTitle','Users')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Trips
            </h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="float-left">Users</h2>
                            <a href="{{ route('admin.tripsCrud.tripsCreate') }}" class="btn btn-sm float-right">
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
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($trips as $trip)
                                    <tr>
                                        <th scope="row">{{ $trip->id }}</th>
                                        <td>{{ $trip->name }}</td>
                                        <td>{{ $trip->title }}</td>
                                        <td>{{ $trip->overview }}</td>

                                        <td>
                                            <a href="{{ route('admin.tripsCrud.tripsEdit', $trip->id) }}"
                                               class="btn btn-sm">
                                                View / Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-trip {{ $trip->id }}"
                                                  action="{{ route('admin.tripsCrud.tripsDestroy', $trip->id) }}"
                                                  method="POST"
                                                  style="display:none " class="btn btn-sm">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                            <button type="button" class="btn btn-sm "
                                                    onclick="event.preventDefault();
                                                        document.getElementById('delete-trip {{ $trip->id }}').submit();">
                                                Delete the Asshole
                                            </button>
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
