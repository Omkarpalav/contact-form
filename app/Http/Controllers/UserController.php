<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUSer(Request $req){
        $req -> validate([
            'username' => 'required | min:3 | max:10',
            'email' => 'required | email',
            'city' => 'required ',
            'skills' => 'required'
        ]);
        return $req;
    }
}
