@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>

    @include('includes.form_error')

    {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}
        {{--{!! Form::select('category_id', array(1=>'PHP',0=>'JavaScript'), null, ['class'=>'form-control'])!!}--}}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@stop