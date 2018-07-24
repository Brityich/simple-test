@extends('layouts.app')

@section('content')
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 col-md-8">

          <!-- Title -->
          <h1 class="mt-4">{{ $post->title }}</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{ $post->author->name }}</a>
          </p>

          

          <!-- Date/Time -->
          <p>@lang('user.posted_on') {{ $post->created_at }}</p>

          

          <!-- Preview Image -->
          <!--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">-->

          <!--<hr>-->

          <!-- Post Content -->

          <p>{{ $post->description }}</p>

          <hr>


          <!-- Comments Form -->
          @if(Auth::check())
            <div class="card my-4">
              <h5 class="card-header">@lang('user.leave_a_comment'):</h5>
              <div class="card-body">
                <form id="send_comment" method="POST" action="{{ route('send-comment') }}">
                  @csrf
                  <input type="hidden" name="id" value="{{ $post->id }}">
                  <div class="form-group">
                    <textarea name = "comment-text" id="comment-text" class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          @else
            <h5>@lang('user.please_login')</h5>
          @endif
          
          <!-- Comments -->
          @if($post->comments->isNotEmpty())
            @foreach($post->comments as $comment)
              <!-- Single Comment -->
              <div class="media mb-4">
                <!--<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
                <div class="media-body">
                  <h5 class="mt-0">{{ $comment->author->name }}</h5>
                  {{ $comment->text }}
                </div>
              </div>
            @endforeach
          @else
            <h5>@lang('user.no_comments_yet')</h5>
          @endif

        </div>
        <!-- /.row -->
          @include('content.parts.sidebar')
        <!-- /.row -->
      </div>
    </div>
@endsection