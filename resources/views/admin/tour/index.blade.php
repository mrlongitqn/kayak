<?php
$list_category = $categories->toArray();
$i = 1;
?>
@extends('admin.templates.master')
@section('title', 'Manage tours')
@section('header','Manage Tours')
@section("content")
    <div class="clearfix">
        <a href="{{action('Admin\TourController@create')}}" class="btn btn-warning">Create new tour</a>
        <br/>
    </div>
    <div class="clearfix">
        <br/>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tours List</h3>
            <div class="box-tools">
                <form action="" method="get">
                    <div class="input-group input-group-sm" style="float: left;padding-right: 10px;">
                        <select name="category" class="form-control pull-right">
                            <option value="">All Category</option>

                            @foreach($categories as $key => $cat)
                                @if(Request::get('category')==$key)
                                    <option value="{{$key}}" selected>{{$cat}}</option>
                                @else
                                    <option value="{{$key}}">{{$cat}}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
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
                    <th>Tour Name</th>
                    <th>Tour Category</th>
                    <th>Price</th>
                    <th>Pickup</th>
                    <th>Duration</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($tours as $tour)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$tour->name}}</td>
                        <td>
                            <?php

                            $key = array_search($tour->category_id, array_column($list_category, 'id'));
                            if (isset($list_category[$tour->category_id]))
                                echo $list_category[$tour->category_id];
                            ?>
                        </td>
                        <td>
                            {{$tour->price}}
                        </td>
                        <td>
                            {{$tour->pickup}}
                        </td>
                        <td>
                            {{$tour->duration}}
                        </td>
                        <td>
                            <a href="{{action('Admin\TourController@edit', ['id' => $tour->id])}}"
                               title="Cập nhật"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$tour->id}}', '/admin/tour/delete')"
                               title="Xóa" class="red"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {!! $tours->render() !!}
        </div>
    </div>
@stop