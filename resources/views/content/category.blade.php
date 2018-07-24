@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
<<<<<<< HEAD
                <h1 class="my-4">@lang('user.category_title'): {{ $category->name }}
                    <small></small>
                    <!--<a class="btn btn-primary" type="button" href="{{ url('subscript', [$category->id]) }}">Subscript</a>-->
=======
                <h1 class="my-4">{{ $category->name }}
                    <small></small>
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
                </h1>
                <!-- Blog Post -->
                @foreach($category->posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="{{ url('post', [$post->id]) }}" class="btn btn-primary">@lang('user.read_more')</a>
                        </div>
                        <div class="card-footer text-muted">
                            @lang('user.posted_on') {{ $post->created_at }}
<<<<<<< HEAD
                            , {{ trans_choice('user.comments', $post->comments()->count(), ['value' => $post->comments()->count()]) }}
=======
                            , {{ trans_choice('user.comments', $post->comments()->count()) }}
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
            <!-- Sidebar -->
            @include('content.parts.sidebar')
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
