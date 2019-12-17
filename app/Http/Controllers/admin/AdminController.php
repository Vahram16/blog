<?php


namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.login');


    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required'

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('mainAdmin');
        } else {
            return back()->withErrors('password is incorrect');
        }

    }

    public function mainAdmin()
    {
        return view('admin.mainAdmin');

    }

    public function createRegister()
    {
        return view('admin.createRegister');

    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'user_name' => $request->user_name,
                'password' => Hash::make($request->password),
                'role_id' => 2

            ]
        );


        return redirect(route('mainAdmin'));


    }

    public function logout()
    {
        Auth::logout();
        return redirect()
            ->route('home');

    }


}
