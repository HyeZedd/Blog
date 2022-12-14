@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Index') }} <a href="{{ route('blogs.create') }}" class="btn btn-primary"
                            style="float:right">Create</a></div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->content }}</td>
                                        <td>{{ $blog->user_id ? $blog->user->name : '' }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>{{ $blog->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('blogs.show', $blog) }}" class="btn btn-primary">Show</a>
                                            <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-secondary ">Edit</a>
                                            <a href="{{ route('blogs.delete', $blog) }}" class="btn btn-danger ">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
