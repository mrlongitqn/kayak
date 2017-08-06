@include('layout.master')
@include('layout.header')
<div id="fh5co-tours">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="title title--big title--center title--decoration-bottom-center">
                    <h3 class="title__primary">SERVICES</h3>
                </div>
            </div>
            <h4>DANANG AIRPORT TRANSFER</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Route</th>
                    <th>Distance</th>
                    <th>Duration</th>
                    <th>Price for 4-seat car<br>
                        (1-3 person)
                    </th>
                    <th>Price for 7-seat car<br>
                        (4-5 person)
                    </th>
                    <th>Price for 16-seat car<br>
                        (6-8 person)
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($da_nang))
                    @foreach($da_nang as $car_da_nang)
                        <tr>
                            <td>{{$car_da_nang->route}}</td>
                            <td>{{$car_da_nang->distance}} km</td>
                            <td>{{$car_da_nang->duration}} minute</td>
                            <td>{{$car_da_nang->price_4seat}} usd</td>
                            <td>{{$car_da_nang->price_7seat}} usd</td>
                            <td>{{$car_da_nang->price_16seat}} usd</td>

                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
            <h4>TRANSFER FROM HOI AN</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Route</th>
                        <th>Distance</th>
                        <th>Duration</th>
                        <th>Price for 4-seat car<br>
                            (1-3 person)
                        </th>
                        <th>Price for 7-seat car<br>
                            (4-5 person)
                        </th>
                        <th>Price for 16-seat car<br>
                            (6-8 person)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($hoi_an))
                        @foreach($hoi_an as $car_hoi_an)
                            <tr>
                                <td>{{$car_hoi_an->route}}</td>
                                <td>{{$car_hoi_an->distance}} km</td>
                                <td>{{$car_hoi_an->duration}} minute</td>
                                <td>{{$car_hoi_an->price_4seat}} usd</td>
                                <td>{{$car_hoi_an->price_7seat}} usd</td>
                                <td>{{$car_hoi_an->price_16seat}} usd</td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
        <div class="text-center">
            <a href="/bookservice" class="button-book"><img src="/images/booknow.png"/></a>
        </div>
    </div>
</div>
@include('layout.footer')
