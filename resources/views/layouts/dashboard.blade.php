<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <script src="/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="/css/sign-in.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

  <link href="/css/dashboard.css" rel="stylesheet">

  <title>{{ $title ?? 'Page Title' }}</title>

</head>
<body>

  <x-dashboard-icons />

  {{ $slot }}

  <script src="/js/bootstrap.bundle.min.js"></script>

</body>
</html>
