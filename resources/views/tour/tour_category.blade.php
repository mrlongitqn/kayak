@include('layout.master')
@include('layout.header')

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        @if(!empty($list_tours))
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="title title--big title--center title--decoration-bottom-center">
                        <!-- <div class="title__subtitle">Find a Tour by</div> -->
                        <h3 class="title__primary">{{$list_tours[0]['category_name']}} tours</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                @foreach($list_tours as $tour)
                    <a href="/tour/detail/{{$tour['id']}}" target="_blank">
                        <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                            <div href="#"><img src="{{asset('')}}{{$tour['image_feature']}}" class="img-responsive">
                            </div>
                        </div>
                    </a>

                    <div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <a href="/tour/detail/{{$tour['id']}}" target="_blank"><h2>{{$tour['name']}}</h2></a>
                        <label class="price-list">${{$tour['price']}}</label>
                        <p>
                            Pick up: {{$tour['pickup']}}<br/>
                            Duration: {{$tour['duration']}}<br/>
                        </p>
                        <p>{{$tour['intro']}}</p>
                        <a href="/tour/detail/{{$tour['id']}}" class=" label-info read_more">Read More <i class="icon-arrow-right22"></i></a>
                    </div>

                    <div class="col-md-2 col-sm-6 animate-box" data-animate-effect="fadeIn">
                        <ul class="ul-list-icon">
                            @php
                                $list_services = explode(',',$tour['services']);
                            @endphp
                            @if(!empty($list_services))
                                @foreach($list_services as $service)
                                    @if(!empty($service))
                                    <li>
                                        <img src="{{asset('')}}{{$service}}" class="img-icon-list">
                                    </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                @endforeach
                @endif
            </div>

            <!--RESPONSIBLE TRAVEL PROJECTS-->
    </div>
</div>
@include('layout.footer')
