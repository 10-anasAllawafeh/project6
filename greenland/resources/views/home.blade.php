@extends('layouts.app')

@section('content')
<div class=" mt-3 text-dark px-3" style="font-size: 30px">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<section class="vh-100" style="background-color: #f4f5f7;">
<div class="container h-100">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
                <div class=" offset-5 mt-3 text-dark" style="font-size: 30px">{{ __('User Profile') }}</div>
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .9rem; border-bottom-left-radius: .9rem;">
              <img src="{{ Auth::user()->avatar }}"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>{{ Auth::user()->name }}</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <form action="{{url('/edituser/'.Auth::user()->id)}}" method="post">
                  <div class="row pt-1">
                    <div class="col-8 mx-3 mb-3">
                      <h6>User name</h6>
                      <input type="text" name="" id="" class="form-control form-control-lg rounded" value="{{ Auth::user()->name }}" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mx-3 mb-3">
                      <h6>Email</h6>
                      <input type="email" name="" id="" class="form-control form-control-lg rounded" value="{{ Auth::user()->email }}" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mx-3 mb-3">
                      <h6>phone</h6>
                      <input type="number" name="" id="" class="form-control form-control-lg " value="{{ Auth::user()->phone }}" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mx-3 mb-3">
                      <h6>city</h6>
                      <input type="text" name="" id="" class="form-control form-control-lg " value="{{ Auth::user()->city }}" style="border-radius:5px !important ">
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-4  mb-3 offset-5" >
                      <button type="submit" class="btn btn-warning lg">Edit Data</button>
                    </div>
                  </div>
                </form>

                  <h6>Services</h6>
                  <hr class="mt-0 mb-4">                
                </div>
              </div>
            </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
