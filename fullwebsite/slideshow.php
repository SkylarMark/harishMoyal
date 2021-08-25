<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
#player{
        width: 100%;
        height: 75%;
    }
    #video_box{
        float:left;
        top: 0;
        width: 100%;
    }
    #video_overlays{
        position: fixed;
        background-color: rgba(0,0,0,0);
        width: 100%;
        z-index: 10;
    }
</style>
<body>
<div id="video_box">
<div id="video_overlays"> <?php require 'menu.php' ?> </div>
    <video id="player" src="video/intro.mp4" type="video/mov" poster="slideshow/13.jpg" autoplay muted loop></video></div>
</div>  
</body>
</html> 
