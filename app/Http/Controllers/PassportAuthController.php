<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class PassportAuthController extends Controller
{
    //

    public function register(Request $request){
        $validator = Validator::make($request->all(), [ 
                        'name' => 'required|min:4',
                        'email' => 'required|email',
                        'password' => 'required|min:8',
                    ]);

        if ($validator->fails())
        { 
            $message = $validator->errors()->first();
            return response()->json(['statusCode'=>200,'success'=>false,'message'=>$message], 200);            
        }
        
        $user = new User;

    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [ 
                        'email' => 'required|email',
                        'password' => 'required|min:8',
                    ]);

        if ($validator->fails())
        { 
            $message = $validator->errors()->first();
            return response()->json(['statusCode'=>200,'success'=>false,'message'=>$message], 200);            
        }

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }

    }
}