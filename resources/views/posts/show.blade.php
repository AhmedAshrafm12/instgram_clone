
    @extends('layouts.app')

    @section('content')
    <div class="container">
   <div class="row">
       <div class="col-8">
    <img src="/storage/{{ $post->image }}" width="100%" height="100%" alt="">
       </div>
    <div class="col-lg-4">
        <h3>{{ $post->user->username }}</h3>
        {{ $post->caption }}
    </div>
    
    </div>
   </div>
    @endsection
    

