@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Blog') }}</div>

                    <div class="card-body">
                        <form action="{{ route('blogs.update', $blog) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" value="{{ $blog->title }}" id="title"
                                    name="title">
                            </div>

                            <div class="form-group">
                                <label for="content"> Content</label>
                                <textarea type="text" class="form-control" value="{{ $blog->content }}" id="content" name="content" rows="3"></textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
