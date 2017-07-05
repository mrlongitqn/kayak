@extends('admin.templates.master')
<?php
$i = 1;
$list = $categories->toArray();
?>
@section('content')


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Category List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a class="btn btn-warning" href="{{action("Admin\CategoryController@create")}}">Create</a>
            <br/>
            <br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Category Name</th>
                    <th>Parent Category</th>
                    <th>Description</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($categories as $cat)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$cat->name}}</td>
                        <td>
                            <?php
                            $key = array_search($cat->parent_id, array_column($list, 'id'));
                            if (gettype($key) == 'integer')
                                echo $list[$key]['name'];
                            ?>
                        </td>
                        <td>
                            {{$cat->description}}
                        </td>
                        <td>
                            <a href="{{action('Admin\CategoryController@edit', ['id' => $cat->id])}}"
                               title="Cập nhật"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$cat->id}}', '/admin/category/destroy')"
                               title="Xóa" class="red"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@stop
