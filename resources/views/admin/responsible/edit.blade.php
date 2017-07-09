@extends('admin.templates.master')
@section('title','Edit responsible travel')
@section("content")
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Responsible Travel</h3>
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
            {!! Form::open(array('method'=>'post','url'=>action('Admin\ResponsibleController@save', ['id' => $responsible->id]),"class"=>"form-horizontal", 'enctype'=>'multipart/form-data')) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name','Project Name', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name',$responsible->name ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('tag','Tags', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('tag',$responsible->tag ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('description','Description', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('description',$responsible->description ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('image_feature','Image Feature', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        <input id="image_feature" name="image_feature[]" type="file" multiple class="form-control">
                        <div id="list_images">
                            @php
                                $list_images = explode(',',$responsible->image_feature);
                            @endphp
                            @foreach($list_images as $img)
                                @if($img!='')
                                    <div class="item-image">
                                        <div value="{{$img}}" class="active">
                                            <span>Deleted</span>
                                        </div>
                                        <img src="{{asset('').$img}}"/>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <input type="hidden" name="list_deleted" id="list_deleted">
                    </div>
                </div>



                <div class="form-group">
                    {!! Form::label('videos','Video', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('videos',$responsible->videos ,array('class'=>'form-control', 'placeholder'=>'Enter link from Youtube, Vimeo')) !!}
                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('intro','Intro', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::textarea('intro',$responsible->intro, array('class'=>'form-control','size' => '30x5')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('content','Detail', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        <textarea id="editor1" name="content">{{$responsible->content}}</textarea>
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
@section('scripts')
    <script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.editorConfig = function (config) {
            config.toolbarGroups = [
                {name: 'document', groups: ['mode', 'document', 'doctools']},
                {name: 'clipboard', groups: ['clipboard', 'undo']},
                {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                {name: 'forms', groups: ['forms']},
                '/',
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                {name: 'links', groups: ['links']},
                {name: 'insert', groups: ['insert']},
                '/',
                {name: 'styles', groups: ['styles']},
                {name: 'colors', groups: ['colors']},
                {name: 'tools', groups: ['tools']},
                {name: 'others', groups: ['others']},
                {name: 'about', groups: ['about']}
            ];
        };

        CKEDITOR.replace('editor1');


        $('.item-image').click(function () {
            if ($(this).children('div').hasClass('active')) {
                $(this).children('div').addClass('deleted');
                $(this).children('div').removeClass('active');
            } else {
                $(this).children('div').removeClass('deleted');
                $(this).children('div').addClass('active');
            }
            var value = '';
            $('.item-image').each(function (index) {
                var data = $(this).children('div');
                if (data.hasClass('deleted'))
                    value = value + ',' + data.attr('value');
            })
            $('#list_deleted').val(value);
        });
    </script>
@stop