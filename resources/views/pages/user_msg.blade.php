@extends('layouts.default')
@section('content')
<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
				
            <form method="post" action="{{ url('/user_reply') }}" > 
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				<div class="row comment-box-main p-3 rounded-bottom">
			  		<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
					  <input type="text" name="msg" class="form-control" placeholder="comment ...." />
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
								<h4 class="m-0"><a href="#">{{$user_info->name}}</a></h4>
                                
							    <time class="text-white ml-3">{{$messages->datetime}}</time>
                                
							    <like></like>
							    <p class="mb-0 text-white">{{$messages->msg}}</p>
                                
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
								    <time class="text-white ml-3">{{$messages->datetime}}</time>
								    <like></like>
								    <p class="mb-0 text-white">{{$messages->msg}}</p>
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
    
<!-- section App -->
@stop