<?php

require_once 'connection.php';

$message = [];
$conn = openConnection();
if (isset($_POST['add_product'])) {
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_desc = $_POST['p_desc'];
   $p_category = $_POST['p_category'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/' . $p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `products` (name, price, description, category, image) VALUES ('$p_name', '$p_price', '$p_desc', '$p_category', '$p_image')") or die(mysqli_error($conn));

   if ($insert_query) {
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      // $message[] = 'Product added successfully';
      echo "<script>alert('Product added successfully')</script>";
      // Redirect to prevent form resubmission
      // header('Location: add-product.php');
      echo "<script>window.location.href='add-product.php';</script>";
      exit(); // Make sure to exit after the redirect
   } else {
      // $message[] = 'Could not add the product';
      echo "<script>alert('Could not add the product')</script>";
      echo "<script>window.location.href='add-product.php';</script>";
   }
} elseif (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE prodID = '$delete_id'") or die(mysqli_error($conn));

   if ($delete_query) {
      // $message[] = 'Product has been deleted';
      echo "<script>alert('Product has been deleted')</script>";
      echo "<script>window.location.href='add-product.php';</script>";
      // // Redirect to prevent form resubmission
      // header('Location: add-product.php');
      exit(); // Make sure to exit after the redirect
   } else {
      echo "<script>alert('Product could not be deleted')</script>";
      echo "<script>window.location.href='add-product.php';</script>";
      // $message[] = 'Product could not be deleted';
   }
} elseif (isset($_POST['update_product'])) {
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_desc = $_POST['update_p_desc'];
   $update_p_category = $_POST['update_p_category'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/' . $update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price',  description = '$update_p_desc', category = '$update_p_category', image = '$update_p_image' WHERE prodID = '$update_p_id'") or die(mysqli_error($conn));

   if ($update_query) {
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      echo "<script>alert('Update Product Successfully')</script>";
      echo "<script>window.location.href='add-product.php';</script>";

      // Redirect to prevent form resubmission
      // header('Location: add-product.php');
      exit(); // Make sure to exit after the redirect
   } else {
      echo "<script>alert('Product could not be updated')</script>";
      echo "<script>window.location.href='add-product.php';</script>";
      // $message[] = 'Product could not be updated';
   }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="add-product.css">
   <style>
      .close-btn {
         position: absolute;
         top: 10px;
         cursor: pointer;
         color: white;
      }

      .btn-cancel {
         background-color: red;
      }

      .table-container {
         overflow-y: scroll;
         max-height: 400px;
         /* Adjust this value as needed */
      }
   </style>
</head>

<body>

   <?php
   if (isset($message)) {
      foreach ($message as $msg) {
         echo '<div class="message"><span>' . $msg . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
      }
   }
   ?>

   <div class="container">
      <section>
         <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>Add a new product</h3>
            <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>
            <input type="text" name="p_desc" placeholder="Enter the product description" class="box" required>
            <select name="p_category" class="box" required>
               <option value="" disabled selected>Select a category</option>
               <option value="Exterior">Exterior</option>
               <option value="Mechanical Parts">Mechanical Parts</option>
               <option value="Tires">Tires</option>
               <option value="Car Doors">Car Doors</option>
               <option value="Car Fender">Car Fender</option>
               <option value="Car Seats">Car Seats</option>
               <option value="Car Mats">Car Mats</option>
               <option value="Car Lights">Car Lights</option>
               <option value="Motorcycles">Motorcycles</option>
            </select>

            <input type="text" name="p_price" min="0" placeholder="Enter the product price" class="box" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            <input type="submit" value="Add the product" name="add_product" class="btn">
            <a href="admin.php" class="btn">Go Back</a>
         </form>
      </section>

      <section class="display-product-table">
         <div class="table-container">
            <table>
               <thead>
                  <th>Product image</th>
                  <th>Product name</th>
                  <th>Product price</th>
                  <th>Product description</th>
                  <th>Product category</th>
                  <th>Action</th>
               </thead>
               <tbody>
                  <?php
                  $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                  if (mysqli_num_rows($select_products) > 0) {
                     while ($row = mysqli_fetch_assoc($select_products)) {
                        ?>
                        <tr>
                           <!-- Display product table data -->
                           <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                           <td>
                              <?php echo $row['name']; ?>
                           </td>
                           <td>₱
                              <?php echo $row['price']; ?>
                           </td>
                           <td>
                              <?php echo $row['description']; ?>
                           </td>
                           <td>
                              <?php echo $row['category']; ?>
                           </td>
                           <td>
                              <a href="add-product.php?delete=<?php echo $row['prodID']; ?>" class="delete-btn"
                                 onclick="return confirm('Are you sure you want to delete this product?');"><i
                                    class="fas fa-trash"></i> Delete</a>
                              <a href="javascript:void(0);" class="option-btn"
                                 onclick="showUpdateForm(<?php echo $row['prodID']; ?>)"><i class="fas fa-edit"></i>
                                 Update</a>
                           </td>
                        </tr>
                        <?php
                     }
                  } else {
                     echo "<div class='empty'>No product added</div>";
                  }
                  ?>
               </tbody>
            </table>
      </section>
      <section class="edit-form-container" style="display: none;">
         <div class="close-btn" onclick="hideUpdateForm()"> <i class="fas fa-times fa-2x"></i></i></div>
         <form action="" method="post" enctype="multipart/form-data">
            <img src="" height="200" alt="">
            <input type="hidden" name="update_p_id" id="update_p_id">
            <input type="text" class="box" required name="update_p_name" id="update_p_name">
            <input type="text" min="0" class="box" required name="update_p_price" id="update_p_price">
            <textarea class="box" required name="update_p_desc" id="update_p_desc"></textarea>
            <select name="update_p_category" id="update_p_category" class="box" required>
               <option value="" disabled selected>Select a category</option>
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
            <!-- <input type="text" class="box" required name="update_p_category" id="update_p_category"> -->
            <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
            <input type="submit" value="Update product" name="update_product" class="btn">
            <!-- Add the "Go Back" button -->
            <a href="add-product.php" class="btn btn-cancel">Cancel</a>

         </form>
      </section>



   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
   <script>
      function showUpdateForm(id) {
         // Hide the display-product-table section
         document.querySelector('.display-product-table').style.display = 'none';
         // Show the edit-form-container section
         document.querySelector('.edit-form-container').style.display = 'block';
         // Scroll to the top of the page to show the update form
         window.scrollTo(0, 0);

         // Fill the form fields with the product data
         const productName = document.querySelector('#update_p_name');
         const productPrice = document.querySelector('#update_p_price');
         const productDesc = document.querySelector('#update_p_desc');
         const productCategory = document.querySelector('#update_p_category');
         const productId = document.querySelector('#update_p_id');

         // Retrieve the product data using AJAX
         const xhr = new XMLHttpRequest();
         xhr.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
               const productData = JSON.parse(this.responseText);
               if (Object.keys(productData).length !== 0) {
                  productName.value = productData.name;
                  productPrice.value = productData.price;
                  productDesc.value = productData.description;
                  productCategory.value = productData.category;
                  productId.value = productData.prodID;
               } else {
                  alert('Product not found');
               }
            }
         };
         xhr.open('GET', `get-product.php?id=${id}`, true);
         xhr.send();
      }


      function hideUpdateForm() {
         // Hide the edit-form-container section
         document.querySelector('.edit-form-container').style.display = 'none';
         // Show the display-product-table section
         document.querySelector('.display-product-table').style.display = 'block';
      }

   </script>

</body>

</html>