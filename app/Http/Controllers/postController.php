<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{

    public function __construct()
    {
     $this->middleware('auth');
        
    }
    //
   public function index(){
    $users =  auth()->user()->follwing->pluck('user_id');
    $posts = post::whereIn('user_id',$users)->with('user')->latest()->paginate(5);
    return view('posts.index',compact('posts'));
   
   }


    public function create(){
        return view('posts.create');
    }
    public function store(Request $req){
    $req->validate([
        'Caption'=>'required|min:15',
        'image'=>'required|image',
    ]);
    $data = $req->all();
   $imagePath = request('image')->store('uploads','public');
   
auth()->user()->posts()->create([
    'Caption'=>$data['Caption'],
    'image'=>$imagePath
]);
return redirect('profile/'.Auth::user()->id);
}

public function show(post $post){
return view('posts.show',compact('post'));
}

}
