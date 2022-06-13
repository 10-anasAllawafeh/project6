<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Land</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/4a27207296.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Fifth Area, Aqaba, Jordan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Sun -Thu  : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>077 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" target="_blank" href="https://www.facebook.com/nahnoJO/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" target="_blank" href="https://twitter.com/nahnojo"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" target="_blank" href="https://www.linkedin.com/company/nahno-%D9%85%D9%86%D8%B5%D8%A9-%D9%86%D8%AD%D9%86/?originalSubdomain=jo"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" target="_blank" href="https://www.instagram.com/nahnojo/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- <i class="fa fa-car text-primary me-2"></i> -->
 
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"> <i class="fas fa-tree text-primary me-2"></i> Green Land</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/services') }}" class="nav-item nav-link">Services</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            @if (Route::has('login'))
            @auth
            <div class="hidden fixed top-0 px-6 py-4 sm:block ">
                <a href="{{ url('/home') }}" class="nav-item nav-link"><i class="fa-solid fa-user text-primary mx-3 " style="font-size: 28px"></i></a>
            </div>
            @else
                {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{ route('login') }}" class="btn btn-primary pt-4 px-lg-5 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>

                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif --}}
            @endauth
    @endif
            {{-- <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a> --}}
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fas fa-tree text-white me-2"></i>Green Land</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Fifth Area, Aqaba, Jordan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>077 345 6789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Green_land@example.com</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ url('/about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('/contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ url('/services') }}">Our Services</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="{{url('/news')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address" name="subscribe">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" target="_blank" href="https://twitter.com/nahnojo"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" target="_blank" href="https://www.facebook.com/nahnoJO/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" target="_blank" href="https://www.instagram.com/nahnojo/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" target="_blank" href="https://www.linkedin.com/company/nahno-%D9%85%D9%86%D8%B5%D8%A9-%D9%86%D8%AD%D9%86/?originalSubdomain=jo"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 offset-5 ">
                    &copy; <a href="#">Green Land</a>, All Right Reserved.
                </div>
             
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>