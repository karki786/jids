<div id="blog" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">Our News</h2>
                    <p class="sub-title"></p>
                </div>
            </div>
            <!-- /section title -->

            <!-- blog -->
            @foreach($news as $new )
                <div class="col-md-4">
                    <div class="article">
                        <div class="article-img">
                            <a href="{{URL::to('news-detail/'.$new->id)}}">
                                <img src="{{asset('uploads/news/'.$new->image)}}" alt="">
                            </a>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title"><a href="{{URL::to('news-detail/'.$new->id)}}">{{$new->title}}</a></h3>
                            <ul class="article-meta">
                                <li>{{date('F j, Y,', strtotime($new->created_at))}}</li>
                            </ul>
                            <p>{!! substr($new->description,0,200) !!}</p>
                        </div>
                    </div>
                </div>
                <!-- /blog -->
        @endforeach

        <!-- /blog -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>