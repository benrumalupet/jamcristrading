<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="add-product.css">
    <style>
        .products .box-container .box img {
            width: 100% !important;

        }
    </style>
</head>

<body>


    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        }
        ;
    }
    ;

    ?>


    <div class="container">

        <section class="products">

            <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Products</span></h1>
            <hr class="mx-auto mb-5 w-25">

            <div class="box-container">

                <?php
                $conn = openConnection();
                $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                        ?>

                        <form action="" method="post">
                            <div class="box">
                                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                <h3>
                                    <?php echo $fetch_product['name']; ?>
                                </h3>
                                <div class="price">
                                    <?php echo $fetch_product['price']; ?>/-
                                </div>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_desc" value="<?php echo $fetch_product['desc']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="submit" class="btn" value="view product image" name="view_image">
                            </div>
                        </form>

                        <?php
                    }
                    ;
                }
                ;
                ?>

            </div>

        </section>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>