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
                                <label class="control-label" for="name">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Amount" value="{{$dataTypeContent->email}}">
                            </div>

                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Message</label>
                                <input type="text" class="form-control" name="msg"   value="{{$dataTypeContent->msg}}">
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