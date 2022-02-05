<?php

namespace App\Http\Controllers;
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

}
