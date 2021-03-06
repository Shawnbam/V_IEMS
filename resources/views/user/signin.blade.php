<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .jumbotron {
            background-color: #0084b4;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }


        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #74AFAD !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }

        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">VIEMS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center row">
    @include('partials.message-block')

    <h1>V-IEMS</h1>
    <p>An inhouse student interaction platform</p>
    <div class="col-sm-4 col-md-offset-4">
        <form action="{{ route('user.signin') }}" method="post">
            <div class="form-group">
                <label for="email" >Roll Number</label><br>
                <input class="form-control" type="text" id="email" name="email"  size="40" >
            </div>
            <div class="form-group" >
                <label for="password" >Password</label><br>
                <input class="form-control" type="password" id="password" name="password"  size="40"  placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            {{ csrf_field() }}
        </form>
    </div>
    {{--<div class="col-md-6">--}}
        {{--<form action="{{ route('user.signup') }}" method="post">--}}
            {{--<div class="form-group">--}}
                {{--<label for="name" >Name</label><br>--}}
                {{--<input class="form-control" type="text" id="name" name="name"  size="40" autofocus>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label for="roll" >Email</label><br>--}}
                {{--<input class="form-control" type="text" id="roll" name="roll"  size="40" placeholder="example@email.com" autofocus>--}}
            {{--</div>--}}
            {{--<div class="form-group" >--}}
                {{--<label for="password" >Password</label><br>--}}
                {{--<input class="form-control" type="password" id="password" name="password"  size="40"  placeholder="password" autofocus>--}}
            {{--</div>--}}
            {{--<button type="submit" class="btn btn-primary">Sign Up</button>--}}
            {{--{{ csrf_field() }}--}}
        {{--</form>--}}
    {{--</div>--}}

</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About V-IEMS</h2><br>
            <h4> V-Information Exchange Management System is a website where students of the institute can interact with peers, share information with them, post their queries, and learn about the domains of their interests.</h4><br>
            <p>In todays highly competitive environment in the field of Computer Science and Engineering, students need help of each other for a lot of purposes. Few examples include: a student skilled in a particular domain can help other students who are new to the field. A final year student might want to share his placement experience and provide tips to the junior students. A student might want to gather students who share the same interest as him/her on a particular topic and form a team to start on a new project. A student might want to sell his previous semester books to students who are studying or yet to study that particular semester. All such cases involve student-student interactions. And so our system aims to serve as a common platform for the same.

                V Information Exchange Management System is a Student website which allows students of the institute to share information with peers, ask queries/doubts or provide answers to queries about different topics, take timed mock tests set by teachers of the institute, buy/sell books to other students, and other such features which would increase the information exchange among the students and ease the interaction with each other.The system would also analyze the interests of the students, and based on that, different topics that might be of interest to the student would be recommended to them.
                </p>
            <br>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Wadala, Mumbai.</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>

    </div>
</div>


<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>
