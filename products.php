<?php
require_once 'connection.php';

function filterProducts($category, $allProducts)
{
   if ($category === "all") {
      return $allProducts;
   } else {
      return array_filter($allProducts, function ($product) use ($category) {
         return $product['category'] === $category;
      });
   }
}

function searchProducts($keyword, $allProducts)
{
   return array_filter($allProducts, function ($product) use ($keyword) {
      return strpos(strtolower($product['name']), strtolower($keyword)) !== false || strpos(strtolower($product['category']), strtolower($keyword)) !== false;
   });
}

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if (isset($_POST['search'])) {
      $keyword = $_POST['search'];
      $filteredProducts = searchProducts($keyword, $allProducts);
   } else {
      $filteredProducts = $allProducts;
   }

   if (isset($_POST['filter'])) {
      $category = $_POST['filter'];
      $products = filterProducts($category, $filteredProducts);
   } else {
      $products = $filteredProducts;
   }
}
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
         height: 200px;
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
   <br><br><br>
   <div class="container">

      <section class="products">
         <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Products</span></h1>
         <hr class="mx-auto mb-5 w-25">

         <div class="box-container">
            <div class="row mt-5 justify-content-center" id="search-bar">
               <div class="col-6">
                  <input type="text" id="searchInput" class="form-control" placeholder="Search by name or category">
               </div>
               <div class="col-3">
                  <button class="btn btn-primary w-100" onclick="performSearch()">Search</button>
               </div>
            </div>
            <div class="row mt-5" id="filter-buttons">
               <div class="col-12">
                  <button class="btn mb-2 me-1 active" data-filter="all">Show all</button>
                  <button class="btn mb-2 mx-1" data-filter="Exterior">Exterior</button>
                  <button class="btn mb-2 mx-1" data-filter="Interior">Interior</button>
                  <button class="btn mb-2 mx-1" data-filter="Mechanical Parts">Mechanical Parts</button>
                  <button class="btn mb-2 mx-1" data-filter="Tires">Tires</button>
                  <button class="btn mb-2 mx-1" data-filter="Car Doors">Car Doors</button>
                  <button class="btn mb-2 mx-1" data-filter="Car Fender">Car Fender</button>
                  <button class="btn mb-2 mx-1" data-filter="Car Seats">Car Seats</button>
                  <button class="btn mb-2 mx-1" data-filter="Car Mats">Car Mats</button>
                  <button class="btn mb-2 mx-1" data-filter="Car Lights">Car Lights</button>
                  <button class="btn mb-2 mx-1" data-filter="Motorcycles">Motorcycles</button>
               </div>
            </div>
            <div class="row px-2 mt-4 gap-3" id="filterable-cards">
               <?php
               foreach ($products as $product) {
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
      function performSearch() {
         const searchInput = document.getElementById("searchInput");
         const keyword = searchInput.value.trim();

         if (keyword !== "") {
            const form = document.createElement("form");
            form.method = "post";
            form.style.display = "none";
            const input = document.createElement("input");
            input.type = "hidden";
            input.name = "search";
            input.value = keyword;
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
         }
      }

      const filterButtons = document.querySelectorAll("#filter-buttons button");
      const filterableCards = document.querySelectorAll("#filterable-cards .card");

      // Filter cards based on button click
      filterButtons.forEach(button => {
         button.addEventListener("click", () => {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            const filterValue = button.getAttribute("data-filter");

            filterableCards.forEach(card => {
               if (filterValue === "all") {
                  card.style.display = "block";
               } else {
                  const cardName = card.getAttribute("data-name");
                  if (cardName === filterValue) {
                     card.style.display = "block";
                  } else {
                     card.style.display = "none";
                  }
               }
            });
         });
      });

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
