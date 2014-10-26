<p>
    {{ Form::label('name','Name',array('class'=>'col-sm-2')) }}
    {{ Form::text('name') }}
    {{ $errors->first('name','<p class="error">:message</p>') }}
</p>
<p>
    {{ Form::label('slug_url','Slug URL',array('class'=>'col-sm-2')) }}
    {{ Form::text('slug_url') }}
    {{ $errors->first('slug_url','<p class="error">:message</p>') }}
</p>
<p>
    {{ Form::label('type','Type',array('class'=>'col-sm-2')) }}
    {{ Form::select('type',[''=>'Select','page'=>'Page','blog'=>'Blog']) }}

    {{ $errors->first('type','<p class="error">:message</p>') }}
</p>
<p>
    <label for="" class="col-sm-2">
        {{ Form::radio('menu',1) }}
        Show in menu
    </label>
    <label for="">
        {{ Form::radio('menu',0) }}
        Don't Show in menu
    </label>
    {{ $errors->first('menu','<p class="error">:message</p>') }}
</p>
<p>
    {{ Form::label('menu_order','Menu Order',array('class'=>'col-sm-2')) }}
    {{ Form::text('menu_order') }}
    {{ $errors->first('menu_order','<p class="error">:message</p>') }}
</p>
<p>
    <label for="" class="col-sm-2">
        {{ Form::radio('published',1) }}
        Published
    </label>
    <label for="">
        {{ Form::radio('published',0) }}
        Draft
    </label>
    {{ $errors->first('published','<p class="error">:message</p>') }}
</p>