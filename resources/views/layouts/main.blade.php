 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Red Alert</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Varela+Round') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Trade+Winds&display=swap') }}">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&display=swap') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Changa+One&display=swap') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/grayscale.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
  <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css') }}" rel="stylesheet" />

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">RedAlert</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @if (Auth::guest()) 
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/loginForm">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/registerForm">Register</a>
          </li>
        @else
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span>
                <!-- <img class="img-table" src="{{url('uploads/'.auth()->user()->avatar)}}" alt="{{auth()->user()->avatar}}">&nbsp;&nbsp; -->
                {{ auth()->user()->name }}
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/profile">My Profile</a>
              <a class="dropdown-item" href="/logout">Log Out</a>
            </div>
          </li>
        @endif
          
        </ul>
      </div>
    </div>
  </nav>
  <div>
  @yield('content')
  </div>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Musavi Ardabilly taufik 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/grayscale.min.js') }}"></script>
  <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>

  <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
        

</body>

</html>
