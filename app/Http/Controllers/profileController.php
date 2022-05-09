<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index($user){
     $user = User::findOrfail($user);
 $follows = auth()->user() ? auth()->user()->follwing->contains($user->profile) :false;
        return view('profiles.index'  , ['user'=>$user , 'follows'=>$follows]);

    }

   public function edit(User $user){
       $this->authorize('update',$user->profile);
       return view('profiles.edit', ['profile'=>$user->profile]);
   }
   public function update(profile $profile){
//   return request()->all();
request()->validate([
    'title'=>'required|min:8',
    'description'=>'required|min:10',
    'image'=>'required|image',
]);
$data=request()->all();
// return $data;
unset($data['_token']);
$imagePath = request('image')->store('uploads','public');
$data['image']=$imagePath;
   auth()->user()->profile()->update($data);
   return view('profiles.index'  , ['user'=>auth()->user() ]);

   }
}
