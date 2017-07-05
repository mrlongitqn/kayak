@extends('admin.templates.master')
@section("content")
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Tour</h3>
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
            {!! Form::open(array('method'=>'post','url'=>action('Admin\TourController@save', ['id' => 0]),"class"=>"form-horizontal")) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name','Tour Name', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('parent_id','Category', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">

                        {!! Form::select('category_id',$categories,'0',array('class'=>'form-control')) !!}

                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('tag','Tags', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('tag','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('description','Description', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('description','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('image_feature','Image Feature', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::file('image_feature','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('images','List Images', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        <input id="file-input" name="images[]" type="file" multiple class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('videos','Video', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        <input id="file-video" name="video" type="file" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('pickup','Pickup', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('pickup','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('duration','Duration', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('duration','' ,array('class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('intro','Intro', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                       {!! Form::textarea('intro','', array('class'=>'form-control','size' => '30x5')) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('content','Tour Detail', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        <input  name="video" type="file" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('','', array('class'=>'col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::submit('Save',array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
                <input type="hidden" name="status" value="1"/>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#file-input').on('change', function() {
                imagesPreview(this, 'div.preview');
            });
        });
    </script>
@stop