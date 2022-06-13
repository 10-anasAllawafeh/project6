@extends('layouts/master')

@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
</div>
     <!-- Page Header Start -->
     <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Courses Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Our Volunteer campaigns</h1>
            </div>
            <div class="row g-4 justify-content-center">
            @foreach ($data as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-light overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">{{$item['city']}}</div>
                            <h5 class="mb-3">{{$item['title']}}</h5>
                            <p>{{$item['excerpt']}}</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>from {{$item['start_time']}}</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>To {{$item['end_time']}}</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/{{$item['image']}}" alt="service image">
                            {{-- @if (route('login')) --}}
                            <div class="hidden courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="/volunteer/{{$item['id']}}">Volunteer</a> 
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection