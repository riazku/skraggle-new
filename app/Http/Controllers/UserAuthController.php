<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signup(Request $request)
    {
        
        // Hash password and create user
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        // Generate token
        $success['token'] = $user->createToken('myapp')->plainTextToken;
        $user['name']=$user->name;


        return[
            'success' => true,
            'result' => $success,
            'msg' => 'User registered successfully'
        ];
    }

    public function login(Request $request)
    {
        

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {

            return ['result'=> "user not found","success"=>false];
        }

        $success['token'] = $user->createToken('myapp')->plainTextToken;
        $user['name']=$user->name;
            
        return[
            
            'result' => $success,
            'msg' => 'login successfully'
        ];
        

        

        
            
        
    }
}
