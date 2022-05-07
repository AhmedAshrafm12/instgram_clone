<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index($user){
        $user = User::findOrfail($user);

        return view('home'  , ['user'=>$user]);

    }
}