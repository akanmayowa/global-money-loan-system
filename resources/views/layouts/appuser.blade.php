<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title></title>
    <title>@yield('title')</title>
    @include('includes.style')
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img  alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div>


          <br />
          @include('includes.usersidebar')
          @include('includes.topnav')
          @include('sweetalert::alert')
          @yield('content')
         @include('includes.footer')
         @include('includes.script')
        </body>
        </html>
        