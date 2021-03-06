<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'middle_name',
            'last_name',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'role',
            'password' => ['required', 'confirmed', Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()],
            'avatar',
            'phone_country',
            'phone_number',
            'birthdate',
            'gender'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    function register(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:20'],
            'middle_name' => ['sometimes||max:20'],
            'last_name' => ['sometimes||max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required' => false],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['sometimes'],
            'phone_country' => ['sometimes||regex:/^([0-9\s\-\+\(\)]*)$/|min:7'],
            'phone_number' => ['sometimes||regex:/^([0-9\s\-\+\(\)]*)$/|min:8, max:20'],
            'birthdate' => ['sometimes'],
            'gender' => ['sometimes']
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 0;
        $user->password = \Hash::make($request->password);


        if( $user->save() ){
            return redirect('login');
        }else{
            return redirect()->back()->with('error','Failed to register');
        }

    }
}
