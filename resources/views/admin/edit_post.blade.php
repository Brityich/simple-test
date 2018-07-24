@extends('layouts.admin')

@section('admin-tools')
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="{{ route('send-edit-post') }}">
            @csrf
            <h4>Edit post: </h4>
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="description">Article:</label>
                <textarea class="form-control" id="description" name="description">{{ $post->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    @foreach($category as $item)
                        <option>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
