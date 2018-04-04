@extends('layouts.admin')

@section('admin-tools')
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="{{ route('saveMainSettings') }}" enctype="multipart/form-data">
            @csrf
            <h4>Site</h4>
            <div class="form-group">
                <label for="standart_language">Standart language:</label>
                <select class="form-control" id="standart_language" name="standart_language">
                    <option value="en">English</option>
                    <option value="uk">Ukrainian</option>
                </select>
            </div>

            <h4>About page</h4>
            <div class="form-group">
                <label for="about_title">Title:</label>
                <input type="text" id="about_title" name="about_title" value="{{ $data['about_title'] }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="about_text">Site description text:</label>
                <textarea id="about_text" class="form-control" name="about_text">{{ $data['about_text'] }}</textarea>
            </div>
            <div class="form-group">
                <label for="about_image">Image:</label>
                <input type="file" name="about_image" id="about_image" class="form-control">
            </div>

            <h4>Number of posts</h4>
            <div class="form-group">
                <label for="number_posts">Set the count of posts in the page:</label>
                <input type="number" class="form-control" id="number_posts" name="number_posts" value="{{ $data['number_posts'] }}">
            </div>

            <h4>Number of words in the post</h4>
            <div class="form-group">
                <p><label for="number_words">First <i>n</i> words of post :</label></p>
                <input type="number" id="number_words" name="number_words" class="form-control" value="{{ $data['number_words'] }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection