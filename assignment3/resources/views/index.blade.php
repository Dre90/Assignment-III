@extends('layout')

@section('title')
    Frontpage
@stop

@section('content')
    <header>
        <a href="index.php" class="logo">Online newspaper</a>
        <nav>
            <ul>
                <li><a href="index.php">Front page</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </nav>
    </header>
    <h1>This is the frontpage</h1>
@stop
