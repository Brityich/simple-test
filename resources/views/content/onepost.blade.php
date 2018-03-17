@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="my-4">{{ $post->title }}
                    <small></small>
                </h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        @lang('user.posted_on') {{ $post->created_at }}
                        , {{ trans_choice('user.comments', $comments->where('id_post', $post->id)->count()) }}
                    </div>
                </div>
            <!-- Sidebar -->
        </div>
        @include('content.parts.sidebar')
        <!-- /.row -->
    </div>
@endsection