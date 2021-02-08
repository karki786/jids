<div id="about" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- about content -->
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">Welcome to Jids</h2>
                    <p class="sub-title">{{$aboutData->into_text ?? ''}}</p>
                </div>
                <div class="about-content">
                    @if(isset($aboutData))
                        <p>{!!  substr($aboutData->details,0,500)!!}</p>
                    @endif
                    <a href="{{URL::to('/about')}}" class="primary-button">Read More</a>
                </div>
            </div>
            <!-- /about content -->

            <!-- about video -->
            <div class="col-md-offset-1 col-md-6">
                <a href="{{URL::to('/about')}}" class="about-video">
                    {{--<i class="play-icon fa fa-play"></i>--}}
                    @if(isset($aboutData->cover_image))
                        <img src="{{asset('uploads/page/'.$aboutData->cover_image)}}" alt="">
                    @endif
                </a>
            </div>
            <!-- /about video -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>