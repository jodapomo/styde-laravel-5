<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        


        $title = 'User List';

        // return view('users.index')
        //     ->with('users', User::all())
        //     ->with('title', $title);

        return view('users.index', compact('title', 'users'));
    }

    public function show( $id )
    {
        return view('users.show', compact('id'));
    }
    
    public function create()
    {
        return "Create new user";
    }
}
