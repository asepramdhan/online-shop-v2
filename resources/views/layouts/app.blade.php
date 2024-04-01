<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="/css/sign-in.css" rel="stylesheet">

  <!-- Icon -->
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}

  <title>{{ $title ?? 'Page Title' }}</title>

</head>
<body>

  <x-navbar />

  <div class="container">

    {{ $slot }}

  </div>

  <script src="/js/bootstrap.bundle.min.js"></script>

</body>
</html>
