@extends('admin.templates.master')
@section('title', 'Create custom link')
@section('content')
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create custom link</h3>
            </div>

            @if ( $errors->any() )
                <div class="col-xs-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif
            {!! Form::open(array('method'=>'post','url'=>action('Admin\CustomLinkController@save', ['id' => 0]),"class"=>"form-horizontal",'enctype'=>'multipart/form-data')) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name','Name', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name','Category', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option value="1">Tour Collections</option>
                            <option value="2">Tour Services</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('link','Link', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('link','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('','', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::submit('Save',array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop