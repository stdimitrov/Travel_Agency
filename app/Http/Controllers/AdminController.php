<?php

namespace App\Http\Controllers;
use App\Models\Trips;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {

        return view('dashboards.admins.index');
    }

    public function profile()
    {
        return view('dashboards.admins.profile');
    }

    public function usersProfile()
    {
        return view('dashboards.admins.usersProfile', ['users' => User::all()]);
    }

    public function tripsProfile()
    {
        return view('dashboards.admins.tripsProfile', ['trips' => Trips::all()]);
    }
}
