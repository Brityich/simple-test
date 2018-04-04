@extends('layouts.admin')

@section('admin-tools')
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="{{ route('send-edit-category') }}">
            @csrf
            <h4>Edit category: </h4>
            <div class="form-group">
                <label for="title">Category name:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
