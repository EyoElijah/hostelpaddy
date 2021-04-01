<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Coming Soon') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('files/img/logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('files/img/logo.png') }}">
  <link rel="mask-icon" href="{{ asset('files/img/logo.png') }}" color="#0f4392">
  <link rel="shortcut icon" href="{{ asset('files/img/logo.png') }}" type="image/x-icon">

  <!-- Default Stylesheet -->
  <link rel="stylesheet" href="{{ asset('files/styles.css') }}">

  <!-- Vendor stylesheets -->
  <link rel="stylesheet" href="{{ asset('files/vendor/animate/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('files/vendor/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('files/vendor/reset/css/reset.min.css') }}">
  <link rel="stylesheet" href="{{ asset('files/vendor/normalize/css/normalize.min.css') }}">

  <!-- Default Scripts -->
  <script src="{{ asset('files/script.js') }}" defer></script>

  <!-- Vendor Scripts -->
  <script src="{{ asset('files/vendor/jquery/jquery-3.1.1.min.js') }}" defer></script>
  <script src="{{ asset('files/vendor/bootstrap/js/bootstrap.bundle.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.nav')

    <!-- Page Content -->
    <main>
      @yield('content')
    </main>
  </div>
</body>

</html>
