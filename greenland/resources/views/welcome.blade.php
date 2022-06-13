 @extends('layouts/master')
 @section('content')
 <div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
  </div>
            {{-- <!-- Carousel Start --> --}}
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="https://images.pexels.com/photos/4946727/pexels-photo-4946727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">The Earth is What We have in Common</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="https://images.pexels.com/photos/5231044/pexels-photo-5231044.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">The Earth is What We have in Common</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- <!-- Carousel End --> --}}


    {{-- <!-- Facts Start --> --}}
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i><i class="fa-solid fa-bullseye-arrow text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Mission  </h5>
                                <span>Contribute to preserving the environment.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Purpose </h5>
                                <span>Bring people and communities together through service.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Vision </h5>
                                <span>To give people the power and chance to  make the world a better  place to live in</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- Facts End --> --}}


    {{-- <!-- services Start --> --}}
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-dark text-uppercase mb-2">Our Services</h6>
                <h1 class="display-6 mb-4">Our services increase the life quality of humans</h1>
            </div>
            <div class="row g-4 justify-content-center">
                        @foreach ($data as $item)
                        @if($item['id'] < 3)
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
                                        <a class="btn btn-outline-primary border-2" href="/services">Read more</a> 
                                    </div>
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
            </div>
        </div>
    </div>
    {{-- <!-- services End --> --}}


    {{-- <!-- Testimonial Start --> --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="text-dark text-uppercase mb-2">Collaboration</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="https://s3-eu-west-1.amazonaws.com/static.jbcgroup.com/amd/pictures/83b2e76e13ce8ba901bb038da0cc4441_20091014big46974.jpeg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">With the aim of promoting the sustainable development of the country. The Fund seeks, in partnership with the public and private sectors, to implement projects and development hotspots, especially in areas suffering from poverty and unemployment.</p>
                            <hr class="w-25 mx-auto">
                            <h5>King Abdullah II Fund For Devolopemnt</h5>
                            
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="https://moa.gov.jo/EBV4.0/Root_Storage/AR/EB_News/187879174_2915452772107277_2334196643950703125_n-66.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Advance the institutional and individual capabilities of the Ministry and organize the agricultural sector in line with the national goals to contribute to achieving sustainable rural development.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Ministry Of Agriculture</h5>
                            
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="https://www.hala.jo/wp-content/uploads/2021/11/logo.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">His Royal Highness Crown Prince Al Hussein bin Abdullah II is committed to building a bright future for Jordan’s youth. The impact of the Crown Prince Foundation’s initiatives extends throughout the Kingdom’s governorates.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Crown Prince Foundation</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- Testimonial End --> --}}
    @endsection