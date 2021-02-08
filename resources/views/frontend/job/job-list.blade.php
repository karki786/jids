@extends('frontend.includes.master')
@section('content')
    <!-- HEADER -->
    <header>
        <!-- NAVGATION -->
    @include('frontend.shared.navbar')
    <!-- /NAVGATION -->

        <!-- Page Header -->
        <div id="page-header">
            <!-- section background -->

            @if(isset($aboutImage->cover_image))
                <div class="section-bg" style="background-image: url('{{asset('/uploads/headerImage/'.$aboutImage->cover_image)}}');"></div>
            @else
                <div class="section-bg" style="background-image: url(frontend/img/background-2.jpg);"></div>

        @endif            <!-- /section background -->

            <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Career</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Career page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header content -->
        </div>        <!-- /Page Header -->
    </header>
    <!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="row">

                    @foreach($jobs as $job)
                        <div class="col-md-6">
                            <div class="article">

                                <div class="article-content">

                                    <div class="section-title">
                                        <h3 class="article-title">{{$job->title}}</h3>

                                        Opening: {{$job->opening}}<br>
                                        Last Date: {{$job->dead_line}}<br> <br>

                                        <a href="{{URL::to('career-detail/'.$job->id)}}" class="primary-button">Detail More</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>@endsection