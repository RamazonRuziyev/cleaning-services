<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Amaliyot</title>
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


<!-- Carousel Start -->
@include('main.carousel')
<!-- Carousel End -->


<!-- Contact Info Start -->
@include('main.contact')
<!-- Contact Info End -->


<!-- Video Modal Start -->
@include('main.video')
<!-- Video Modal End -->



<!-- Features Start -->
@include('main.features')
<!-- Features End -->


<!-- Portfolio Start -->
@include('main.portfolio')
<!-- Portfolio End -->
@yield('content')

<!-- Team Start -->
@include('main.team')
<!-- Team End -->


<!-- Testimonial Start -->
@include('main.testimonial')
<!-- Testimonial End -->




<!-- Footer Start -->
@include('main.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
