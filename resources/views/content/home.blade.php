@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <h1 class="my-4">{{ config('app.name', 'Simple site') }}
            <small></small>
          </h1>
          <hr>
          <!-- Blog Posts -->
          @if($posts->isEmpty())
            <i><h3>(No posts)</h3></i>
          @else
        @foreach($posts as $post)
            <div class="card mb-4">
              <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->description }}</p>
                <a href="{{ url('post', [$post->id]) }}" class="btn btn-primary">@lang('user.read_more')</a>
              </div>
              <div class="card-footer text-muted">
                @lang('user.posted_on') {{ $post->created_at }}
                , {{ trans_choice('user.comments', $post->comments()->count()) }}
                <p>{{ $categories->find($post->category_id) }}</p>
              </div>
            </div>
        @endforeach
        @endif
          <!-- Pagination -->
          <!--<ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">@lang('user.older')</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">@lang('user.newer')</a>
            </li>
          </ul>-->
          {{ $posts->links() }}
        </div>
        <!-- Sidebar -->
        @include('content.parts.sidebar')
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
