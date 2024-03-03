<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> HatBazar &mdash; @yield('title')</title>

  @include('admin.layouts.inc.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <!-- Navbar -->
    @include('admin.layouts.inc.navbar')

    <!-- Sidebar -->
    @include('admin.layouts.inc.sidebar')


      <!-- Main Content -->
      <div class="main-content">
      @yield('content')
    </div>

        <!-- Footer -->
    @include('admin.layouts.inc.footer')
    </div>
  </div>

  @include('admin.layouts.inc.script')
</body>
</html>
