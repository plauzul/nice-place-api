<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller {

    public function __construct() {
        $this->middleware('cors');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($data) {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'sex' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create($data) {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'sex' => $data['sex'],
            'img' => $data['sex'] == "masculino" ? url(Storage::url('users/masculino.jpg')) : url(Storage::url('users/feminino.jpg'))
        ]);
    }

    /**
     * Method for register users
     */
    public function register(Request $request) {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $this->create($request->all());

        return response()->json(['status' => 'User created successfully']);
    }
}
