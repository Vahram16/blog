<?php

namespace App\Http\Controllers;

use App\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_name' => 'required|exists:users',
            'password' => 'required'

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['user_name' => $request->user_name, 'password' => $request->password])) {

            UserLog::create([

                'user_id' => Auth::user()->id

            ]);


            return redirect()->route('index');
        } else {
            return back()
                ->withErrors(' The password is incorrect');
        }

    }


}
