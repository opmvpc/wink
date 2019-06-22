<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Mon super blog Wink">
  <meta name="author" content="moi">

  <title>Mon super blog Wink</title>

  <!-- Custom fonts for this template -->
  <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

  @include('layouts.nav')

  <!-- Page Header -->
  @include('layouts.header')

  <!-- Main Content -->
  @yield('content')

  <hr>

  @include('layouts.footer')

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/vendor.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
