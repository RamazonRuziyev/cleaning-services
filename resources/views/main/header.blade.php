<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-3 text-primary">Klean</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-dark d-none d-lg-flex">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>info@example.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+012 345 6789</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary">Klean</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link active">Bosh sahifa</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">Biz haqimizda</a>
                        <a href="{{route('service')}}" class="nav-item nav-link">Xizmatlar</a>
                        <a href="" class="nav-item nav-link">Project</a>
                        <a href="{{route('posts.index')}}" class="nav-item nav-link">blog</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Aloqa</a>

                        </div>
                    </div>
                    @auth
                        <a class="mr-3 " href="">
                            <svg style="height: 25px ; width: 40px; color: black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                            <span class="badge badge-light">
{{--                                {{auth()->user()->notifications()->count()}}--}}
                            </span>
                        </a>
                        <div class="d-lg-block mr-3">
{{--                            {{auth()->user()->name}}--}}
                        </div>
                        <a href="{{route('posts.create')}}" class="btn btn-primary mr-3 d-none d-lg-block">post create</a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger mr-3 d-none d-lg-block">Chiqish</button>
                        </form>
                    @else
                        <a href="{{route('login')}}" class="btn btn-primary mr-3 d-none d-lg-block">kirish</a>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
</div>
