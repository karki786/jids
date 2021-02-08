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
            <!-- /section background -->

            <!-- page header content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1>Contact Page</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Contact page</li>
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

                <!-- article -->
                <div class="article">

                    <div class="article-reply">

                        <h3>Contact Us</h3>

                        {!!Form::open(['method'=>'post','url'=>'store/contact/', 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" name="name" required="required" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" name="email" required="required" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" name="phone"  required="required" placeholder="phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="input" name="message" required="required" placeholder="Message"></textarea>
                                </div>
                                <button class="primary-button" type="submit">Submit</button>
                            </div>
                        </div>
                        </form>
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