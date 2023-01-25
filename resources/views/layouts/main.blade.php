<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <!-- Navbar CSS -->
    <link rel="stylesheet" href="/css/navbar.css">

    @yield('style')
    <link rel="shortcut icon" href="/img/logofooter.png">
    <!-- Footer CSS -->
    <link rel="stylesheet" href="/css/footer.css">
    <!-- Slider Css -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/b86a79ac18.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/css/slider.css"> -->

    <title>HMIK | {{ $title }}</title>
</head>

<body>

    @include('partials.navbar')
    <!-- @include('slider') -->

    @yield('container')

    @include('partials.footer')
</body>

</html>