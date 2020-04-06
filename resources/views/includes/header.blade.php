@php
    $routeName = Route::currentRouteName();
@endphp
<div class="container-fluid {{ $routeName == 'home' ? 'hero ' : ''}} pb-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="{{ route('home') }}">AppsDirect</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav  mt-2 mt-lg-0 ml-auto mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fa fa-search"></i> Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-1" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-1" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-1" href="#">Contact</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <a class="text-white mr-3 anchor" href="#">Login</a>
                    <a class="btn  my-2 my-sm-0 bt-nav" href="{{ route('order') }}">Order Now</a>
                </div>
            </div>
        </nav>
        @if($routeName == 'home')
        <div class="row mt-5">
            <div class="col-md-6">
                <h1 class="top-h1 mt-5">Strategic design and technology agency</h1>
                <p class="my-5" style="color: #818aa7;">Why I say old chap that is spiffing off his nut arse pear shaped plastered Jeffrey bodge barney some dodgy.!!</p>
                <a class="btn my-2 my-sm-0 bt-nav2 ">Get Start <i class="pr-1 fa fa-angle-right"></i> </a>
                <a class="btn my-2 my-sm-0  text-dark" href="#">Google Sign Up</a>
            </div>
            <div class="col-md-6 mt-3">
            </div>
        </div>
        @endif
    </div>
</div>