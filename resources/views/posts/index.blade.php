
    @extends('layouts.app')

    @section('content')
    <div class="container">
 @foreach ($posts as $post )
 <div class="row mb-3">
    <div class="col-8 offset-2">
 <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" width="80%" height="400px" alt=""></a>
 <p>{{ $post->caption }}</p>

    </div>

 
 </div>
     
 @endforeach
 <div class="row">
     {{ $posts->links(); }}
 </div>
   </div>
    @endsection
    

