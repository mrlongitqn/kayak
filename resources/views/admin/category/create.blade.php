@extends('admin.templates.master')
@section("content")
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>
    {!! Form::open() !!}
    <div class="box-body">
        <div class="form-group">
    {!! Form::label('Name','Category Name') !!}
    {!! Form::text('Name') !!}
    </div>
        </div>
    {!! Form::close() !!}
    </div>
@stop