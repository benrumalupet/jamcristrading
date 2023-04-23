<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpEmail</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/css/rizal.min.css" integrity="sha256-c+mRP5IEpihf3MvgbkG1cScBdbRoVQCW9PiGmS7uFA8=" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
  <style>
    .back-button {
      position: fixed;
      bottom: 1rem;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
  
</head>
<body>
  <form class="center_absolute display_grid" action="mailer.php" method="post">
    <input class="w_25_rem margin_bottom_1_rem" type="text" name="name" placeholder="Name" autocomplete="off">
    <input class="w_25_rem margin_bottom_1_rem" type="email" name="email" placeholder="Email" autocomplete="off">
    <input class="w_25_rem margin_bottom_1_rem" type="text" name="subject" placeholder="Subject" autocomplete="off">
    <textarea name="message" class="w_25_rem margin_bottom_1_rem" placeholder="Message..."></textarea>
    <div class="primary-checkbox-container margin_bottom_2_rem">
      <input class="primary-checkbox" type="checkbox" required>
      <div class="primary-checkbox-description color_black font_size_small">I agree to the <a class="font_size_small color_primary" href="https://rizalcss.com/privacy-policy" target="_blank">Privacy Policy</a>.</div>
    </div>
    <button class="primary-button background_color_primary font_size_medium color_white border_radius_secondary" type="submit" name="send">
      Send <i class="fa-solid fa-paper-plane primary-button-icon color_white"></i>
    </button>
  </form>
    
  <button onclick="goBack()" class="back-button background_color_primary font_size_medium color_white border_radius_secondary">
    Back <i class="fa-solid fa-arrow-left primary-button-icon color_white"></i>
    <div class="go-home-container">
    </div>
  </button>
  
  <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/js/rizal.min.js" integrity="sha256-HBuvk3PCFCXtzy/G/393UvcosSWVy6WHf5sRnZdzmio=" crossorigin="anonymous"></script>
  
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
