@extends('layouts.admin')

@section('admin-tools')
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="{{ route('saveFooterSettings') }}">
            @csrf
            <h4>Edit post: </h4>
            <div class="form-group">
                <label for="title">Post title:</label>
                <input type="email" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="description">Post description:</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $post->description }}">
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
