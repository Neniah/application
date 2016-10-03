@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

    <div class="row">
      <div class="col-md-8">
        <h1>{{ $tag->name }} Tag <small>{{$tag->posts->count()}}</small></h1>
      </div>
      <div class="col-md-4">
        <a href="#" class="btn btn-lg btn-primary pull-right">Edit</a>
      </div>
    </div>

@endsection
