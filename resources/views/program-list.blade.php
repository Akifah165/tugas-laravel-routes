@extends('layout')

@section('title','Programs')

@section('content')
  <h1>Programs</h1>
  <ul>
    @foreach($programs as $p)
      <li><a href="{{ url('/program/' . urlencode($p)) }}">{{ $p }}</a></li>
    @endforeach
  </ul>
@endsection
