@extends('layouts.default')
@section('css')
 
@stop
@section('content')
 
<main id="profile-main">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 col-sm-3">
                <div class="profile-sidebar">
                    <ul class="nav nav-tabs sidebar-list">
                        <li>
                            <a href="#home" data-toggle="tab" class="active icon icon-dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a href="#profile" data-toggle="tab" class="icon icon-profile">Profile</a>
                        </li>
                        <li>
                            <a href="#messages" data-toggle="tab" class="icon icon-setting">Setting</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-9 profile-content">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <h4 class="heading-primary">Dashboard</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4 mt-4">
                                <div class="shadow py-3 px-3">
                                    <h6>Open projects <a href="#" class="pull-right">view</a></h6>
                                    @foreach($complete_order as $complete_order)
                                    <h2 class="mt-4"><strong> {{$complete_order->complete}} </strong><span class="heading-teriary">projects</span></h2>
                                    @endforeach 
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-4">
                                <div class="shadow py-3 px-3">
                                    <h6>Close projects <a href="#" class="pull-right">view</a></h6>
                                    @foreach($close_project as $close_project)
                                    <h2 class="mt-4"><strong> {{$close_project->closed}} </strong><span class="heading-teriary">projects</span></h2>
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                        <!-- viewInfo -->
                        <div class="row mt-5">
                            <div class="col-6 col-md-6">
                            @foreach($total_order as $total_order)
                                <h5 class="heading-teriary-3">All projects({{$total_order->total}})</h5>
                            @endforeach     
                            </div>
                            <div class="col-6 col-md-6">
                                <a href="#" class="pull-right heading-teriary-2">view all</a>
                            </div>
                        </div>
                        <!-- table -->
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-sm table-bordered shadow table-zoom">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Order date</th>
                                            <th scope="col">Project title</th>
                                            <th scope="col">Notes</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user_order as $user_order)
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>{{$user_order->niceDate}}</td>
                                            <td>{{$user_order->project_title}}</td>
                                            <td>{{$user_order->notes}}</td>
                                            @if($user_order->status == '1')
                                            <td>Open</td>
                                            @else
                                            <td>Close</td>
                                            @endif
                                            <td><a href="#">view project</a></td>
                                        </tr>
                                    @endforeach     
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <h4 class="heading-primary">Profile</h4>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <h4 class="heading-primary">Settings</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 
@stop