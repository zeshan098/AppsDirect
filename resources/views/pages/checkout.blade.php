@extends('layouts.default')
@section('content')
<div class="container-fluid order-ord">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="ord-h1 py-4">Order Now</h1>
                </center>
            </div>
        </div>
        <div class="row no-gutter">
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/customer_support.png')}}" class="img-circle im-ord" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">7 days a week skype support</h1>
            </div>
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/dedicated_manager.png')}}" class="img-circle im-ord" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">Dedicated manager for your Project</h1>
            </div>
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/hqp.png')}}" class="img-circle im-ord1" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">Highest quality responsive</h1>
            </div>
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/all_devic_browser.png')}}" class="img-circle im-ord1" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">All Devices and Browsers Compatibility</h1>
            </div>


        </div>
        <div class="row no-gutter mt-4">
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/fast_turn.png')}}" class="img-circle im-ord" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">Fast turnaround time</h1>
            </div>
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/NDA.png')}}" class="img-circle im-ord1" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">NDA agreement</h1>
            </div>
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/30_day_gurentee.png')}}" class="img-circle im-ord" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">30 days of guarantee</h1>
            </div>
            <div class="col-md-1 col-sm-2 col-2 ss">
                <img src="{{URL::asset('images/SEO_Samentic.png')}}" class="img-circle im-ord1" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-4">
                <h1 class="ordorh1 mt-3">SEO Sementic coding</h1>
            </div>


        </div>
    </div>
</div>
<!-- order -->

<!-- row -->
<div class="container py-5" style="height: auto;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="frm-ordh1">You are just one step away from placing your order</h1>
        </div>
    </div>
</div>

<!-- row -->

<!-- Form -->
<div class="container form-ord pb-5">
    <div class="row">
        <div class="col-md-7 shadow col-sm-12" style="border: 2px solid #f9f9f9;">
            <div class="row px-5">
                <div class="col-md-12 col-sm-12">
                    <h1 class="frm-ordh1 pt-4">1.Your Details <span class=" pull-right"><a class="ad-dib" href="">Edit details</a></span></h1>

                    <p class="ml-2 mt-3 ne-por">Your Name</p>
                    <p class="ml-3 ne-poh1">Hussnain</p>

                    <p class="ml-2 mt-3 ne-por">Email</p>
                    <p class="ml-3 ne-poh1">Hussnain@mail.com</p>

                    <p class="ml-2 mt-3 ne-por">Project title</p>
                    <p class="ml-3 ne-poh1">AppDirect</p>

                    <p class="ml-2 mt-3 ne-por">Number of Pages</p>
                    <p class="ml-3 ne-poh1">5 pages</p>

                    <p class="ml-2 mt-3 ne-por">Upload files</p>
                    <p class="ml-3 ne-poh1">1.file.psd</p>

                    <p class="ml-2 mt-3 ne-por">Webdesign</p>
                    <p class="ml-3 ne-poh1">5 pages</p>

                    <p class="ml-2 mt-3 ne-por">Notes</p>
                    <p class="ml-3 ne-poh1">Lorem ipsum dolor sit amet, consectetur.</p>

                    <a class="ad-dib pull-right" href="">Edit details</a>
                    <h1 class="frm-ordh1 pt-4">2.Select Package </h1>
                    <div class="py-2 wp-webd-1 pl-3 pt-2">
                        <input type="radio" checked><i class="fa fa-wordpress pl-2 " style="color: #00769d;font-size: 22px;"></i>
                        <b class="dobv1">Wordpress website
                            <span class="float-right mr-auto d-block pr-2 " style="font-size: 16px;">€ 250</span>
                        </b>

                    </div>

                    <a class="ad-dib pull-right" href="">Edit details</a>
                    <h1 class="frm-ordh1 pt-4">3.Select additional options</h1>
                    <div class="card" style=" width: 83%;">
                        <div class="card-header bg-white">
                            <div class="float-right">
                                <a href="#mycard-collapse" data-toggle="collapse" class="btn btn-icon"><img src="{{URL::asset('images/plus.png')}}" /></a>
                            </div>
                            <img src="{{URL::asset('images/button.png')}}" class="img-fluid mr-3" style="height: 30px;width: 30px;" alt="">
                            <div class="tabs">Html Layouts options</div>
                        </div>
                        <div class="collapse " id="mycard-collapse">
                            <div class="card-body">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card" style=" width: 83%;">
                        <div class="card-header bg-white">
                            <div class="float-right">
                                <a href="#mycard-collapse1" data-toggle="collapse" class="btn btn-icon"><img src="{{URL::asset('images/plus.png')}}" /></a>
                            </div>
                            <img src="{{URL::asset('images/mobile.png')}}" class="img-fluid mr-3" style="height: 30px;width: 21px;" alt="">

                            <div class="tabs">Browser Device/compatibility options</div>
                        </div>
                        <div class="collapse " id="mycard-collapse1">
                            <div class="card-body">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card" style=" width: 83%;">
                        <div class="card-header bg-white">
                            <div class="float-right">
                                <a href="#mycard-collapse2" data-toggle="collapse" class="btn btn-icon"><img src="{{URL::asset('images/plus.png')}}" /></a>
                            </div>
                            <img src="{{URL::asset('images/xhtml.png')}}" class="img-fluid mr-3" style="height: 30px;width: 30px;" alt="">
                            <div class="tabs">HTML/XHTML Advanced Options</div>
                        </div>
                        <div class="collapse " id="mycard-collapse2">
                            <div class="card-body">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                    <hr>



                    <h1 class="frm-ordh1 pt-4">4.Maintainance & Hosting</h1>
                    <p class="ml-2 mt-3 ne-por">Monthly maintainance</p>
                    <p class="ml-4 mt-3 ne-por">option1 <span class="pull-right">$28</span></p>
                    <p class="ml-2 mt-3 ne-por">Hosting of website/webshop</p>
                    <p class="ml-4 mt-3 ne-por">option1 <span class="pull-right">$28</span></p>
                    <hr>
                    <p class="ml-3 ne-poh1 text-center mt-3">Total <span class="pull-right">$850</span></p>

                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4  col-sm-12 shadow div2-smkj" style="border: 2px solid #f9f9f9;height: 570px;">
            <div class="row px-3">
                <div class="col-md-12">
                    <h1 class="h1-ordc2 pt-4"><img src="{{URL::asset('images/payment.png')}}" class="" alt=""><span class="ml-3 order_sum">Payment details</span></h1>
                    <p class="p1-ordc2 pt-2">Please select your card type for a direct payment method or choose your paypall account</p>
                    <p class="p1-ordc2 text-dark">Have a coupan</p>
                    <input class="py-2 inp-ord " style="width: 50%;" type="text">
                    <button class="py-2 bt-pymt"> Recalculate</button>
                    <hr>
                    <p class="p1-ordc2 text-dark">pay by Paypal</p>
                    <div><input type="radio" name="name"><img src="{{URL::asset('images/paypal.png')}}" class="" alt="" style="padding: 0 0 0 12px;"></div>
                    <hr>
                    <p class="p1-ordc2 text-dark">pay by Paypal</p>
                    <div><input type="radio" name="name"><img src="{{URL::asset('images/visaa.png')}}" class="" alt="" style="padding: 0 0 0 12px;"></div>
                    <hr class="py-2">

                    <h1 class="h2-ordc2">Total <span class="pull-right">$850</span></h1>

                    <button class="px-4 py-2 div-row23 btn-block text-white mt-4">Pay Now <i class="fa fa-angle-right ml-3"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop