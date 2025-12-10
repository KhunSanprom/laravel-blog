@extends('layout')
@section('title')
    BLOG
@endsection
@section('content')
    <h1>BLOGs</h1>
    <hr>
    @foreach ($blogs as $blog)
        <h4>{{ $blog['title'] }}</h4>
        <p>{{ $blog['content'] }}</p>
        
        @if ($blog['status'] == true)
            <p class = "text text-success">Publish</p>
        @else
            <p class = "text text-danger">Draf</p>
        @endif
        <hr>
        @endforeach
    @endsection
