<!-- NAVGATION -->
<nav id="main-navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- Logo -->
            @if(isset($setting->logo))
            <div class="navbar-brand">
                <a class="logo" href="{{('/')}}"><img src="{{asset('uploads/setting/'.$setting->logo)}}" alt="logo"></a>
            </div>
            @endif
            <!-- Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle-btn">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Mobile toggle -->

            <!-- Mobile Search toggle -->

            <!-- Mobile Search toggle -->
        </div>


        <!-- Nav menu -->
        <ul class="navbar-menu nav navbar-nav navbar-right">
            <li><a href="{{URL::to('/')}}">Home</a></li>


            <li class="has-dropdown"><a href="#">About Us</a>
                <ul class="dropdown">
                    <li><a href="{{URL::to('/about')}}">About us</a>

                    </li>

                    <li class=""><a href="{{URL::to('/team')}}">Our Team</a>
                    </li>
                    <li class=""><a href="{{URL::to('/report')}}">Annual Report</a>
                    </li>  <li class=""><a href="{{URL::to('/committee')}}">Committee</a>
                    </li>
                </ul>
            </li>


            <li class="has-dropdown"><a href="#">Media</a>
                <ul class="dropdown">
                    <li><a href="{{URL::to('/upcomming-project')}}">Up Comming Projects</a>

                    </li>

                    <li class=""><a href="{{URL::to('/news')}}">News</a>
                    </li>
                </ul>
            </li>
            <li><a href="{{URL::to('/career')}}">Career</a></li>
            <li><a href="{{URL::to('/gallery')}}">Gallery</a></li>
            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
        </ul>
        <!-- Nav menu -->
    </div>
</nav>
<!-- /NAVGATION -->


<!-- HOME OWL -->
