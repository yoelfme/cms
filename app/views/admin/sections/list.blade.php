@extends('admin/layout')

@section('content')
<h1>Sections</h1>
<p>
    <a href="{{  url('admin/sections/create')  }}">
        Add a new section
    </a>
</p>

<p>There are {{ $sections->count() }} sections</p>

@include('admin/sections/partials/filters')

<table class="table table-bordered">
    <thead>
        <th>Name</th>
        <th>Slug URL</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($sections as $section)
        <tr>
            <td class="name">{{ $section->name }}</td>
            <td>{{ $section->slug_url }}</td>
            <td>
                <a href="{{ route('admin.sections.show',$section->id) }}">Show</a>
                <a href="{{ route('admin.sections.edit',$section->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop