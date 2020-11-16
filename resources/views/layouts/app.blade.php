<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <title>Ma page web</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/style.css') }}">
  <script type="text/javascript" src="{{ asset('/jquery/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.js') }}"></script>
</head>
<body>
    
  @include('layouts.nav')

  <div class="page">

    @yield('slidebar')

    <div class="container content">

      @yield('content')

    </div>

  </div>

  @include('/layouts.partials._footer')

</body>
</html>