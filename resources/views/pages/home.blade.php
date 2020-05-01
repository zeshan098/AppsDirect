@extends('layouts.default')
@section('content')
<div class="container-fluid icon-sm py-5 ">
    <div class="row">
        <div class="col-md-6 ">
            <p class="pl-5" style="color: #818aa7;">
                <i class="fa fa-star pr-1"></i>Since 2012 &nbsp |
                &nbsp <i class="fa fa-star pr-1"></i>400+ Clients</p>
        </div>
        <div class="col-md-6  ">
            <p class="pl-5 pr-5 text-right">
                <a href="" class="text-40 pr-3"> <i class="fa fa-phone pr-2"></i>+95 152 000 000 </a>
                <a href="" class="text-40 pr-3"><i class="fa fa-skype"></i> </a>
                <a href="" class="text-40 pr-3"> <i class="fa fa-envelope"></i> </a>
            </p>
        </div>
    </div>
</div>
<!-- section icon -->
<!-- section services -->
<div class="container pb-5 sec-services">
    <div class="row">
        <div class="col-md-12 text-center">

            <h1 style=" font-weight: 600;">Our Services</h1>
            <p class="mt-2" style="color: #818aa7;font-size: 17px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3 col-sm-12 py-3 text-center">
            <div class="in-seric py-4 shadow">
                <img src="{{URL::asset('images/w.png')}}" class="img-fluid" alt="">
                <h1 class="mt-2 h1-ser">Wordpress Website</h1>
                <p style="color: #818aa7;font-size: 17px;">start from</p>
                <h1 class="mt-2 h5-ser">€ 250</h1>
                <p style="color: #818aa7;font-size: 15px;">5 working days</p>
                <button class="btn my-2 my-sm-0 bt-nav2 " onclick="location.href='/order'">Order Now &nbsp<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
        <div class="col-md-3 col-sm-12 py-3 text-center">

            <div class="in-seric py-4 shadow">
                <img src="{{URL::asset('images/s.png')}}" class="img-fluid" alt="">
                <h1 class="mt-2 h1-ser">Shopify webshop</h1>
                <p style="color: #818aa7;font-size: 17px;">start from</p>
                <h1 class="mt-2 h5-ser">€ 500</h1>
                <p style="color: #818aa7;font-size: 17px;">14 working days</p>
                <button class="btn my-2 my-sm-0 bt-nav2 " onclick="location.href='/order'">Order Now &nbsp<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
        <div class="col-md-3 col-sm-12 py-3 text-center">

            <div class="in-seric py-4 shadow">
                <img src="{{URL::asset('images/m.png')}}" class="img-fluid" alt="">
                <h1 class="mt-2 h1-ser">Magneto Webshop</h1>
                <p style="color: #818aa7;font-size: 17px;">start from</p>
                <h1 class="mt-2 h5-ser">€ 850</h1>
                <p style="color: #818aa7;font-size: 17px;">14 working days</p>
                <button class="btn my-2 my-sm-0 bt-nav2 " onclick="location.href='/order'">Order Now &nbsp<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
        <div class="col-md-3 col-sm-12 py-3 text-center">

            <div class="in-seric py-4 shadow">
                <img src="{{URL::asset('images/woo.png')}}" class="img-fluid" alt="" style="height: 71px;">
                <h1 class="mt-2 h1-ser">Woocommerce Webshop</h1>
                <p style="color: #818aa7;font-size: 17px;">start from</p>
                <h1 class="mt-3 h5-ser">€ 500</h1>
                <p style="color: #818aa7;font-size: 17px;">14 working days</p>
                <button class="btn my-2 my-sm-0 bt-nav2 " onclick="location.href='/order'">Order Now &nbsp<i class="fa fa-angle-right"></i></button>

            </div>

        </div>

    </div>
</div>
<!-- section services -->
<!-- section choose -->
<div class="container pb-5 my-5" id="wcu">
    <div class="row">
        <div class="col-md-12 text-center">

            <h1 class="pt-5">Why Choose Us</h1>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/customer_support.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">7 days a week skype support</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="col-md-1 offset-md-2 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/dedicated_manager.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">Dedicated Manager for you</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/NDA.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">NDA agreement</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="col-md-1 offset-md-2 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/SEO_Samentic.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">SEO Sementic coding</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/fast_turn.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">Fast turnaround time</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="col-md-1 offset-md-2 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/30_day_gurentee.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">30 days of guarantee</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1  col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/all_devic_browser.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">All devices and browsers</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur </p>
        </div>
        <div class="col-md-1 offset-md-2 col-sm-12">
            <img class=" mt-3" src="{{URL::asset('images/hqp.png')}}" style="height: 70px;width: 70px;border-radius: 35px;" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1 class="chooh1">Highest quality responsive</h1>
            <p class="choop1 text-justify mt-4" style="color: #818aa7;">Lorem ipsum dolor sit amet, consectetur </p>
        </div>

    </div>
</div>
<!-- section choose -->

<!-- section App -->
<div class="container-fluid pt-5 app-sec">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="p-4">
                <h1 class="mt-5 mb-4 pt-5 app-h1 text-white mt-5">Ready To Try AppDirect</h1>
                <a class="btn my-2 my-sm-0 bt-app4 " href="/order">Get Start <i class=" fa fa-angle-right pl-1" style="font-weight: 700;"></i> </a>
                <a class="btn my-2 my-sm-0 bt-app5 " href="/login">Login</a>
            </div>
        </div>
    </div>
</div>
<!-- section App -->
@stop