
    @extends('layouts.app')

    @section('content')
    <div class="container">
   <div class="row">
       <div class="col-8">
    <img src="/storage/{{ $post->image }}" width="100%" height="100%" alt="">
       </div>
    <div class="col-lg-4">
    <img src="/storage/{{ $post->user->profile->image }}" width="80px" height="80px" class="rounded-circle" alt="">
        <h5><a class="text-dark" style="text-decoration: none" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a> <a href="#" class="fs-10">follow</a></h5>
        {{ $post->caption }}
    </div>
    
    </div>
   </div>
    @endsection
    

