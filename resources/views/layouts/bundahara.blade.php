<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidenav {
    	background-color: #0097e6;
    	color: white;
      height: 100%;
      width: 220px;
      position: fixed;
      z-index: 999;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: white;
      display: block;
      margin-top: 15px;
      margin-left: 5px;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .profil a{
    }

    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      /*font-size: 28px;  Increased text to enable scrolling */
      padding: 0px 10px;
      margin-top: 20px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
  </style>
</head>
<body>

  <div class="sidenav shadow ">
    <div class="profil">
    <a  style="font-size: 25px; margin-left: 30px;">{{ Auth::user()->name }}</a>
    <hr style="background-color: white">
    </div>
    <a href="{{route('home')}}"><i class="fas fa-tachometer-alt"></i> Dashboard </a>
    <a href="{{route ('data') }}"><i class="far fa-calendar-alt"></i> Data Kas</a>
    <a href="{{route ('multi') }}"><i class="fas fa-camera-retro"></i> Multimedia</a>
    <a href=""><i class="far fa-chart-bar"></i> Log Aktifitas</a>
    <a href="{{ route('logout') }}" 
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> 
    {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
</div>

<div class="main">
  @yield('content')
</div>

</body>
</html> 
