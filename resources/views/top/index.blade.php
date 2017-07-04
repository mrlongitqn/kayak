@include('layout.master')
@include('layout.header')
@include('layout.slide')
<div id="fh5co-tours" class="fh5co-section-highlight">
    <div class="container">
        <div class="row">

            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <!--<div class="title__subtitle">Take a Look at Our</div>-->
                    <h3 class="title__primary">HIGHLIGHT TOURS</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            @if (!empty($tours))
                @foreach ($tours as $tour)
            <a href="/tour/detail/{{$tour['Id']}}">
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                    <div><img src="images/tours/{{$tour['ImageFeature']}}" alt="tours" class="img-responsive">
                        <div class="category">
                            <span>{{$tour['CategoryName']}}</span>
                        </div>
                        <div class="price">
                            <span class="text">USD {{$tour['Price']}}/PAX</span>
                        </div>
                        <div class="desc">
                            <span>{{$tour['Name']}}</span>
                        </div>
                    </div>
                </div>
            </a>
                @endforeach
            @endif
        </div>

        <!--RESPONSIBLE TRAVEL PROJECTS-->

    </div>
</div>
<div id="fh5co-tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">

                    <h3 class="title__primary">RESPONSIBLE TRAVEL PROJECTS</h3>
                </div>
            </div>
            @if(!empty($project))
            <div class="col-md-7 animate-box">
                <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouse2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouse2" data-slide-to="1"></li>
                        <li data-target="#myCarouse2" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                            @php $list_image = explode(';', $project['ImageFeature']) @endphp

                        @if(!empty($list_image))
                            @foreach($list_image as $key => $image)
                                <div class="item @if($key == 0) active @endif ">
                                    <img src="images/responsive/{{$image}}" alt="Los Angeles" style="width:100%;">
                                    <div class="carousel-caption">
                                        <span class="caption-slide">{{$project['Name']}}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarouse2" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarouse2" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 animate-box">

                <iframe width="100%" height="326px" src="{{$project['video']}}" frameborder="0" allowfullscreen></iframe>

            </div>
            @endif
        </div>
    </div>
</div>
@include('layout.footer')