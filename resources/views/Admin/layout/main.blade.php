
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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