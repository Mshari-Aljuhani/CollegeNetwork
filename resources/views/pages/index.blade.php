@extends('layouts.app')
@section('content')
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> Social College Network </title>
    <link rel="stylesheet" href="resources/css/style2.css"/>
    <script src="https://kit.fontawesome.com/4fb3f532b0.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="main" style="url(../images/bg.jpg)">
        <nav>
            <a href="" class="logo">
                <img src="images/mylogonoBG.png"/>
            </a>
            <ul class="menu">
                <li><a href="index2.html" class="active"><b>Home</b></a></li>
                <li><a href="about.html"><b>About</b></a></li>
                <li><a href="contact.php"><b>Conact</b></a></li>
            </ul>
        </nav>
    
        <div class="main-heading">
            <h1>Social College Network</h1>
            <p> <b>Start Communicate Effectively </b></p>
           <!-- <a class="main-btnn" href="login.php"> Sign In</a> -->
    </section>
    

    <section class="about">
        <div class ="about-img">
            <img src="images/test.jpg">
        </div>
        <div class="about-text">
            
            <h2>Start Posting</h2>
            <p class="about-text-p">state what in your mind!</p>
            <form method="get" action="signup.php">
                <button class="main-btn" type="submit">Start</button>
            </form>
            </div>
    </section>
 </body>

 