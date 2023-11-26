<!doctype html>
<html lang="en">

<head>
  <title>Sidebar 04</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.html" class="logo">Reffral System</a></h1>
      <ul class="list-unstyled components mb-5">
        {{-- <li class="active">
          <a href="#"><span class="fa fa-home mr-3"></span> Homepage</a>
        </li> --}}
        <li>
          <a href="#"><span class="fa fa-user mr-3"></span> Dashboard</a>
        </li>
        {{-- <li>
          <a href="#"><span class="fa fa-sticky-note mr-3"></span> Friends</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-sticky-note mr-3"></span> Subcription</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-paper-plane mr-3"></span> Settings</a>
        </li> --}}
        <li>
          <a href="{{route('logout')}}"><span class="fa fa-paper-plane mr-3"></span> Log Out</a>
        </li>
      </ul>

    </nav>

@yield('content')








</div>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>