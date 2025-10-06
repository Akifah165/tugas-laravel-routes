@extends('layout')

@section('title','Our Team')

@section('content')
  <h1>Meet Our Team</h1>
  <ul>
    <li><a href="{{ url('/team/member/1') }}">Andi Nur Akifah</a></li>
    <li><a href="{{ url('/team/member/2') }}">Anisa</a></li>
    <li><a href="{{ url('/team/member/3') }}">Anita Zakiati</a></li>
  </ul>
@endsection
