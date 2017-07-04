@extends('admin.templates.master')
<?php
        $i = 1;
?>
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Bordered Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($categories as $cat)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$cat->Name}}</td>
                        <td>
                            {{$cat->Description}}
                        </td>
                        <td>
                            <a href="{{action('CategoryController@edit', ['id' => $cat->Id])}}" title="Cập nhật"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$cat->Id}}', '/admin/category/delete')" title="Xóa" class="red"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@stop
