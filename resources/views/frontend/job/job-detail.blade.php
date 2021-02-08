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
                <div class="section-bg" style="background-image:url('{{asset('frontend/img/background-2.jpg')}}');"></div>

        @endif            <!-- /section background -->

            <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Contact Page</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Career Detail page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header content -->
        </div>        <!-- /Page Header -->
    </header>

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- article -->
                <div class="article event-details">
                    <!-- article img -->

                    <!-- article img -->

                    <!-- article content -->
                    <div class="article-content">
                        <!-- article title -->
                        <h2 class="article-title">{{$job->title}}</h2>
                        <!-- /article title -->
                        Opening: {{$job->opening}}<br>
                        Last Date: {{$job->dead_line}}<br>
                        <!-- article meta -->

                        <!-- /article meta -->

                        <p>{!! $job->detail ?? '' !!}</p>

                    </div>
                    <!-- /article content -->


                    <!-- article reply form -->
                    <div class="article-reply">


                        <h3>Apply Here</h3>

                        {!!Form::open(['method'=>'post','url'=>'store/career/'.$job->id, 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}

                        <div class="row">
                            <input class="input" value="{{$job->id}}" name="job_id " type="hidden">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" placeholder="Name" name="name" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" placeholder="Email" name="email" type="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" placeholder="Phone" name="phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="file" accept=".pdf" name="file" required>
                                </div>
                                <button class="primary-button" type="submit">Submit</button>
                            </div>
                        </div>
                        {!!Form::close() !!}

                    </div>
                    <!-- /article reply form -->
                </div>
                <!-- /article -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection