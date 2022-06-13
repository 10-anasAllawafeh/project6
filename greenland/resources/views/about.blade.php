{{-- @extends('layouts/master')

@section('content')
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100"
                            src="https://images.pexels.com/photos/96715/pexels-photo-96715.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                            src="https://images.pexels.com/photos/1301856/pexels-photo-1301856.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">We Help The Youth To Make Their Environment A Better Place</h1>
                        <p>Through our technology people build meaningful connections, do good things, and feel
                            healthier and happier as a result. We know people want to do things that improve how they
                            feel but don’t always know where to go or what to do</p>
                        <p class="mb-4">So we’ve created a platform - to help them do things with purpose, and to help
                            people discover their purpose - enabling a kinder world where social wellbeing is a priority
                            for all.</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Meet The Team</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/anas-al-lawafeh-b05954232/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/10-anasAllawafeh"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Anas Allawafeh</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.facebook.com/Dua.alsafasfeh"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/du-a-alsafasfeh-70a9a7147/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/Dua-Alsafasfeh"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Dua Alsafasfeh</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://web.facebook.com/gril.genration/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/marwa-nseerat-971057227/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/marwanseerat"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Marwa Nseerat</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-0 team-items justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/aya-alsawa-26bb74232/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/11-ayaalsawa"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Aya Al-sawa</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.facebook.com/profile.php?id=100007055973576"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/taebah-shlouh-2b2401146/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/taebah-alshlouh"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Taebah shlouh</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- Team End -->
@endsection --}}
@extends('layouts/master')

@section('content')
    

    {{-- <!-- Page Header Start --> --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- <!-- Page Header End --> --}}


    {{-- <!-- About Start --> --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100"
                            src="https://images.pexels.com/photos/96715/pexels-photo-96715.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                            src="https://images.pexels.com/photos/1301856/pexels-photo-1301856.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">We Help The Youth To Make Their Environment A Better Place</h1>
                        <p>Through our technology people build meaningful connections, do good things, and feel
                            healthier and happier as a result. We know people want to do things that improve how they
                            feel but don’t always know where to go or what to do</p>
                        <p class="mb-4">So we’ve created a platform - to help them do things with purpose, and to help
                            people discover their purpose - enabling a kinder world where social wellbeing is a priority
                            for all.</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- About End --> --}}


    {{-- <!-- Team Start --> --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Meet The Team</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/anas.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/anas-al-lawafeh-b05954232/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/10-anasAllawafeh"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Anas Allawafeh</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/dua.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.facebook.com/Dua.alsafasfeh"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/du-a-alsafasfeh-70a9a7147/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/Dua-Alsafasfeh"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Dua Alsafasfeh</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/marwa.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://web.facebook.com/gril.genration/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/marwa-nseerat-971057227/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/marwanseerat"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Marwa Nseerat</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-0 team-items justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/aya.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/aya-alsawa-26bb74232/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/11-ayaalsawa"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Aya Al-sawa</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/taebah.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.facebook.com/profile.php?id=100007055973576"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.linkedin.com/in/taebah-shlouh-2b2401146/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://github.com/taebah-alshlouh"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Taebah shlouh</h5>
                            <span>Web Devloper</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    {{-- <!-- Team End --> --}}
@endsection