@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

  <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
    <div class="col-md-8">

      <h1>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}</h1>

      <p class="lead">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
      </p>
      <div class="col-md-8">
        <div class="well">
          <dl class="dl-horizontal">
            <dt>Create At:</dt>
            <dd>{{ date('M d, Y h:ia', strtotime($post->created_at)) }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Last Updated:</dt>
            <dd>{{ date('M d, Y h:ia', strtotime($post->updated_at)) }}</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block') )!!}
            </div>
            <div class="col-sm-6">
            {!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success btn-block') )!!}
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div> <!-- end fo row (form)!>


@endsection
