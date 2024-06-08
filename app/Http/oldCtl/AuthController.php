<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $request['api_token'] = $request->input('name');

        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                'error' => $errors->toJson(),
                'status' => false,
                'message' => 'Check the field and try again'
            ];
        }

        $emailCheck = User::where('email', $request->email)->count();
        $phoneCheck = User::where('phone', $request->phone)->count();

        if ($emailCheck > 0) {
            return [
                'error' => 'Email Already in use',
                'status' => false,
                'message' => 'Check the field and try again'
            ];
        }
        if ($phoneCheck > 0) {
            return [
                'error' => 'Phone Already in use',
                'status' => false,
                'message' => 'Check the field and try again'
            ];
        }

        $name = $request->input('name');
        $name = explode(' ', $name);
        if (count($name) > 1) {
            $request['firstname'] = $name[1];
            $request['surname'] = $name[0];
        } else {
            $request['firstname'] = $request->input('name');
        }



        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['apiToken'] =  $user->createToken('MyWCAuthApp')->plainTextToken;
        $success['user'] =  $user;
        $success['message'] =  'Login Successful';
        $success['status'] =  true;
        return response()->json($success, 201);
    }

    public function login(Request $request)
    {
        $phoneAuth = Auth::attempt(['phone' => $request->email, 'password' => $request->password]);
        $emailAuth = Auth::attempt($request->only('email', 'password'));
        if (Auth::attempt($request->only('phone', 'password'))) {
            $authUser = Auth::user();
            $success['apiToken'] =  $authUser->createToken('MyWCAuthApp')->plainTextToken;
            $success['user'] =  $authUser;
            $success['message'] =  'Login Successful';
            $success['status'] =  true;
            return response()->json($success, 201);
        } else {
            $error['status'] = false;
            $error['message'] = 'Unauthorized';
            return $error;
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        auth()->user()->currentAccessToken()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
