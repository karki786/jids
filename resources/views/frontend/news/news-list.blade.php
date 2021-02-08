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
                            <h1>News</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">News</li>
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

                        @foreach($news as $new)
                            <div class="col-md-4">
                                <div class="article">
                                    <div class="article-img">
                                        <a href="{{URL::to('news-detail/'.$new->id)}}">
                                            <img src="{{asset('uploads/news/'.$new->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="article-content">
                                        <h3 class="article-title"><a
                                                    href="{{URL::to('news-detail/'.$new->id)}}">{{$new->title}}</a></h3>
                                        <ul class="article-meta">

                                            <li>{{date('F j, Y,', strtotime($new->created_at))}}</li>


                                        </ul>
                                        <p>{!!  substr($new->description,0,400)!!}</p>
                                    </div>
                                </div>
                            </div>

                    @endforeach


                    <!-- /article -->

                        <!-- pagination -->

                        <!-- /pagination -->
                    </div>



            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>@endsection