@extends('admin/layout')

@section('content')
<h1>Sections</h1>
<p>
    <a href="{{  url('admin/sections/create')  }}">
        Add a new section
    </a>
</p>

 @include('admin/sections/partials/filters')

@if ($sections->getTotal())
    <p>There are {{ $sections->getTotal() }} sections, showing page {{ $sections->getCurrentPage() }} of {{ $sections->getLastPage() }}</p>



    <table class="table table-bordered">
        <thead>
            <th>Name</th>
            <th>Slug URL</th>
            <th>Menu</th>
            <th>Published</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($sections as $section)
            <?php dd($section); ?>
            <tr>
                <td class="name">{{ $section->name }}</td>
                <td>{{ $section->slug_url }}</td>
                <td>{{ $section->menu ? 'Show in menu' : "Don't show in menu" }}</td>
                <td>{{ $section->published ? 'Published' : 'Draft' }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.sections.show',$section->asfd) }}">Show</a>
                    <a class="btn-edit btn btn-primary" href="{{ route('admin.sections.edit',$section->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $sections->links() }}
@else
    <h4>There are no sections, please create the first one</h4>
@endif


@stop