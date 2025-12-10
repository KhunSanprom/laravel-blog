@extends('layout')
@section('title')
    BLOG
@endsection
@section('content')
    <h1>BLOGs</h1>
    <hr>
    @foreach ($blogs as $blog)
        <h4>{{$blog["title"]}}</h4>
        <p>{{$blog["content"]}}</p>
        <hr>
    @endforeach
@endsection