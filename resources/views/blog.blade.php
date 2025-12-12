@extends('layout')
@section('title', 'BLOG')
@section('content')
    @if (count($blogs) > 0)
        <h1 class="text-center py-2">
            BLOGs</h1>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Blog</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->content, 50) }}</td>
                        <td>
                            @if ($item->status == true)
                                <a href="{{ route('statusChange', $item->id) }}" class = "btn btn-success">Publish</a>
                            @else
                                <a href="{{ route('statusChange', $item->id) }}" class = "btn btn-secondary">- Draf -</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">
                                Update
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                                onclick="return confirm('You want to delete the blog{{ $item->title }} ?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    @else
        <h1 class="text-center py-2">
            No BLOGs avaliable</h1>
    @endif

@endsection
