@extends('admin.templates.master')
@section('title', 'Edit slide')
@section('content')
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Slide</h3>
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
            {!! Form::open(array('method'=>'post','url'=>action('Admin\SlideController@save', ['id' => $slide->id]),"class"=>"form-horizontal",'enctype'=>'multipart/form-data')) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name','Slide Name', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name',$slide->name ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('caption','Caption', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('caption',$slide->caption ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('image','Image', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::file('image_new' ,array('class'=>'form-control')) !!}
                        <input type="hidden" name="image" value="{{$slide->image}}">
                        <div>
                            Old Image(if you choose new image then old image will deleted)<br/>
                            <img src="{{asset('').$slide->image}}" height="200px"/>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('','', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::submit('Save',array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
                <input type="hidden" name="status" value="1" />
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop