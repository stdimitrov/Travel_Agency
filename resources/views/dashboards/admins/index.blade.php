@extends('layouts.adminApp')
@section('pageTitle','Dashboard')

@section('content')
    <h3></h3>
    <h3>Dashboard</h3>
    <div class="container">
        <div class="row justify-content-center">
            <ul>
                <li>
                    <h4>{{Auth::user()->name}}'s profile</h4>
                </li>
            </ul>

        </div>
    </div>
@endsection
