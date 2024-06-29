<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $phoneAuth = Auth::attempt(['phone' => $request->user, 'password' => $request->password]);
        $emailAuth = Auth::attempt(['email' => $request->user, 'password' => $request->password]);
        if ($phoneAuth or $emailAuth) {
            $success['apiToken'] =  User::findOrfail(Auth::user()->id)->createToken($request->device_name)->plainTextToken;
            $success['user'] =  Auth::user();
            $success['message'] =  'Login Successful';
            $success['status'] =  true;
            return response()->json($success, 201);
        } else {
            $error['status'] = false;
            $error['message'] = 'Unauthorized';
            return $error;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'station_id' => 'required',
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

        if ($emailCheck > 0 or $phoneCheck > 0) {
            $error = [];
            if ($phoneCheck > 0) {
                $error .= 'Phone Already in use';
            }
            if ($emailCheck > 0) {
                $error .= 'Email Already in use';
            }
            return [
                'error' => $error,
                'status' => false,
                'message' => 'Change email or phone field and try again'
            ];
        }




        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);;
        $success['apiToken'] =  User::findOrfail($user->id)->createToken($input['phone'])->plainTextToken;
        $success['user'] =  User::findOrfail($user->id);
        $success['message'] =  'Login Successful';
        $success['status'] =  true;
        return response()->json($success, 201);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return true;
    }
}
