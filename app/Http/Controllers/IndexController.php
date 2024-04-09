<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
   public function indexShowPage(){
        return view('index');
   }
       public function login(Request $request)
       {
           $request->validate([
               'email' => 'required|email',
               'password' => 'required',
           ]);


           if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
               return redirect()->intended('/');
           }

           return back()->withErrors(['email' => 'Incorrect email or password.']);
       }


       public function logout(Request $request)
       {
           Auth::logout();

           $request->session()->invalidate();

           $request->session()->regenerateToken();

           return redirect('/');
       }


       public function showRegistrationForm()
       {
           return view('auth.register');
       }


       public function register(Request $request)
       {
          $request->validate([
                  'email' => 'required|email|unique:users',
                  'password' => 'required|min:6',
              ]);

                  $email = $request->input('email');
                  $password = Hash::make($request->input('password'));

                  DB::table('auth_login')->insert([
                      'email' => $email,
                      'password' => $password,
                  ]);


              return redirect()->route('login');
       }

}
