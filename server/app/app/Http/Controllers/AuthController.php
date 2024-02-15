<?php

namespace App\Http\Controllers;

use App\Events\UserCreatedEvent;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Exceptions\MyExeption;
use Illuminate\Support\Facades\Event;

class AuthController extends Controller
{
    // User Register (POST, formdata)
    public function register(Request $request){
        
        // data validation
        $request->validate([
            "login" => "required",
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ]);

        // User Model
        $user=User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
        Event::dispatch(new UserCreatedEvent($user));

        // Response
        return response()->json([
            "status" => true,
            "message" => "User registered successfully"
        ]);
    }

    // User Login (POST, formdata)
    public function login()
        {
            
            $credentials = request(['email', 'password']);
    
            if (! $token = auth()->attempt($credentials)) {
                //return response()->json(['error' => 'Unauthorized'], 401);
                throw new MyExeption();
            }
    
            return $this->respondWithToken($token);
        }
    
    // User Profile (GET)
    public function profile(){

        $userdata = auth()->user();

        return response()->json([
            "status" => true,
            "message" => "Profile data",
            "data" => $userdata
        ]);
    } 

    // To generate refresh token value
    public function refreshToken(){
        
        $newToken = auth()->refresh();

        return response()->json([
            "status" => true,
            "message" => "New access token",
            "token" => $newToken
        ]);
    }

    // User Logout (GET)
    public function logout(){
        
        auth()->logout();

        return response()->json([
            "status" => true,
            "message" => "User logged out successfully"
        ]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}


