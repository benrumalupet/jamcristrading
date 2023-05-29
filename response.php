<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="icon" type="image/png" href = "about/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/css/rizal.min.css"
    integrity="sha256-c+mRP5IEpihf3MvgbkG1cScBdbRoVQCW9PiGmS7uFA8=" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
  <link rel="stylesheet" href="contacts/contacts.css">

  </style>
</head>
<?php
    include 'sample-nav.html';
    ?>
<body>

  <form method="post" action="mailer.php">

    <div class="container">
      <div class="content">

        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Blas Ople Diversion Road, Anilao, Malolos,</div>
            <div class="text-two">Bulacan 3000</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+0098 9893 5647</div>
            <div class="text-two">+0096 3434 5678</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">jamcristrading@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text"><br>Send us a message</div>
          <p>If you have any concern or any types of quries related to our services or products, you can send us message
            from here. It's our pleasure to help you.</p>
          <br>
          <input class="w_25_rem margin_bottom_1_rem" type="text" name="name" placeholder="Name" autocomplete="off"
            required>
          <input class="w_25_rem margin_bottom_1_rem" type="email" name="email" placeholder="Email" autocomplete="off"
            required>

          <textarea name="message" class="w_25_rem margin_bottom_1_rem" placeholder="Message..."></textarea>
          <div class="primary-checkbox-container margin_bottom_2_rem">
            <input class="primary-checkbox" type="checkbox" required>
            <div class="primary-checkbox-description color_black font_size_small">I agree to the <a
                class="font_size_small color_primary" href="https://rizalcss.com/privacy-policy" target="_blank">Privacy
                Policy</a>.</div>
          </div>
          <button class="primary-button background_color_primary font_size_medium color_white border_radius_secondary"
            type="submit" name="send">
            Send <i class="fa-solid fa-paper-plane primary-button-icon color_white"></i>
          </button>
          <br><br>
          <div>
            <div class="topic-two">Directions</div>
            <p>Here is a guide on how to go to our store.</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15426.745481112035!2d120.800755!3d14.84285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339651927fb70cc9%3A0x8dbb7efa4abf192b!2sJam%20Chris!5e0!3m2!1sen!2sph!4v1684124718387!5m2!1sen!2sph"
              width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
  </form>

  <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/js/rizal.min.js"
    integrity="sha256-HBuvk3PCFCXtzy/G/393UvcosSWVy6WHf5sRnZdzmio=" crossorigin="anonymous"></script>


</body>

</html>