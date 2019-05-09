<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\SignupRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\piccardMail;
use Illuminate\Support\Facades\Mail;





/**
 * Store the incoming blog post.
 *
 * @param  SignupRequest  $request
 * @return Response
 */

class UserController extends \Illuminate\Routing\Controller
{
    public $user;

    public function index() {
        return view("home");
    }


    public function sendEmail($user)

    {



    }

    use ValidatesRequests;

    public function store (SignupRequest $request)

    {

        $user = Auth::user();
        $id = Auth::id();

        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input( 'password')),
            'verifyToken' => Str::random(40),
        ]);

        $thisUser = User::findOrFail($user->id);
        Mail::to($user['email'])->send(new piccardMail($thisUser));


        return view ('emailVerification');


    }

    //Send Email To Verify User Account






    public function postSignin() {
        return view("home");
    }



}
