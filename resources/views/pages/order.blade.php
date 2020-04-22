@extends('layouts.default')
@section('content')
<!-- order -->
@php
//dd($products);
@endphp
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
    <form action="">
        <div class="row">
            <div class="col-md-7 shadow  col-sm-12" style="border: 2px solid #f9f9f9;">
                <div class="row px-5 ll">
                    <div class="col-md-12">
                        <h1 class="frm-ordh1 pt-4">1.Your Details</h1>
                        <label class="mt-3 ord-lbl" for="">Your Name</label>
                        <input class="form-control py-2 inp-ord" type="text" name="name" placeholder="Name">
                        <label class="mt-3 ord-lbl" for="">Email</label>
                        <input class="inp-ord py-2 form-control" type="text" name="email" placeholder="example@mail.com">
                        <label class="mt-3 ord-lbl" for="">Project title</label>
                        <input class="inp-ord py-2 form-control" type="text" name="project_title" placeholder="Project Title Here">
                        <label class="mt-3 ord-lbl" for="">Number of inner pages</label>
                        <select name="inner_pages" id="inner_pages" class="form-control sel-ord">
                            <option value="0">None</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>

                        <p class="ord-rwp1 mt-3">Total pages are home pages <span id="inner_pages_count">+ 4</span></p>
                        <div class="uplod-rw py-2">
                            <input type="file" id="imgupload" name="project_image" style="display: none">
                            <h1 class="text-center upl-h21 p-1" onclick="$('#imgupload').trigger('click'); return false;">
                                Click Here to upload Project File <i class="fa fa-plus fa-lg pl-4 "></i></h1>
                        </div>
                        <p class="ord-rwp1 mt-1">you can drag the files here</p>
                        <p class="ord-rwp2 mt-1">if you dont have your own design we can create it for</p>
                        <h1 class="ord-sph1"><input type="checkbox" class=" checkbox"> Order A Webdesign <span class="ord-rwp1">(5 pages)</span>
                            <span id="design_per_page" class="pull-right" style="font-weight: 600;">(Select Package to Get Price)</span></h1>
                        <label class="mt-3 ord-lbl" for="">Notes</label>
                        <input class="inp-ord py-2 form-control" type="text">

                        <h1 class="frm-ordh1 pt-4">2.Select Package</h1>
                        @foreach($products as $key => $product)
                        <div class="py-2 wp-webd pt-2 pl-3 mt-1">
                            @if($product->name == "Wordpress")
                            <label class="rad">
                                <input class="product_name" data-price_inner_per_page="{{$product->amount_inner_per_page}}" data-price_design_per_page="{{$product->amount_design_per_page}}" data-price_product="{{$product->amount}}" type="radio" name="product_name" value="{{$product->name}}">
                                <i></i>
                            </label>
                            <i class="fa fa-wordpress pl-2 " style=""></i>
                            <b class="dobv1">Wordpress website
                                <span class="float-right mr-auto d-block pr-2 ">€ {{$product->amount}}</span>
                            </b>
                            @endif
                            @if($product->name == "Magento")
                            <label class="rad">
                                <input class="product_name" data-price_inner_per_page="{{$product->amount_inner_per_page}}" data-price_design_per_page="{{$product->amount_design_per_page}}" data-price_product="{{$product->amount}}" type="radio" name="product_name" value="{{$product->name}}">
                                <i></i>
                            </label>
                            <img src="{{URL::asset('images/megento.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                            <b class="dobv1">Magneto Webshop
                                <span class="float-right mr-auto d-block pr-2 ">€ {{$product->amount}}</span>
                            </b>

                            </span>
                            @endif
                            @if($product->name == "Shopify")
                            <label class="rad">
                                <input class="product_name" data-price_inner_per_page="{{$product->amount_inner_per_page}}" data-price_design_per_page="{{$product->amount_design_per_page}}" data-price_product="{{$product->amount}}" type="radio" name="product_name" value="{{$product->name}}">
                                <i></i>
                            </label>
                            <img src="{{URL::asset('images/shopify.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                            <b class="dobv1">Shopify Webshop
                                <span class="float-right mr-auto d-block pr-2 ">€ {{$product->amount}}</span>
                            </b>

                            </span>
                            @endif
                            @if($product->name == "Woocommerce")
                            <label class="rad">
                                <input class="product_name" data-price_inner_per_page="{{$product->amount_inner_per_page}}" data-price_design_per_page="{{$product->amount_design_per_page}}" data-price_product="{{$product->amount}}" type="radio" name="product_name" value="{{$product->name}}">
                                <i></i>
                            </label>
                            <img src="{{URL::asset('images/wooo.png')}}" class="img-fluid ml-1" style="height: 30px;width: 45px; margin: 7px 15px 13px 26px;" alt="">
                            <b class="dobv1">Woocommerce Webshop
                                <span class="float-right mr-auto d-block pr-2 ">€ {{$product->amount}}</span>
                            </b>
                            @endif
                        </div>
                        @endforeach
                        <!-- <p class="frm-p23 pl-4 pt-4">Installation service &nbsp<span style="color: black;font-size: 15px;font-weight: 600;">3 working days</span></p>
                    <p class="frm-p23 pl-4 ">4 to 7 days turnaround</p>
                    <p class="bp-r2 px-3"><span style="color: black;font-size: 14px;font-weight: 400;">Responsive wordpress package</span> include conversion of your psd file into the fully functional Wordpress theme compatible across all major browsers and devices, easily manageable through dashboard with integrated post and pages, user-friendly widget ready Structure, Optimized for SEO & Load Speed with latest browser versions compatibility including IE9+, Firefox, Opera, Google Chrome and Safari (Windows & Mac). Minimum turnaround time 3-4 days depending on complexity of layout.Customizing the available wordpress plugins as per your design.
                        It also includes features like Custom Post Type Integration, Wp-ecommerce, WooCommerce implementations, etc. This package will improve page readability for search engines as well as various browsers with disabled or limited CSS.<br>
                        <span style="color: black;font-size: 14px;font-weight: 400;"> (HTML5 and installation on live server along with Twitter Bootstrap, Sass, Foundation and Boiler plate framework also available under additional options)</span>
                    </p>
                    <p class="px-3" style="color: black;font-size: 14px;font-weight: 400;">The cost for per additional (Inner) page for Wordpress is +$119.</p>
                    <p class="px-3" style="color: black;font-size: 14px;font-weight: 400;">File supported: Sketch, XD, Figma, InVision, Zeplin, Muse, PSD, AI, PNG, INDD, EPS , JPG, PDF or TIFF</p> -->

                        <!-- <div class="py-2 wp-webd pt-2 pl-3 mt-1">
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
                        </div> -->

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
                                    <div class="monthly_main_1">
                                        <p class="px-5 mt-3 pd-lp2">Monthly Maintainance</p>
                                        <p class="px-5 mt-3 pd-lp1 qq">
                                            <label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Fixed
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Liquid <span class="float-right">€50</span>
                                        </p>
                                    </div>
                                    <div class="monthly_main_2">
                                        <p class="px-5 mt-3 pd-lp2">Layout Horizontal Alignment</p>
                                        <p class="px-5 mt-3 pd-lp1 qq">
                                            <label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Left
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Center
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Right
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Header/Footer width Stretch <span class="float-right">€25</span>
                                        </p>
                                    </div>
                                    <div class="monthly_main_3">
                                        <p class="px-5 mt-3 pd-lp2">Vertical Alignment</p>
                                        <p class="px-5 mt-3 pd-lp1 qq">
                                            <label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Top
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Middle
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i></label> Bottom
                                        </p>
                                    </div>
                                    <div class="monthly_main_4">
                                        <p class="px-5 mt-3 pd-lp1">
                                            <input type="checkbox" class=" checkbox"> Sticky Footer
                                            <span class="float-right">€25</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1">
                                            <input type="checkbox" class=" checkbox"> Sticky Header
                                            <span class="float-right">€25</span>
                                        </p>
                                    </div>
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
                                    <div class="monthly_main_1">
                                        <p class="px-5 mt-3 pd-lp1">
                                            <input type="checkbox" class=" checkbox" checked=checked> Iphone, Ipad and Android Device Compatibility Free

                                        </p>
                                        <p class="px-5 mt-3 pd-lp1">
                                            <input type="checkbox" class=" checkbox" checked=checked> Windows 7 and BlackBerry Device Compatibility Free

                                        </p>
                                    </div>
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
                                    <div class="monthly_main_1">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Page speed optimization <span class="float-right">€28</span></p>

                                        <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">TypeKit/google font/@font-face implementation</p>

                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>No</label> <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue"><input type="radio" name="rad1" value="a">
                                                <i></i>Typekit </label> <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>google font</label> <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>face font</label> <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i> Retina display compatability</label> <span class="float-right">€28</span></p>

                                    </div>
                                    <div class="monthly_main_2">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Retina Display Compatibility <span class="float-right">€75</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Section 508 Compliance <span class="float-right">€35</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Mouseover Effects(DHTML Rollovers) </p>
                                    </div>
                                    <div class="monthly_main_3">
                                        <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Implement Dynamic Menus</p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>No</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>One-Level Drop-Down Menu</label><span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Multi-Level Drop-Down Menu</label><span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Mega Menu</label><span class="float-right">€20</span>
                                        </p>
                                    </div>
                                    <div class="monthly_main_4">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Jquery Implementation <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Font Resize <span class="float-right">€28</span></p>
                                    </div>
                                    <div class="monthly_main_5">
                                        <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">W3C Standards</p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>W3C Valid HTML 4.01</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>W3C Valid XHTML 1.0 Transitional</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>W3C Valid XHTML 1.0 Strict</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>W3C Valid HTML5</label>
                                        </p>
                                    </div>
                                    <div class="monthly_main_6">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Table-less Coding </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> SSI Implementation <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Commented Markup </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Favicon </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> CSS Sprite <span class="float-right">€28</span></p>
                                    </div>
                                    <div class="monthly_main_7">
                                        <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">CSS Frameworks</p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>No</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Twitter bootstrap</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Foundation framework</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Less framework</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Fluid baseline grid</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>SASS framework</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Bootstrap with SASS</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Materialize CSS</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Semantic UI</label> <span class="float-right">€20</span>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>AMP</label> <span class="float-right">€20</span>
                                        </p>
                                    </div>
                                    <div class="monthly_main_8">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> CSS Reset </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Normalize CSS </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Print CSS +€50 </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Contact Form Implementation <span class="float-right">€28</span></p>
                                    </div>
                                    <div class="monthly_main_9 no_show_shopify_selected">
                                        <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Theme installation</p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>No</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>Yes</label> <span class="float-right">€20</span>
                                        </p>

                                    </div>
                                    <div class="monthly_main_10">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Microformat <span class="float-right">€28</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Schema <span class="float-right">€28</span> </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Screen Readers Compatibility <span class="float-right">€28</span> </p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> Font Awesome <span class="float-right">€28</span></p>
                                    </div>
                                    <div class="monthly_main_7 magento_selected" id="magento_version" style="display: none;">
                                        <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Magento Version</p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>2.2</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>2.2</label>
                                        </p>
                                        <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                <input type="radio" name="rad1" value="a">
                                                <i></i>2.2</label>
                                        </p>
                                    </div>
                                    <div class="monthly_main_10 wordpress_selected" style="display: none;">
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> WP Advanced Theme Control <span class="float-right">€ 20</span></p>
                                        <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox"> iThemes Security Pro Plugin       <span class="float-right"></span> </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <h1 class="frm-ordh1 pt-4">4.Maintainance & Hosting</h1>
                        <div id="hosting">
                            <p class="px-5 mt-3 pd-lp2">Hosting</p>

                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="hosting" value="none">
                                    <i></i></label> None</p>
                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="hosting" value="basis">
                                    <i></i></label> Basis €15 p.m 100 GB SSD , 5 domeinnamen, CPU 6core , RAM 4GB , backup tot 60 dagen , varnish <span class="float-right">€ 15</span></p>
                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="hosting" value="pro">
                                    <i></i></label> Pro €25 p.m 250 GB SSD , 15 domeinnamen, CPU 8core , RAM 6GB , backup tot 60 dagen , varnish <span class="float-right">€ 25</span></p>
                        </div>
                        <div id="maintainance_magento" class="magento_selected" style="display: none;">
                            <p class="px-5 mt-3 pd-lp2">Maintainance</p>

                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="maintainance_magento" value="none">
                                    <i></i></label> None</p>
                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="maintainance_magento" value="basis">
                                    <i></i></label> Basis €175 p.m alle Magento updates , alle Magento patches , alle Extensie updates <span class="float-right">€ 175</span></p>
                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="maintainance_magento" value="lite">
                                    <i></i></label> Lite €125 p.m alle Magento updates max 2x p.j , alle Magento patches , alle Extensie updates <span class="float-right">€ 125</span></p>
                        </div>
                        <div id="maintainance_wordpress" class="wordpress_selected" style="display: none;">
                            <p class="px-5 mt-3 pd-lp2">Maintainance</p>

                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="maintainance_wordpress" value="none">
                                    <i></i></label> None</p>
                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                    <input type="radio" name="maintainance_wordpress" value="basis">
                                    <i></i></label> Basis €50 p.m Wordpress updates     <span class="float-right">€ 50</span></p>
                        </div>





                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4  col-sm-12 shadow div2-smkj" style="border: 2px solid #f9f9f9;height: 605px;">
                <div class="row px-3">
                    <div class="col-md-12">
                        <h1 class="h1-ordc2 pt-4"><img src="{{URL::asset('images/order.png')}}" /><span class="ml-3 order_sum">Order Summery</span></h1>
                        <p class="p1-ordc2 pt-2">Selected package</p>
                        <div class="selected_package">
                            <div class="selected_package_wordpress" style="display: none;">
                                <h1 class="h2-ordc2">Wordpress website <span class="pull-right">€ <span class="selected_price selected_price_product">0</span></span></h1>
                            </div>
                            <div class="selected_package_magento">
                                <h1 class="h2-ordc2">Magneto Webshop <span class="pull-right">€ <span class="selected_price selected_price_product">0</span></span></h1>
                            </div>
                            <div class="selected_package_shopify">
                                <h1 class="h2-ordc2">Shopify Webshop <span class="pull-right">€ <span class="selected_price selected_price_product">0</span></span></h1>
                            </div>
                            <div class="selected_package_woocommerce">
                                <h1 class="h2-ordc2">Woocommerce Webshop <span class="pull-right">€ <span class="selected_price selected_price_product">0</span></span></h1>
                            </div>
                            <h1 class="h2-ordc2">Web design<span class="pull-right">€ <span id="web_design_price">0</span></span></h1>
                        </div>

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
    </form>
</div>
<script>
    $(document).ready(function(){
        $(".selected_package_wordpress").hide();
        $(".selected_package_magento").hide();
        $(".selected_package_shopify").hide();
        $(".selected_package_woocommerce").hide();

        $(".product_name").change(function(){
            var selected_product = $(this).val();
            var selected_product_price = $(this).attr("data-price_product");
            var selected_product_price_per_page = $(this).attr("data-price_inner_per_page");
            var selected_product_design_per_page = $(this).attr("data-price_design_per_page");

            $("#design_per_page").html("€ " + selected_product_design_per_page + "/page");

            // $("#web_design_price").html(selected_product_price);
            $(".selected_price_product").html(selected_product_price);

            $(".selected_package_wordpress").hide();
            $(".selected_package_magento").hide();
            $(".selected_package_shopify").hide();
            $(".selected_package_woocommerce").hide();

            if(selected_product == "Wordpress"){
                $(".wordpress_selected").show();
                $(".magento_selected").hide();
                $(".no_show_shopify_selected").show();
                $(".selected_package_wordpress").show();
            }else if(selected_product == "Magento"){
                $(".wordpress_selected").hide();
                $(".magento_selected").show();
                $(".no_show_shopify_selected").show();
                $(".selected_package_magento").show();
            }else if(selected_product == "Shopify"){
                $(".wordpress_selected").hide();
                $(".magento_selected").hide();
                $(".no_show_shopify_selected").hide();
                $(".selected_package_shopify").show();
            }else if(selected_product == "Woocommerce"){
                $(".wordpress_selected").hide();
                $(".magento_selected").hide();
                $(".no_show_shopify_selected").show();
                $(".selected_package_woocommerce").show();
            }
            // if(selected_product == "Woocommerce"){}
        });
    });
</script>
@stop