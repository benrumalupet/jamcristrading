<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper-bundle.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="style-bundle.css" />
</head>

<?php
include 'sample-nav.html';
?>

<body>
  <section class="main swiper mySwiper">
    <div class="wrapper swiper-wrapper">
      <div class="slide swiper-slide">
        <img src="img/gatebackground.jpg" alt="" class="image" />
        <div class="image-data translucent-card">
          <h1 style="color: white;">About Us</h1>

          <h2>We are JamCris Trading <br>& <span>Machine Surplus</span></h2>

          <h4 style="color: white;">

            Founded by three siblings named Jimmy, Alex, and Mercy Crisostomo in 2003, the
            company formerly known as "Almers" has been providing quality products <br>and services for 20 years now.
            <br>
            <br>Whether it's our wide range of products or our exceptional services, we strive to ensure that each
            customer's needs are met with utmost satisfaction. Our team of dedicated professionals is always ready to
            assist and provide guidance to make your experience with us enjoyable and fulfilling.
            <br><br> Today, our shop is located at Anilao, Malolos, Bulacan and it has become a go-to destination for
            customers looking for top-notch products and services.
          </h4>

          <!-- <a href="#" class="button">About Us</a> -->
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="img/gatebackground.jpg" alt="" class="image" />
        <div class="image-data translucent-card">
          <h1 style="color: white;">About Us</h1>
          <h2><span>Mission<spanz>
          </h2>


          <h4 style="color: white;">

            Our mission is to provide high-quality car auto parts <br>and trading machine surplus products to our
            customers, <br>while delivering exceptional customer service <br>and building lasting relationships with our
            clients.
            <br>
            <br> Overall, our mission is driven by a passion for excellence, <br>a dedication to customer satisfaction,
            <br>and a
            focus on building long-term relationships. <br>We are proud to serve our customers and contribute to their
            <br> success in the automotive industry.
          </h4>
          <!-- <a href="#" class="button">About Us</a> -->
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="img/gatebackground.jpg" alt="" class="image" />
        <div class="image-data translucent-card">
          <h1 style="color: white;">About Us</h1>
          <h2><span>Vision</span></h2>


          <h4 style="color: white;">

            We aim to be a one-stop-shop for all our customer's needs <br>and continuously expand our product offerings
            to
            <br>meet their evolving requirements.

            <br><br>We constantly expand our product range to offer a diverse selection <br>of high-quality car auto parts and
            trading machine surplus products. <br>From engine components to body accessories, <br>our comprehensive inventory
            ensures that customers <br>can find everything they need in one place.
          </h4>
          <!-- <a href="#" class="button">About Us</a> -->
        </div>
      </div>
    </div>

    <div class="swiper-button-next nav-btn"></div>
    <div class="swiper-button-prev nav-btn"></div>
    <div class="swiper-pagination"></div>
  </section>

  <!-- Swiper JS -->
  <script src="swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>