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
            @if(isset($reportImage->cover_image))
                <div class="section-bg" style="background-image: url('{{asset('/uploads/headerImage/'.$reportImage->cover_image)}}');"></div>
            @else
                <div class="section-bg" style="background-image: url(frontend/img/background-2.jpg);"></div>

        @endif
            <!-- /section background -->

            <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Report</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li><a href="#">Report</a></li>
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

                        <!-- article content -->
                        <div class="article-content">
                            <!-- article title -->
                            <h2 class="article-title">Annual Report</h2>


                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Sn</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Download</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pdf as $key=> $p)

                                    <tr>
                                        <th scope="row">{{  ++$key }}</th>
                                        <td>{{$p->title}}</td>
                                        <td>{{date('F j, Y,', strtotime($p->created_at))}}</td>
                                        <td> <a class="btn btn-sm btn-success btn_glyph" target="_blank"
                                                                     href="{{url('/download/report', $p->id)}}"><i
                                                        class="fa fa-download"></i></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                        <!-- /article content -->

                        <!-- event-meta -->

                        <!-- /event-meta -->

                        <!-- article tags share -->

                        <!-- /article tags share -->

                        <!-- article reply form -->

                        <!-- /article reply form -->
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
