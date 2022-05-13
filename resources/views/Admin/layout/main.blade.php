
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    @yield('title')
  </title>
  <script src = "../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/bootstrap5.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="g-sidenav-show  bg-gray-200">
<!-- Navbar -->
    @include('Admin.layout.nav') 

<!-- MainContent -->

        <div class="container " >
          @yield('content')
        </div>

<!-- footer -->
    @include('Admin.layout.footer') 
</body>

</html>