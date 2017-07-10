@extends('admin.templates.master')
@section('title', 'Manage users')
@section('header','Manage users')
@section("content")
    <div class="clearfix">

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
            <a href="{{url('admin/user/create')}}" class="btn btn-warning">Create User</a>
            <br/>

    </div>
    <div class="clearfix"><br/><div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users List</h3>
            <div class="box-tools">
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">

            <table class="table table-bordered table-hover">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width: 50px"></th>
                </tr>

                @foreach($users as $key => $user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user['name']}}</td>

                        <td>
                            {{$user['email']}}
                        </td>
                        <td>
                            <a href="user/edit/{{$user['id']}}"
                               title="Edit" class="text-green"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:;" onclick="deleteModal('{{$user['id']}}', '/admin/user/delete')"
                               title="Xóa" class="text-red"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop