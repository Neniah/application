@extends('main')

@section('title', '| Categories')

@section('content')

  <div class="row">
    <div class="col-md-8">
      <h1>Categories</h1>
      <table class="table">
        <thead>
          <tr>
            <th>
              #
            </th>
            <th>
              Name
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as @category)
          <tr>
            <th>
              {{ $category->id }}
            </th>
            <td>
              {{ $category->name }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>


@endsection
