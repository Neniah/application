@extends('main')

@section('title', '| Edit Tag')

@section('content')

  {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}

    {{ Form::label('title', "Title:") }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}

    {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-info']) }}

  {{ Form::close() }}

@endsection
