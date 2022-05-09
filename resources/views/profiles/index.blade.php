@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <img class="rounded-circle" width="200px" height="200px" src="/storage/{{ $user->profile->image }}" >

        {{-- <img class="rounded-circle" width="200px" height="200px" src="{{ asset('images/park-6688951_640.jpg') }}" alt=""> --}}
    </div>
    <div class="col-lg-9">

<h4>{{ $user->username }}
    @cannot('update',$user->profile)
    <a class="p-1 text-light  bg-@if($follows){{ 'success' }}@else{{ 'primary' }}@endif  fw-lighter " style="text-decoration: none;font-size: 14px;border-radius: 5px;margin-left: 20px" href="/follow/{{ $user->id }}">
    @if($follows)
    {{ 'unfollow' }}
    @else
    {{ 'follow' }}
    @endif
  
    </a>
    @endcannot
    @can('update',$user->profile)
    <a class="p-1 text-primary fs-8  fw-lighter " style="float: right; text-decoration: none" href="/p/create">add new post</a>
    @endcan
</h4>
      <ul class="list-unstyled list-inline fw-bold" >
          <li class="list-inline-item me-3">{{ $user->posts->count();  }} posts</li>
          <li  class="list-inline-item me-3">{{ $user->profile->follwers->count() }} followers</li>
          <li  class="list-inline-item me-3"> {{ $user->follwing->count() }} follwing</li>
      </ul>
      <h6 class="fst-italic">{{ $user->profile->title }}</h6>
      <p style="width: 40%">{{ $user->profile->description }} </p>
      <h6 class="fst-italic m-0"><a href="#">{{ $user->profile->url }}</a></h6>
 @can('update',$user->profile)
 <h6 class="fst-italic mt-3 "><a class="text-light bg-info p-1" href="/profile/{{ $user->id }}/edit">editprofile</a></h6>
 @endcan
     </div>

</div>
<div class="row mt-3 p-2">

@foreach ($user->posts as $post )
<div class="col-lg-4 mt-2">
   <a href="/p/{{ $post->id }}"> <img src="/storage/{{ $post->image }}" width="100%" height="100%" alt=""></a>
</div>
@endforeach


</div>

</div>
@endsection
