<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>post</title>
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
                <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Post show</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-sm btn-outline-light" href="">Home</a>
                    <i class="fas fa-angle-double-right text-light mx-2"></i>
                    <a class="btn btn-sm btn-outline-light disabled" href="">Detail Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Detail Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{substr($post->created_at,0,10)}}</a>
                    </div>
                 <div class="d-flex align-items-center justify-content-around">
                     <h1 class="section-title mb-3">{{$post->title}}</h1>
{{--                        @auth--}}
{{--                            @canany(['update','delete'],$post)--}}
                                 <div class="d-flex align-items-center">
                                     <a class="btn btn-primary" href="{{route('posts.edit',$post)}}">Edit</a>&nbsp;
                                     <form action="{{route('posts.destroy',$post)}}" method="post"
                                     onsubmit="return confirm('Rosdan ham o\'chirilsinmi')">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit" style="border: none" class="btn btn-danger">Delete</button>
                                     </form>
                                 </div>
{{--                         @endcanany--}}
{{--                        @endauth--}}
                 </div>
                </div>

                <div class="mb-5">
                    <img class=" mb-4 " width="700" height="400" src="{{\Illuminate\Support\Facades\Storage::url($post->photo)}} " alt="Image">
                    <p class="mb-4">{{$post->content}}</p>
                </div>

{{--               @auth--}}
{{--                    <div class="mb-5">--}}
{{--                        <h3 class="mb-4 section-title">{{$post->comment()->count()}} Comments</h3>--}}
{{--                        @foreach($comments as $comment)--}}
{{--                            <div class="media mb-4">--}}
{{--                                <img src="{{asset('main/img/user.jpg')}}" alt="Image" c     lass="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">--}}
{{--                                <div class="media-body">--}}
{{--                                    <h6>{{$comment->name}} <small> &nbsp;&nbsp; <i>{{substr($comment->created_at,0,10)}}</i></small></h6>--}}
{{--                                    <p>{{$comment->comment}}</p>--}}
{{--                                    <form action="{{route('reply.store',['comment_id' => $comment->id])}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <input type="text" name="reply" placeholder="reply">--}}
{{--                                        <button type="submit" class="btn btn-sm btn-light">Reply</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        <div class="media mb-5">--}}
{{--                            --}}{{--                        <img src="{{asset('main/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">--}}

{{--                            <div class="media-body">--}}
{{--                                --}}{{--                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>--}}
{{--                                --}}{{--                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum clita, at tempor amet ipsum diam tempor sit.</p>--}}
{{--                                --}}{{--                            <button class="btn btn-sm btn-light">Reply</button>--}}

{{--                                @foreach($replies as $reply)--}}
{{--                                    <div class="media mt-4">--}}
{{--                                        <img src="{{asset('main/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"--}}
{{--                                             style="width: 45px;">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h6>John Doe <small><i>{{substr($reply->created_at,0,10)}}</i></small></h6>--}}
{{--                                            <p>{{$reply->reply}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="bg-light rounded p-5">--}}
{{--                        <h3 class="mb-4 section-title">Comment</h3>--}}
{{--                        <form action="{{route('comment.store',['post_id' => $post->id])}}" method="post">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="message">Message *</label>--}}
{{--                                <textarea name="comment" id="message" cols="30" rows="5" class="form-control"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mb-0">--}}
{{--                                <input type="submit" value="Comment" class="btn btn-primary">--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                    </div>--}}
{{--               @endauth--}}
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                    <img src="{{asset('main/img/user.jpg')}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-white mb-3">
                        @auth
                            {{auth()->user()->name}}
                        @else
                            John Doe
                        @endauth

                    </h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                        ipsum
                        ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>
                <div class="mb-5">
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control" style="padding: 25px;" placeholder="Keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Categories</h3>
                    <ul class="list-inline m-0">

{{--                     @foreach($categories as $category)--}}
{{--                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">--}}
{{--                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>{{substr($category->category,0,20)}}</a>--}}
{{--                                <span class="badge badge-primary badge-pill">150</span>--}}
{{--                            </li>--}}
{{--                     @endforeach--}}

                    </ul>
                </div>
                <div class="mb-5">
                    <img src="{{asset('main/img/blog-1.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Recent Post</h3>
{{--                    @foreach($recent_post as $recent_posts)--}}
{{--                        <div class="d-flex align-items-center border-bottom mb-3 pb-3">--}}
{{--                            <img class="img-fluid rounded" src="{{asset('main/img/blog-1.jpg')}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">--}}
{{--                            <div class="d-flex flex-column pl-3">--}}
{{--                                <a class="text-dark mb-2" href="">{{$recent_posts->title}}</a>--}}
{{--                                <div class="d-flex">--}}
{{--                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>--}}
{{--                                    <small class="text-primary px-2">|</small>--}}
{{--                                    <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}


                </div>
                <div class="mb-5">
                    <img src="{{asset('main/img/blog-2.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-secondary m-1">Design</a>
                        <a href="" class="btn btn-outline-secondary m-1">Development</a>
                        <a href="" class="btn btn-outline-secondary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-secondary m-1">SEO</a>
                        <a href="" class="btn btn-outline-secondary m-1">Writing</a>
                        <a href="" class="btn btn-outline-secondary m-1">Consulting</a>
                    </div>
                </div>
                <div class="mb-5">
                    <img src="{{asset('main/img/blog-3.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div>
                    <h3 class="mb-4 section-title">Plain Text</h3>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no
                    consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos
                    tempor
                    rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->


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
