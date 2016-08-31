@extends('main')

@section('title', '| View Post')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>

      <p class="lead">
        {{ $post->body }}
      </p>
      <div class="col-md-8">
        <div class="well">
          <dl class="dl-horizontal">
            <dt>Create At:</dt>
            <dd>{{ date('M d Y', strtotime($post->created_at)) }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Last Updated:</dt>
            <dd>{{ date('M d Y', strtotime($post->updated_at)) }}</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              <a href="#" class="btn btn-primary btn-block">Edit</a>
            </div>
            <div class="col-sm-6">
              <a href="#" class="btn btn-danger btn-block">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
