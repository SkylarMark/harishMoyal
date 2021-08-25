<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- ================================================SlideShow JS======================================== -->
<script>
var x = 2;

function startTimer() {
    setInterval(displayNextImage, 10000);
}

function displayNextImage() {
    if (x == 1){
    document.getElementById("con1").classList.add('coni1');
    document.getElementById("con1").classList.remove('coni11');
    x = x + 1;
} else if (x == 2){
    document.getElementById("con1").classList.add('coni2');
    document.getElementById("con1").classList.remove('coni1');
    x = x + 1;
}  else if (x == 3){
    document.getElementById("con1").classList.add('coni3');
    document.getElementById("con1").classList.remove('coni2');
    x = x + 1;
}   else if (x == 4) {
    document.getElementById("con1").classList.add('coni4');
    document.getElementById("con1").classList.remove('coni3');
    x = x + 1;
    } else if (x == 5){
    document.getElementById("con1").classList.add('coni5');
    document.getElementById("con1").classList.remove('coni4');
    x = x + 1;
    } else if (x == 6){
    document.getElementById("con1").classList.add('coni6');
    document.getElementById("con1").classList.remove('coni5');
    x = x + 1;
    } else if (x == 7){
    document.getElementById("con1").classList.add('coni7');
    document.getElementById("con1").classList.remove('coni6');
    x = x + 1;
    } else if (x == 8){
    document.getElementById("con1").classList.add('coni8');
    document.getElementById("con1").classList.remove('coni7');
    x = x + 1;
    } else if (x == 9){
    document.getElementById("con1").classList.add('coni9');
    document.getElementById("con1").classList.remove('coni8');
    x = x + 1;
    } else if (x == 10){
    document.getElementById("con1").classList.add('coni10');
    document.getElementById("con1").classList.remove('coni9');
    x = x + 1;
    } else if (x == 11){
    document.getElementById("con1").classList.add('coni11');
    document.getElementById("con1").classList.remove('coni10');
    x = 1;
    } 
}
    </script>
<style>
@keyframes cf3FadeInOut {
    0% {
        opacity:0;
  }
  50% {
        opacity:1;
  }
  100%{
        opacity: 0;
  }
  }
  .conimg {
  animation-name: cf3FadeInOut;
  animation-timing-function: ease-in;
  animation-iteration-count: infinite;
  animation-duration: 10s;
  opacity: 1;
  }

  .coni1{
      background-image: url("slideshow/1.jpg");
  }

  .coni2{
    background-image: url("slideshow/2.jpg");
}

.coni3{
    background-image: url("slideshow/3.jpg");
}

.coni4{
    background-image: url("slideshow/4.jpg");
}

.coni5{
    background-image: url("slideshow/5.jpg");
}

.coni6{
    background-image: url("slideshow/6.jpg");
}

.coni7{
    background-image: url("slideshow/7.jpg");
}

.coni8{
    background-image: url("slideshow/8.jpg");
}

.coni9{
    background-image: url("slideshow/9.jpg");
}

.coni10{
    background-image: url("slideshow/10.jpg");
}

.coni11{
    background-image: url("slideshow/11.jpg");
}

.coni12{
    background-image: url("slideshow/12.jpg");
}

html{
    max-width: 100%;
}

/* ====================================================================================Custom Toggler== */
.custom-toggler.navbar-toggler {
    border-color: rgb(255,255,255);
}
.custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}

body{
    font-family:poppins, sans-serif;
}

.nav {
    top: 0;
    position: sticky;       
    z-index: 100;
    padding: 20px 40px 20px 0px;
    margin: 0px 0px 0px 0px;
    background-color: #2d3e50;
}

.nav a{
    font-size: 20px;
    padding: 0px 0px 0px 0px;
    display: block;
    text-decoration: none;
    color: #6fbee8;
}

.nav a:hover{
    color: #aecfe5;
}

.activem{
    color: white !important;
}

#con1{
    /* background-color: #1f8dd6; */
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    margin: 0% 0% 0% 0%;
    padding: 0% 0% 41% 0%;
    top: 11.2%;
    position: sticky;
}

.btn1{
    background-color: rgba(0, 0, 0, 0);
    color: lightgreen;
    border:3px solid lightgreen;
    font-size: 50px;
    margin: 10% 0px 0px 0px;
    padding: 3% 17%;
}

.btn1:hover{
    background-color: rgba(0, 0, 0, .3);
    color: lightcoral;
    border:3px solid lightcoral;
    font-size: 50px;
    margin: 10% 0px 0px 0px;
    padding: 3% 17%;
}

@media only screen and (max-width: 600px) {
    .btn1{
        background-color: rgba(0, 0, 0, 0);
        color: lightgreen;
        border:3px solid lightgreen;
        font-size: 30px;
        margin: 14% 0px 0px 0px;
        padding: 1% 1%;
    }
    
    .btn1:hover{
        background-color: rgba(0, 0, 0, .3);
        color: lightcoral;
        border:3px solid lightcoral;
        font-size: 30px;
        margin: 14% 0px 0px 0px;
        padding: 1% 1%;
    }
    #p1{
        margin: 2% 0% 0% 0%;
        font-size: 15px;
        color: #b2e6f6;
    }
}

.zindexn{
    z-index: -1;
}
.zindexp{
    z-index: 0;
}

#p1{
    margin: 2% 0% 0% 0%;
    font-size: 20px;
    color: #b2e6f6;
}
/* ====================================================Body======================================================= */
#body{
    height: auto;
    z-index: 1;
    background: linear-gradient(160deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 70%);
    color: #6d495e;
    padding: 0% 0% 0% 0%;
    margin: 0% 0% 0% 0%;
    text-align: center;
    font-size: 45px;
    text-decoration: none;
}
/* ====================================================Footer===================================================== */
#footer{
    background-color: #111111;
    color: #7f8c7d;
    padding: 0% 0% 0% 0%;
    margin: 0% 0% 0% 0%;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    font-size: 15px;
}
#footersl{
    background-color: white;
    color: #7f8c7d;
    padding: 0% 0% 0% 0%;
    margin: 5% 0% 5% 0%;
    position: static;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    font-size: 15px;
}

@media only screen and (max-width: 600px) {
    #footersl{
    background-color: white;
    color: #7f8c7d;
    padding: 0% 0% 0% 0%;
    margin: 10% 0% 5% 0%;
    position: static;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    font-size: 15px;
}
}

#footergap{
    margin: 0% 5%;
    padding: 0% 0%;
    display: inline;
}

@media only screen and (max-width: 600px) {
    #footergap{
    margin: 0% 3%;
    padding: 0% 0%;
    display: inline;
}
}

#footersltext{
    background-color: white;
    color: #7f8c7d;
    padding: 0% 0% 0% 0%;
    margin: 5% 0% 5% 0%;
    position: static;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    font-size: 35px;
}

html{
    font-family: poppins, sans-serif !important;
    scroll-behavior: smooth;

}
/* ==================================================Tables======================================================= */
#pinfo{
    font-size: 20px;
}

#tabletype{
   padding: 2% 0% 0% 0%;
    margin: 0% 0% 0% 0%;
}
.tabletype1{
    padding: 4% 0% 0% 0% !important;
    margin: 0% 0% 5% 0% !important;
}

</style>
</head>
<body onload="startTimer();">

<div class="fluid-container conimg coni1" id="con1">
                       <div id="absolute">              
                </div>
</div>
</div>
<footer>
    
</footer>
</body>
</html>
