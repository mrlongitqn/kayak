@extends('admin.templates.master')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Service car List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a class="btn btn-warning" href="{{action("Admin\ServiceController@register")}}">Create new service car</a>
            <br/>
            <br/>
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
                    <th style="width: 50px"></th>
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
                            <td>
                                <a href="/admin/service/edit/{{$car_da_nang->id}}"
                                   title="Cập nhật" class="text-green"><i class="fa fa-pencil"></i>
                                </a>
                                <a href="javascript:;" onclick="deleteModal('{{$car_da_nang->id}}', '/admin/service/destroy')"
                                   title="Xóa" class="text-red"><i class="fa fa-trash-o"></i>
                                </a>
                            </td>
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
                    <th style="width: 50px"></th>
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
                            <td>
                                <a href="/admin/service/edit/{{$car_hoi_an->id}}"
                                   title="Cập nhật" class="text-green"><i class="fa fa-pencil"></i>
                                </a>
                                <a href="javascript:;" onclick="deleteModal('{{$car_hoi_an->id}}', '/admin/service/destroy')"
                                   title="Xóa" class="text-red"><i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
