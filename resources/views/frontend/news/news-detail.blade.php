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

            @endif
            <!-- /section background -->

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

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- MAIN -->
                <main id="main" class="col-md-9">
                    <!-- article -->
                    <div class="article">
                        <!-- article img -->
                        <div class="article-img">
                            <img src="{{asset('/uploads/news/'.$newsDetail->image)}}" alt="">
                        </div>
                        <!-- article img -->

                        <!-- article content -->
                        <div class="article-content">
                            <!-- article title -->
                            <h2 class="article-title">{{$newsDetail->title}}</h2>
                            <!-- /article title -->

                            <ul class="article-meta">
                                <li>{{date('F j, Y,', strtotime($newsDetail->created_at))}}</li>


                            </ul>

                            <p>{!!  $newsDetail->description!!}</p>
                        </div>


                    </div>
                    <!-- /article -->
                </main>
                <!-- /MAIN -->

                <!-- ASIDE -->
                <aside id="aside" class="col-md-3">


                    <!-- posts widget -->
                    <div class="widget">
                        <h3 class="widget-title">Other News</h3>
                        <!-- single post -->
                        @foreach($news as $new)
                            <div class="widget-post">
                                <a href="{{URL::to('news-detail/'.$new->id)}}">
                                    <div class="widget-img">
                                        <img src="{{asset('/uploads/news/'.$new->image)}}" alt="">
                                    </div>
                                    <div class="widget-content">
                                        {{$new->title}}
                                    </div>
                                </a>
                                <ul class="article-meta">

                                </ul>
                            </div>
                            <!-- /single post -->
                        @endforeach
                    </div>
                    <!-- /posts widget -->


                    <!-- causes widget -->
                </aside>
                <!-- /ASIDE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection