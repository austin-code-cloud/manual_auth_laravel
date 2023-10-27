<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'surname' => "required",
            'firstname' => "required",
            'email' => "required|email|unique:users",
            'password' => "required|min:5|max:12"
        ]);

        $user = new User();

        $user->surname = $request->surname;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res =   $user->save();

        if ($res) {
            return back()->with('success', 'You have registered Succesfully');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required|min:5|max:12"
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $request->Session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('failure', 'Wrong Password inputed');
            }
        } else {
            return back()->with('failure', 'This email is not Registered');
        }
    }

    public function dashboard()
    {

        $data = array();

        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout () {
        if (Session::has('loginId')) {
            Session::pull('loginId');
        }
        return redirect('login');
    }
}
