<?php $s = 0;?>
<div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @if($slide_image)
                @foreach($slide_image as $key => $slide)
                    <li data-target="#myCarousel" data-slide-to="{{$s++}}" @if($key == 0) class="active" @endif" ></li>
                @endforeach
            @endif
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">
            @if($slide_image)
                @foreach($slide_image as $key => $slide)
                <div class="item @if($key == 0) active @endif">
                    <img src="{{asset('')}}{{$slide['image']}}" alt="Los Angeles">
                </div>
                @endforeach
            @endif
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>