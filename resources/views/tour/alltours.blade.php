@include('layout.master')
@include('layout.header')
@include('layout.slide')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">

        @if(!empty($list_tours))
            @foreach($list_tours as $key => $tours)
                @if(!empty($tours))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title title--big title--center title--decoration-bottom-center">
                                <!-- <div class="title__subtitle">Find a Tour by</div> -->
                                <h3 class="title__primary">{{$key}} tour</h3>
                            </div>
                            <div class="see-more">
                                <a href="#theCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a href="#theCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                <a class="label label-success" href="/tour/{{$tours[0]['category_id']}}">VIEW ALL <span class="icon-circle-right"></span></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="carousel slide multi-item-carousel" id="theCarousel">
                            <div class="carousel-inner">
                                @foreach($tours as $tour)
                                    <div class="item active">
                                        <a href="tour/detail/{{$tour['id']}}" target="_blank">
                                            <div class="col-md-4 col-sm-6 fh5co-tours" >
                                                <div class="mini-view" href="images/tours/{{$tour['image_feature']}}" data-fancybox-title="{{$tour['description']}}">
                                                    <img src="images/tours/{{$tour['image_feature']}}" alt="tours" class="img-responsive">
                                                    <div class="price">


                                                        <span class="text">USD {{$tour['price']}}/PAX</span>


                                                    </div>
                                                    <div class="desc">
                                                        <span>{{$tour['name']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>

    <!--RESPONSIBLE TRAVEL PROJECTS-->
</div>
</div>
@include('layout.footer')
