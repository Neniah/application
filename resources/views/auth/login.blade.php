@extends('main')

@section('title', '| Login')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::open() !!}

        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email', null, ['class' => 'form-control']) }}

        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', null, ['class' => 'form-control']) }}

        {{ Form::checkbox('remember') }}{{ Form::label('remember', 'Remember Me') }}

        {{ Form::submit('Login') }}

      {!! Form::close() !!}
    </div>
  </div>

@endsection
