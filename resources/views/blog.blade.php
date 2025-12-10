@extends('layout')
@section('title')
    BLOG
@endsection
@section('content')
    <h1 class="text-center py-2">
        BLOGs</h1>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Blog</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['status'] == true)
                            <p class = "text text-success">Publish</p>
                        @else
                            <p class = "text text-warning">Draf</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @foreach ($blogs as $item)
        <h4>{{ $item['title'] }}</h4>
        <p>{{ $item['content'] }}</p>

        @if ($item['status'] == true)
            <p class = "text text-success">Publish</p>
        @else
            <p class = "text text-danger">Draf</p>
        @endif
        <hr>
    @endforeach --}}
@endsection
