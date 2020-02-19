@extends('layouts.main')

@section('content')
<div class="masthead">
  <div class="container d-flex h-100 align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>

              @if ($message = Session::get('login_failed'))
                    <center>
                        <div class="alert alert-danger col-lg-8">
                            <center><p>{{ $message }}</p></center>
                        </div>
                    </center>
                @endif

              <form class="form-signin" method="POST" action="{{ route('login.user') }}" autocomplete="off">
                {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop