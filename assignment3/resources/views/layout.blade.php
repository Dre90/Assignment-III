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
           <?php if(!isset($_SESSION['isloggedin'])) {
             echo '<a href="items" class="logo">Assignment 3</a>
             <nav>
                 <ul>
                     <li><a href="items">Front page</a></li>
                     <li><a href="items/create">Add new item</a></li>
                     <li><a href="items/my_items">My Items</a></li>
                     <li><a href="items/messages">Messages</a></li>
                     <li class="dropdown">
                         <a href="user" class="dropbtn">{{ $user->name }}</a>
                         <div class="dropdown-content">
                             <a href="user">Profile</a>
                             <a href="items">Log Out</a>
                         </div>
                     </li>

                 </ul>
             </nav>';
           } else {
             echo '<a href="items" class="logo">Assignment 3</a>
             <nav>
                 <ul>
                   <li><a href="items">Front page</a></li>
                   <li><a href="loginReg">Log in/Register</a></li>
                 </ul>
             </nav>';
           } ?>
        </header>

        @yield('content')

        @yield('footer')
    </body>
    <script src="js/script.js"></script>
</html>
