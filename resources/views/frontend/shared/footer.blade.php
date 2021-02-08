<footer id="footer" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer contact -->
            <div class="col-md-4">
                <div class="footer">
                    @if(isset($setting->footer_logo))
                    <div class="footer-logo">
                        <a class="logo" href="#"><img src="{{asset('uploads/setting/'.$setting->footer_logo)}}" alt=""></a>
                    </div>
                    @endif
                    <p>{!!isset($setting->footer_details) ? $setting->$setting->footer_details:'' !!}</p>
                    <ul class="footer-contact">
                        <li>  <i class="fa fa-home"></i><b>{{$setting->name ?? ''}}</b> </li>
                        <li><i class="fa fa-map-marker"></i> {{$setting->address_line1 ?? ''}}</li>
                        <li><i class="fa fa-phone"></i> {{$setting->phone_1 ?? ''}}</li>
                        <li><i class="fa fa-envelope"></i>{{$setting->email_1 ?? ''}}</li>
                    </ul>
                </div>
            </div>
            <!-- /footer contact -->
            <!-- footer galery -->
            <div class="col-md-4">
                <div class="footer">
                    <h3 class="footer-title">Gallery</h3>
                    <ul class="footer-galery">
                        @if(isset($gallery))
                        @foreach($gallery as $g)
                            <li><a href="{{url('/gallery')}}"><img src="{{asset('uploads/gallery/'.$g->image)}}" alt=""></a></li>
                        @endforeach
                            @endif
                    </ul>
                </div>
            </div>
            <!-- /footer galery -->

            <!-- footer newsletter -->
            <div class="col-md-4">
                <div class="footer">
                    <h3 class="footer-title">Newsletter</h3>
                    <p></p>
                    <form  action="#" class="footer-newsletter">
                        <input class="input" type="email" placeholder="Enter your email">
                        <button class="primary-button">Subscribe</button>
                    </form>
                    <ul class="footer-social">
                        <li><a href="{{isset($setting->facebook)? $setting->facebook:''}}" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="{{isset($setting->twitter)? $setting->twitter:''}}" target="_blank "><i
                                        class="fa fa-twitter"></i></a></li>
                        <li><a href="{{isset($setting->google)? $setting->google:''}}" target="_blank"><i
                                        class="fa fa-google-plus"></i></a></li>
                        <li><a href="{{isset($setting->instagram)? $setting->instagram:''}}" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                        <li><a href="{{isset($setting->pinterest)? $setting->pinterest:''}}" target="_blank"><i
                                        class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer newsletter -->
        </div>
        <!-- /row -->

        <!-- footer copyright & nav -->
        <div id="footer-bottom" class="row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('/about')}}">About</a></li>
                    <li><a href="{{URL::to('/upcomming-project')}}">Upcomming Project</a></li>
                    <li><a href="{{URL::to('/news')}}">News</a></li>
                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        {{--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                </div>
            </div>
        </div>
        <!-- /footer copyright & nav -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>