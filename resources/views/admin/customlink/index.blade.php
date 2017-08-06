@extends('admin.templates.master')
@section('title','Custom Link')
@section('header','Custom Link')
<?php
$i = 1;
?>
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Custom Link List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a class="btn btn-warning" href="{{action("Admin\CustomLinkController@create")}}">Create link</a>
            <br/>
            <br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Link</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($slides as $slide)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$slide->name}}</td>
                        <td>
                            {{$slide->category_id==1?'Tour Collections':'Tour Services'}}
                        </td>
                        <td>
                            {{$slide->link }}
                        </td>
                        <td>
                            <a href="{{action('Admin\CustomLinkController@edit', ['id' => $slide->id])}}"
                               title="Edit" class="text-green"><i class="fa fa-pencil"></i></a>

                            <a href="javascript:;" onclick="deleteModal('{{$slide->id}}', '/admin/custom-link/delete')"
                               title="Delete" class="text-red"><i class="fa fa-trash-o"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
