<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/simplegrid.css">
        <link rel="stylesheet" href="css/style.css">


        @yield('header')
    </head>
    <body>
        <header>
           <?php if(isset($_SESSION['isloggedin'])) {
             echo '<a href="index.php" class="logo">Online newspaper</a>
             <nav>
                 <ul>
                     <li><a href="items/index">Front page</a></li>
                     <li><a href="loginReg">Add new item</a></li>
                     <li><a href="login.php">Log in</a></li>
                 </ul>
             </nav>';
           } else {
             echo '<a href="index.php" class="logo">Online newspaper</a>
             <nav>
                 <ul>
                   <li><a href="items/index">Front page</a></li>
                   <li><a href="loginReg">Log in/Register</a></li>
                   <li><a href="login.php">Log in</a></li>
                 </ul>
             </nav>';
           } ?>
        </header>

        @yield('content')

        @yield('footer')
    </body>
    <script src="js/script.js"></script>
</html>
