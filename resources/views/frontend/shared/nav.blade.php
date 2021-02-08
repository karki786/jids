
<!-- HEADER -->
<header id="home">
    <!-- NAVGATION -->

    @include('frontend.shared.navbar')
    <!-- /NAVGATION -->

    <!-- HOME OWL -->
    <div id="home-owl" class="owl-carousel owl-theme">
        <!-- home item -->

        @foreach($banner as $b)

        <div class="home-item">
            <!-- section background -->
            <div class="section-bg" style="background-image: url('{{asset('/uploads/banner/'.$b->image)}}');"></div>
            <!-- /section background -->

            <!-- home content -->
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>{{$b->title}}</h1>
                                <p class="lead">{{$b->intro_text ?? ''}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /home content -->
        </div>
        @endforeach
        <!-- /home item -->


    </div>
    <!-- /HOME OWL -->
</header>