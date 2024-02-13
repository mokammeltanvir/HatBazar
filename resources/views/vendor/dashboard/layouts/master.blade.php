
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>Hatbazar || @yield('title')</title>
<link rel="icon" type="image/png" href="images/favicon.png">
@include('frontend.dashboard.layouts.inc.style')
</head>

<body>


  <!--=============================
    DASHBOARD MENU START
  ==============================-->
  <div class="wsus__dashboard_menu">
    <div class="wsusd__dashboard_user">
        <img src="{{Auth::user()->image ? asset(Auth::user()->image) : asset('assets/userdashboard/images/ts-2.jpg')}}" alt="img" class="img-fluid">
        <p>{{Auth::user()->name}}</p>
    </div>
  </div>
  <!--=============================
    DASHBOARD MENU END
  ==============================-->


  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
      @include('vendor.dashboard.layouts.inc.sidebar')
<!--=============================
    DASHBOARD CONTENT START
  ==============================-->
      @yield('content')
<!--=============================
    DASHBOARD CONTENT END
    ==============================-->
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->


  <!--============================
      SCROLL BUTTON START
    ==============================-->
  <div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
  </div>
  <!--============================
    SCROLL BUTTON  END
  ==============================-->


  @include('frontend.dashboard.layouts.inc.script')
</body>

</html>
