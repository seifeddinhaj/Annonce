<?php

namespace App\Http\Controllers;
use APP\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
       $user= User::all();
    return view('admin/users',compact('user'));
    }
}
