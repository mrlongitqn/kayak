@extends('admin.templates.master')
@section('title','View Detail')
@section('content')
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Tour: {{$booking->tour_name}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <fieldset>
                        <legend>Client Info</legend>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Full Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->fullname}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->email}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->phone}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Book at</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->created_at}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Ip Address</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->ip}}" disabled="">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Book tour info</legend>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Would you like to go on a</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->would_you_like_to_go_on_a}}"
                                       disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Desired start date</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->desired_start_date}}"
                                       disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Number of Adults</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->number_of_adults}}"
                                       disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Number of children under 4 years old</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                       value="{{$booking->number_of_children_under4years_old}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Number of children from 4 years old to 10 years
                                old</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                       value="{{$booking->number_of_children_over4years_old}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Any special requests on food, program schedule,
                                physical level, etc..</label>

                            <div class="col-sm-9">
                                <textarea disabled class="form-control"
                                          rows="3">{{$booking->any_special_requests}}</textarea>
                            </div>
                        </div>

                    </fieldset>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-sm-offset-3">
                        <a href="{{action('Admin\BookingController@index')}}"
                           class="btn btn-info">
                            Back
                        </a>
                        @if($booking->status==0)
                            <a href="{{action('Admin\BookingController@resolved',['id'=>$booking->id])}}"
                               class="btn btn-primary">
                                Resolve
                            </a>

                        @endif

                        <a href="javascript:;" onclick="deleteModal('{{$booking->id}}', '/admin/booking/delete')"
                           class="btn btn-danger">Delete</a>
                    </div>

                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
@stop