@include('layout.master')
@include('layout.header')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <h4 class="title__primary">{{$project['name']}}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-8 animate-box content-detail">
            <div class="tour-content">{!! $project['content'] !!}</div>
        </div>
        <div class="col-md-4 animate-box">
            @php
                $list_image = explode(',',$project['image_feature']);

            @endphp
            @if(!empty($list_image))
                @foreach($list_image as $image)
                    @if(!empty($image))
                        <div class="img-detail">
                            <img class="img-responsive" src="{{asset('').$image}}" alt="travel">
                        </div>
                    @endif
                @endforeach
            @endif
            @if($project['videos']!='')
                <div class="video-container">
                    <iframe width="560" height="315" src="{{$project['videos']}}" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            @endif
        </div>
        <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>


</div>
</div>
@include('layout.footer')
