@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Show Blog') }}</div>

                    <div class="card-body">

                        <div class="form-group">
                            <label for="title"> Title</label>
                            <input type="text" class="form-control" value="{{ $blog->title }}" id="title"
                                name="title" readonly>
                        </div>

                        <div class="form-group">
                            <label for="content"> Content</label>
                            <textarea type="text" class="form-control" value="{{ $blog->content }}" id="content" name="content" readonly
                                rows="3"> </textarea>
                        </div>


                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
