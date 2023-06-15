<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slide Show</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
.container {
    position: relative;
    background: #aad5f6;
}
.slide-1 {
    background: url('../product-img/repair1.jpg');
}
.slide-2 {
    background: url('../product-img/repair2.jpg');
}
.slide-3 {
    background: url('../img/celerio.jpg');
}
.slide-4 {
    background: url('../img/fixed.jpg');
}

.slide {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow-x: hidden;
}
.caption {
    background: rgba(0, 0, 0, 0.03);
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 40px 0px;
}
.caption h3 {
    color: #fff;
    text-align: center;
    font-size: 50px;
    padding: 18px;
}
.caption p {
    max-width: 600px;
    width: 90%;
    margin: 0px auto;
    color: #ccc;
    text-align: center;
    font-size: 18px;
    line-height: 1.5em;
}
.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 100;
    background: rgba(0, 0, 0, .1);
    border-radius: 50%;
    transform: background 500ms;
}
.arrow img {
    width: 50px;
}
.arrow:hover {
    background: rgba(0, 0, 0, .4);
}
.l {
    left: 0;
}
.r {
    right: 0;
}
    </style>
</head>
<?php
include '../sample-nav.html';
?>
<body>
    <div class="container">
        <div class="arrow l" onclick="prev()">
            <img src="../img/l.png" alt="l">
        </div>
        <div class="slide slide-1">
             <div class="caption">
                 <h3>Car Repair and Body Works</h3>
             </div>
        </div>
        <div class="slide slide-2">
            <div class="caption">
            <h3>Car Repair and Body Works</h3>
                <p>LA is always so much fun!</p>
            </div>
       </div>
       <div class="slide slide-3">
            <div class="caption">
            <h3>Car Repair and Body Works <br>(Before)</h3>
                <p></p>
            </div>
            
       </div>
       <div class="slide slide-4">
             <div class="caption">
                 <h3>Car Repair and Body Works<br>(After)</h3>
             </div>
        </div>
       <div class="arrow r" onclick="next()">
            <img src="../img/r.png" alt="r">
        </div>
    </div>

    <script>
        let slide = document.querySelectorAll('.slide');
        var current = 0;

        function cls(){
            for(let i = 0; i < slide.length; i++){
                  slide[i].style.display = 'none';
            }
        }

        function next(){
            cls();
            if(current === slide.length-1) current = -1;
            current++;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function prev(){
            cls();
            if(current === 0) current = slide.length;
            current--;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function start(){
            cls();
            slide[current].style.display = 'block';
        }
        start();
    </script>
</body>
</html>