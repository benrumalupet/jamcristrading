<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="icon" type="image/png" href="about/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/css/rizal.min.css"
    integrity="sha256-c+mRP5IEpihf3MvgbkG1cScBdbRoVQCW9PiGmS7uFA8=" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
  <link rel="stylesheet" href="contacts/contacts.css">
</head>

<body>
  <?php
  include 'sample-nav.html';

  // Include the necessary files and retrieve the details from the database
  require_once 'connection.php';
  $conn = openConnection();
  $sql = "SELECT * FROM details WHERE cID = 1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  closeConnection($conn);
  ?>

  <form method="post" action="mailer.php">
    <div class="container">
      <div class="content">
        <div class="left-side">
        <div class="hour details">
            <i class="fas fa-clock"></i>
            <div class="topic">Store Hours</div>
            <div class="text-one">
            <div class="text-two"></div><?php echo $row['hours']; ?>
            </div>
          </div>
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">
             <?php echo $row['address']; ?>
            </div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">
              <?php echo $row['phone_one']; ?>
            </div>
            <div class="text-two">
              <?php echo $row['phone_two']; ?>
            </div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">
              <?php echo $row['email']; ?>
            </div>
          </div>
          <div class="social details">
            <a href="<?php echo $row['facebook']; ?>">
              <i class="fab fa-facebook"></i>
              <div class="text-one">Facebook Page</div>
            </a>
          </div>
        </div>

        <div class="right-side">
          <div class="topic-text"><br>Send us a message</div>
          <p>If you have any concern or any types of queries related to our services or products, you can send us a
            message
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
            <p>We've mapped out the directions to our store for your convenience.</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d406.75555554784574!2d120.79659400000001!3d14.845154!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x33965182756347a7%3A0xc9a0749caee3e75b!2sRQWW%2B2JX%20Apc%20Auto%20Repair%20%26%20Towing%20Service%2C%20Blas%20Ople%20Diversion%20Rd%2C%20Malolos%2C%20Bulakan%2C%20Philippines!3m2!1d14.8451244!2d120.7965976!5e1!3m2!1sen!2sus!4v1686163286289!5m2!1sen!2sus"
              width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/js/rizal.min.js"
    integrity="sha256-HBuvk3PCFCXtzy/G/393UvcosSWVy6WHf5sRnZdzmio=" crossorigin="anonymous"></script>
</body>

</html>