<?php
        $list_category = $categories->toArray();
        $i = 1;
?>
@extends('admin.templates.master')
@section("content")
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tours List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a class="btn btn-warning" href="{{action("Admin\TourController@create")}}">Create new tour</a>
            <br/>
            <br/>
            <table class="table table-bordered">
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
                            if (gettype($key) == 'integer')
                                echo $list_category[$key]['name'];
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
                            <a href="{{action('Admin\CategoryController@edit', ['id' => $tour->id])}}"
                               title="Cập nhật"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$tour->id}}', '/admin/category/destroy')"
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