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
            <a href="index.html" class="site_title">
                <i  class="fa fa-gbp" aria-hidden="true"></i>
                 <span>Global Money</span></a>
          </div>

          <div class="clearfix"></div>
          {{-- <div class="profile clearfix">
            <div class="profile_info">
              <span><h2></h2></span>
            </div>
          </div> --}}

          <br />
          @include('includes.sidebar')
          @include('includes.topnav')
          @yield('content')
         @include('includes.footer')
         @include('includes.script')
        </body>
        </html>
