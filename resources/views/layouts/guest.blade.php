<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ogani | Template</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
  <!-- Css Styles -->
  @yield('styles')
  <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="/frontend/css/style.css" type="text/css">
</head>

<body>
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <div id="app">
    @yield('main')
  </div>
  <!-- Js Plugins -->
  @stack('scripts')
  <script src="/frontend/js/jquery-3.3.1.min.js"></script>
  <script src="/frontend/js/bootstrap.min.js"></script>
  <script src="/frontend/js/jquery.nice-select.min.js"></script>
  <script src="/frontend/js/jquery-ui.min.js"></script>
  <script src="/frontend/js/jquery.slicknav.js"></script>
  <script src="/frontend/js/mixitup.min.js"></script>
  <script src="/frontend/js/owl.carousel.min.js"></script>
  <script src="/frontend/js/main.js"></script>
</body>

</html>
