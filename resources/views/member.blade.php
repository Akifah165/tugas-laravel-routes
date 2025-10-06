@extends('layout')

@section('title','Member Detail')

@section('content')
  <h1>Member Detail</h1>
  <p>ID: {{ $id }}</p>
  <p>Name: {{ $name }}</p>
@endsection
