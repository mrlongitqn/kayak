@extends('admin.templates.master')
@section('title','Config')
@section('header','Config')

@section('content')
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Config</h3>
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
            {!! Form::open(array('method'=>'post','url'=>action('Admin\ConfigController@UpdateConfig', ['id'=>$config->id]),"class"=>"form-horizontal",'enctype'=>'multipart/form-data')) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('company_name','Company Name', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('company_name',$config->company_name ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('contact_email','Email', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('contact_email',$config->contact_email ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('contact_email2','Email 2', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('contact_email2',$config->contact_email2 ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('contact_phone','Phone number', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('contact_phone',$config->contact_phone ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('contact_phone2','Phone number 2', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('contact_phone2',$config->contact_phone ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('contact_add','Address', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('contact_add',$config->contact_add ,array('class'=>'form-control')) !!}
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