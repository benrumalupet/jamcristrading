<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>JAMCRIS TRADING</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="wave">
            <img src="bg.png" alt="">
        </div>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#"class="btn btn-rounded" onclick="redirectAbout()">About</a></li>
                 <script type="text/javascript">
                function redirectAbout() {
                    window.location.href = "about/index.html";
                }
            </script>
                 <li><a href="#"class="btn btn-rounded" onclick="redirectFeedbackPage()">Send us Feedback</a></li>
                 <script type="text/javascript">
                function redirectFeedbackPage() {
                    window.location.href = "phpEmail-main/index.html";
                }
            </script>
                <li><a href="#">Login</a></li>

            </ul>
            <img src="image/logo.png" alt="">
        </nav>

        <div class="main-content">

            <div class="image-pista">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="logo.png" alt=""></div>
                        <div class="swiper-slide"><img src="logo.png" alt=""></div>
                        <div class="swiper-slide"><img src="logo.png" alt=""></div>    
                    </div> 
                </div>
            </div>
            <div class="main-text">
                <h1>
                    JAMCRIS TRADING 
                </h1>
                
                <p>Your one stop auto tite.</p>
                
               
            </div>
        </div>
       
        <div class="right">
            <div class="box">
                 <div class="image">
                    <img src="excel.png" alt="">
                </div> 
                <div class="inner-box">
                    <h3>Excellence</h3>
                    <p>20 years of excellency</p>
                </div>
            </div>
            <div class="box">
                 <div class="image">
                    <img src="reliable.png" alt="">
                </div> 
                <div class="inner-box">
                    <h3>Reliability</h3>
                    <p>Providing high quality service </p>
                </div>
            </div>
            <div class="box">
                 <div class="image">
                    <img src="satisfy.png" alt="">
                </div> 
                <div class="inner-box">
                    <h3>Satisfaction</h3>
                    <p>Meets your expectations</p>
                </div>
            </div>
        </div>
           
        </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
        });
      </script>
</body>

</html>