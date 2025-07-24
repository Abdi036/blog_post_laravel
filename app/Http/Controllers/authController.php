<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class authController extends Controller
{
    public function showSignup(){
        return view("auth.signup");
    }
    public function showSignin(){
        return view("auth.signin");
    }

    public function signup(Request $request){
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
      ]);
      $user =  User::create($validated);
      Auth::login($user);

      return redirect()->route('blogs.index');
    }

    public function signin(Request $request)
  {
      $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:8',
      ]);

      if (Auth::attempt($validated)) {
        $request->session()->regenerate();

        return redirect()->route('blogs.index');
      }

      throw ValidationException::withMessages([
        'credentials' => 'Wrong credentials',
      ]);
  }
    
    public function signout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.signin');
    }
}
