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
                <div class="section-bg" style="background-image: url('{{asset('/uploads/page/'.$aboutImage->cover_image)}}');"></div>
            @else
                <div class="section-bg" style="background-image: url(frontend/img/background-2.jpg);"></div>

        @endif            <!-- /section background -->

            <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Blog Page</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">UpComming Project</li>
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
                <main id="main" class="col-md-9">
                    <div class="row">

                        <!-- article -->
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article-img">
                                    <a href="single-blog.html">
                                        <img src="./img/post-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
                                    <ul class="article-meta">
                                        <li>12 November 2018</li>
                                        <li>By John doe</li>
                                        <li>0 Comments</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /article -->

                        <!-- article -->
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article-img">
                                    <a href="single-blog.html">
                                        <img src="./img/post-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
                                    <ul class="article-meta">
                                        <li>12 November 2018</li>
                                        <li>By John doe</li>
                                        <li>0 Comments</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /article -->

                        <div class="clearfix visible-md visible-lg"></div>

                        <!-- article -->
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article-img">
                                    <a href="single-blog.html">
                                        <img src="./img/post-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
                                    <ul class="article-meta">
                                        <li>12 November 2018</li>
                                        <li>By John doe</li>
                                        <li>0 Comments</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /article -->

                        <!-- article -->
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article-img">
                                    <a href="single-blog.html">
                                        <img src="./img/post-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
                                    <ul class="article-meta">
                                        <li>12 November 2018</li>
                                        <li>By John doe</li>
                                        <li>0 Comments</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /article -->

                        <div class="clearfix visible-md visible-lg"></div>

                        <!-- article -->
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article-img">
                                    <a href="single-blog.html">
                                        <img src="./img/post-5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
                                    <ul class="article-meta">
                                        <li>12 November 2018</li>
                                        <li>By John doe</li>
                                        <li>0 Comments</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /article -->

                        <!-- article -->
                        <div class="col-md-6">
                            <div class="article">
                                <div class="article-img">
                                    <a href="single-blog.html">
                                        <img src="./img/post-6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-content">
                                    <h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
                                    <ul class="article-meta">
                                        <li>12 November 2018</li>
                                        <li>By John doe</li>
                                        <li>0 Comments</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /article -->

                        <!-- pagination -->

                        <!-- /pagination -->
                    </div>
                </main>
                <!-- /MAIN -->

                <!-- ASIDE -->
                <aside id="aside" class="col-md-3">


                    <!-- posts widget -->
                    <div class="widget">
                        <h3 class="widget-title">Latest Posts</h3>
                        <!-- single post -->
                        <div class="widget-post">
                            <a href="#">
                                <div class="widget-img">
                                    <img src="./img/widget-1.jpg" alt="">
                                </div>
                                <div class="widget-content">
                                    Possit nostro aeterno eu vis, ut cum quem reque
                                </div>
                            </a>
                            <ul class="article-meta">
                                <li>By John doe</li>
                                <li>12 November 2018</li>
                            </ul>
                        </div>
                        <!-- /single post -->


                    </div>
                    <!-- /posts widget -->

                    <!-- causes widget -->
                    <div class="widget">
                        <h3 class="widget-title">Latest Causes</h3>

                        <!-- single causes -->
                        <div class="widget-causes">
                            <a href="#">
                                <div class="widget-img">
                                    <img src="./img/widget-1.jpg" alt="">
                                </div>
                                <div class="widget-content">
                                    Possit nostro aeterno eu vis, ut cum quem reque
                                    <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 64%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised">Raised: <strong>52.000$</strong></span> -
                                <span class="causes-goal">Goal: <strong>90.000$</strong></span>
                            </div>
                        </div>
                        <!-- /single causes -->

                    </div>
                    <!-- causes widget -->
                </aside>
                <!-- /ASIDE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>@endsection