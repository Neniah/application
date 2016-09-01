@extends('main')

@section('title', '| All Posts');

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>

    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
    </div>
    <hr>
  </div>

@stop
