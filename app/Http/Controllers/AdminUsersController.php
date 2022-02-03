<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends AdminController  //Controller
{


    public function usersProfileCreate()
    {
        return view('dashboards.admins.usersCrud.usersProfileCreate');
    }

    public function usersProfileEdit($id)
    {
        return view('dashboards.admins.usersCrud.usersProfileEdit');

    }

    public function usersProfileStore(Request $request)
    {
        User::create($request->all());
        return redirect()->route('dashboards.admins.usersCrud.usersProfileCreate');
    }

    public function delete($id)
    {

    }


}
