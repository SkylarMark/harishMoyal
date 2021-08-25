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
    .navbar {
        letter-spacing: normal !important;
        color: #20292f !important;
        font-size: 25px !important;
        line-height: 40px !important;
        font-weight: 500 !important;
        transition: .3s ease-in-out;
    }

    .navbar:hover{
        letter-spacing: normal !important;
        color: #20292f !important;
        font-size: 25px !important;
        line-height: 40px !important;
        font-weight: 500 !important;
        background-color: #ffffff !important;
        box-shadow: 0px 3px 10px gray !important;
        transition: .3s ease-in-out !important;
    }

    .btn-dark{
        background-color: #ffffff !important;
        border: 2px solid #fa4d9d !important;
        border-radius: 30px !important;
        color: #fa4d9d !important;
        font-size: 13px !important;
        line-height: 28px !important;
        font-weight: 600 !important;
        padding: 4px 12px 4px 12px !important;
        transition: .4s ease-out;
    }

    .btn-dark:hover{
        background-color: #fa4d9d !important;
        border: 2px solid #fa4d9d !important;
        border-radius: 30px !important;
        color: #ffffff !important;
        font-size: 13px !important;
        line-height: 28px !important;
        font-weight: 600 !important;
        padding: 4px 12px 4px 12px !important;
        transition: .4s ease-out !important;
    }
    .navscroll{
    letter-spacing: normal !important;
    color: #20292f !important;
    font-size: 15px !important;
    line-height: 28px !important;
    font-weight: 500 !important;
    background-color: #ffffff;
    box-shadow: 0px 1px 10px gray;
    transition: .3s ease-in-out;
    }

    .btn-change1{
        background-color: #fa4d9d !important;
        border: 2px solid #fa4d9d !important;
        border-radius: 30px !important;
        color: #ffffff !important;
        font-size: 13px !important;
        line-height: 28px !important;
        font-weight: 600 !important;
        padding: 4px 12px 4px 12px !important;
        transition: .4s ease-out !important;
    }

    .btn-change2{
        background-color: #2cc2e6 !important;
        border: 2px solid #2cc2e6 !important;
        border-radius: 30px !important;
        color: #ffffff !important;
        font-size: 13px !important;
        line-height: 28px !important;
        font-weight: 600 !important;
        padding: 4px 12px 4px 12px !important;
        transition: .4s ease-out !important;
    }

    .navscroll1{
    letter-spacing: normal !important;
    color: #20292f !important;
    font-size: 15px !important;
    line-height: 28px !important;
    font-weight: 500 !important;
    background-color: #ffffff;
    box-shadow: 0px 1px 10px gray;
    opacity: 0;
    animation-name: vanishOut;
    animation-iteration-count: 1;
    animation-timing-function: ease-in-out;
    animation-duration: 1s;
    }

    @keyframes vanishOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    .logofade{
        opacity: 0;
        animation-name: vanishOut;
        animation-duration: 2s;
        animation-iteration-count: 1;
    }

    .logofadeIn{
        opacity: 1;
        animation-name: vanishIn;
        animation-duration: 2s;
        animation-iteration-count: 1;
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

<nav class="navbar navbar-light sticky-top  navbar-expand-lg">
<a class="navbar-brand ml-0" href="#"><img src="images/logo.png" width="50%" alt="" id="boxshadow"></a>         
<!-- ---------------------------------------------Toggler/collapsibe Button----------------------------------------------------------------------------------- -->
 <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link tcba" href="#">About</a>
            </li>
            <li class="nav-item ml-2">
                 <a class="nav-link tcba" href="#">Contact</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link tcba" href="#">Events</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link tcba" href="#">Songs</a>
            </li>
             <li class="nav-item ml-2">
                <a class="nav-link tcba" href="members-area">Login</a>
            </li>
            <li class="nav-item ml-4 mr-4" id="button-nav">
                <a class="btn btn-dark" href="#">JOIN TO DOWNLOAD</a>
            </li>
        </ul> 
    </div> -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-4 mr-4" id="button-nav">
                <a class="btn btn-success btn-sscroll" href="#footersl">Connect with HM<p></p></a>
            </li>
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

