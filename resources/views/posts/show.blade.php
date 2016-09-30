@extends('main')

@section('title', '| View Post')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <h1>{{ $post->title }}</h1>

      <p class="lead">
        {{ $post->body }}
      </p>
      <hr>

      <div class="tags">
        @foreach($post->tags as $tag)
          <span class="label label-default">
            {{ $tag->name }}
          </span>
        @endforeach
      </div>

    </div>
      <div class="col-md-6">
        <div class="well">
          <dl class="dl-horizontal">
            <label>URL Slug:</label>
            <dd><a href="{{ route('blog.single', $post->slug) }}">{{ url($post->slug) }}</a></dd>
          </dl>

          <dl class="dl-horizontal">
            <label>Category:</label>
            <dd>{{ $post->category->name }}</dd>
          </dl>

          <dl class="dl-horizontal">
            <label>Create At:</label>
            <dd>{{ date('M d, Y h:ia', strtotime($post->created_at)) }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Last Updated:</dt>
            <dd>{{ date('M d, Y h:ia', strtotime($post->updated_at)) }}</dd>
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
              {!! Html::linkRoute('posts.edit', 'Edit', array($post->id),
                array('class' => 'btn btn-primary btn-block') )!!}
            </div>
            <div class="col-sm-6">
              {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <br>
              {!! Html::linkRoute('posts.index', '<< See All Posts', [],
                ['class' => 'btn btn-default btn-block']) !!}
            </div>
          </div>

        </div>
      </div>

  </div>

@endsection
