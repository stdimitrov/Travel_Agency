<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Trips;
use Illuminate\Support\Facades\DB;


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
