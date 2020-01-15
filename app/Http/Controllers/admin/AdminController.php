<?php


namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

        if (Auth::user()->role_id == 2) {


            return back()
                ->withErrors('You do not have admin access');
        }


        $users = User::with('userLog')->get();
        $userWithLog = [];
        foreach ($users as $user) {
            $userWithLog[$user->id] =
                [
                    'name' => $user->name,
                    'user_name' => $user->user_name,
                    'id' => $user->id
                ];

            $monthlyLogs = $user['userLog']->where('created_at', '>', Carbon::now()->subDays(30));

            foreach ($monthlyLogs as $userLog) {

                $date = $userLog->created_at->toDayDateTimeString();
                $userWithLog[$user->id]['user_log'][] = $date;
            }

        }

        return view('admin.mainAdmin')
            ->with(['users' => $userWithLog]);

    }

    public
    function createRegister()
    {

        if (Auth::user()->role_id == 2) {


            return back()
                ->withErrors('your role does not have  access  to the admin');
        }
        return view('admin.createRegister');

    }

    public
    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'user_name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'

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

    public
    function logout()
    {
        Auth::logout();
        return redirect()
            ->route('home');

    }

    public function deleteUser(Request $request)
    {
//        $user = User::where('id', $request->id)
//            ->first();


        $user = User::find($request->id);
        $user->delete();
        return back();

    }


}
