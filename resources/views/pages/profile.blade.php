@extends('layouts.default')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
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
                                    <h2 class="mt-4"><strong> 4 </strong><span class="heading-teriary">projects</span></h2>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-4">
                                <div class="shadow py-3 px-3">
                                    <h6>Close projects <a href="#" class="pull-right">view</a></h6>
                                    <h2 class="mt-4"><strong> 6 </strong><span class="heading-teriary">projects</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- viewInfo -->
                        <div class="row mt-5">
                            <div class="col-6 col-md-6">
                                <h5 class="heading-teriary-3">All projects(10)</h5>
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
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>01/03/04</td>
                                            <td>My web page</td>
                                            <td>My web page</td>
                                            <td>closed</td>
                                            <td><a href="#">view project</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>01/03/04</td>
                                            <td>My web page</td>
                                            <td>My web page</td>
                                            <td>open</td>
                                            <td><a href="#">view project</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>01/03/04</td>
                                            <td>My web page</td>
                                            <td>My web page</td>
                                            <td>open</td>
                                            <td><a href="#">view project</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>01/03/04</td>
                                            <td>My web page</td>
                                            <td>My web page</td>
                                            <td>open</td>
                                            <td><a href="#">view project</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>01/03/04</td>
                                            <td>My web page</td>
                                            <td>My web page</td>
                                            <td>open</td>
                                            <td><a href="#">view project</a></td>
                                        </tr>
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