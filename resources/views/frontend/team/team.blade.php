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
            @if(isset($aboutImage))
                <div class="section-bg"
                     style="background-image: url('{{asset('/uploads/headerImage/'.$aboutImage->cover_image)}}');"></div>
            @else
                <div class="section-bg" style="background-image: url(frontend/img/background-2.jpg);"></div>
                <!-- /section background -->
        @endif
        <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Our Team</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Our Team</li>
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
                <!-- MAIN -->

                <h3>Our Team</h3>
                <br>
                <!-- article -->
                @foreach($data as $p)
                    <div class="col-md-4">
                        <div class="article">
                            <div class="article-img">
                                <a href="">
                                    <img src="{{asset('uploads/team/'.$p->image)}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a
                                            href="#">{{$p->name}}</a></h3>
                                <ul class="article-meta">

                                </ul>
                                <p>{{$p->designation}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- /article -->


                <!-- /article -->

                <!-- pagination -->


                <!-- /MAIN -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection