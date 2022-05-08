
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-2">
                    <div class="card-header">
                        <h2 class="text-center">Add new posts</h2 class="text-center">
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="/p"  method="POST" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="Caption" class="col-md-4 col-form-label text-md-end">Caption</label>
    
                                <div class="col-md-6">
                                    <input id="Caption" type="text" class="form-control @error('Caption') is-invalid @enderror" name="Caption" value="{{ old('Caption') }}" required autocomplete="Caption" autofocus>
    
                                    @error('Caption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">upload image</label>
    
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
    
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
              
    
  
    
                
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        add new post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    

