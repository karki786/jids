@extends('layout')
@section('title') Dashboard @endsection
@section('content')
    <div class="row panel panel-body border-top-danger">
        <div class="panel-heading">
            <i class="icon-home2"> DASHBOARD</i>
            <div class="heading-elements">
            </div>
        </div>


        <div class="col-sm-4 col-lg-4 hvr-grow">
            <div class="panel">
                <a href="{{URL::to('/system/news')}}">
                    <div class="bg-primary-400 demo-color" style="padding:10px;">
                        <i class="fa fa-id-card-o fa-5x"></i>
                        <h2>News Management </h2>
                        <span>Click to view</span>
                    </div>
                </a>


            </div>
        </div>
        <div class="col-sm-4 col-lg-4 hvr-grow">
            <a href="{{URL::to('/system/project')}}">
                <div class="panel">
                    <div class="bg-danger-800 demo-color" style="padding:5px;">
                        <i class="fa fa-codepen fa-5x"></i>
                        <h2>Upcomming Project</h2>
                        <span>Click to view</span>
                    </div>


                </div>
            </a>
        </div>
        <div class="col-sm-4 col-lg-4 hvr-grow">
            <a href="{{URL::to('/system/job')}}">
                <div class="panel">
                    <div class="bg-green-400 demo-color" style="padding:5px;">
                        <i class="fa fa-futbol-o fa-5x"></i>
                        <h2>Jobs Management</h2>
                        <span>Click to view</span>
                    </div>


                </div>
            </a>
        </div>
        <div class="col-sm-4 col-lg-4 hvr-grow">
            <div class="panel">
                <a href="{{URL::to('/system/team')}}">
                    <div class="bg-indigo-400 demo-color" style="padding:5px;">
                        <i class="fa fa-users fa-5x"></i>
                        <h2>Our Team</h2>
                        <span>Click to view</span>
                    </div>
                </a>


            </div>
        </div>
        <div class="col-sm-4 col-lg-4 hvr-grow">
            <a href="{{URL::to('/system/pdf')}}">
                <div class="panel">
                    <div class="bg-brown-800 demo-color" style="padding:5px;">
                        <i class="fa fa-file-text-o fa-5x"></i>
                        <h2>Report Management</h2>
                        <span>Click to view</span>
                    </div>


                </div>
            </a>
        </div>
        <div class="col-sm-4 col-lg-4 hvr-grow">
            <a href="{{URL::to('/system/contact')}}">
                <div class="panel">
                    <div class="bg-orange-700 demo-color" style="padding:5px;">
                        <i class="fa fa-telegram fa-5x"></i>
                        <h2>Contact Management</h2>
                        <span>Click to view</span>
                    </div>


                </div>
            </a>
        </div>


    </div>



@stop
