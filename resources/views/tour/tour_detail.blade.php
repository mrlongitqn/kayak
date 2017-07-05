@include('layout.master')
@include('layout.header')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <h4 class="title__primary">{{$tour_detail['Name']}}</h4>
                </div>
            </div>
        </div>
        <div  class="col-md-12 animate-box">
        @php
            $list_service = explode(';',$tour_detail['Services']);
            @endphp
            @if(!empty($list_service))
                @foreach($list_service as $service)
                    <img src="\images\icon\{{$service}}" class="img-icon-list">
                @endforeach
            @endif
        </div>
        <div class="col-md-8 animate-box content-detail">
            <h5 class="heading-line">OVER VIEW:</h5>
            <p>Pick up: {{$tour_detail['PickUp']}}</p>
            <p>Duration: {{$tour_detail['Duration']}}</p>
            <p>
                {{$tour_detail['Intro']}}
            </p>
            <h5 class="heading-line">FULL ITINERARY</h5>

            <p>{{$tour_detail['Content']}}</p>
            <h5 class="heading-line">TOUR PRICES </h5>
            <p>Included:</p>
            -
            -
            -
            -
            <p>NOT included:</p>
            -
            -
            -
        </div>
        <div class="col-md-4 animate-box">
            @php
                $list_image = explode(';',$tour_detail['Images']);
                    @endphp
            @if(!empty($list_image))
                @foreach($list_image as $image)
            <div class="img-detail">
                <img class="img-responsive" src="/images/tours/{{$image}}" alt="travel">
            </div>s
                @endforeach
            @endif

            <div class="video-container"><iframe width="560" height="315" src="{{$tour_detail['Videos']}}" frameborder="0" allowfullscreen></iframe></iframe></div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center">
            <a href="#" class="button-book"><img src="/images/booknow.png" /></a>
        </div>
    </div>
    <div class="clearfix"></div>



    </div>
</div>
@include('layout.footer')
