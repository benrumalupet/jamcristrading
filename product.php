<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> Our Products</title>
  <link rel="stylesheet" href="product.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

</head>
<?php
include 'sample-nav.html';
?>

<body>
  <div class="container">
  <br><br><br><h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Products</span></h1>
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
      <div class="card p-0" data-name="doors">
        <img src="product-img/car-doors.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Doors</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="doors">
        <img src="product-img/car-doors3.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Doors</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="fender">
        <img src="product-img/car-fender.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Fender</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="fender">
        <img src="product-img/fenders.jpg"  alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Fenders</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="carseat">
        <img src="product-img/car-seat1.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Seats</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="carseat">
        <img src="product-img/car-seat3.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Seats</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="ex">
        <img src="product-img/civic-bumpers.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Honda Civic Bumpers</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="ex">
        <img src="product-img/front-bumper2.jpg"  alt="img">
        <div class="card-body">
          <h6 class="card-title">Bumper</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="mat">
        <img src="product-img/car-mat.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Mats</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="lights">
        <img src="product-img/headlights-breaklights.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Headlights & Breaklights</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="cars">
        <img src="product-img/lights-accesories.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Lights & Accesories</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="wheel">
        <img src="product-img/mugs.jpg"  alt="img">
        <div class="card-body">
          <h6 class="card-title">Mugs</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="mech">
        <img src="product-img/suspension2.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Suspensions</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="roof">
        <img src="product-img/roof-windshields.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Roof & Windshields</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="lights">
        <img src="product-img/tail-lights.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Tail Lights</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="wheel">
        <img src="product-img/tire-lights1.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Car Tires</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="motor">
        <img src="product-img/japan-motors.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Japan Motorcycle</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="motor">
        <img src="product-img/harap2.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Japan Motorcycle</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
      <div class="card p-0" data-name="mech">
        <img src="product-img/transmission.jpg" alt="img">
        <div class="card-body">
          <h6 class="card-title">Transmission</h6>
          <p class="card-text">Lorem ipsum dolor..</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <script>
    // Select relevant HTML elements
    const filterButtons = document.querySelectorAll("#filter-buttons button");
    const filterableCards = document.querySelectorAll("#filterable-cards .card");

    // Function to filter cards based on filter buttons
    const filterCards = (e) => {
      document.querySelector("#filter-buttons .active").classList.remove("active");
      e.target.classList.add("active");

      filterableCards.forEach(card => {
        // show the card if it matches the clicked filter or show all cards if "all" filter is clicked
        if (card.dataset.name === e.target.dataset.filter || e.target.dataset.filter === "all") {
          return card.classList.replace("hide", "show");
        }
        card.classList.add("hide");
      });
    }

    filterButtons.forEach(button => button.addEventListener("click", filterCards));
  </script>
</body>

</html>