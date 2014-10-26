@extends('admin/layout')

@section('title')
    New Section
@stop

@section('content')
    <h1>New Section</h1>

    {{ Form::open(['url'=>'admin/sections','method'=>'POST']) }}
        @include('admin/sections/partials/fields')
        <p>
            {{ Form::submit('Create section',array('class'=>'btn btn-success')) }}
        </p>
    {{ Form::close() }}
@stop