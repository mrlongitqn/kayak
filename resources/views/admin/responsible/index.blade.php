<?php
$i = 1;
?>
@extends('admin.templates.master')
@section('title', 'Manage Responsible Travel')
@section('header','Manage Responsible Travel')
@section("content")
    <div class="clearfix">
        <a href="{{action('Admin\ResponsibleController@create')}}" class="btn btn-warning">Create new responsible travel</a>
        <br/>
    </div>
    <div class="clearfix">
        <br/>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Responsible Travel List</h3>
            <div class="box-tools">
                <form action="" method="get">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="keyword" value="{{Request::get('keyword')}}" class="form-control pull-right" placeholder="Search">
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
                    <th>Travel Name</th>
                    <th>Description</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($responsibles as $responsible)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$responsible->name}}</td>

                        </td>
                        <td>
                            {{$responsible->description}}
                        </td>
                        <td>
                            <a href="{{action('Admin\ResponsibleController@edit', ['id' => $responsible->id])}}"
                               title="Edit" class="text-green"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$responsible->id}}', '/admin/responsible/delete')"
                               title="Delete" class="text-red"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {!! $responsibles->render() !!}
        </div>
    </div>
@stop