@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Blog') }}</div>

                    <div class="card-body">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="content"> Content</label>
                                <textarea type="text" class="form-control" id="content" name="content" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="attachment"> Attachment</label>
                                <input type="file" class="form-control" id="attachment" name="attachment">
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
