<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Our Products</title>
  <link rel="icon" type="image/png" href="about/logo.png">
  <link rel="stylesheet" href="product.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <style>
    #preview {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 9999;
      display: none;
    }

    #preview img {
      max-width: 90%;
      max-height: 80vh;
      margin: auto;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    #preview .close {
      position: absolute;
      top: 20px;
      right: 20px;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }

    .preview-link {
      color: blue;
      font-size: 12px;
    }
    
  </style>
</head>
<?php
include 'sample-nav.html';
?>

<body>
  <div class="container">
    <br><br><br>
    <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Products</span></h1>
    <hr class="mx-auto mb-5 w-25">
    <!-- Images Filter Buttons Section -->
    <div class="row mt-5" id="filter-buttons">
      <div class="col-12">
        <button class="btn mb-2 me-1 active" data-filter="all">Show all</button>
        <button class="btn mb-2 mx-1" data-filter="ex">Exterior</button>
        <button class="btn mb-2 mx-1" data-filter="mech">Mechanical Parts</button>
        <button class="btn mb-2 mx-1" data-filter="wheel">Tires</button>
        <button class="btn mb-2 mx-1" data-filter="doors">Car Doors</button>
        <button class="btn mb-2 mx-1" data-filter="fender">Car Fender</button>
        <button class="btn mb-2 mx-1" data-filter="carseat">Car Seats</button>
        <button class="btn mb-2 mx-1" data-filter="mat">Car Mats</button>
        <button class="btn mb-2 mx-1" data-filter="lights">Car Lights</button>
        <button class="btn mb-2 mx-1" data-filter="motor">Motorcycles</button>
      </div>
    </div>

    <!-- Filterable Images / Cards Section -->
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
      <div class="card p-0" data-name="doors" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-doors.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Doors</h6>
          <p class="card-text">Description: Upgrade your car with our high-quality car doors. Enhance style and safety.
          </p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="doors" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-doors3.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Doors</h6>
          <p class="card-text">Description: Premium car doors with sleek design and easy installation.</p>
         <br> <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="fender" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-fender.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Fender</h6>
          <p class="card-text">Description: Safeguard your car's body with our top-of-the-line car fender.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="fender" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/fenders.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Fenders</h6>
          <p class="card-text">Description: Complete your car's look with our premium car fenders.</p>
          <br><p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="carseat" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-seat1.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Seats</h6>
          <p class="card-text">Description: Upgrade driving comfort with our luxurious car seats.</p>
          <br><p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="carseat" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-seat3.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Seats</h6>
          <p class="card-text">Description: Experience ultimate comfort and style with our high-quality car seats.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="ex" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/civic-bumpers.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Honda Civic Bumpers</h6>
          <p class="card-text">Description: Enhance appearance and protection for your Honda Civic.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="ex" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/front-bumper2.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Bumper</h6>
          <p class="card-text">Description: Protect your vehicle's front end with our high-quality bumper.</p>
          <br><p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="mat" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-mat.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Mats</h6>
          <p class="card-text">Description: Keep your car's interior clean and stylish with our premium car mats.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="lights" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/headlights-breaklights.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Headlights & Breaklights</h6>
          <p class="card-text">Description: High-performance lights for excellent visibility and safety.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="cars" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/lights-accesories.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Lights & Accessories</h6>
          <p class="card-text">Description: Customize your vehicle with our range of lights and accessories.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="wheel" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/mugs.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Mugs</h6>
          <p class="card-text">Description: Show off your love for cars with our premium car-themed mugs.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="mech" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/suspension2.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Suspensions</h6>
          <p class="card-text">Description: Improve vehicle performance and handling with our high-quality suspensions.
          </p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="roof" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/roof-windshields.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Roof & Windshields</h6>
          <p class="card-text">Description: Protect yourself from the elements with our reliable roof and windshields.
          </p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="lights" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/tail-lights.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Tail Lights</h6>
          <p class="card-text">Description: Enhance safety and style with our premium tail lights.</p>
         <br> <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="wheel" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/tire-lights1.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Tires</h6>
          <p class="card-text">Description: Experience superior performance with our high-quality car tires.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="motor" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/japan-motors.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Japan Motorcycle</h6>
          <p class="card-text">Description: Discover the power and precision of our Japan motorcycles.</p>
          <br><p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="motor" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/harap2.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Japan Motorcycle</h6>
          <p class="card-text">Description: Ride in style with our high-performance Japan motorcycles.</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="mech" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/transmission.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Transmission</h6>
          <p class="card-text">Description: Ensure smooth gear shifts with our reliable car transmission</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>

      <div class="card p-0" data-name="mech" onclick="showPreview(this.querySelector('img'))">
        <img src="product-img/car-front.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Unknown Product</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
          <p class="card-text preview-link">(Click the to preview image)</p>
        </div>
      </div>
    </div>


    <!-- Image Preview Modal -->
    <div id="preview">
      <span class="close" onclick="hidePreview()">&times;</span>
      <img id="preview-image" src="" alt="Preview Image">
    </div>
  </div>
<br><br><br>
  <script>
    const filterButtons = document.querySelectorAll("#filter-buttons button");
    const filterableCards = document.querySelectorAll("#filterable-cards .card");

    // Filter cards based on button click
    filterButtons.forEach(button => {
      button.addEventListener("click", () => {
        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        const filterValue = button.getAttribute("data-filter");

        filterableCards.forEach(card => {
          const cardName = card.getAttribute("data-name");
          if (filterValue === "all" || cardName === filterValue) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      });
    });

    // // Show all cards by default
    // filterButtons[0].click();

    // Show image preview on card click
    function showPreview(image) {
      const preview = document.getElementById("preview");
      const previewImage = document.getElementById("preview-image");

      previewImage.src = image.src;
      preview.style.display = "block";
    }

    // Hide image preview on close button click
    function hidePreview() {
      const preview = document.getElementById("preview");

      preview.style.display = "none";
    }

  </script>
</body>

</html>