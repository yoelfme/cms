<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>New Section</h1>

    {{ Form::open(['url'=>'admin/sections','method'=>'POST']) }}
        {{ Form::label('name','Name') }}
        {{ Form::text('name') }}

        {{ Form::label('slug_url','Slug URL') }}
        {{ Form::text('slug_url') }}

        {{ Form::label('name','Type') }}
        {{ Form::text('type') }}

        {{ Form::submit('Create section') }}

    {{ Form::close() }}
</body>
</html>