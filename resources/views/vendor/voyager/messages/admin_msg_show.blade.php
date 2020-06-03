@php
$edit = !is_null($dataTypeContent->getKey());
$add = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))
<link rel="stylesheet" href="{{ URL::asset('css/user_msg.css') }}"> 
@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i>
     
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content edit-add container-fluid">
	<br>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-bordered">

                <!-- <form role="form" class="form-edit-add" action="http://localhost:8000/admin/products" method="POST" enctype="multipart/form-data"> -->
            <div class="row mt-5" style="margin-top: 13px;">
				<div class="col-md-3">
				</div>
				<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
					
				<form method="post" action="{{ url('/admin/admin_reply', $user_info) }}" > 
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<div class="row comment-box-main p-3 rounded-bottom">
						<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
						<input type="text" name="msg" class="form-control" placeholder="Reply ...." />
						</div>
						<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
							<button class="btn btn-info">Send</button>
						</div>
					</div>
				</form>
                <br/>
                <ul class="p-0">
                 @foreach($messages as $messages)
                   @if($messages->is_user_read == 'send')
					<li>
						<div class="row comments mb-2">
							<div class="col-md-2 col-sm-2 col-3 text-center user-img">
						    	<img id="profile-photo" src="{{URL::asset('images/man01.png')}}" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<h4 class="m-0"><a href="#">{{$messages->name}}</a></h4>
                                
							    <time class="text-white ml-3">{{$messages->datetime}}</time>
                                
							    <like></like>
							    <p class="mb-0 text-white" style="color: white;">{{$messages->msg}}</p>
                                
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
									<h4 class="m-0"><a href="#">{{$messages->name}}</a></h4>
								    <time class="text-white ml-3">{{$messages->datetime}}</time>
								    <like></like>
								    <p class="mb-0 text-white" style="color: white;">{{$messages->msg}}</p>
								</div>
							</div>
						</li>
					</ul>
                    @endif
                    @endforeach
				</ul>
				<div class="col-md-3">
				</div>
			</div>
		</div>

            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script>

</script>
@stop