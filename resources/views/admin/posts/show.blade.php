@extends('layouts.app')

@section('content')

<div class="container py-5">

  <h1>{{$post->title}}</h1>

  <p>
      {{$post->content}}
  </p>


@endsection