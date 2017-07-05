@include('layout.master')
@include('layout.header')

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        @if(!empty($list_tours))
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <!-- <div class="title__subtitle">Find a Tour by</div> -->
                    <h3 class="title__primary">{{$list_tours[0]['CategoryName']}} tours</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            @foreach($list_tours as $tour)
            <a href="/tour/detail/{{$tour['Id']}}" target="_blank">
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                    <div href="#"><img src="/images/tours/{{$tour['ImageFeature']}}" class="img-responsive">
                    </div>
                </div>
            </a>

            <div class="col-md-6 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <a href="/tour/detail/{{$tour['Id']}}" target="_blank"><h2>{{$tour['Name']}}</h2></a>
                <label class="price-list">${{$tour['Price']}}</label>
                <p>
                    Pick up: {{$tour['PickUp']}}<br/>
                    Duration: {{$tour['Duration']}}<br/>
                </p>
                <p>{{$tour['Intro']}}</p>
                <a href="/tour/detail/{{$tour['Id']}}" class=" label-info read_more">Read More <i class="icon-arrow-right22"></i></a>
            </div>

            <div class="col-md-2 col-sm-6 animate-box" data-animate-effect="fadeIn">
                <ul class="ul-list-icon">
                    @php
                     $list_services = explode(';',$tour['Services']);

                    @endphp
                    @if(!empty($list_services))
                        @foreach($list_services as $service)
                        <li>
                            <img src="\images\icon\{{$service}}" class="img-icon-list">
                        </li>
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
