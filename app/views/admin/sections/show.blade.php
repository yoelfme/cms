@extends('admin/layout')

@section('content')
    <h1>{{ $section->name }}</h1>
    <p>
        <a href="{{ route('admin.sections.edit', $section->id) }}" class="btn-edit btn btn-primary">
            Edit section
        </a>
        {{ Form::open(['route'=> ['admin.sections.destroy',$section->id],'method'=>'DELETE']) }}
            {{ Form::button('Delete section',['type'=>'submit','class'=>'btn-del btn btn-danger']) }}
        {{ Form::close() }}
    </p>
    <table class="table">
        <tr>
            <th>Slug URL:</th>
            <td class="slug-url">{{ $section->slug_url }}</td>
            <th>Menu order:</th>
            <td class="menu-order">{{ $section->menu_order }}</td>
        </tr>
        <tr>
            <th>Menu:</th>
            <td class="menu">{{ $section->menu ? 'Show in menu' : "Don't show in menu" }}</td>
            <th>Status:</th>
            <td class="published">{{ $section->published ? 'Published' : 'Draft' }}</td>
        </tr>
    </table>
@stop