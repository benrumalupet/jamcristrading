<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> Our Products</title>
  <link rel="icon" type="image/png" href="about/logo.png">
  <link rel="stylesheet" href="product.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <style>
    .modal-image {
      max-width: 100%;
      height: auto;
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
        <!-- Add your other filter buttons here -->
      </div>
    </div>

    <!-- Filterable Images / Cards Section -->
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
      <!-- Add your card HTML here -->
    </div>
  </div>
  <br><br>

  <!-- Image Preview Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" id="modalImage" class="modal-image" alt="Product Image">
        </div>
      </div>
    </div>
  </div>

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

    // Image preview modal
    const modalImage = document.getElementById("modalImage");
    const cards = document.querySelectorAll(".card");

    cards.forEach(card => {
      const image = card.querySelector("img");
      image.addEventListener("click", () => {
        modalImage.src = image.src;
        $("#imageModal").modal("show");
      });
    });
  </script>
</body>

</html>
