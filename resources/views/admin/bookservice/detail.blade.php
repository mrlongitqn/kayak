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
                    </fieldset>
                    <fieldset>
                        <legend>Book service info</legend>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Route</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->route}}"
                                       disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Date of service</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->date_of_service}}"
                                       disabled="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Places of pick up</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->places_of_pick_up}}"
                                       disabled="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Time of pick up</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$booking->time_of_pick_up}}"
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
                            <label for="" class="col-sm-3 control-label">Number of children</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                       value="{{$booking->number_of_children}}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Your Request</label>

                            <div class="col-sm-9">
                                <textarea disabled class="form-control"
                                          rows="3">{{$booking->your_request}}</textarea>
                            </div>
                        </div>

                    </fieldset>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="col-sm-offset-3">
                        <a href="{{action('Admin\BookserviceController@index')}}"
                           class="btn btn-info">
                            Back
                        </a>
                        @if($booking->status==0)
                            <a href="{{action('Admin\BookserviceController@resolved',['id'=>$booking->id])}}"
                               class="btn btn-primary">
                                Resolve
                            </a>

                        @endif

                        <a href="javascript:;" onclick="deleteModal('{{$booking->id}}', '/admin/bookservice/delete')"
                           class="btn btn-danger">Delete</a>
                    </div>

                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
@stop