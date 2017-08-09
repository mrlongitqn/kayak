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
                    <a href="/tour/detail/{{$tour['id']}}">
                        <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                            <div><img src="{{asset('').$tour['image_feature']}}" alt="tours" class="img-responsive">
                                <div class="category">
                                    <span>{{$tour['category_name']}}</span>
                                </div>

                                <div class="desc">
                                    <span>{{$tour['name']}}</span>
                                    <div class="price">
                                        <span class="text">USD {{$tour['price']}}/PAX</span>
                                    </div>
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
            @if(!empty($projects))
                <div class="col-md-7 animate-box">
                    @php  $i=0; $j=0 @endphp
                    <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($projects as $key => $project)
                                <?php $image_project = explode(',', $project['image_feature'])?>
                                @foreach($image_project as $image)
                                    @if(!empty($image))
                                        <li data-target="#myCarouse2" class="<?php if ($i == 0) echo 'active';?>"
                                            data-slide-to="{{$i++}}"></li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @foreach($projects as $key => $project)
                                <?php $image_project = explode(',', $project['image_feature'])?>
                                @foreach($image_project as $image)
                                    @if(!empty($image))
                                        <div class="item<?php if ($j == 0) echo ' active'; $j++;?>">
                                            <img src="{{asset('').$image}}" style="width:100%;">
                                            <div class="carousel-caption">
                                                <span class="caption-slide">{{$project['name']}}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
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
                    @foreach($projects as $project)
                        @if(!empty($project['videos']))
                            <iframe width="100%" height="326px" src="{{$project['videos']}}" frameborder="0"
                                    allowfullscreen></iframe>
                            @break
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@include('layout.footer')
