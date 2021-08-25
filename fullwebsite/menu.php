<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
/* Logo===================================================> */
    #logo{
        width: 50%;
    }
    
    @media only screen and (max-width: 800px) {
  #logo {
            width: 90%;
        }
    }
    @media only screen and (max-width: 600px) {
  #logo {
            display: none;
        }
    }
/* =======================================================> */

/* Navbar=================================================> */
    .navbar {
        letter-spacing: normal;
        color: #20292f;
        font-size: 25px;
        line-height: 40px;
        font-weight: 500;
        transition: .3s ease-in-out;
        background: rgba(10,10,10,0.5);
        transition: .3s ease-in-out;
    }

    .navbar:hover{
        letter-spacing: normal;
        color: #20292f;
        font-size: 25px;
        line-height: 40px;
        font-weight: 500;
        background: #fff;
        transition: .3s ease-in-out ;
    }

    .navscroll{
        letter-spacing: normal ;
        color: #20292f ;
        font-size: 25px ;
        line-height: 28px ;
        font-weight: 500 ;
        background-color: #ffffff;
        transition: .3s ease-in-out;
    }

    .navscroll1{
        letter-spacing: normal ;
        color: #20292f ;
        font-size: 25px ;
        line-height: 28px ;
        font-weight: 500 ;
        background-color: #ffffff;
        opacity: 0;
        animation-name: vanishOut;
        animation-iteration-count: 1;
        animation-timing-function: ease-in-out;
        animation-duration: 1s;
    }
/* =======================================================> */

/* Button=================================================> */
    .btn-dark{
        background-color: #ffffff ;
        border: 2px solid #fa4d9d ;
        border-radius: 30px ;
        color: #fa4d9d ;
        font-size: 13px ;
        line-height: 28px ;
        font-weight: 600 ;
        padding: 4px 12px 4px 12px ;
        transition: .4s ease-out;
    }

    .btn-dark:hover{
        background-color: #fa4d9d ;
        border: 2px solid #fa4d9d ;
        border-radius: 30px ;
        color: #ffffff ;
        font-size: 13px ;
        line-height: 28px ;
        font-weight: 600 ;
        padding: 4px 12px 4px 12px ;
        transition: .4s ease-out ;
    }

    .btn-change1{
        background-color: #fa4d9d ;
        border: 2px solid #fa4d9d ;
        border-radius: 30px ;
        color: #ffffff ;
        font-size: 13px ;
        line-height: 28px ;
        font-weight: 600 ;
        padding: 4px 12px 4px 12px ;
        transition: .4s ease-out ;
    }

    .btn-change2{
        background-color: #2cc2e6 ;
        border: 2px solid #2cc2e6 ;
        border-radius: 30px ;
        color: #ffffff ;
        font-size: 13px ;
        line-height: 28px ;
        font-weight: 600 ;
        padding: 4px 12px 4px 12px ;
        transition: .4s ease-out ;
    }

/* ======================================================> */

/* Keyframes=============================================> */
    @keyframes vanishOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes vanishIn {
    0%  {
            opacity: 0;
        }
    100% {
            opacity: 1;
        }
    }

</style>
<!-- ======================================================================================================================================== -->

<!-- Navigation============================================================================================================================== -->
<nav class="navbar navbar-light sticky-top  navbar-expand-sm">

<a class="navbar-brand ml-0" href="#"><img src="webimg/logo.png" id="logo"></a>

<!-- ---------------------------------------------Toggler/collapsibe Button------------------------------------------------------------------ -->

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

<!-- ----------------------------------------------Menu Links-------------------------------------------------------------------------------- -->
    <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-4">
                <a class="nav-link" href="links/about.php">About</a>
            </li>
            <li class="nav-item ml-4">
                 <a class="nav-link" href="links/gallery.php">Gallery</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link" href="links/Events.php">Events</a>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-2">
            <li class="nav-item"><a class="nav-link px-2 ml-1" href="http://www.facebook.com/pages/Harish-Moyal-Singer/225157260846897?ref=tn_tnmn" target="_blank"><span class="fa fa-facebook"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 ml-1" href="https://twitter.com/harishmoyal" target="_blank"><span class="fa fa-twitter"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 ml-1" href="http://www.youtube.com/user/harishmoyal" target="_blank"><span class="fa fa-youtube"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 ml-1" href="http://instagram.com/harishmoyal21/" target="_blank"><span class="fa fa-instagram"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2 ml-1" href="mailto:harishmoyal21@gmail.com" target="_blank"><span class="fa fa-envelope"></span></a></li>
        </ul>
    </div>
</nav>
<footer>
    <script>
        $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".navbar").addClass("navscroll");
    } else {
        $(".navbar").removeClass("navscroll");
    }
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 30) {
        $(".btn-dark").addClass("btn-change1");
        $(".btn-dark").removeClass("btn-dark");
    } else {
        $(".btn-change1").addClass("btn-dark");
        $(".btn-change1").removeClass("btn-change1");
    }
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 800) {
        $(".btn-change1").addClass("btn-change2");
        $(".btn-change1").removeClass("btn-change1");
    } else {
        $(".btn-change2").addClass("btn-change1");
        $(".btn-change2").removeClass("btn-change2");
    }
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".navbar-brand").addClass("logofade");
    } else {
        $(".navbar-brand").removeClass("logofade");
    }
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".navbar-brand").removeClass("logofadeIn");
    } else {
        $(".navbar-brand").addClass("logofadeIn");
    }
});
    </script>
</footer>
</body>
</html>

