<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //get
    public function getUsers()
    {
        return view('admin.users', [
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }  
}
