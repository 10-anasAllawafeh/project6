@extends('layouts.app')

@if (\Session::has('filename'))
<div class="alert alert-danger">
    {{\Session::get('filename')}}
</div>
@endif

@section('content')
<section class="vh-100 bg-image"
  style="background-image: url('https://images.pexels.com/photos/1277181/pexels-photo-1277181.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-repeat: no-repeat; background-size:cover;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card " style="border-radius: 15px;">
                <div class=" offset-5 mt-3 text-dark" style="font-size: 30px">{{ __('Register') }}</div>

                <div class="card-body p-5" >
                    <form method="post" action="{{route('images.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="container row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Add image</label>
                            <div class="col-md-5 offset-1">
                            <input type="file" id="image" class="form-control" required name="image" value="{{ old('image') }}">
                        

                            <div class="col-md-2 offset-10">
                            <button type="submit" class="btn btn-success">Add</button>
                            </div>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 ">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label" for="form2Example3g">
                              I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                          </div>

                        <div class="d-flex justify-content-center">
                            
                                <button type="submit" class="btn btn-secondary btn-lg btn-block text-body" style=" width: 35vw; color:white !important; ">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>

                        <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="#!"
                            class="fw-bold text-body"><u>Login here</u></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</section>
@endsection
