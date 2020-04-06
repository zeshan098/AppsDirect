@extends('layouts.default')
@section('content')
<!-- order -->
<div class="container-fluid order-ord">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <h1 class="ord-h1 py-4">Order Now</h1>

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

<div class="container py-5" style="height: auto;">
    <div class="row">
        <div class="col-12">
            <nav class="nav nav-pills">
                <a href="#" class="nav-item nav-link active">1.your Details</a>
                <a href="#" class="nav-item nav-link">2.Select Package</a>
                <a href="#" class="nav-item nav-link">3.Select Additional options</a>
                <a href="#" class="nav-item nav-link ">4.Maintainance & hosting</a>
                <a href="#" class="nav-item nav-link ">5.Review Order</a>
                <a href="#" class="nav-item nav-link ">6.Pay & Place Order</a>
            </nav>
        </div>
    </div>
</div>
<!-- row -->

<!-- Form -->
<div class="container form-ord pb-5">
    <div class="row">
        <div class="col-md-7 shadow  col-sm-12" style="border: 2px solid #f9f9f9;">
            <div class="row px-5 ll">
                <div class="col-md-12">
                    <h1 class="frm-ordh1 pt-4">1.Your Details</h1>
                    <form action="">
                        <label class="mt-3 ord-lbl" for="">Your name</label>
                        <input class="form-control py-2 inp-ord" type="text">
                        <label class="mt-3 ord-lbl" for="">Email</label>
                        <input class="inp-ord py-2 form-control" type="text" placeholder="example@mail.com">
                        <label class="mt-3 ord-lbl" for="">Project title</label>
                        <input class="inp-ord py-2 form-control" type="text" placeholder="project title here">
                        <label class="mt-3 ord-lbl" for="">Number of inner pages</label>
                        <select name="" id="" class="form-control sel-ord">
                            <option value="">4</option>
                            <option value="">3</option>
                            <option value="">2</option>
                        </select>

                        <p class="ord-rwp1 mt-3">total pages are home pages + 4</p>
                        <div class="uplod-rw py-2">
                            <input type="file" id="imgupload" style="display: none">
                            <h1 class="text-center upl-h21 p-1" onclick="$('#imgupload').trigger('click'); return false;">
                                Click Here to upload Project File <i class="fa fa-plus fa-lg pl-4 "></i></h1>
                        </div>
                        <p class="ord-rwp1 mt-1">you can drag the files here</p>
                        <p class="ord-rwp2 mt-1">if you dont have your own design we can create it for</p>
                        <h1 class="ord-sph1"><input type="checkbox" class=" checkbox"> Order A Webdesign <span class="ord-rwp1">(5 pages)</span>
                            <span class="pull-right" style="font-weight: 600;">$250</span></h1>
                        <label class="mt-3 ord-lbl" for="">Notes</label>
                        <input class="inp-ord py-2 form-control" type="text">
                    </form>
                    <h1 class="frm-ordh1 pt-4">2.Select Package</h1>
                    <div class="py-2 wp-webd pl-3 pt-2 "><label class="rad">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label><i class="fa fa-wordpress pl-2 " style=""></i>
                        <b class="dobv1">Wordpress website
                            <span class="float-right mr-auto d-block pr-2 ">€ 250</span>
                        </b>

                    </div>
                    <p class="frm-p23 pl-4 pt-4">Installation service &nbsp<span style="color: black;font-size: 15px;font-weight: 600;">3 working days</span></p>
                    <p class="frm-p23 pl-4 ">4 to 7 days turnaround</p>
                    <p class="bp-r2 px-3"><span style="color: black;font-size: 14px;font-weight: 400;">Responsive wordpress package</span> include conversion of your psd file into the fully functional Wordpress theme compatible across all major browsers and devices, easily manageable through dashboard with integrated post and pages, user-friendly widget ready Structure, Optimized for SEO & Load Speed with latest browser versions compatibility including IE9+, Firefox, Opera, Google Chrome and Safari (Windows & Mac). Minimum turnaround time 3-4 days depending on complexity of layout.Customizing the available wordpress plugins as per your design.
                        It also includes features like Custom Post Type Integration, Wp-ecommerce, WooCommerce implementations, etc. This package will improve page readability for search engines as well as various browsers with disabled or limited CSS.<br>
                        <span style="color: black;font-size: 14px;font-weight: 400;"> (HTML5 and installation on live server along with Twitter Bootstrap, Sass, Foundation and Boiler plate framework also available under additional options)</span>
                    </p>
                    <p class="px-3" style="color: black;font-size: 14px;font-weight: 400;">The cost for per additional (Inner) page for Wordpress is +$119.</p>
                    <p class="px-3" style="color: black;font-size: 14px;font-weight: 400;">File supported: Sketch, XD, Figma, InVision, Zeplin, Muse, PSD, AI, PNG, INDD, EPS , JPG, PDF or TIFF</p>

                    <div class="py-2 wp-webd pt-2 pl-3 mt-5">
                        <label class="rad">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label>
                        <img src="{{URL::asset('images/shopify.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                        <b class="dobv1">Shopify Webshop
                            <span class="float-right mr-auto d-block pr-2 ">€ 500</span>
                        </b>

                        </span>
                    </div>

                    <div class="py-2 wp-webd pt-2 pl-3 mt-1">
                        <label class="rad">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label>
                        <img src="{{URL::asset('images/megento.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                        <b class="dobv1">Magneto Webshop
                            <span class="float-right mr-auto d-block pr-2 ">€ 800</span>
                        </b>

                        </span>
                    </div>
                    <div class="py-2 wp-webd pt-2 pl-3 mt-1">
                        <label class="rad">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label>
                        <img src="{{URL::asset('images/wooo.png')}}" class="img-fluid ml-1" style="height: 30px;width: 45px; margin: 7px 15px 13px 26px;" alt="">
                        <b class="dobv1">Woocommerce Webshop
                            <span class="float-right mr-auto d-block pr-2 ">€ 500</span>
                        </b>
                    </div>

                    <h1 class="frm-ordh1 pt-4">3.Select additional options</h1>
                    <div class="card">
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
                    <div class="card">
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
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="float-right">
                                <a href="#mycard-collapse2" data-toggle="collapse" class="btn btn-icon"><img src="{{URL::asset('images/plus.png')}}" /></a>
                            </div>
                            <img src="{{URL::asset('images/xhtml.png')}}" class="img-fluid mr-3" style="height: 30px;width: 30px;" alt="">
                            <div class="tabs">HTML/XHTML Advanced Options</div>
                        </div>
                        <div class="collapse " id="mycard-collapse2">
                            <div class="card-body">
                                <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Page speed optimization <span class="float-right">$28</span></p>

                                <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">TypeKit/google font/@font-face implementation</p>

                                <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                        <input type="radio" name="rad1" value="a">
                                        <i></i>No</label> <span class="float-right">$28</span></p>
                                <p class="px-5 mt-3 pd-lp1"><label class="blue"><input type="radio" name="rad1" value="a">
                                        <i></i>Typekit </label> <span class="float-right">$28</span></p>
                                <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                        <input type="radio" name="rad1" value="a">
                                        <i></i>google font</label> <span class="float-right">$28</span></p>
                                <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                        <input type="radio" name="rad1" value="a">
                                        <i></i>face font</label> <span class="float-right">$28</span></p>
                                <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                        <input type="radio" name="rad1" value="a">
                                        <i></i> Retina display compatability</label> <span class="float-right">$28</span></p>


                            </div>
                        </div>
                    </div>
                    <hr>
                    <h1 class="frm-ordh1 pt-4">4.Maintainance & Hosting</h1>
                    <p class="px-5 mt-3 pd-lp2">Monthly Maintainance</p>

                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label> Option 1 <span class="float-right">$28</span></p>
                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label> Option 2 <span class="float-right">$28</span></p>
                    <p class="px-5 mt-3 pd-lp2">Hosting of website/webshop</p>

                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label> Option 1 <span class="float-right">$28</span></p>
                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                            <input type="radio" name="rad1" value="a">
                            <i></i></label> Option 2 <span class="float-right">$28</span></p>


                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4  col-sm-12 shadow div2-smkj" style="border: 2px solid #f9f9f9;height: 605px;">
            <div class="row px-3">
                <div class="col-md-12">
                    <h1 class="h1-ordc2 pt-4"><img src="{{URL::asset('images/order.png')}}" /><span class="ml-3 order_sum">Order Summery</span></h1>
                    <p class="p1-ordc2 pt-2">Selected package</p>
                    <h1 class="h2-ordc2">Wordpress website <span class="pull-right">€ 250</span></h1>
                    <h1 class="h2-ordc2">Webdesing<span class="pull-right">€ 250</span></h1>

                    <p class="p1-ordc2 pt-2">No. of pages</p>
                    <h1 class="h2-ordc2">5 pages <span class="p1-ordc13">(including homepage)</span> <span class="pull-right">€ 250</span></h1>

                    <p class="p1-ordc2 pt-2">Additional options</p>
                    <h1 class="h2-ordc2">HTML Layouts <span class="pull-right">€ 50</span></h1>
                    <h1 class="h2-ordc2">Browser device/compatibility<span class="pull-right">€ 50</span></h1>


                    <p class="p1-ordc2 pt-2">Maintainance & Hosting</p>
                    <h1 class="h2-ordc2">Monthly Maintainance <span class="pull-right">€ 50</span></h1>
                    <h1 class="h2-ordc2">Hosting of website/webshop<span class="pull-right">€ 50</span></h1>

                    <hr class="py-2">

                    <h1 class="h2-ordc2">Total <span class="pull-right" style="font-weight:600; font-size:26px;">€850</span></h1>

                    <a href="{{ route('checkout') }}"><button style="cursor: pointer;" class="px-4 py-2 div-row23 btn-block text-white mt-4">Proceed to checkout </button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop