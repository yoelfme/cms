@extends('admin/layout')

@section('title')
    Edit section {{ $section->name }}
@stop

@section('content')
    <h1>Edit section "{{ $section->name }}"</h1>

    {{ Form::model($section, ['route'=>['admin.sections.update', $section->id],'method'=>'PUT']) }}
       @include('admin/sections/partials/fields')
        <p>
            {{ Form::submit('Update section',array('class'=>'btn btn-success')) }}
        </p>
    {{ Form::close() }}
@stop