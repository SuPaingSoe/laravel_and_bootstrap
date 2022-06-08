<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Mail\usermail;
use App\Mail\infomail;
use Illuminate\Validation\Rule;
use App\Models\Mailcontent;
use App\Models\Infomailcontent;
use Illuminate\Support\Facades\Mail;
use Crypt;

class UserController extends Controller
{
    public function index()
    {
        return view('user.registeruser');
    }

    public function show()
    {
        return view('admin.adminuserlist', [
            'users'=>User::paginate(5)]);
    }

    public function edit(User $user)
    {
        return view('admin.edituser', [
            'user'=>$user
        ]);
    }

    public function store()
    {
        // dd(request()->all());
        $formData=request()->validate([
            'name'=>['required','max:255','min:3'],
            // 'username'=>['required','max:255','min:3',Rule::unique('users', 'user_name')],
            'username'=>['required','max:255','min:3'],
            'email'=>['required',Rule::unique('users', 'email')],
            'password'=>['required','min:4']
        ], [
            'name.required'=>'Name need to enter',
            'username.required'=>'User name need to enter',
            'email.required'=>'Email address need to enter',
            'password.required'=>'Password Id need to enter'
        ]);
        $formData['user_name']= request()->username;
        $formData['is_admin']= '0';

        if (is_null(request()->file('thumbnail'))) {
            $formData['user_photo']='thumbnails/InnLEDKGpzDnqMxEKuFzCiNi1AgxbLKbE73rB8Lb.jpg';
        } else {
            $formData['user_photo']= request()->file('thumbnail')->store('thumbnails');
        }

        $user=User::create($formData);

        if ($user->id != auth()->id()) {
            Mail::to($user->email)->send(new usermail($user));
        }
      
     
        return redirect('/post_login');
    }

    public function update(User $user)
    {
        // $formData=request()->validate([
        //     'name'=>['required','max:255','min:3'],
        //     // 'username'=>['required','max:255','min:3',Rule::unique('users', 'user_name')],
        //     'username'=>['required','max:255','min:3'],
        //     'email'=>['required',Rule::unique('users', 'email')]
        //     // 'password'=>['required','min:4']
        // ], [
        //     'name.required'=>'Need your name.',
        //     'username.required'=>'Need your user name.',
        //     'email.required'=>'Need your email address.'
        // ]);


        $formData['name']= request()->name;
        $formData['user_name']= request()->username;
        $formData['email']= request()->emailaddress;

        if (is_null(request('password'))) {
            $formData['password']= $user->password;
        } else {
            $formData['password']= request()->password;
            $password=request('password');
        }

        if (is_null(request()->file('thumbnail'))) {
            $formData['user_photo']=$user->user_photo;
        } else {
            $formData['user_photo']=request()->file('thumbnail')->store('thumbnails');
        }
        // dd($formData);
        $user->update($formData);
        // if ($user->id != auth()->id()) {
        //     $mailcontent=new Mailcontent();
        //     $mailcontent->name=$user->name;
        //     $mailcontent->password=$password;

        //     Mail::to($user->email)->send(new usermail($mailcontent));
        // }
        return redirect('/post_login');
    }

    public function changestatusforsoftdelete(User $user)
    {
        $user = User::find($user->id);
        $user-> user_status = '1';

        $user->save();
        return redirect('/post_login');
    }
}
