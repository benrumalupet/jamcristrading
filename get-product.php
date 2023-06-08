<?php

require_once 'connection.php';

$conn = openConnection();

if (isset($_GET['id'])) {
   $product_id = $_GET['id'];

   $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE prodID = '$product_id' LIMIT 1");
   if (mysqli_num_rows($select_product) > 0) {
      $product_data = mysqli_fetch_assoc($select_product);
      echo json_encode($product_data);
   } else {
      echo json_encode(null);
   }
} else {
   echo json_encode(null);
}
