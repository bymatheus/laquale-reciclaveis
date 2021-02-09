<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description ?? 'Descrição' }}">
    <meta name="language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="{{ $robots ?? 'noindex, nofollow' }}">
    <meta name="theme-color" content="#3597D4">

    <link rel="shortcut icon" href=" {{ asset('dist/images/favicon.ico') }}">
    <link href="{{ asset('dist/css/bundle.min.css') }}" rel="stylesheet">
  </head>
  <body>

    @yield('content')

  </body>
</html>
