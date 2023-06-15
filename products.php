<?php
require_once 'connection.php';

// Fetch all products
$conn = openConnection();
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$allProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
closeConnection($conn);

// Default: Display all products
$products = $allProducts;
$filteredProducts = $allProducts; // Store the filtered products separately

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Our Products</title>
   <link rel="icon" type="image/png" href="about/logo.png">

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <!-- custom css file link -->
   <!-- <link rel="stylesheet" href="add-product.css"> -->
   <link rel="stylesheet" href="product.css">
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
         max-width: 50%;
         max-height: 80vh;
         margin: auto;
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         object-fit: scale-down;
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

      .card-body {
         height: 210px;
         /* Set a fixed height for the card body */
         overflow: hidden;
      }

      .card-title {
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
      }

      .card-text {
         overflow: hidden;
         text-overflow: ellipsis;
         display: -webkit-box;
         -webkit-line-clamp: 3;
         /* Adjust the number of lines to show */
         -webkit-box-orient: vertical;
      }

      #search-bar {
         max-width: 600px;
         margin: 0 auto;
      }

      #searchInput {
         width: 100%;
      }

      #searchCategory {
         appearance: none;
         -webkit-appearance: none;
         -moz-appearance: none;
         background-color: aliceblue;
         border: 1px solid #ccc;
         padding: 8px;
         width: 100%;
         font-size: 14px;
         color: black;
      }

      #searchCategory:focus {
         outline: none;
         border-color: black;
      }

      /* Customize the arrow icon */
      #searchCategory::-ms-expand {
         display: none;
      }

      #searchCategory::after {
         content: '\25BC';
         position: absolute;
         top: 50%;
         right: 12px;
         transform: translateY(-50%);
         pointer-events: none;
         color: aliceblue;
      }

      .custom-select {
         position: relative;
         margin-right: 200px;
      }

      .custom-select::after {
         content: "";
         position: absolute;
         top: 50%;
         right: 12px;
         transform: translateY(-50%);
         width: 0;
         height: 0;
         border-style: solid;
         border-width: 6px 6px 0 6px;
         border-color: #000 transparent transparent transparent;
      }

      .custom-select select {
         appearance: none;
         -webkit-appearance: none;
         -moz-appearance: none;
         padding-right: 24px;
      }
   </style>
</head>

<?php
include 'sample-nav.html';
?>

<body>
   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      }
   }
   ?>

   <div class="container">
      <br><br><br>
      <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Products</span></h1>
      <hr class="mx-auto mb-5 w-25">



      <div class="box-container">
         <div class="row mt-5 justify-content-center" id="search-bar">
            <div class="col-6">
               <input type="text" id="searchInput" class="form-control" placeholder="Search by Name/Categories 🔍"
                  oninput="performSearch()">
            </div>
         </div>
         <br><br>

         <div class="col-6">
            <div class="dropdown custom-select">
               <select name="searchCategory" id="searchCategory" class="form-control" onchange="performSearch()">
                  <option value="" disabled selected>Categories Filter</option>
                  <option value="Show All">Show All</option>
                  <option value="Exterior">Exterior</option>
                  <option value="Interior">Interior</option>
                  <option value="Mechanical Parts">Mechanical Parts</option>
                  <option value="Tires">Tires</option>
                  <option value="Car Doors">Car Doors</option>
                  <option value="Car Fender">Car Fender</option>
                  <option value="Car Seats">Car Seats</option>
                  <option value="Car Mats">Car Mats</option>
                  <option value="Car Lights">Car Lights</option>
                  <option value="Motorcycles">Motorcycles</option>
               </select>
            </div>
         </div>
<br >


      </div>


      <div class="row px-3 mt-2 gap-3" id="filterable-cards">
         <?php
         foreach ($filteredProducts as $product) {
            echo '
         <div class="col">
            <div class="card p-0" data-name="' . $product['category'] . '" onclick="showPreview(this)">
               <img src="uploaded_img/' . $product['image'] . '" alt="img">
               <div class="card-body">
                  <h6 class="card-title">' . $product['name'] . '</h6>
                  <p class="card-text">Description: ' . $product['description'] . '</p>
                  <p class="card-text">Price: ₱' . $product['price'] . '</p>
                  <p class="card-text preview-link">(Click to preview image)</p>
               </div>
            </div>
            <br>
         </div>';
         }
         ?>
      </div>

   </div>
   </section>
   </div>
   <br>

   <!-- Image preview modal -->
   <div id="preview" class="modal">
      <span class="close" onclick="hidePreview()">&times;</span>
      <img class="modal-content" id="preview-image">
   </div>

   <!-- custom js file link -->
   <script>
      // Function to perform search
      function performSearch() {
         const searchInput = document.getElementById("searchInput").value.toUpperCase();
         const searchCategory = document.getElementById("searchCategory").value.toUpperCase();
         const filterableCards = document.getElementById("filterable-cards");
         const cards = filterableCards.getElementsByClassName("col");

         for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            const categoryName = card.querySelector(".card").getAttribute("data-name").toUpperCase();
            const cardTitle = card.querySelector(".card-title").textContent.toUpperCase();

            if (searchCategory === "SHOW ALL" || categoryName.includes(searchCategory)) {
               if (cardTitle.includes(searchInput)) {
                  card.style.display = "";
               } else {
                  card.style.display = "none";
               }
            } else {
               card.style.display = "none";
            }
         }
      }


      // Show image preview
      function showPreview(card) {
         const imageSrc = card.querySelector("img").getAttribute("src");
         document.getElementById("preview-image").src = imageSrc;
         document.getElementById("preview").style.display = "block";
      }

      // Hide image preview
      function hidePreview() {
         document.getElementById("preview").style.display = "none";
      }
   </script>
</body>

</html>