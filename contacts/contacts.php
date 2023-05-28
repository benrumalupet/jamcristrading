<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

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
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
        <form class="center_absolute display_grid" action="contacts/mailer.php" method="post">
        <div class="input-box">
          <input type="text" name= "name"placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name = "email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
        <input type="text" name="message" placeholder="Enter your Message">
        </div>
        <div>
  <button class="btn btn-primary btn-lg rounded-pill" type="submit" name="send">
    Send <i class="fas fa-paper-plane ml-2"></i>
  </button>
</div>

        
      <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/js/rizal.min.js" integrity="sha256-HBuvk3PCFCXtzy/G/393UvcosSWVy6WHf5sRnZdzmio=" crossorigin="anonymous"></script>
    </div>
    </div>
  </div>
</body>
</html>