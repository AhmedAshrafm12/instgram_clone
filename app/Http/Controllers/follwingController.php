<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class follwingController extends Controller
{
    
public function __construct()
{
    $this->middleware('auth');
}
public function store(User $user){
    
     auth()->user()->follwing()->toggle($user->profile);
   return redirect()->back();
}

}
