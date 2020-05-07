@extends('layouts.default')
@section('content')
<!-- order -->
@php
//dd($products);
//dd($products[0]);
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

<div class="container py-5 top-menu" style="height: auto;">
    <div class="row">
        <div class="col-12">
            <nav class="nav nav-pills" id="nav-pills">
                <a href="#section1" class="nav-item nav-link active">1.your Details</a>
                <a href="#section2" class="nav-item nav-link">2.Select Package</a>
                <a href="#section3" class="nav-item nav-link">3.Select Additional options</a>
                <a href="#section4" class="nav-item nav-link ">4.Maintainance & hosting</a>
                <a href="#" class="nav-item nav-link ">5.Review Order</a>
                <a href="#" class="nav-item nav-link ">6.Pay & Place Order</a>
            </nav>
        </div>
    </div>
</div>
<!-- row -->

<!-- Form -->
<div class="container form-ord pb-5">
        <form role="form"
                            class="form-edit-add"
                            action="{{ route('store') }}"
                            method="POST" enctype="multipart/form-data">
                    
                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7 shadow  col-sm-12" style="border: 2px solid #f9f9f9;">
                <div class="row px-5 ll">
                    <div class="col-md-12">
                        <div id="section1">
                            <h1 class="frm-ordh1 pt-4">1.Your Details</h1>
                            <label class="mt-3 ord-lbl" for="">Your Name</label>
                            <input class="form-control py-2 inp-ord" type="text" name="name" placeholder="Name" required>
                            <label class="mt-3 ord-lbl" for="">Email</label>
                            <input class="inp-ord py-2 form-control" type="text" name="email" placeholder="example@mail.com" required>
                            <label class="mt-3 ord-lbl" for="">Project title</label>
                            <input class="inp-ord py-2 form-control" type="text" name="project_title" placeholder="Project Title Here" required>
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

                            <p class="ord-rwp1 mt-3">Total pages are home page <span id="inner_pages_count"></span></p>
                            <div class="uplod-rw py-2">
                                <div id="upload_name"></div>
                                <input type="file" id="imgupload" value="" name="project_document[]" style="display: none" multiple>
                                <h1 class="text-center upl-h21 p-1" id="upload_trigger">
                                    Click Here to upload Project File <i class="fa fa-plus fa-lg pl-4 "></i></h1>
                            </div>
                            <!-- <p class="ord-rwp1 mt-1">you can drag the files here</p> -->
                            <p class="ord-rwp2 mt-1">if you dont have your own design we can create it for</p>
                            <h1 class="ord-sph1"><input id="web_design_order" name="web_design_order" value="1" type="checkbox" class=" checkbox"> Order A Webdesign <span class="ord-rwp1">(<span id="total_pages">1</span> pages)</span>
                                <span id="design_per_page" class="pull-right" style="font-weight: 600;">(Select Package to Get Price)</span></h1>
                            <label class="mt-3 ord-lbl" for="">Notes</label>
                            <input class="inp-ord py-2 form-control" type="text" name="notes">
                        </div>
                        <div id="section2">
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
                        </div>
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
                        <div id="section3">
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
                                    <div class="card-body html_layouts_options main_div" data-amount="0" data-summary_element="#html_layouts_price" data-summary_element2=".html_layouts_price">
                                        <div class="monthly_main_1 section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2">Layout Width</p>
                                            <input class="selection" name="layout_width_selection" type="hidden" value="" />
                                            @if($products[0]->fixed_width == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq">
                                                <label class="blue">
                                                    <input class="section_element" data-selection="Fixed" type="radio" name="layout_width" value="{{$products[0]->fixed_width_amount}}">
                                                    <i></i></label> Fixed
                                            </p>
                                            @endif
                                            @if($products[0]->liquid_width == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                    <input class="section_element" data-selection="Liquid" type="radio" name="layout_width" value="{{$products[0]->liquid_width_amount}}">
                                                    <i></i></label> Liquid <span class="float-right">€ {{$products[0]->liquid_width_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_2 section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2">Layout Horizontal Alignment</p>
                                            <input class="selection" name="layout_horizontal_alignment_selection" type="hidden" value="" />
                                            @if($products[0]->horizontal_alignment_left == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq">
                                                <label class="blue">
                                                    <input class="section_element" data-selection="Left" type="radio" name="layout_horizontal_alignment" value="{{$products[0]->horizontal_alignment_left_amount}}">
                                                    <i></i></label> Left
                                            </p>
                                            @endif
                                            @if($products[0]->horizontal_alignment_center == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                    <input class="section_element" data-selection="Center" type="radio" name="layout_horizontal_alignment" value="{{$products[0]->horizontal_alignment_center_amount}}">
                                                    <i></i></label> Center
                                            </p>
                                            @endif
                                            @if($products[0]->horizontal_alignment_right == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                    <input class="section_element" data-selection="Right" type="radio" name="layout_horizontal_alignment" value="{{$products[0]->horizontal_alignment_right_amount}}">
                                                    <i></i></label> Right
                                            </p>
                                            @endif
                                            @if($products[0]->horizontal_alignment_stretch == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                    <input class="section_element" data-selection="Header/Footer width Stretch" type="radio" name="layout_horizontal_alignment" value="{{$products[0]->horizontal_alignment_stretch_amount}}">
                                                    <i></i></label> Header/Footer width Stretch <span class="float-right">€ {{$products[0]->horizontal_alignment_stretch_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_3 section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2">Vertical Alignment</p>
                                            <input class="selection" name="layout_vertical_alignment_selection" type="hidden" value="" />
                                            @if($products[0]->vertical_alignment_top == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq">
                                                <label class="blue">
                                                    <input class="section_element" data-selection="Top" type="radio" name="layout_vertical_alignment" value="{{$products[0]->vertical_alignment_top_amount}}">
                                                    <i></i></label> Top
                                            </p>
                                            @endif
                                            @if($products[0]->vertical_alignment_middle == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                    <input class="section_element" data-selection="Middle" type="radio" name="layout_vertical_alignment" value="{{$products[0]->vertical_alignment_middle_amount}}">
                                                    <i></i></label> Middle
                                            </p>
                                            @endif
                                            @if($products[0]->vertical_alignment_bottom == 1)
                                            <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                                    <input class="section_element" data-selection="Bottom" type="radio" name="layout_vertical_alignment" value="{{$products[0]->vertical_alignment_bottom_amount}}">
                                                    <i></i></label> Bottom
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_4">

                                            @if($products[0]->sticky_footer == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="sticky_footer_selection" type="hidden" value="" />
                                                
                                                <input class="section_element_checkbox" name="sticky_footer" data-selection="Sticky Footer" value="{{$products[0]->sticky_footer_amount}}" type="checkbox" class=" checkbox"> Sticky Footer
                                                <span class="float-right">€ {{$products[0]->sticky_footer_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->sticky_header == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" data-selection="Sticky Header" name="sticky_header_selection" type="hidden" value="" />

                                                <input class="section_element_checkbox" name="sticky_header" data-selection="Sticky Header" value="{{$products[0]->sticky_header_amount}}" type="checkbox" class=" checkbox"> Sticky Header
                                                <span class="float-right">€ {{$products[0]->sticky_header_amount}}</span>
                                            </p>
                                            @endif
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

                                            @if($products[0]->compatibility_iphone_ipad_android == 1)
                                            <p class="px-5 mt-3 pd-lp1">
                                                <input disabled type="checkbox" class=" checkbox" checked=checked> Iphone, Ipad and Android Device Compatibility Free

                                            </p>
                                            @endif

                                            @if($products[0]->compatibility_windows_blackberry == 1)
                                            <p class="px-5 mt-3 pd-lp1">
                                                <input disabled type="checkbox" class=" checkbox" checked=checked> Windows 7 and BlackBerry Device Compatibility Free

                                            </p>
                                            @endif
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
                                    <div class="card-body main_div" data-amount="0" data-summary_element="#html_advanced_price" data-summary_element2=".html_advanced_price">
                                        <div class="monthly_main_1">
                                            @if($products[0]->page_speed_optimization == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                
                                                <input class="selection" name="page_speed_optimization_selection" type="hidden" value="" />
                                                <input class="section_element_checkbox checkbox" name="page_speed_optimization" data-selection="Page speed optimization" value="{{$products[0]->page_speed_optimization_amount}}" type="checkbox"> Page speed optimization
                                                <span class="float-right">€ {{$products[0]->page_speed_optimization_amount}}</span>
                                            </p>
                                            @endif
                                            <div class="monthly_main_3 section_here" data-amount="0">
                                                <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">TypeKit/google font/@font-face implementation</p>

                                                <input class="selection" name="tk_gf_ff_implementation_selection" type="hidden" value="" />
                                                @if($products[0]->typekit_none == 1)
                                                <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                        <input class="section_element" data-selection="No" type="radio" name="tk_gf_ff_implementation" value="0">
                                                        <i></i>No</label>
                                                </p>
                                                @endif

                                                @if($products[0]->typekit == 1)
                                                <p class="px-5 mt-3 pd-lp1">
                                                    <label class="blue">
                                                        <input class="section_element" data-selection="Typekit" type="radio" name="tk_gf_ff_implementation" value="{{$products[0]->typekit_amount}}">
                                                        <i></i>Typekit
                                                    </label>
                                                    <span class="float-right">€ {{$products[0]->typekit_amount}}</span>
                                                </p>
                                                @endif

                                                @if($products[0]->google_font == 1)
                                                <p class="px-5 mt-3 pd-lp1">
                                                    <label class="blue">
                                                        <input class="section_element" data-selection="Google Font" type="radio" name="tk_gf_ff_implementation" value="{{$products[0]->google_font_amount}}">
                                                        <i></i>google font
                                                    </label>
                                                    <span class="float-right">€ {{$products[0]->google_font_amount}}</span>
                                                </p>
                                                @endif

                                                @if($products[0]->font_face == 1)
                                                <p class="px-5 mt-3 pd-lp1">
                                                    <label class="blue">
                                                        <input class="section_element" data-selection="Face Font" type="radio" name="tk_gf_ff_implementation" value="{{$products[0]->font_face_amount}}">
                                                        <i></i>face font
                                                    </label>
                                                    <span class="float-right">€ {{$products[0]->font_face_amount}}</span>
                                                </p>
                                                @endif

                                            </div>

                                        </div>
                                        <div class="monthly_main_2">

                                            @if($products[0]->retina_display_compatibility == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="retina_display_compatibility_selection" type="hidden" value="" />
                                                <input name="retina_display_compatibility" type="checkbox" data-selection="Retina Display Compatibility" class="section_element_checkbox  checkbox" value="{{$products[0]->retina_display_compatibility_amount}}"> Retina Display Compatibility 
                                                <span class="float-right">€ {{$products[0]->retina_display_compatibility_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->section_508_compliance == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="section_compliance_selection" type="hidden" value="" />
                                                <input name="section_compliance" data-selection="Section 508 Compliance" type="checkbox" class="section_element_checkbox  checkbox" value="{{$products[0]->section_508_compliance_amount}}"> Section 508 Compliance 
                                                <span class="float-right">€ {{$products[0]->section_508_compliance_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->mouseover_effects == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="mouseover_effects_selection" type="hidden" value="" />
                                                <input type="checkbox" name="mouseover_effects" data-selection="Mouseover Effects(DHTML Rollovers)" class="section_element_checkbox  checkbox" value="0"> Mouseover Effects(DHTML Rollovers) 
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_3 section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Implement Dynamic Menus</p>
                                                <input class="selection" name="dynamic_menus_selection" type="hidden" value="" />

                                            @if($products[0]->menus_none == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="No" type="radio" name="dynamic_menus" value="0">
                                                    <i></i>No</label>
                                            </p>
                                            @endif
                                            @if($products[0]->menu_one_level == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="One-Level Drop-Down Menu" type="radio" name="dynamic_menus" value="{{$products[0]->menu_one_level_amount}}">
                                                    <i></i>One-Level Drop-Down Menu</label><span class="float-right">€ {{$products[0]->menu_one_level_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->menu_multi_level == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Multi-Level Drop-Down Menu" type="radio" name="dynamic_menus" value="{{$products[0]->menu_multi_level_amount}}">
                                                    <i></i>Multi-Level Drop-Down Menu</label><span class="float-right">€ {{$products[0]->menu_multi_level_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->menu_mega_level == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Mega Menu" type="radio" name="dynamic_menus" value="{{$products[0]->menu_mega_level_amount}}">
                                                    <i></i>Mega Menu</label><span class="float-right">€ {{$products[0]->menu_mega_level_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_4">
                                            @if($products[0]->jquery_implementation == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="jquery_implementation_selection" type="hidden" value="" />
                                                <input name="jquery_implementation" data-selection="Jquery Implementation" type="checkbox" class="section_element_checkbox checkbox" value="{{$products[0]->jquery_implementation_amount}}"> Jquery Implementation 
                                                <span class="float-right">€ {{$products[0]->jquery_implementation_amount}}</span>
                                            </p>

                                            @endif
                                            @if($products[0]->font_resize == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="font_resize_selection" type="hidden" value="" />
                                                <input name="font_resize" data-selection="Font Resize" type="checkbox" class="section_element_checkbox checkbox" value="{{$products[0]->font_resize_amount}}"> Font Resize 
                                                <span class="float-right">€ {{$products[0]->font_resize_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_5 section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">W3C Standards</p>
                                                <input class="selection" name="wc_standards_selection" type="hidden" value="" />
                                            @if($products[0]->html == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="W3C Valid HTML 4.01" type="radio" name="wc_standards" value="0">
                                                    <i></i>W3C Valid HTML 4.01</label>
                                            </p>
                                            @endif
                                            @if($products[0]->xhtml_transitional == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="W3C Valid XHTML 1.0 Transitional" type="radio" name="wc_standards" value="0">
                                                    <i></i>W3C Valid XHTML 1.0 Transitional</label>
                                            </p>
                                            @endif
                                            @if($products[0]->xhtml_strict == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="W3C Valid XHTML 1.0 Strict" type="radio" name="wc_standards" value="0">
                                                    <i></i>W3C Valid XHTML 1.0 Strict</label>
                                            </p>
                                            @endif
                                            @if($products[0]->html5 == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="W3C Valid HTML5" type="radio" name="wc_standards" value="0">
                                                    <i></i>W3C Valid HTML5</label>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_6">
                                            @if($products[0]->table_less_coding == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="table_less_coding_selection" type="hidden" value="" />
                                                <input type="checkbox" name="table_less_coding" data-selection="Table-less Coding" class="section_element_checkbox checkbox" value="{{$products[0]->table_less_coding_amount}}"> Table-less Coding 
                                            </p>
                                            @endif
                                            @if($products[0]->ssi_implementation == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="ssi_implementation_selection" type="hidden" value="" />
                                                <input type="checkbox" name="ssi_implementation" data-selection="SSI Implementation" class="section_element_checkbox checkbox" value="{{$products[0]->ssi_implementation_amount}}"> SSI Implementation 
                                                <span class="float-right">€ {{$products[0]->ssi_implementation_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->commented_markup == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="commented_markup_selection" type="hidden" value="" />
                                                <input type="checkbox" name="commented_markup" class="section_element_checkbox checkbox" data-selection="Commented Markup" value="{{$products[0]->commented_markup_amount}}"> Commented Markup 
                                            </p>
                                            @endif
                                            @if($products[0]->favicon == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="favicon_selection" type="hidden" value="" />
                                                <input type="checkbox" name="favicon" class="section_element_checkbox checkbox" data-selection="Favicon" value="{{$products[0]->favicon_amount}}"> Favicon 
                                            </p>
                                            @endif
                                            @if($products[0]->css_sprite == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="css_sprite_selection" type="hidden" value="" />
                                                <input type="checkbox" name="css_sprite" data-selection="CSS Sprite" class="section_element_checkbox checkbox" value="{{$products[0]->css_sprite_amount}}"> CSS Sprite 
                                                <span class="float-right">€ {{$products[0]->css_sprite_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_7 section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">CSS Frameworks</p>
                                            <input class="selection" name="css_framework_selection" type="hidden" value="" />

                                            @if($products[0]->css_framework_none == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="No" type="radio" name="css_framework" value="0">
                                                    <i></i>No</label>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_twitter_bootstrap == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Twitter bootstrap" type="radio" name="css_framework" value="{{$products[0]->css_framework_twitter_bootstrap_amount}}">
                                                    <i></i>Twitter bootstrap</label> <span class="float-right">€ {{$products[0]->css_framework_twitter_bootstrap_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_foundation == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Foundation framework" type="radio" name="css_framework" value="{{$products[0]->css_framework_foundation_amount}}">
                                                    <i></i>Foundation framework</label> <span class="float-right">€ {{$products[0]->css_framework_foundation_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_boiler_plate == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Boiler Plate" type="radio" name="css_framework" value="{{$products[0]->css_framework_boiler_plate_amount}}">
                                                    <i></i>Boiler Plate</label> <span class="float-right">€ {{$products[0]->css_framework_boiler_plate_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_less == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Less framework" type="radio" name="css_framework" value="{{$products[0]->css_framework_less_amount}}">
                                                    <i></i>Less framework</label> <span class="float-right">€ {{$products[0]->css_framework_less_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_fluid_baseline_grid == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Fluid baseline grid" type="radio" name="css_framework" value="{{$products[0]->css_framework_fluid_baseline_grid_amount}}">
                                                    <i></i>Fluid baseline grid</label> <span class="float-right">€ {{$products[0]->css_framework_fluid_baseline_grid_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_sass == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="SASS framework" type="radio" name="css_framework" value="{{$products[0]->css_framework_sass_amount}}">
                                                    <i></i>SASS framework</label> <span class="float-right">€ {{$products[0]->css_framework_sass_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_bootstrap_with_sass == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Bootstrap with SASS" type="radio" name="css_framework" value="{{$products[0]->css_framework_bootstrap_with_sass_amount}}">
                                                    <i></i>Bootstrap with SASS</label> <span class="float-right">€ {{$products[0]->css_framework_bootstrap_with_sass_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_materialize_css == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Materialize CSS" type="radio" name="css_framework" value="{{$products[0]->css_framework_materialize_css_amount}}">
                                                    <i></i>Materialize CSS</label> <span class="float-right">€ {{$products[0]->css_framework_materialize_css_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_semantic_ui == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Semantic UI" type="radio" name="css_framework" value="{{$products[0]->css_framework_semantic_ui_amount}}">
                                                    <i></i>Semantic UI</label> <span class="float-right">€ {{$products[0]->css_framework_semantic_ui_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->css_framework_amp == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="AMP" type="radio" name="css_framework" value="{{$products[0]->css_framework_amp_amount}}">
                                                    <i></i>AMP</label> <span class="float-right">€ {{$products[0]->css_framework_amp_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_8">
                                            @if($products[0]->css_reset == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="css_reset_selection" type="hidden" value="" />
                                                <input type="checkbox" name="css_reset" data-selection="CSS Reset" class="section_element_checkbox checkbox" value="0"> CSS Reset 
                                            </p>
                                            @endif
                                            @if($products[0]->css_normalize == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="normalize_css_selection" type="hidden" value="" />
                                                <input type="checkbox" name="normalize_css" data-selection="Normalize CSS" class="section_element_checkbox checkbox" value="0"> Normalize CSS 
                                            </p>
                                            @endif
                                            @if($products[0]->css_print == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="print_css_selection" type="hidden" value="" />
                                                <input type="checkbox" name="print_css" data-selection="Print CSS" class="section_element_checkbox checkbox" value="{{$products[0]->css_print_amount}}"> Print CSS 
                                                <span class="float-right">€ {{$products[0]->css_print_amount}}</span> 
                                            </p>
                                            @endif
                                            @if($products[0]->css_contact_form == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="contact_form_implementation_selection" type="hidden" value="" />
                                                <input type="checkbox" name="contact_form_implementation" data-selection="Contact Form Implementation" class="section_element_checkbox checkbox" value="{{$products[0]->css_contact_form_amount}}"> Contact Form Implementation 
                                                <span class="float-right">€ {{$products[0]->css_contact_form_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_9 no_show_shopify_selected section_here" data-amount="0">
                                            <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Theme installation</p>
                                            <input class="selection" name="theme_installation_selection" type="hidden" value="" />
                                            @if($products[0]->none_theme_installation == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="No" type="radio" name="theme_installation" value="0">
                                                    <i></i>No</label>
                                            </p>
                                            @endif
                                            @if($products[0]->yes_theme_installation == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Yes" type="radio" name="theme_installation" value="{{$products[0]->yes_theme_installation_amount}}">
                                                    <i></i>Yes</label> <span class="float-right">€ {{$products[0]->yes_theme_installation_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_10">
                                            @if($products[0]->microformat == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="microformat_selection" type="hidden" value="" />
                                                <input type="checkbox" name="microformat" data-selection="Microformat" class="section_element_checkbox checkbox" value="{{$products[0]->microformat_amount}}"> Microformat 
                                                <span class="float-right">€ {{$products[0]->microformat_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->schema == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="schema_selection" type="hidden" value="" />
                                                <input type="checkbox" name="schema" data-selection="Schema" class="section_element_checkbox checkbox" value="{{$products[0]->schema_amount}}"> Schema 
                                                <span class="float-right">€ {{$products[0]->schema_amount}}</span> 
                                            </p>
                                            @endif
                                            @if($products[0]->screen_readers_compatibility == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="screen_readers_compatibility_selection" type="hidden" value="" />
                                                <input type="checkbox" class="section_element_checkbox checkbox" name="screen_readers_compatibility" data-selection="Screen Readers Compatibility" value="{{$products[0]->screen_readers_compatibility_amount}}"> Screen Readers Compatibility 
                                                <span class="float-right">€ {{$products[0]->screen_readers_compatibility_amount}}</span> 
                                            </p>
                                            @endif
                                            @if($products[0]->font_awesome == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="font_awesome_selection" type="hidden" value="" />
                                                <input type="checkbox" name="font_awesome" data-selection="Font Awesome" class="section_element_checkbox checkbox" value="{{$products[0]->font_awesome_amount}}"> Font Awesome 
                                                <span class="float-right">€ {{$products[0]->font_awesome_amount}}</span>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_7 magento_selected section_here" data-amount="0" id="magento_version" style="display: none;">
                                            <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Magento Version</p>
                                                <input class="selection" name="magento_version_selection" type="hidden" value="" />

                                            @if($products[1]->magento_version_2p2 == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Magento 2.2" type="radio" name="magento_version" value="0">
                                                    <i></i>2.2</label>
                                            </p>
                                            @endif
                                            @if($products[1]->magento_version_2p3 == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Magento 2.3" type="radio" name="magento_version" value="0">
                                                    <i></i>2.3</label>
                                            </p>
                                            @endif
                                            @if($products[1]->magento_version_2p4 == 1)
                                            <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                                    <input class="section_element" data-selection="Magento 2.4" type="radio" name="magento_version" value="0">
                                                    <i></i>2.4</label>
                                            </p>
                                            @endif
                                        </div>
                                        <div class="monthly_main_10 wordpress_selected" style="display: none;">
                                            @if($products[0]->wp_advanced_theme_control == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="wp_advanced_theme_control_selection" type="hidden" value="" />
                                                <input type="checkbox" name="wp_advanced_theme_control" data-selection="WP Advanced Theme Control" class="section_element_checkbox checkbox" value="{{$products[0]->wp_advanced_theme_control_amount}}"> WP Advanced Theme Control 
                                                <span class="float-right">€ {{$products[0]->wp_advanced_theme_control_amount}}</span>
                                            </p>
                                            @endif
                                            @if($products[0]->ithemes_security_pro_plugin == 1)
                                            <p class="px-5 mt-3 pd-lp1 section_here" data-amount="0">
                                                <input class="selection" name="ithemes_security_pro_plugin_selection" type="hidden" value="" />
                                                <input type="checkbox" name="ithemes_security_pro_plugin" data-selection="iThemes Security Pro Plugin" class="section_element_checkbox checkbox" value="0"> iThemes Security Pro Plugin 
                                                <span class="float-right"></span> 
                                            </p>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div id="section4"> 
                            <h1 class="frm-ordh1 pt-4">4.Maintainance & Hosting</h1>
                            <div id="hosting" class="main_div" data-amount="0" data-summary_element="#hosting_price" data-summary_element2=".hosting_price">
                                <p class="px-5 mt-3 pd-lp2">Hosting</p>
                                <div class="monthly_main_10 section_here" data-amount="0">
                                    <input class="selection" name="hosting_selection" type="hidden" value="" />
                                    @if($products[0]->none_hosting == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input class="section_element" data-selection="None" type="radio" name="hosting" value="0">
                                            <i></i></label> None
                                    </p>
                                    @endif
                                    @if($products[0]->basis_hosting == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input class="section_element" type="radio" data-selection="Basis" name="hosting" value="{{$products[0]->basis_hosting_amount}}">
                                            <i></i></label> Basis €{{$products[0]->basis_hosting_amount}} p.m 100 GB SSD , 5 domeinnamen, CPU 6core , RAM 4GB , backup tot 60 dagen , varnish <span class="float-right">€ {{$products[0]->basis_hosting_amount}}s</span>
                                    </p>
                                    @endif
                                    @if($products[0]->pro_hosting == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input class="section_element" type="radio" data-selection="Pro" name="hosting" value="{{$products[0]->pro_hosting_amount}}">
                                            <i></i></label> Pro €{{$products[0]->pro_hosting_amount}} p.m 250 GB SSD , 15 domeinnamen, CPU 8core , RAM 6GB , backup tot 60 dagen , varnish <span class="float-right">€ {{$products[0]->pro_hosting_amount}}</span>
                                    </p>
                                    @endif
                                </div>
                            </div>
                            <div id="maintainance_magento" class="magento_selected main_div" data-amount="0" data-summary_element="#maintainance_price" data-summary_element2=".maintainance_price" style="display: none;">
                                <p class="px-5 mt-3 pd-lp2">Maintainance</p>

                                <div class="monthly_main_10 section_here" data-amount="0">
                                    <input class="selection" name="maintainance_magento_selection" type="hidden" value="" />
                                    @if($products[1]->none_maintenance_magento == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input class="section_element" data-selection="None" type="radio" name="maintainance_magento" value="0">
                                            <i></i>
                                        </label> None
                                    </p>
                                    @endif
                                    @if($products[1]->basis_maintenance_magento == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input class="section_element" type="radio" data-selection="Basis" name="maintainance_magento" value="{{$products[1]->basis_maintenance_magento_amount}}">
                                            <i></i>
                                        </label> Basis €{{$products[1]->basis_maintenance_magento_amount}} p.m alle Magento updates , alle Magento patches , alle Extensie updates
                                        <span class="float-right">€ {{$products[1]->basis_maintenance_magento_amount}}</span>
                                    </p>
                                    @endif
                                    @if($products[1]->light_hosting_magento == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input class="section_element" type="radio" data-selection="Lite" name="maintainance_magento" value="{{$products[1]->light_hosting_magento_amount}}">
                                            <i></i>
                                        </label> Lite €{{$products[1]->light_hosting_magento_amount}} p.m alle Magento updates max 2x p.j , alle Magento patches , alle Extensie updates
                                        <span class="float-right">€ {{$products[1]->light_hosting_magento_amount}}</span>
                                    </p>
                                    @endif
                                </div>
                            </div>
                            <div id="maintainance_wordpress" class="wordpress_selected main_div" data-amount="0" data-summary_element="#maintainance_price" data-summary_element2=".maintainance_price" style="display: none;">
                                <p class="px-5 mt-3 pd-lp2">Maintainance</p>

                                <div class="monthly_main_10 section_here" data-amount="0">
                                    <input class="selection" name="maintainance_wordpress_selection" type="hidden" value="" />
                                    @if($products[0]->none_maintenance_wp == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input class="section_element" data-selection="None" type="radio" name="maintainance_wordpress" value="0">
                                            <i></i>
                                        </label> None
                                    </p>
                                    @endif
                                    @if($products[0]->basis_maintenance_wp == 1)
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input class="section_element" data-selection="Basis" type="radio" name="maintainance_wordpress" value="{{$products[0]->basis_maintenance_wp_amount}}">
                                            <i></i>
                                        </label> Basis €{{$products[0]->basis_maintenance_wp_amount}} p.m Wordpress updates
                                        <span class="float-right">€ {{$products[0]->basis_maintenance_wp_amount}}</span>
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4  col-sm-12 shadow div2-smkj right-content" style="border: 2px solid #f9f9f9;height: 605px;">
                <div class="row px-3">
                    <div class="col-md-12">
                        <h1 class="h1-ordc2 pt-4"><img src="{{URL::asset('images/order.png')}}" /><span class="ml-3 order_sum">Order Summery</span></h1>
                        <p class="p1-ordc2 pt-2">Selected package</p>
                        <div class="selected_package">
                            <!-- <input class="selection selected_product" name="selected_product" type="hidden" value="" /> -->
                            <input class="selection selected_product_price" name="selected_product_price" type="hidden" value="0" />
                            <input class="selection web_design_price" name="web_design_price" type="hidden" value="0" />
                            <input class="selection total_inner_pages" name="total_inner_pages" type="hidden" value="0" />
                            <input class="selection price_inner_pages" name="price_inner_pages" type="hidden" value="0" />
                            <input class="selection html_layouts_price" name="html_layouts_price" type="hidden" value="0" />
                            <input class="selection html_advanced_price" name="html_advanced_price" type="hidden" value="0" />
                            <input class="selection maintainance_price" name="maintainance_price" type="hidden" value="0" />
                            <input class="selection hosting_price" name="hosting_price" type="hidden" value="0" />
                            <input class="selection total_price" name="total_price" type="hidden" value="0" />
                            <div class="selected_package_wordpress" style="display: none;">
                                <h1 class="h2-ordc2">Wordpress website <span class="pull-right">€ <span class="selected_price selected_price_product summary_price">0</span></span></h1>
                            </div>
                            <div class="selected_package_magento">
                                <h1 class="h2-ordc2">Magneto Webshop <span class="pull-right">€ <span class="selected_price selected_price_product summary_price">0</span></span></h1>
                            </div>
                            <div class="selected_package_shopify">
                                <h1 class="h2-ordc2">Shopify Webshop <span class="pull-right">€ <span class="selected_price selected_price_product summary_price">0</span></span></h1>
                            </div>
                            <div class="selected_package_woocommerce">
                                <h1 class="h2-ordc2">Woocommerce Webshop <span class="pull-right">€ <span class="selected_price selected_price_product summary_price">0</span></span></h1>
                            </div>
                            <h1 class="h2-ordc2">Web design<span class="pull-right">€ <span class="summary_price" id="web_design_price">0</span></span></h1>
                        </div>

                        <p class="p1-ordc2 pt-2">No. of pages</p>
                        <h1 class="h2-ordc2"><span id="no_of_pages">1</span> pages <span class="p1-ordc13">(including homepage)</span> <span class="pull-right">€ <span id="price_inner_pages" class="summary_price">0</span></span></h1>

                        <p class="p1-ordc2 pt-2">Additional options</p>
                        <h1 class="h2-ordc2">HTML Layouts <span class="pull-right">€ <span id="html_layouts_price" class="summary_price">0</span></span></h1>
                        <h1 class="h2-ordc2">Browser device/compatibility<span class="pull-right">Free</span></h1>
                        <h1 class="h2-ordc2">HTML Advanced Options <span class="pull-right">€ <span id="html_advanced_price" class="summary_price">0</span></span></h1>


                        <p class="p1-ordc2 pt-2">Maintainance & Hosting</p>
                        <h1 class="h2-ordc2">Monthly Maintainance <span class="pull-right">€ <span id="maintainance_price" class="summary_price">0</span></span></h1>
                        <h1 class="h2-ordc2">Hosting of website/webshop<span class="pull-right">€ <span id="hosting_price" class="summary_price">0</span></span></h1>

                        <hr class="py-2">

                        <h1 class="h2-ordc2">Total <span class="pull-right" style="font-weight:600; font-size:26px;">€ <span id="total_price">0</span></span></h1>

                        <a href="#"><button style="cursor: pointer;" class="px-4 py-2 div-row23 btn-block text-white mt-4">Proceed to checkout </button></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        var recursion = 0;
        $(".selected_package_wordpress").hide();
        $(".selected_package_magento").hide();
        $(".selected_package_shopify").hide();
        $(".selected_package_woocommerce").hide();

        $(".product_name").change(function() {
            all_functions();
        });
        $("#web_design_order").change(function() {
            all_functions();
        });
        $("#inner_pages").change(function() {
            all_functions();
        });

        function all_functions() {
            product_change();
            webdesignorder_innerpages();
            calculate_total_amount();
        }

        function product_change() {
            if ($('input[name=product_name]:checked').length > 0) {
                var selected_product = $('input[name=product_name]:checked').val();
                var selected_product_price = $('input[name=product_name]:checked').attr("data-price_product");
                var selected_product_price_per_page = $('input[name=product_name]:checked').attr("data-price_inner_per_page");
                var selected_product_design_per_page = $('input[name=product_name]:checked').attr("data-price_design_per_page");

                $("#design_per_page").html("€ " + selected_product_design_per_page + "/page");

                var total_price_inner_pages = $("#inner_pages").val() * selected_product_price_per_page;

                $("#price_inner_pages").html(total_price_inner_pages);
                $(".price_inner_pages").val(total_price_inner_pages);// for hidden element

                // $("#web_design_price").html(selected_product_price);
                $(".selected_price_product").html(selected_product_price);
                $(".selected_product_price").val(selected_product_price);// for hidden element


                $(".selected_package_wordpress").hide();
                $(".selected_package_magento").hide();
                $(".selected_package_shopify").hide();
                $(".selected_package_woocommerce").hide();

                if (selected_product == "Wordpress") {
                    $(".wordpress_selected").show();
                    $(".magento_selected").hide();
                    $(".no_show_shopify_selected").show();
                    $(".selected_package_wordpress").show();
                } else if (selected_product == "Magento") {
                    $(".wordpress_selected").hide();
                    $(".magento_selected").show();
                    $(".no_show_shopify_selected").show();
                    $(".selected_package_magento").show();
                } else if (selected_product == "Shopify") {
                    $(".wordpress_selected").hide();
                    $(".magento_selected").hide();
                    $(".no_show_shopify_selected").hide();
                    $(".selected_package_shopify").show();
                } else if (selected_product == "Woocommerce") {
                    $(".wordpress_selected").hide();
                    $(".magento_selected").hide();
                    $(".no_show_shopify_selected").show();
                    $(".selected_package_woocommerce").show();
                }
            }
        }

        function webdesignorder_innerpages() {
            //Web Design order CHange Functionality
            if ($('input[name=product_name]:checked').length > 0) {
                if ($("#web_design_order").is(":checked")) {
                    var selected_product_design_per_page = $("input[name='product_name']:checked").attr("data-price_design_per_page");
                    var amount_total = (parseInt($("#inner_pages").val()) + 1) * parseInt(selected_product_design_per_page);
                    $("#web_design_price").html(amount_total);
                    $(".web_design_price").val(amount_total);
                } else {
                    $("#web_design_price").html("0");
                    $(".web_design_price").val("0");
                }
                // $("#inner_pages").trigger("change");
                // calculate_total_amount();
            }

            //InnerPage CHange Functionality
            var inner_pages = $("#inner_pages").val();
            var total_pages = parseInt(inner_pages) + 1;
            if (inner_pages > 0) {
                $("#inner_pages_count").html("+ " + inner_pages)
                $("#total_pages").html(total_pages);
                $("#no_of_pages").html(total_pages);
                $(".total_inner_pages").val(inner_pages);
            } else {
                $("#inner_pages_count").html("")
                $("#total_pages").html(total_pages);
                $("#no_of_pages").html(total_pages);
                $(".total_inner_pages").val(inner_pages);
            }
        }

        $(".section_element").change(function() {
            // $(this).parents().find(".section_here").attr("data-amount", $(this).val());
            $(this).closest(".section_here").attr("data-amount", $(this).val());
            $(this).closest(".section_here").find(".selection").val($(this).attr("data-selection"))

            calculate_current_section_amount($(this));
        });
        $(".section_element_checkbox").change(function() {
            if ($(this).is(":checked")) {
                // $(this).parents().find(".section_here").attr("data-amount", $(this).val());
                $(this).closest(".section_here").attr("data-amount", $(this).val());
                
                $(this).closest(".section_here").find(".selection").val($(this).attr("data-selection"));
            } else {
                // $(this).parents().find(".section_here").attr("data-amount", 0);
                $(this).closest(".section_here").attr("data-amount", 0);
                
                $(this).closest(".section_here").find(".selection").val("");
            }
            calculate_current_section_amount($(this));
        });

        function calculate_current_section_amount(element) {
            var total_amount_main = 0;
            element.closest(".main_div").find(".section_here").each(function() {
                var current_section_amount = $(this).attr("data-amount");
                total_amount_main += parseInt(current_section_amount);
            });
            element.closest(".main_div").attr("data-amount", total_amount_main);
            var summary_element = element.closest(".main_div").attr("data-summary_element");
            $(summary_element).html(total_amount_main);
            var summary_element2 = element.closest(".main_div").attr("data-summary_element2");
            $(summary_element2).val(total_amount_main);
            // calculate_total_amount();
            $("#inner_pages").trigger("change");
            // $(".product_name").trigger("change");
        }

        function calculate_total_amount() {
            var grand_total = 0;
            $(".summary_price:visible").each(function() {
                var current_amount = $(this).html();
                grand_total += parseInt(current_amount);
            });
            $("#total_price").html(grand_total);
            $(".total_price").val(grand_total);
            // console.log("Calculating... - " + grand_total);
            recursion = 0;
        }
        // $("html_layouts_options input").change(function(){
        //     $("")
        // });
        // $("#html_layouts_price").html();
        $("#upload_trigger").click(function(){
            $('#imgupload').trigger('click');
        });
        $('#imgupload').change(function () {
            // alert(document.getElementById("imgupload").files[0].name);
            // var fakePath = $('#imgupload').attr('value').toString().split('\\');
            // alert(fakePath[fakePath.length - 1]);
            $('#upload_name').html(function(){
                // var fakePath = $('#imgupload').attr('value').toString().split('\\');
                // return fakePath[fakePath.length - 1];
                return document.getElementById("imgupload").files[0].name;
            });
        });
    });
</script>
<script>
$('body').scrollspy({
  target: '#nav-pills',
  offset: 52
});

 
</script>
@stop