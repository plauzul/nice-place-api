<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exception\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;

class LoginController extends Controller {

    public function __construct() {
        $this->middleware('cors');
    }

    /**
     * Method for user authentication
     */
    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        try {
            if(!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'User credentials are not correct!']);
            }
        } catch(JWTException $e) {
            return response()->json(['error' => 'Something went wrong!']);
        }

        return response()->json(['token' => $token, 'id' => User::where('email', $request->email)->first()->id]);
    }
}
