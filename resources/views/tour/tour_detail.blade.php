@include('layout.master')
@include('layout.header')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <h4 class="title__primary">{{$tour_detail['name']}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12 animate-box">
            @php
            $list_service = explode(',',$tour_detail['services']);
            @endphp
            @if(!empty($list_service))
                @foreach($list_service as $service)
                    @if($service!='')
                        <img src="{{asset('').$service}}" class="img-icon-list">
                    @endif
                @endforeach
            @endif
        </div>
        <div class="col-md-8 animate-box content-detail">
            <h5 class="heading-line">OVER VIEW:</h5>
            <p>Pick up: {{$tour_detail['pickup']}}</p>
            <p>Duration: {{$tour_detail['duration']}}</p>
            <h5 class="heading-line">FULL ITINERARY</h5>

            <div class="tour-content">{!! $tour_detail['content'] !!}</div>


        </div>
        <div class="col-md-4 animate-box">
            @php
            $list_image = explode(',',$tour_detail['images']);
            @endphp
            @if(!empty($list_image))
                @foreach($list_image as $image)
                    <div class="img-detail">
                        <img class="img-responsive" src="{{asset('').$image}}" alt="travel">
                    </div>
                @endforeach
            @endif
            @if($tour_detail['videos']!='')
                <div class="video-container">
                    <iframe width="560" height="315" src="{{$tour_detail['videos']}}" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            @endif
        </div>
        <div class="clearfix"></div>
        <div class="text-center">
            <a href="/booktour/{{$tour_detail['id']}}" class="button-book"><img src="/images/booknow.png"/></a>
        </div>
    </div>
    <div class="clearfix"></div>


</div>
</div>
@include('layout.footer')
