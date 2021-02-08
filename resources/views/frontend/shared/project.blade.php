<div id="causes" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">UpComming Projects</h2>
                    <p class="sub-title"></p>
                </div>
            </div>
            <!-- section title -->

            <!-- causes -->

            @foreach($projects as $project)

            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{URL::to('upcomming-project-detail/'.$project->id)}}">
                            <img src="{{asset('uploads/project/'.$project->image)}}" alt="">
                        </a>
                    </div>

                    <div class="causes-content">
                        <h3><a href="{{URL::to('upcomming-project-detail/'.$project->id)}}">{{$project->title}}</a></h3>
                        <p>{!! substr($project->description,0,200) !!}</p>
                    </div>
                </div>
            </div>
            <!-- /causes -->
@endforeach

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>