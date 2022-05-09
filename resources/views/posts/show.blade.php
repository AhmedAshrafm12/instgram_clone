
    @extends('layouts.app')

    @section('content')
    <div class="container">
    <div class="row mb-3">
        <div class="col-8 offset-2">
           <h1 style="background: #c8c8c824;width: 80%;padding: 10px">
            <a href="/profile/{{ $post->user->id }}" class="text-dark" style="text-decoration: none">
            <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle" width="30px" height="30px" alt="">   
            <span style="font-size: 12px;">
                <strong>{{ $post->user->username }}</strong>  :  {{ $post->created_at }} </span>
            </a> </h1>         
        <a href="#"><img src="/storage/{{ $post->image }}" width="80%" height="400px" alt=""></a>
        <p class="p-2 fs-4">{{ $post->caption }}</p>
        
        </div>
        
        
        </div>
   </div>
    @endsection
    

