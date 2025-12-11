@extends('layout')
@section('title', 'Create Blog')
@section('content')
    <h3 class="text py-2">Create Your Blog!</h3>
    <form method="POST" action="/insert">
        @csrf
        <div class = "form-group">
            <lable for="title">Blog name</lable>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class = "form-group">
            <label for="content">Content</label>
            <textarea name="content" cols="50" class="form-control"></textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <input type="submit" value="Submit" class="btn btn-success my-3">
        <a href="{{ route('blog-page') }}" class="btn btn-primary">Blogs</a>
    </form>
@endsection
