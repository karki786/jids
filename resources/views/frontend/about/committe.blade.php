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

            @endif


            <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Committee</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li><a href="#"> Our Committee</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header content -->
        </div>
        <!-- /Page Header -->
    </header>
    <!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- MAIN -->
                <main id="main" class="col-md-9">
                    <!-- article -->
                    <div class="article event-details">
                        <!-- article img -->

                        <!-- article img -->

                        <!-- article content -->
                        <div class="article-content">
                            <!-- article title -->
                            <h2 class="article-title"> Our Committee</h2>
                            @if(isset($committeeEnglish->details))
                                <p>{!! $committeeEnglish->details !!}</p>
                            @endif
                            <ul class="article-meta">
                                @if(isset($committeeEnglish->created_at))

                                    <li>{{date('F j, Y,', strtotime($committeeEnglish->created_at))}}</li>
                                @endif
                            </ul>
                            <!-- /article meta -->

                        </div>

                        <div class="article-img">
                            @if(isset($committeeEnglish->cover_image))

                                <img src="{{asset('/uploads/page/'.$committeeEnglish->cover_image)}}" alt="">
                            @endif
                        </div>

                    </div>
                    <!-- /article -->
                </main>
                <!-- /MAIN -->

                <!-- ASIDE -->
                <aside id="aside" class="col-md-3">


                    <!-- posts widget -->
                    <div class="widget">
                        <h3 class="widget-title">Latest News</h3>
                        @foreach($news as $n)
                            <div class="widget-post">
                                <a href="{{URL::to('news-detail/'.$n->id)}}">
                                    <div class="widget-img">
                                        <img src="{{asset('uploads/news/'.$n->image)}}" alt="">
                                    </div>
                                    <div class="widget-content">
                                        {{$n->title}}
                                    </div>
                                </a>
                                <ul class="article-meta">

                                </ul>
                            </div>
                        @endforeach

                    </div>
                    <!-- /posts widget -->

                    <!-- causes widget -->
                    <div class="widget">
                        <h3 class="widget-title">Upcomming Project</h3>

                        @foreach($project as $p)
                            <div class="widget-causes">
                                <a href="{{URL::to('upcomming-project-detail/'.$p->id)}}">
                                    <div class="widget-img">
                                        <img src="{{asset('uploads/project/'.$p->image)}}" alt="">
                                    </div>
                                    <div class="widget-content">
                                        {{$p->title}}

                                    </div>
                                </a>

                            </div>
                    @endforeach
                    <!-- /single causes -->

                    </div>
                    <!-- causes widget -->
                </aside>
                <!-- /ASIDE -->
            </div>
            <!-- /row -->
        </div>

        <!-- /container -->
    </div>
@endsection
