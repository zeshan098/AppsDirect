@extends('layouts.default')
@section('content')
 

<!-- row -->
<div class="container py-5" style="height: auto;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="frm-ordh1">Order #{{$order->id}} </h1>
        </div>
    </div>
</div>

<!-- row -->

<!-- Form -->
<div class="container form-ord pb-5">
    <div class="row">
        <div class="col-md-12 shadow col-sm-12" style="border: 2px solid #f9f9f9;">
            <div class="row px-5">
                <div class="col-md-12 col-sm-12">
                    <h1 class="frm-ordh1 pt-4">1.Your Details</h1>

                    <p class="ml-2 mt-3 ne-por">Your Name</p>
                    <p class="ml-3 ne-poh1">{{$order->name}}</p>

                    <p class="ml-2 mt-3 ne-por">Email</p>
                    <p class="ml-3 ne-poh1">{{$order->email}}</p>

                    <p class="ml-2 mt-3 ne-por">Project title</p>
                    <p class="ml-3 ne-poh1">{{$order->project_title}}</p>

                    <p class="ml-2 mt-3 ne-por">Number of Pages</p>
                    <p class="ml-3 ne-poh1">{{$order->inner_pages + 1}} pages</p>

                    <p class="ml-2 mt-3 ne-por">Upload files</p>
                    <p class="ml-3 ne-poh1">{{$order->project_document}}</p>

                    @if($order->web_design_order == 1)
                    <p class="ml-2 mt-3 ne-por">Webdesign</p>
                    <p class="ml-3 ne-poh1">{{$order->inner_pages + 1}} pages</p>
                    @endif

                    <p class="ml-2 mt-3 ne-por">Notes</p>
                    <p class="ml-3 ne-poh1">{{$order->notes}}</p>

                     
                    <h1 class="frm-ordh1 pt-4">2.Select Package </h1>
                    <div class="py-2 wp-webd-1 pl-3 pt-2">
                        @if($order->product_name == "Wordpress")
                        <input type="radio" checked><i class="fa fa-wordpress pl-2 " style="color: #00769d;font-size: 22px;"></i>
                        <b class="dobv1">Wordpress website
                            <span class="float-right mr-auto d-block pr-2 " style="font-size: 16px;">€ {{$order->selected_product_price}}</span>
                        </b>
                        @endif
                        @if($order->product_name == "Magento")
                        <input type="radio" checked>
                        <img src="{{URL::asset('images/megento.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                        <b class="dobv1">Magneto Webshop
                            <span class="float-right mr-auto d-block pr-2 " style="font-size: 16px;">€ {{$order->selected_product_price}}</span>
                        </b>
                        @endif
                        @if($order->product_name == "Shopify")
                        <input type="radio" checked>
                        <img src="{{URL::asset('images/shopify.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                        <b class="dobv1">Shopify Webshop
                            <span class="float-right mr-auto d-block pr-2 " style="font-size: 16px;">€ {{$order->selected_product_price}}</span>
                        </b>
                        @endif
                        @if($order->product_name == "Woocommerce")
                        <input type="radio" checked>
                        <img src="{{URL::asset('images/wooo.png')}}" class="img-fluid ml-1" style="height: 30px;width: 30px; margin: 7px 39px 13px 26px;" alt="">
                        <b class="dobv1">Woocommerce Webshop
                            <span class="float-right mr-auto d-block pr-2 " style="font-size: 16px;">€ {{$order->selected_product_price}}</span>
                        </b>
                        @endif

                    </div>

                     
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
                                <div class="monthly_main_1">
                                    <p class="px-5 mt-3 pd-lp2">Monthly Maintainance</p>
                                    @if($order->layout_width_selection == "Fixed")
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input type="radio" name="rad1" value="a" checked>
                                            <i></i></label> {{$order->layout_width_selection}}
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input type="radio" name="rad1" value="a" checked>
                                            <i></i></label> {{$order->layout_width_selection}} <span class="float-right">€ {{$order->layout_width}}</span>
                                    </p>
                                    @endif

                                </div>
                                <div class="monthly_main_2">
                                    <p class="px-5 mt-3 pd-lp2">Layout Horizontal Alignment</p>
                                    @if($order->layout_horizontal_alignment_selection == "Left")
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input type="radio" name="rad1" value="bb" checked>
                                            <i></i></label> Left
                                    </p>
                                    @elseif($order->layout_horizontal_alignment_selection == "Center")
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input type="radio" name="rad1" value="bb" checked>
                                            <i></i></label> Center
                                    </p>
                                    @elseif($order->layout_horizontal_alignment_selection == "Right")
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input type="radio" name="rad1" value="bb" checked>
                                            <i></i></label> Right
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input type="radio" name="rad1" value="bb" checked>
                                            <i></i></label> Header/Footer width Stretch <span class="float-right">€ {{$order->layout_horizontal_alignment}}</span>
                                    </p>
                                    @endif
                                </div>
                                <div class="monthly_main_3">
                                    <p class="px-5 mt-3 pd-lp2">Vertical Alignment</p>
                                    @if($order->layout_vertical_alignment_selection == "Top")
                                    <p class="px-5 mt-3 pd-lp1 qq">
                                        <label class="blue">
                                            <input type="radio" name="rad1" value="ss" checked>
                                            <i></i></label> Top
                                    </p>
                                    @elseif($order->layout_vertical_alignment_selection == "Middle")
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue">
                                            <input type="radio" name="rad1" value="ssa" checked>
                                            <i></i></label> Middle
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1 qq"><label class="blue" checked>
                                            <input type="radio" name="rad1" value="ss" checked>
                                            <i></i></label> Bottom
                                    </p>
                                    @endif
                                </div>
                                <div class="monthly_main_4">

                                    <p class="px-5 mt-3 pd-lp1">
                                        <input type="checkbox" class=" checkbox" checked=checked> {{$order->sticky_footer_selection}}
                                        <span class="float-right">€{{$order->sticky_footer}}</span>
                                    </p>

                                    <p class="px-5 mt-3 pd-lp1">
                                        <input type="checkbox" class=" checkbox" checked=checked> {{$order->sticky_header_selection}}
                                        <span class="float-right">€{{$order->sticky_header}}</span>
                                    </p>

                                </div>
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
                                <div class="monthly_main_1">

                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> {{$order->page_speed_optimization_selection}} <span class="float-right">€{{$order->page_speed_optimization}}</span></p>

                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">TypeKit/google font/@font-face implementation</p>
                                    @if($order->tk_gf_ff_implementation_selection == "No")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>No</label></p>
                                    @elseif($order->tk_gf_ff_implementation_selection == "Typekit")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue"><input type="radio" name="rad1" value="a">
                                            <i></i>Typekit </label> <span class="float-right">€{{$order->tk_gf_ff_implementation}}</span></p>
                                    @elseif($order->tk_gf_ff_implementation_selection == "google font")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>google font</label> <span class="float-right">€{{$order->tk_gf_ff_implementation}}</span></p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>face font</label> <span class="float-right">€{{$order->tk_gf_ff_implementation}}</span></p>
                                    @endif

                                </div>
                                <div class="monthly_main_2">
                                    @if($order->retina_display_compatibility_selection == "Retina Display Compatibility")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Retina Display Compatibility <span class="float-right">€{{$order->retina_display_compatibility}}</span></p>
                                    @endif
                                    @if($order->section_compliance_selection == "Section 508 Compliance")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Section 508 Compliance <span class="float-right">€{{$order->section_compliance}}</span></p>
                                    @endif
                                    @if($order->mouseover_effects_selection == "Mouseover Effects(DHTML Rollovers)")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Mouseover Effects(DHTML Rollovers) </p>
                                    @endif
                                </div>
                                <div class="monthly_main_3">
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Implement Dynamic Menus</p>
                                    @if($order->dynamic_menus_selection == "No")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>No</label>
                                    </p>
                                    @elseif($order->dynamic_menus_selection == "One-Level Drop-Down Menu")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>One-Level Drop-Down Menu</label><span class="float-right">€{{$order->dynamic_menus}}</span>
                                    </p>
                                    @elseif($order->dynamic_menus_selection == "Multi-Level Drop-Down Menu")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Multi-Level Drop-Down Menu</label><span class="float-right">{{$order->dynamic_menus}}</span>
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Mega Menu</label><span class="float-right">{{$order->dynamic_menus}}</span>
                                    </p>
                                    @endif
                                </div>
                                <div class="monthly_main_4">
                                    @if($order->jquery_implementation_selection == "Jquery Implementation")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> {{$order->jquery_implementation_selection}} <span class="float-right">€{{$order->jquery_implementation}}</span></p>
                                    @endif
                                    @if($order->font_resize_selection == "Font Resize")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> {{$order->font_resize_selection}} <span class="float-right">€{{$order->font_resize}}</span></p>
                                    @endif
                                </div>
                                <div class="monthly_main_5">
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">W3C Standards</p>
                                    @if($order->wc_standards_selection == "W3C Valid HTML 4.01")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>W3C Valid HTML 4.01</label>
                                    </p>
                                    @elseif($order->wc_standards_selection == "W3C Valid XHTML 1.0 Transitional")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>W3C Valid XHTML 1.0 Transitional</label>
                                    </p>
                                    @elseif($order->wc_standards_selection == "W3C Valid XHTML 1.0 Strict")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>W3C Valid XHTML 1.0 Strict</label>
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>W3C Valid HTML5</label>
                                    </p>
                                    @endif
                                </div>
                                <div class="monthly_main_6">
                                    @if($order->table_less_coding_selection == "Table-less Coding")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Table-less Coding </p>
                                    @endif
                                    @if($order->ssi_implementation_selection == "SSI Implementation")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> SSI Implementation <span class="float-right">€28</span></p>
                                    @endif
                                    @if($order->commented_markup_selection == "Commented Markup")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Commented Markup </p>
                                    @endif
                                    @if($order->favicon_selection == "Favicon")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Favicon </p>
                                    @endif
                                    @if($order->css_sprite_selection == "CSS Sprite")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> CSS Sprite <span class="float-right">€28</span></p>
                                    @endif
                                </div>
                                <div class="monthly_main_7">
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">CSS Frameworks</p>
                                    @if($order->css_framework_selection == "No")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>No</label>
                                    </p>
                                    @elseif($order->css_framework_selection == "Twitter bootstrap")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Twitter bootstrap</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Foundation framework")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Foundation framework</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Boiler Plate")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Boiler Plate</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Less framework")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Less framework</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Fluid baseline grid")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Fluid baseline grid</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "SASS framework")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>SASS framework</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Bootstrap with SASS")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Bootstrap with SASS</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Materialize CSS")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Materialize CSS</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @elseif($order->css_framework_selection == "Semantic UI")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Semantic UI</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>AMP</label> <span class="float-right">€{{$order->css_framework}}</span>
                                    </p>
                                    @endif
                                </div>
                                <div class="monthly_main_8">
                                    @if($order->css_reset_selection == "CSS Reset")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> CSS Reset </p>
                                    @endif
                                    @if($order->normalize_css_selection == "Normalize CSS")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Normalize CSS </p>
                                    @endif
                                    @if($order->print_css_selection == "Print CSS")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Print CSS <span class="float-right">€{{$order->print_css}}</span> </p>
                                    @endif
                                    @if($order->contact_form_implementation_selection == "Contact Form Implementation")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Contact Form Implementation <span class="float-right">€{{$order->contact_form_implementation}}</span></p>
                                    @endif
                                </div>
                                <div class="monthly_main_9">
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Theme installation</p>
                                    @if($order->theme_installation_selection == "No")
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>No</label>
                                    </p>
                                    @else
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>Yes</label> <span class="float-right">€{{$order->theme_installation}}</span>
                                    </p>
                                    @endif

                                </div>
                                <div class="monthly_main_10">
                                    @if($order->microformat_selection == "Microformat")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Microformat
                                        <span class="float-right">€{{$order->microformat}}</span></p>
                                    @endif
                                    @if($order->schema_selection == "Schema")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Schema
                                        <span class="float-right">€{{$order->schema}}</span> </p>
                                    @endif
                                    @if($order->screen_readers_compatibility_selection == "Screen Readers Compatibility")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Screen Readers Compatibility
                                        <span class="float-right">€{{$order->screen_readers_compatibility}}</span> </p>
                                    @endif
                                    @if($order->font_awesome_selection == "Font Awesome")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> Font Awesome
                                        <span class="float-right">€{{$order->font_awesome}}</span></p>
                                    @endif
                                    @if($order->wp_advanced_theme_control_selection == "WP Advanced Theme Control")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> {{$order->wp_advanced_theme_control_selection }}
                                        <span class="float-right">€{{$order->wp_advanced_theme_control}}</span></p>
                                    @endif
                                    @if($order->ithemes_security_pro_plugin_selection == "iThemes Security Pro Plugin")
                                    <p class="px-5 mt-3 pd-lp1"><input type="checkbox" class=" checkbox" checked=checked> {{$order->ithemes_security_pro_plugin_selection}}
                                        <span class="float-right">€{{$order->ithemes_security_pro_plugin}}</span></p>
                                    @endif
                                </div>

                                <div class="monthly_main_10_0">
                                    @if($order->magento_version_selection == "Magento 2.2")
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Magento Version</p>

                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>2.2</label>
                                    </p>
                                    @elseif($order->magento_version_selection == "Magento 2.3")
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Magento Version</p>
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>2.3</label>
                                    </p>
                                    @elseif($order->magento_version_selection == "Magento 2.4")
                                    <p class="px-5 mt-3 pd-lp2" style=" font-weight: 600; font-size: 15px; ">Magento Version</p>
                                    <p class="px-5 mt-3 pd-lp1"><label class="blue">
                                            <input type="radio" name="rad1" value="a">
                                            <i></i>2.4</label>
                                    </p>
                                    @else
                                    <p> </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>



                    <h1 class="frm-ordh1 pt-4">4.Maintainance & Hosting</h1>
                    @if($order->product_name == "Wordpress")
                    <p class="ml-2 mt-3 ne-por">Hosting</p>
                    @if($order->hosting_selection == "None")
                    <p class="ml-4 mt-3 ne-por">None </p>
                    @elseif($order->hosting_selection == "Basis")
                    <p class="ml-4 mt-3 ne-por">Basis €15 p.m 100 GB SSD , 5 domeinnamen, CPU 6core , RAM 4GB , backup tot 60 dagen , varnish
                        <span class="pull-right">€{{$order->hosting}}</span></p>
                    @elseif($order->hosting_selection == "Pro")
                    <p class="ml-4 mt-3 ne-por"> Pro €25 p.m 250 GB SSD , 15 domeinnamen, CPU 8core , RAM 6GB , backup tot 60 dagen , varnish
                        <span class="pull-right">€{{$order->hosting}}</span></p>
                    @elseif($order->maintainance_wordpress_selection == "Basis")
                    <p class="ml-4 mt-3 ne-por">Basis €50 p.m Wordpress updates
                        <span class="pull-right">€{{$order->maintainance_wordpress}}</span></p>
                    @else
                    <p class="ml-4 mt-3 ne-por">None
                        @endif
                        @elseif($order->product_name == "Magento")
                        <p class="ml-2 mt-3 ne-por">Hosting</p>
                        @if($order->hosting_selection == "None")
                        <p class="ml-4 mt-3 ne-por">None </p>
                        @elseif($order->hosting_selection == "Basis")
                        <p class="ml-4 mt-3 ne-por">Basis €15 p.m 100 GB SSD , 5 domeinnamen, CPU 6core , RAM 4GB , backup tot 60 dagen , varnish
                            <span class="pull-right">€{{$order->hosting}}</span></p>
                        @elseif($order->hosting_selection == "Pro")
                        <p class="ml-4 mt-3 ne-por"> Pro €25 p.m 250 GB SSD , 15 domeinnamen, CPU 8core , RAM 6GB , backup tot 60 dagen , varnish
                            <span class="pull-right">€{{$order->hosting}}</span></p>
                        @elseif($order->maintainance_wordpress_selection == "Basis")
                        <p class="ml-4 mt-3 ne-por">Basis €50 p.m Wordpress updates
                            <span class="pull-right">€{{$order->maintainance_wordpress}}</span></p>
                        @else
                        <p class="ml-4 mt-3 ne-por">None
                            @endif
                            @endif
                            <hr>
                            <p class="ml-3 ne-poh1 text-center mt-3">Total <span class="pull-right">€{{$order->total_price}}</span></p>

                </div>
            </div>
        </div>
         
    </div>
</div>
<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
				
            <form method="post" action="{{ url('/user_reply') }}" > 
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				<div class="row comment-box-main p-3 rounded-bottom">
                    <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box" style="display:none">
                        <input type="text" name="order_id" class="form-control" value="{{$order->id}}"  />
                        </div>
			  		<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
					  <input type="text" name="msg" class="form-control"  placeholder="Write Here ...." />
			  		</div>
			  		<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
			  			<button class="btn btn-info">Send</button>
			  		</div>
				</div>
            </form>
                <br/>
                <ul class="p-0">
                 @foreach($messages as $mesg)
                   @if($mesg->is_user_read == 'send')
					<li>
						<div class="row comments mb-2">
							<div class="col-md-2 col-sm-2 col-3 text-center user-img">
						    	<img id="profile-photo" src="{{URL::asset('images/man01.png')}}" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<h4 class="m-0"><a href="#">{{$user_info->name}}</a></h4>
                                
							    <time class="text-white ml-3">{{$mesg->datetime}}</time>
                                
							    <like></like>
							    <p class="mb-0 text-white">{{$mesg->msg}}</p>
                                
							</div>
						</div>
					</li>
                    @else
					<ul class="p-0">
						<li>
							<div class="row comments mb-2">
								<div class="col-md-2 offset-md-2 col-sm-2 offset-sm-2 col-3 offset-1 text-center user-img">
							    	<img id="profile-photo" src="{{URL::asset('images/man02.png')}}" class="rounded-circle" />
								</div>
								<div class="col-md-7 col-sm-7 col-8 comment rounded mb-2">
									<h4 class="m-0"><a href="#">Admin</a></h4>
								    <time class="text-white ml-3">{{$mesg->datetime}}</time>
								    <like></like>
								    <p class="mb-0 text-white">{{$mesg->msg}}</p>
								</div>
							</div>
						</li>
					</ul>
                    @endif
                    @endforeach
				</ul>
			</div>
		</div>
	</div>
@stop