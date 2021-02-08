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
                            <h1>Gallery page</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Gallery page</li>
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

                    <div class="row">

                        <!-- article -->
                        @foreach($data as $d)
                        <div class="col-md-4">
                            <div class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="{{asset('uploads/gallery/'.$d->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h2 class="article-title"><a href="#">{{$d->title}}</a></h2>


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