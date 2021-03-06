@extends('admin.templates.master')
@section('title','Update User')
@section("content")
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update User</h3>
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="POST"
                      action="{{action('Admin\UserController@save', ['id' => $user['id']])}}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-2 control-label">Full Name</label>

                        <div class="col-md-4">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user['name'] }}"
                                   required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                        <div class="col-md-4">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ $user['email'] }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-2 control-label">Password</label>

                        <div class="col-md-4">
                            <input id="email" type="password" class="form-control" name="new_password"
                                   placeholder="Blank if not change">
                            @if ($errors->has('new_password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <input type="hidden" name="password" value="password" />
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@stop