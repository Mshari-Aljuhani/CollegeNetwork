    <head>
        <meta charset="UTF-8">
        <title> Social College Network </title>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4fb3f532b0.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <section class="main" style="url(images/bg.jpg)">
        <nav>
            <a href="" class="logo">
                <img src="{{asset('images/mylogonoBG.png')}}"/>
            </a>
            <ul class="menu">
                <li><a class="active"><b>Home</b></a></li>
                <li><a href="{{route('login')}}"><b>Login</b></a></li>
                <li><a href="{{route('register')}}"><b>Register</b></a></li>
            </ul>
        </nav>

        <div class="main-heading">
            <h1>Social College Network</h1>
            <p> <b>Start Communicate Effectively </b></p>
        </div>
            <!-- <a class="main-btnn" href="login.php"> Sign In</a> -->
    </section>
    <section class="about">
        <div class ="about-img">
            <img src="{{asset('images/test.jpg')}}" alt="...">
        </div>
        <div class="about-text">

            <h2>Start Posting</h2>
            <p class="about-text-p">state what in your mind!</p>
            <a href="{{route('login')}}">
                <button  class="main-btn MainBtn" type="submit">Start</button>
            </a>
        </div>
    </section>
    </body>
    @include('component.chat-box')

