@extends('layout')
@section('title','Create Blog')
@section('content')
    <h3 class="text py-2">Create Your Blog!</h3>
    <form>
        <div class = "form-group">
            <lable for="title">Blog name</lable>
            <input type="text" name="title" class="form-control">
        </div>
        <div  class = "form-group">
            <label for="content">Content</label>
            <textarea name="content" cols="50" class="form-control"></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-success my-3">
        <a href="{{ route('blog-page') }}" class="btn btn-primary">Blogs</a>
    </form>
@endsection
