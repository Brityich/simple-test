@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

          <h1 class="my-4">
            <small>@lang('user.about_site')</small>
          </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="{{ asset($data['about_image']) }}"  alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{ $data['about_title'] }}</h2>
              <p class="card-text">{{ $data['about_text'] }}</p>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
