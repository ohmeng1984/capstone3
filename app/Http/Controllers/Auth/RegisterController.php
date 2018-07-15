<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
<<<<<<< HEAD

//      redirectTo property
//    protected $redirectTo = '/';
    protected function redirectTo()
    {
        if (!auth()->guest()) {
        return 'admin/routes';
        } else {
        return '/login';
        }
    }
=======
    protected $redirectTo = '/';

>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD

        $this->middleware('guest'||'admin');
=======
        $this->middleware('guest');
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
<<<<<<< HEAD
            'role' => 'required|string|max:10'
=======
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
<<<<<<< HEAD
            'role' => $data['role']
=======
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
        ]);
    }
}
