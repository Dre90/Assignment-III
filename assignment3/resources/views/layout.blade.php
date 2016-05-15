<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/style.css">

        @yield('header')
    </head>
    <body>

        @yield('content')

        @yield('footer')
    </body>
</html>
