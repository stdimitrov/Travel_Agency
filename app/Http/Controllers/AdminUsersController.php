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
        return view('dashboards.admins.usersCrud.usersProfileCreate', ['user' => User::all()]);
    }

    public function usersProfileEdit($id)
    {
        return view('dashboards.admins.usersCrud.usersProfileEdit', ['user' => User::find($id)]);
    }

    public function usersProfileStore(Request $request)
    {
        $user = User::create($request->except(['_token']));
        return redirect(route('admin.usersProfile'));

    }

    public function usersProfileUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->except(['_token']));

        return redirect(route('admin.usersProfile'));
    }

    public function usersProfileDestroy($id)
    {
        User::destroy($id);
        return redirect(route('admin.usersProfile'));

    }


}


/* **************************************************************************************
*************************************  Maket Helper *************************************

$request->validate([

            'name' => 'required|max:20',
            'middle_name' => 'sometimes|max:20',
            'last_name' => 'sometimes|max:20',
            'email' => 'required|email',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => 'sometimes',
            'phone_country' => 'sometimes||regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'phone_number' => 'sometimes||regex:/^([0-9\s\-\+\(\)]*)$/|min:8, max:20',
            'birthdate' => 'sometimes',
            'gender' => 'sometimes'
        ]);

        $user->name = $request['name'];
        $user->middle_name = $request['middle_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->avatar = $request['avatar'];
        $user->phone_country = $request['phone_country'];
        $user->phone_number = $request['phone_number'];
        $user->birthdate = $request['birthdate'];
        $user->gender = $request['gender'];

************************************************************************************** */
