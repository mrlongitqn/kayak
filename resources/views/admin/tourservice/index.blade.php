@extends('admin.templates.master')
@section('title','Manage Tour Service')
@section('header','Manage Tour Service')
<?php
$i = 1;
?>
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tour Service List</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <a class="btn btn-warning" href="{{action("Admin\TourServiceController@create")}}">Create new service</a>
        <br/>
        <br/>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Service Name</th>
                <th>Image</th>
                <th>Link</th>
                <th style="width: 50px"></th>
            </tr>

            @foreach($slides as $slide)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$slide->name}}</td>
                <td>
                    <img src="{{asset('').$slide->image}}" height="100px" />
                </td>
                <td>
                    {{$slide->link}}
                </td>
                <td>
                    <a href="{{action('Admin\TourServiceController@edit', ['id' => $slide->id])}}"
                       title="Edit" class="text-green"><i class="fa fa-pencil"></i></a>

                    <a href="javascript:;" onclick="deleteModal('{{$slide->id}}', '/admin/TourService/delete')"
                       title="Delete" class="text-red"><i class="fa fa-trash-o"></i></a>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
