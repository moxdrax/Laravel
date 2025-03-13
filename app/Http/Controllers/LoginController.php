<?php

namespace App\Http\Controllers;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
        public function register(Request $request){
            $request->validate([
                'email' => 'required|email|unique:register,email',
                'password' => 'required|min:8',
            ]);
            $user = new RegisterModel();
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
            return redirect('/login')->with('success', 'Registration successful. Please log in.');
        }

        public function login(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            $user = RegisterModel::where('email', $request->input('email'))->first();

            if (!$user || $user->password !== $request->input('password')) {
                return back()->with('error', 'Incorrect email or password.');
            }
            session(['user_id' => $user->id, 'email' => $user->email]);
            return redirect('/home')->with('success', 'Login successful.');
        }

    
        public function logout()
        {
            Session::flush();
            return redirect('/login')->with('success', 'Logged out successfully.');
        }
}
