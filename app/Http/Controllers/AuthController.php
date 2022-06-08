<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store()
    {
        $formData=request()->validate([
            'name'=>'required|max:255|min:3',
            'username'=>['required','max:255','min:3',Rule::unique('users', 'username')],
            'email'=>'required',Rule::unique('users', 'email'),
            'password'=>'required|min:4'
        ], [
            'name.required'=>'Name should be',
            'username.required'=>'User name should be',
            'email.required'=>'Email need to enter',
            'password.required'=>'Password need to enter',
        ]);

        $user=User::create($formData);
        auth()->login($user);
        return redirect('/');
    }

    public function post_login()
    {
        $formData=request()->validate([
            'email'=>['required', 'email', 'max:255', Rule::exists('users', 'email')],
            'password'=>['required', 'min:4', 'max:255']
        ], [
            'email.required'=>'Email need to enter',
            'password.required'=>'Password need to enter',
        ]);

        if (auth()->attempt($formData)) {
            if (auth()->user()->user_status=='1') {
                auth()->logout();
                return redirect('/')->with('Failed.', 'You cannot access the system.');
            } else {
                return redirect('/post_login');
            }
        } else {
            return redirect('not success');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'good bye');
    }
}
