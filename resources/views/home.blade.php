@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <img class="rounded-circle" width="200px" height="200px" src="{{ asset('images/park-6688951_640.jpg') }}" alt="">
    </div>
    <div class="col-lg-9">
      <h4>{{ $user->username }} <a class="p-1 text-primary fs-8  fw-lighter " style="float: right; text-decoration: none" href="#">add new post</a></h4>
      <ul class="list-unstyled list-inline fw-bold" >
          <li class="list-inline-item me-3">posts</li>
          <li  class="list-inline-item me-3">followers</li>
          <li  class="list-inline-item me-3">follwing</li>
      </ul>
      <h6 class="fst-italic">{{ $user->profile->title }}</h6>
      <p style="width: 40%">{{ $user->profile->description }} </p>
      <h6 class="fst-italic m-0"><a href="#">{{ $user->profile->url }}</a></h6>

    </div>

</div>
<div class="row mt-3 p-2">
<div class="col-lg-4">
    <img src="{{ asset('images/calligraphy-7173006_1920.jpg') }}" width="100%" height="100%" alt="">
</div>
<div class="col-lg-4">
    <img src="{{ asset('images/skateboarding-6973365_1280.jpg') }}" width="100%" height="100%" alt="">
</div>
<div class="col-lg-4">
    <img src="{{ asset('images/venice-7169322_1280.jpg') }}" width="100%" height="100%" alt="">
</div>


</div>

</div>
@endsection
