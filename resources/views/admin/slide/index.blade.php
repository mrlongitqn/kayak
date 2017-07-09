@extends('admin.templates.master')
@section('title','Manage Slide')
@section('header','Manage Slide')
<?php
$i = 1;
?>
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Slides List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a class="btn btn-warning" href="{{action("Admin\SlideController@create")}}">Create new slide</a>
            <br/>
            <br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Slide Name</th>
                    <th>Slide Caption</th>
                    <th>Image</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($slides as $slide)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$slide->name}}</td>
                        <td>
                            {{$slide->caption}}
                        </td>
                        <td>
                           <img src="{{asset('').$slide->image}}" height="100px" />
                        </td>
                        <td>
                            <a href="{{action('Admin\SlideController@edit', ['id' => $slide->id])}}"
                               title="Edit" class="text-green"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:;" onclick="deleteModal('{{$slide->id}}', '/admin/slide/delete')"
                                   title="Delete" class="text-red"><i class="fa fa-trash-o"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
