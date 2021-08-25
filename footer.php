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
        #imgsls{
            width:5%;
            transition : 0.5s;
        }

@media only screen and (max-width: 800px) {
    #imgsls{
        width:7%;
        transition : 0.5s;
        }
}

@media only screen and (max-width: 600px) {
    #imgsls{
        width:8%;
        transition : 0.5s;
    }
}

@media only screen and (max-width: 400px) {
    #imgsls{
        width:9%;
        transition : 0.5s;
    }
}

#contacts{
    font-size: 25px;
}
#contact{
    font-size: 40px;
    margin-bottom: -3%;
    margin-top: 4%;
}
@media only screen and (max-width: 600px) {
    #contacts{
    font-size: 20px;
    margin-top: -10%;
}
}

#madeby{
    font-size: 15px;
}
#madebyc{
    font-size:10px;
    margin-bottom: 10%;
}

.btn-sscroll{
    /* background: #7f1e43; */
    background: #ffffff;
    color: #7f1e43;
    width: 200px;
    height: 45px;
    font-size: 18px;
    text-align: center;
    align: center;
    border: 0px;
    outline: none;
    transition: 0.5s;
}

.btn-sscroll:hover{
    outline: none;
    background: #ffffff !important;
    color: #7f1e43 !important;
    width: 200px;
    height: 45px;
    font-size: 20px;
    text-align: center;
    align: center;
    border: 0px;
    transition: .5s;
}

.btn-sscroll:focus{
    outline: none;
}

#imgsls:hover{
            width:6%;
            transition : 1s;
}
@media only screen and (max-width: 800px) {
    #imgsls:hover{
        width:8%;
        transition : 1s;
        }
}

@media only screen and (max-width: 600px) {
    #imgsls:hover{
        width:9%;
        transition : 1s;
    }
}

@media only screen and (max-width: 400px) {
    #imgsls:hover{
        width:10%;
        transition : 1s;
    }
}
    </style>
<footer>   
    <div id="footer">Music Made with Love
    </div>
    <div id="footersltext"> Social Links</div>
    <div id="footersl">
        <div id="footergap">
    <a href="http://instagram.com/harishmoyal21/" target="_blank"><img src="images/insta.png" id="imgsls"></a>
    </div>
    <div id="footergap">
        <a href="http://www.facebook.com/pages/Harish-Moyal-Singer/225157260846897?ref=tn_tnmn" target="_blank"><img src="images/facebook.png" id="imgsls"></a>
        </div>
        <div id="footergap">
    <a href="http://www.youtube.com/user/harishmoyal" target="_blank"><img src="images/youtube.png"  id="imgsls"></a>
    </div>
    <div id="footergap">
    <a href="https://twitter.com/harishmoyal" target="_blank"><img src="images/twitter.png"  id="imgsls"></a>
    </div>
    <div id="footergap">
    <a href="mailto:harishmoyal21@gmail.com" target="_blank"><img src="images/mail.png" alt="" id="imgsls"></a>
    </div>
    <div id="contact">Contact</div>
    <div id="footersl">
        <div id="contacts">
        +91 9867200021 , +91 9987717522
    </div>
    </div>
<div class="container">
    <div id="madeby">
        Made By
    </div>
    <div id="madebyc">
        Samyak Joshi & Utkarsh Pateriya
    </div>
</div>
</footer>
</body>
</html>