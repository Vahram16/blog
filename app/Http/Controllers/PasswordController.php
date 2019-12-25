<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class PasswordController extends Controller
{
    public function index()
    {
        return view('auth.passwordIndex');

    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|exists:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $password = Hash::make($request->password);

        $user = User::where('user_name', $request->user_name)
            ->first();

        $user->update([

            'password' => $password
        ]);


        return redirect()->route('mainAdmin');



    }


}
