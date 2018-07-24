<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- CSS-->
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{ route('admin-action-login') }}">
          @csrf
          <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> Remember
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('admin-register') }}">Register Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
