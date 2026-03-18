<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('main/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('main/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('main/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('main/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!-- Header Start -->
@include('main.header')
<!-- Header End -->


<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Blog</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-sm btn-outline-light" href="">Home</a>
                    <i class="fas fa-angle-double-right text-light mx-2"></i>
                    <a class="btn btn-sm btn-outline-light disabled" href="">Blog</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
     @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Error Message -->
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                <h1 class="section-title mb-3">Oxirgi postlar</h1>
            </div>

        </div>
        <div class="row">
        @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{\Illuminate\Support\Facades\Storage::url($post->photo)}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        @foreach($post->tags as $tag)
                            <a class="text-secondary text-uppercase font-weight-medium" href="">{{$tag->name}}</a>
                        <span class="text-primary px-2">|</span>
                        @endforeach
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-danger text-uppercase font-weight-medium" href="">{{$post->category->name}}</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">{{$post->title}}</h5>
                    <p class="mb-4">{{substr($post->short_content,0,80)}} ...</p>
                    <a class="btn btn-sm btn-primary py-2" href="{{route('posts.show',$post)}}">O'qish</a>
                </div>

        @endforeach


            <div class="col-12 d-flex align-items-center justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->



<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 mt-n3 display-4 text-primary">Klean</h1>
            </a>
            <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours:</h5>
            <p class="mb-1">Mon – Sat, 8AM – 5PM</p>
            <p class="mb-0">Sunday: Closed</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
            <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('main/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('main/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('main/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('main/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('main/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('main/lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('main/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('main/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('main/js/main.js')}}"></script>
</body>

</html>
