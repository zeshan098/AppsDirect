@php
$edit = !is_null($dataTypeContent->getKey());
$add = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i>
    {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">

                <!-- <form role="form" class="form-edit-add" action="http://localhost:8000/admin/products" method="POST" enctype="multipart/form-data"> -->
                <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                    @if($edit)
                        {{ method_field("PUT") }}
                    @endif
                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}

                    <!-- Adding / Editing -->
                    @php
                        //$dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                        //dd($dataTypeContent);
                    @endphp

                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Name</label>
                                <input type="hidden" class="form-control" name="id" value="{{$dataTypeContent->id}}">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$dataTypeContent->name}}">
                            </div>

                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="Amount" value="{{$dataTypeContent->amount}}">
                            </div>

                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Amount Inner Page (Per Page)</label>
                                <input type="text" class="form-control" name="amount_inner_per_page" placeholder="Amount Inner Page (Per Page)" value="{{$dataTypeContent->amount_inner_per_page}}">
                            </div>

                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Design Per Page</label>
                                <input type="text" class="form-control" name="amount_design_per_page" placeholder="Amount Design Per Page" value="{{$dataTypeContent->amount_design_per_page}}">
                            </div>
                        </div>

                        <div class="panel-body">
                            <h3>Additional Options</h3>
                            <div class="panel-body">
                                <h4>1 - Html Layouts Options </h4>
                                <div class="panel-body">
                                    <h5>Layout Width</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="fixed_width" {{$dataTypeContent->fixed_width ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Fixed</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Fixed Width Amount</label>
                                                <input type="text" class="form-control" name="fixed_width_amount" placeholder="Fixed Width Amount" value="{{$dataTypeContent->fixed_width_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="liquid_width" {{$dataTypeContent->liquid_width ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Liquid</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Liquid Width Amount</label>
                                                <input type="text" class="form-control" name="liquid_width_amount" placeholder="Liquid Width Amount" value="{{$dataTypeContent->liquid_width_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Layout Horizontal Alignment</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="horizontal_alignment_left" {{$dataTypeContent->horizontal_alignment_left ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Align Left</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Left Alignment Amount</label>
                                                <input type="text" class="form-control" name="horizontal_alignment_left_amount" placeholder="Left Alignment Amount" value="{{$dataTypeContent->horizontal_alignment_left_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="horizontal_alignment_center" {{$dataTypeContent->horizontal_alignment_center ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Align Center</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Center Alignment Amount</label>
                                                <input type="text" class="form-control" name="horizontal_alignment_center_amount" placeholder="Center Alignment Amount" value="{{$dataTypeContent->horizontal_alignment_center_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="horizontal_alignment_right" {{$dataTypeContent->horizontal_alignment_right ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Align Right</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Right Alignment Amount</label>
                                                <input type="text" class="form-control" name="horizontal_alignment_right_amount" placeholder="Right Alignment Amount" value="{{$dataTypeContent->horizontal_alignment_right_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="horizontal_alignment_stretch" {{$dataTypeContent->horizontal_alignment_stretch ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Header/Footer width Stretch</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Header/Footer width Stretch Amount</label>
                                                <input type="text" class="form-control" name="horizontal_alignment_stretch_amount" placeholder="Stretch Alignment Amount" value="{{$dataTypeContent->horizontal_alignment_stretch_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Layout Vertical Alignment</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="vertical_alignment_top" {{$dataTypeContent->vertical_alignment_top ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Align Top</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Top Alignment Amount</label>
                                                <input type="text" class="form-control" name="vertical_alignment_top_amount" placeholder="Top Alignment Amount" value="{{$dataTypeContent->vertical_alignment_top_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="vertical_alignment_middle" {{$dataTypeContent->vertical_alignment_middle ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Align Middle</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Middle Alignment Amount</label>
                                                <input type="text" class="form-control" name="vertical_alignment_middle_amount" placeholder="Middle Alignment Amount" value="{{$dataTypeContent->vertical_alignment_middle_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="vertical_alignment_bottom" {{$dataTypeContent->vertical_alignment_bottom ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Align Bottom</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Bottom Alignment Amount</label>
                                                <input type="text" class="form-control" name="vertical_alignment_bottom_amount" placeholder="Bottom Alignment Amount" value="{{$dataTypeContent->vertical_alignment_bottom_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="sticky_header" {{$dataTypeContent->sticky_header ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Sticky Header</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Sticky Header Amount</label>
                                            <input type="text" class="form-control" name="sticky_header_amount" placeholder="Sticky Headers Amount" value="{{$dataTypeContent->sticky_header_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="sticky_footer" {{$dataTypeContent->sticky_footer ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Sticky Footer</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Sticky Footer Amount</label>
                                            <input type="text" class="form-control" name="sticky_footer_amount" placeholder="Sticky Footer Amount" value="{{$dataTypeContent->sticky_footer_amount}}">
                                        </div>
                                    </div>
                                </div>
                                <h4>2 - Browser Device/Compatibility Options </h4>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="compatibility_iphone_ipad_android" {{$dataTypeContent->compatibility_iphone_ipad_android ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Iphone, Ipad and Android Device Compatibility Free</label>
                                        </div>
                                        <div class="form-group col-md-6 hidden">
                                            <label class="control-label" for="name">Iphone, Ipad and Android Device Compatibility Free Amount</label>
                                            <input type="text" class="form-control" name="compatibility_iphone_ipad_android_amount" placeholder="Iphone, Ipad and Android Device Compatibility Free Amount" value="{{$dataTypeContent->compatibility_iphone_ipad_android_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="compatibility_windows_blackberry" {{$dataTypeContent->compatibility_windows_blackberry ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Windows 7 and BlackBerry Device Compatibility Free</label>
                                        </div>
                                        <div class="form-group col-md-6 hidden">
                                            <label class="control-label" for="name">Windows 7 and BlackBerry Device Compatibility Free Amount</label>
                                            <input type="text" class="form-control" name="compatibility_windows_blackberry_amount" placeholder="Windows 7 and BlackBerry Device Compatibility Free Amount" value="{{$dataTypeContent->compatibility_windows_blackberry_amount}}">
                                        </div>
                                    </div>
                                </div>
                                <h4>3 - HTML / XHTML Advanced Options </h4>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="page_speed_optimization" {{$dataTypeContent->page_speed_optimization ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Page Speed Optimization</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Page Speed Optimization Amount</label>
                                            <input type="text" class="form-control" name="page_speed_optimization_amount" placeholder="Page Speed Optimization Amount" value="{{$dataTypeContent->page_speed_optimization_amount}}">
                                        </div>
                                    </div>
                                    <h5>Typekit/google-font/@font-face Implementation</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="typekit_none" {{$dataTypeContent->typekit_none ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="typekit_none_amount" placeholder="None Amount" value="{{$dataTypeContent->typekit_none_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="typekit" {{$dataTypeContent->typekit ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Typekit</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Typekit Amount</label>
                                                <input type="text" class="form-control" name="typekit_amount" placeholder="Typekit Amount" value="{{$dataTypeContent->typekit_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="google_font" {{$dataTypeContent->google_font ? "checked":""}} value="1">
                                                <label class="control-label" for="name">google-font</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">google-font Amount</label>
                                                <input type="text" class="form-control" name="google_font_amount" placeholder="google-font Amount" value="{{$dataTypeContent->google_font_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="font_face" {{$dataTypeContent->font_face ? "checked":""}} value="1">
                                                <label class="control-label" for="name">@font-face</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">@font-face Amount</label>
                                                <input type="text" class="form-control" name="font_face_amount" placeholder="@font-face Amount" value="{{$dataTypeContent->font_face_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="retina_display_compatibility" {{$dataTypeContent->retina_display_compatibility ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Retina Display Compatibility</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Retina Display Compatibility Amount</label>
                                            <input type="text" class="form-control" name="retina_display_compatibility_amount" placeholder="Retina Display Compatibility Amount" value="{{$dataTypeContent->retina_display_compatibility_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="section_508_compliance" {{$dataTypeContent->section_508_compliance ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Section 508 Compliance</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Section 508 Compliance Amount</label>
                                            <input type="text" class="form-control" name="section_508_compliance_amount" placeholder="Section 508 Compliance Amount" value="{{$dataTypeContent->section_508_compliance_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="mouseover_effects" {{$dataTypeContent->mouseover_effects ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Mouseover Effects (DHTML Rollovers)</label>
                                        </div>
                                        <div class="form-group col-md-6 hidden">
                                            <label class="control-label" for="name">Mouseover Effects (DHTML Rollovers) Amount</label>
                                            <input type="text" class="form-control" name="mouseover_effects_amount" placeholder="Mouseover Effects (DHTML Rollovers) Amount" value="{{$dataTypeContent->mouseover_effects_amount}}">
                                        </div>
                                    </div>
                                    <h5>Implement Dynamic Menus</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="menus_none" {{$dataTypeContent->menus_none ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="menus_none_amount" placeholder="None Amount" value="{{$dataTypeContent->menus_none_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="menu_one_level" {{$dataTypeContent->menu_one_level ? "checked":""}} value="1">
                                                <label class="control-label" for="name">One-Level Drop-Down Menu</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">One-Level Drop-Down Menu Amount</label>
                                                <input type="text" class="form-control" name="menu_one_level_amount" placeholder="One-Level Drop-Down Menu Amount" value="{{$dataTypeContent->menu_one_level_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="menu_multi_level" {{$dataTypeContent->menu_multi_level ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Multi-Level Drop-Down Menu</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Multi-Level Drop-Down Menu Amount</label>
                                                <input type="text" class="form-control" name="menu_multi_level_amount" placeholder="Multi-Level Drop-Down Menu Amount" value="{{$dataTypeContent->menu_multi_level_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="menu_mega_level" {{$dataTypeContent->menu_mega_level ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Mega Menu</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Mega Menu Amount</label>
                                                <input type="text" class="form-control" name="menu_mega_level_amount" placeholder="Mega Menu Amount" value="{{$dataTypeContent->menu_mega_level_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="jquery_implementation" {{$dataTypeContent->jquery_implementation ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Jquery Implementation</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Jquery Implementation Amount</label>
                                            <input type="text" class="form-control" name="jquery_implementation_amount" placeholder="Jquery Implementation Amount" value="{{$dataTypeContent->jquery_implementation_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="font_resize" {{$dataTypeContent->font_resize ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Font Resize</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Font Resize Amount</label>
                                            <input type="text" class="form-control" name="font_resize_amount" placeholder="Font Resize Amount" value="{{$dataTypeContent->font_resize_amount}}">
                                        </div>
                                    </div>
                                    <h5>W3C Standards</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="html" {{$dataTypeContent->html ? "checked":""}} value="1">
                                                <label class="control-label" for="name">W3C Valid HTML 4.01</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">W3C Valid HTML 4.01 Amount</label>
                                                <input type="text" class="form-control" name="html_amount" placeholder="W3C Valid HTML 4.01 Amount" value="{{$dataTypeContent->html_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="xhtml_transitional" {{$dataTypeContent->xhtml_transitional ? "checked":""}} value="1">
                                                <label class="control-label" for="name">W3C Valid XHTML 1.0 Transitional</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">W3C Valid XHTML 1.0 Transitional Amount</label>
                                                <input type="text" class="form-control" name="xhtml_transitional_amount" placeholder="W3C Valid XHTML 1.0 Transitional Amount" value="{{$dataTypeContent->xhtml_transitional_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="xhtml_strict" {{$dataTypeContent->xhtml_strict ? "checked":""}} value="1">
                                                <label class="control-label" for="name">W3C Valid XHTML 1.0 Strict</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">W3C Valid XHTML 1.0 Strict Amount</label>
                                                <input type="text" class="form-control" name="xhtml_strict_amount" placeholder="W3C Valid XHTML 1.0 Strict Amount" value="{{$dataTypeContent->xhtml_strict_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="html5" {{$dataTypeContent->html5 ? "checked":""}} value="1">
                                                <label class="control-label" for="name">W3C Valid HTML5</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">W3C Valid HTML5 Amount</label>
                                                <input type="text" class="form-control" name="html5_amount" placeholder="W3C Valid HTML5 Amount" value="{{$dataTypeContent->html5_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="table_less_coding" {{$dataTypeContent->table_less_coding ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Table-less Coding</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Table-less Coding Amount</label>
                                            <input type="text" class="form-control" name="table_less_coding_amount" placeholder="Table-less Coding Amount" value="{{$dataTypeContent->table_less_coding_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="ssi_implementation" {{$dataTypeContent->ssi_implementation ? "checked":""}} value="1">
                                            <label class="control-label" for="name">SSI Implementation</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">SSI Implementation Amount</label>
                                            <input type="text" class="form-control" name="ssi_implementation_amount" placeholder="SSI Implementation Amount" value="{{$dataTypeContent->ssi_implementation_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="commented_markup" {{$dataTypeContent->commented_markup ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Commented Markup</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Commented Markup Amount</label>
                                            <input type="text" class="form-control" name="commented_markup_amount" placeholder="Commented Markup Amount" value="{{$dataTypeContent->commented_markup_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="favicon" {{$dataTypeContent->favicon ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Favicon</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Favicon Amount</label>
                                            <input type="text" class="form-control" name="favicon_amount" placeholder="Favicon Amount" value="{{$dataTypeContent->favicon_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="css_sprite" {{$dataTypeContent->css_sprite ? "checked":""}} value="1">
                                            <label class="control-label" for="name">CSS Sprite</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">CSS Sprite Amount</label>
                                            <input type="text" class="form-control" name="css_sprite_amount" placeholder="CSS Sprite Amount" value="{{$dataTypeContent->css_sprite_amount}}">
                                        </div>
                                    </div>
                                    <h5>CSS Frameworks</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_none" {{$dataTypeContent->css_framework_none ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="css_framework_none_amount" placeholder="None Amount" value="{{$dataTypeContent->css_framework_none_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_twitter_bootstrap" {{$dataTypeContent->css_framework_twitter_bootstrap ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Twitter Bootstrap</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Twitter Bootstrap Amount</label>
                                                <input type="text" class="form-control" name="css_framework_twitter_bootstrap_amount" placeholder="Twitter Bootstrap Amount" value="{{$dataTypeContent->css_framework_twitter_bootstrap_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_foundation" {{$dataTypeContent->css_framework_foundation ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Foundation Framework</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Foundation Framework Amount</label>
                                                <input type="text" class="form-control" name="css_framework_foundation_amount" placeholder="Foundation Framework Amount" value="{{$dataTypeContent->css_framework_foundation_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_boiler_plate" {{$dataTypeContent->css_framework_boiler_plate ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Boiler Plate</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Boiler Plate Amount</label>
                                                <input type="text" class="form-control" name="css_framework_boiler_plate_amount" placeholder="Boiler Plate Amount" value="{{$dataTypeContent->css_framework_boiler_plate_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_less" {{$dataTypeContent->css_framework_less ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Less Framework</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Less Framework Amount</label>
                                                <input type="text" class="form-control" name="css_framework_less_amount" placeholder="Less Framework Amount" value="{{$dataTypeContent->css_framework_less_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_fluid_baseline_grid" {{$dataTypeContent->css_framework_fluid_baseline_grid ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Fluid Baseline Grid</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Fluid Baseline Grid Amount</label>
                                                <input type="text" class="form-control" name="css_framework_fluid_baseline_grid_amount" placeholder="Fluid Baseline Grid Amount" value="{{$dataTypeContent->css_framework_fluid_baseline_grid_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_sass" {{$dataTypeContent->css_framework_sass ? "checked":""}} value="1">
                                                <label class="control-label" for="name">SASS Framework</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">SASS Framework Amount</label>
                                                <input type="text" class="form-control" name="css_framework_sass_amount" placeholder="SASS Framework Amount" value="{{$dataTypeContent->css_framework_sass_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_bootstrap_with_sass" {{$dataTypeContent->css_framework_bootstrap_with_sass ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Bootstrap with SASS</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Bootstrap with SASS Amount</label>
                                                <input type="text" class="form-control" name="css_framework_bootstrap_with_sass_amount" placeholder="Bootstrap with SASS Amount" value="{{$dataTypeContent->css_framework_bootstrap_with_sass_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_materialize_css" {{$dataTypeContent->css_framework_materialize_css ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Materialize CSS</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Materialize CSS Amount</label>
                                                <input type="text" class="form-control" name="css_framework_materialize_css_amount" placeholder="Materialize CSS Amount" value="{{$dataTypeContent->css_framework_materialize_css_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_semantic_ui" {{$dataTypeContent->css_framework_semantic_ui ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Semantic UI</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Semantic UI Amount</label>
                                                <input type="text" class="form-control" name="css_framework_semantic_ui_amount" placeholder="Semantic UI Amount" value="{{$dataTypeContent->css_framework_semantic_ui_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="css_framework_amp" {{$dataTypeContent->css_framework_amp ? "checked":""}} value="1">
                                                <label class="control-label" for="name">AMP</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">AMP Amount</label>
                                                <input type="text" class="form-control" name="css_framework_amp_amount" placeholder="AMP Amount" value="{{$dataTypeContent->css_framework_amp_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="css_reset" {{$dataTypeContent->css_reset ? "checked":""}} value="1">
                                            <label class="control-label" for="name">CSS Reset</label>
                                        </div>
                                        <div class="form-group col-md-6 hidden">
                                            <label class="control-label" for="name">CSS Reset Amount</label>
                                            <input type="text" class="form-control" name="css_reset_amount" placeholder="CSS Reset Amount" value="{{$dataTypeContent->css_reset_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="css_normalize" {{$dataTypeContent->css_normalize ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Normalize CSS</label>
                                        </div>
                                        <div class="form-group col-md-6 hidden">
                                            <label class="control-label" for="name">Normalize CSS Amount</label>
                                            <input type="text" class="form-control" name="css_normalize_amount" placeholder="Normalize CSS Amount" value="{{$dataTypeContent->css_normalize_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="css_print" {{$dataTypeContent->css_print ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Print CSS</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Print CSS Amount</label>
                                            <input type="text" class="form-control" name="css_print_amount" placeholder="Print CSS Amount" value="{{$dataTypeContent->css_print_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="css_contact_form" {{$dataTypeContent->css_contact_form ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Contact Form Implementation</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Contact Form Implementation Amount</label>
                                            <input type="text" class="form-control" name="css_contact_form_amount" placeholder="Contact Form Implementation Amount" value="{{$dataTypeContent->css_contact_form_amount}}">
                                        </div>
                                    </div>
                                    <h5>Theme installation</h5>
                                    <div class="panel-body">
                                        * Leave empty for shopify product
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="none_theme_installation" {{$dataTypeContent->none_theme_installation ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="none_theme_installation_amount" placeholder="None Amount" value="{{$dataTypeContent->none_theme_installation_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="yes_theme_installation" {{$dataTypeContent->yes_theme_installation ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Yes</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Theme Amount</label>
                                                <input type="text" class="form-control" name="yes_theme_installation_amount" placeholder="Theme Amount" value="{{$dataTypeContent->yes_theme_installation_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="microformat" {{$dataTypeContent->microformat ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Microformat</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Microformat Amount</label>
                                            <input type="text" class="form-control" name="microformat_amount" placeholder="Microformat Amount" value="{{$dataTypeContent->microformat_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="schema" {{$dataTypeContent->schema ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Schema</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Schema Amount</label>
                                            <input type="text" class="form-control" name="schema_amount" placeholder="Schema Amount" value="{{$dataTypeContent->schema_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="screen_readers_compatibility" {{$dataTypeContent->screen_readers_compatibility ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Screen Readers Compatibility</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Screen Readers Compatibility Amount</label>
                                            <input type="text" class="form-control" name="screen_readers_compatibility_amount" placeholder="Screen Readers Compatibility Amount" value="{{$dataTypeContent->screen_readers_compatibility_amount}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="font_awesome" {{$dataTypeContent->font_awesome ? "checked":""}} value="1">
                                            <label class="control-label" for="name">Font Awesome</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="name">Font Awesome Amount</label>
                                            <input type="text" class="form-control" name="font_awesome_amount" placeholder="Font Awesome Amount" value="{{$dataTypeContent->font_awesome_amount}}">
                                        </div>
                                    </div>
                                    <h5>Magento Version</h5>
                                    <div class="panel-body">
                                        * For Magento Only
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="magento_version_2p2" {{$dataTypeContent->magento_version_2p2 ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Magento Version 2.2</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">Magento Version 2.2 Amount</label>
                                                <input type="text" class="form-control" name="magento_version_2p2_amount" placeholder="Magento Version 2.2 Amount" value="{{$dataTypeContent->magento_version_2p2_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="magento_version_2p3" {{$dataTypeContent->magento_version_2p3 ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Magento Version 2.3</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">Magento Version 2.3 Amount</label>
                                                <input type="text" class="form-control" name="magento_version_2p3_amount" placeholder="Magento Version 2.3 Amount" value="{{$dataTypeContent->magento_version_2p3_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="magento_version_2p4" {{$dataTypeContent->magento_version_2p4 ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Magento Version 2.4</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">Magento Version 2.4 Amount</label>
                                                <input type="text" class="form-control" name="magento_version_2p4_amount" placeholder="Magento Version 2.4 Amount" value="{{$dataTypeContent->magento_version_2p4_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Wordpress or Woocommerce</h5>
                                    <div class="panel-body">
                                        * For Wordpress or Woocommerce Only
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="wp_advanced_theme_control" {{$dataTypeContent->wp_advanced_theme_control ? "checked":""}} value="1">
                                                <label class="control-label" for="name">WP Advanced Theme Control</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">WP Advanced Theme Control Amount</label>
                                                <input type="text" class="form-control" name="wp_advanced_theme_control_amount" placeholder="WP Advanced Theme Control Amount" value="{{$dataTypeContent->wp_advanced_theme_control_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="ithemes_security_pro_plugin" {{$dataTypeContent->ithemes_security_pro_plugin ? "checked":""}} value="1">
                                                <label class="control-label" for="name">iThemes Security Pro Plugin</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">iThemes Security Pro Plugin Amount</label>
                                                <input type="text" class="form-control" name="ithemes_security_pro_plugin_amount" placeholder="iThemes Security Pro Plugin Amount" value="{{$dataTypeContent->ithemes_security_pro_plugin_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Point 3 -->
                                <h4>4 - Maintenance & Hosting</h4>
                                <div class="panel-body">
                                    <h5>Hosting</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="none_hosting" {{$dataTypeContent->none_hosting ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="none_hosting_amount" placeholder="None Amount" value="{{$dataTypeContent->none_hosting_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="basis_hosting" {{$dataTypeContent->basis_hosting ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Basis €15 p.m 100 GB SSD , 5 domeinnamen, CPU 6core , RAM 4GB , backup tot 60 dagen , varnish</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Basis €15 p.m 100 GB SSD , 5 domeinnamen, CPU 6core , RAM 4GB , backup tot 60 dagen , varnish</label>
                                                <input type="text" class="form-control" name="basis_hosting_amount" placeholder="Basis Hosting Amount" value="{{$dataTypeContent->basis_hosting_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="pro_hosting" {{$dataTypeContent->pro_hosting ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Pro €25 p.m 250 GB SSD , 15 domeinnamen, CPU 8core , RAM 6GB , backup tot 60 dagen , varnish</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Pro €25 p.m 250 GB SSD , 15 domeinnamen, CPU 8core , RAM 6GB , backup tot 60 dagen , varnish</label>
                                                <input type="text" class="form-control" name="pro_hosting_amount" placeholder="Pro Hosting Amount" value="{{$dataTypeContent->pro_hosting_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Maintenance (For Magento)</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="none_maintenance_magento" {{$dataTypeContent->none_maintenance_magento ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="none_maintenance_magento_amount" placeholder="None Amount" value="{{$dataTypeContent->none_maintenance_magento_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="basis_maintenance_magento" {{$dataTypeContent->basis_maintenance_magento ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Basis €175 p.m alle Magento updates , alle Magento patches , alle Extensie updates</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Basis €175 p.m alle Magento updates , alle Magento patches , alle Extensie updates</label>
                                                <input type="text" class="form-control" name="basis_maintenance_magento_amount" placeholder="Basis Maintenance Amount" value="{{$dataTypeContent->basis_maintenance_magento_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="light_hosting_magento" {{$dataTypeContent->light_hosting_magento ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Light €125 p.m alle Magento updates max 2x p.j , alle Magento patches , alle Extensie updates</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Light €125 p.m alle Magento updates max 2x p.j , alle Magento patches , alle Extensie updates</label>
                                                <input type="text" class="form-control" name="light_hosting_magento_amount" placeholder="Light Hosting Amount" value="{{$dataTypeContent->light_hosting_magento_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Maintenance (For Wordpress)</h5>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="none_maintenance_wp" {{$dataTypeContent->none_maintenance_wp ? "checked":""}} value="1">
                                                <label class="control-label" for="name">None</label>
                                            </div>
                                            <div class="form-group col-md-6 hidden">
                                                <label class="control-label" for="name">None Amount</label>
                                                <input type="text" class="form-control" name="none_maintenance_wp_amount" placeholder="None Amount" value="{{$dataTypeContent->none_maintenance_wp_amount}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="basis_maintenance_wp" {{$dataTypeContent->basis_maintenance_wp ? "checked":""}} value="1">
                                                <label class="control-label" for="name">Basis €50 p.m Wordpress updates</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="name">Basis €50 p.m Wordpress updates</label>
                                                <input type="text" class="form-control" name="basis_maintenance_wp_amount" placeholder="Basis Maintenance Amount" value="{{$dataTypeContent->basis_maintenance_wp_amount}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- panel-body -->

                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary save">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script>

</script>
@stop