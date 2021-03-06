<?php
$i = 1;
?>
@extends('admin.templates.master')
@section('header','Manage Booking')
@section('title','Manage Booking')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tours List</h3>
            <div class="box-tools">
                <form action="" method="get">
                    <div class="input-group input-group-sm" style="width: 150px;">

                        <input type="text" name="keyword" value="{{Request::get('keyword')}}"
                               class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-bordered table-hover">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Desired Start Date</th>
                    <th>Tour</th>
                    <th>Ip Address</th>
                    <th>Status</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($booking as $book)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$book->fullname}}</td>
                        <td>
                            {{$book->phone}}
                        </td>
                        <td>
                            {{$book->desired_start_date}}
                        </td>
                        <td>
                            {{$book->tour_name}}
                        </td>
                        <td>
                            {{$book->ip}}
                        </td>
                        <td>
                            @if($book->status==0)
                                <span class="label label-warning">
                                    New
                                </span>
                            @else
                                <span class="label label-primary">
                                Resolved
                                </span>
                            @endif
                        </td>

                        <td>
                            <a href="{{action('Admin\BookingController@detail', ['id' => $book->id])}}"
                               title="Detail" class="text-green"><i class="fa fa-info-circle"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$book->id}}', '/admin/booking/delete')"
                               title="Delete" class="text-red"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {!! $booking->render() !!}
        </div>
    </div>
@stop