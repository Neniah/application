@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

    <div class="row">
      <div class="col-md-8">
        <h1>{{ $tag->name }} Tag <small>{{$tag->posts->count()}}</small></h1>
      </div>
      <div class="col-md-4">
        <a href="#" class="btn btn-primary pull-right btn-block">Edit</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
                Title
              </th>
              <th>
                Tags
              </th>
              <th>

              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($tag->posts as $post)
              <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                  <td>{{ $post->title }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
