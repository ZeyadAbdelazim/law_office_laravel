<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','unknowpage')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('cdn')

    <link href="{{ url('/css/css.css') }}" rel="stylesheet">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">


</head>

<body>
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">


<li class="nav-item">
    <a class="nav-link collapsed" href="home">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
          <li class="nav-item">
    <a class="nav-link collapsed" href="articales/list">
    
      <i class="bi bi-card-list"></i>
      <span>Article</span>
    </a>
  </li>




  <li class="nav-item">
    <a class="nav-link collapsed" href="articales/create">
      <i class="bi bi-grid"></i>
      <span>Add Article</span>
    </a>
  </li><!-- End Dashboard Nav -->
      @if (auth()->user()->role==1)
      
          <li class="nav-item">
    <a class="nav-link collapsed" href="addAdmin">
      <i class="bi bi-card-list"></i>
      <span>Add new Admin</span>
    </a>
  </li>
  
      @endif
          

  <li class="nav-item">
    <a class="nav-link collapsed" href="error">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li><!-- End Error 404 Page Nav -->

  

</ul>

</aside><!-- End Sidebar-->
</body>
</html>