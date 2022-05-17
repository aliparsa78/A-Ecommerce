<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
<script src="../js/bootstrap5.bundle.js"></script>
<script src = "../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap5.css">
<link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    @include('Frontend.layout.navbar')

    @include('Frontend.layout.slidshow')
</body>
</html>