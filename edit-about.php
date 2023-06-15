<!DOCTYPE html>
<html>
<head>
    <title>Edit Details</title>
</head>

<link rel="stylesheet" href="add-product.css">
<style>.alert {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.success {
    background-color: #d4edda;
    color: #155724;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
}
.table-container {
         overflow-y: scroll;
         max-height: 400px;
         /* Adjust this value as needed */
      }
</style>
<body>
    <?php
    require_once 'connection.php'; // Include the connection.php file

    $conn = openConnection(); // Open the database connection

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the submitted form data
        $main_title = $_POST['a_m_title'];
        $main_text = $_POST['a_m_text'];
        $second_title = $_POST['a_s_title'];
        $second_text = $_POST['a_s_text'];
        $third_title = $_POST['a_t_title'];
        $third_text = $_POST['a_t_text'];

        // Perform any necessary validation on the data

        // Update the details in the database
        $sql = "UPDATE about SET `main_title`='$main_title', `main_text`='$main_text', `second_title`='$second_title',
            `second_text`='$second_text', `third_title`='$third_title', `third_text`='$third_text' WHERE bID=1";

        if (mysqli_query($conn, $sql)) {
            header("Location: edit-about.php?msg=success");
            exit();
        } else {
            header("Location: edit-about.php?msg=failure");
        }
    }

    // Retrieve the existing details from the database
    $sql = "SELECT * FROM about WHERE bID = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Handle file uploads
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $targetDirectory = "uploaded_img/"; // Specify the directory where you want to store the uploaded images

        // First Picture
        if (!empty($_FILES['a_f_pic']['name'])) {
            $firstPicFileName = basename($_FILES['a_f_pic']['name']);
            $firstPicFilePath = $targetDirectory . $firstPicFileName;
            move_uploaded_file($_FILES['a_f_pic']['tmp_name'], $firstPicFilePath);
        } else {
            $firstPicFileName = $row['first_pic'];
        }

        // Second Picture
        if (!empty($_FILES['a_s_pic']['name'])) {
            $secondPicFileName = basename($_FILES['a_s_pic']['name']);
            $secondPicFilePath = $targetDirectory . $secondPicFileName;
            move_uploaded_file($_FILES['a_s_pic']['tmp_name'], $secondPicFilePath);
        } else {
            $secondPicFileName = $row['second_pic'];
        }

        // Third Picture
        if (!empty($_FILES['a_t_pic']['name'])) {
            $thirdPicFileName = basename($_FILES['a_t_pic']['name']);
            $thirdPicFilePath = $targetDirectory . $thirdPicFileName;
            move_uploaded_file($_FILES['a_t_pic']['tmp_name'], $thirdPicFilePath);
        } else {
            $thirdPicFileName = $row['third_pic'];
        }

        // Update the image file names in the database
        $updateImageSQL = "UPDATE about SET `first_pic`='$firstPicFileName', `second_pic`='$secondPicFileName', `third_pic`='$thirdPicFileName' WHERE bID=1";
        mysqli_query($conn, $updateImageSQL);
        if (mysqli_query($conn, $updateImageSQL)) {
            header("Location: edit-about.php?msg=success");
            exit();
        } else {
            header("Location: edit-about.php?msg=failure");
        }
    }

    // Close the database connection
    closeConnection($conn);
    ?>
    
    <div class="container">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Edit Details</h3>
                <input type="text" name="a_m_title" placeholder="Enter the Main Title" class="box"
                    value="<?php echo $row['main_title']; ?>">
                <textarea name="a_m_text" placeholder="Enter the Main Text"
                    class="box"><?php echo $row['main_text']; ?></textarea>

                <input type="text" name="a_s_title" placeholder="Enter the Second Title" class="box"
                    value="<?php echo $row['second_title']; ?>">
                <textarea name="a_s_text" placeholder="Enter the Second Text"
                    class="box"><?php echo $row['second_text']; ?></textarea>

                <input type="text" name="a_t_title" placeholder="Enter the Third Title" class="box"
                    value="<?php echo $row['third_title']; ?>">
                <textarea name="a_t_text" placeholder="Enter the Third Text"
                    class="box"><?php echo $row['third_text']; ?></textarea>

                <input type="file" name="a_f_pic" class="box">
                <input type="file" name="a_s_pic" class="box">
                <input type="file" name="a_t_pic" class="box">

                <input type="submit" value="Update the Details" name="update_details" class="btn">
                <a href="admin.php" class="btn">Go Back</a>
            </form>
        </section>

        <section class="display-product-table">
        <div class="table-container">
            <table>
                <thead>
                    <th>Main Title</th>
                    <th>Main Text</th>
                    <th>Second Title</th>
                    <th>Second Text</th>
                    <th>Third Title</th>
                    <th>Third Text</th>
                    <th>First Picture</th>
                    <th>Second Picture</th>
                    <th>Third Picture</th>
                </thead>
                <tbody>
                    <?php
                    $conn = openConnection();
                    $select_about = mysqli_query($conn, "SELECT * FROM `about` WHERE bID = 1");
                    if (mysqli_num_rows($select_about) > 0) {
                        while ($row = mysqli_fetch_assoc($select_about)) {
                            ?>
                            <tr>
                                <!-- Display about table data -->
                                <td>
                                    <?php echo $row['main_title']; ?>
                                </td>
                                <td>
                                    <?php echo $row['main_text']; ?>
                                </td>
                                <td>
                                    <?php echo $row['second_title']; ?>
                                </td>
                                <td>
                                    <?php echo $row['second_text']; ?>
                                </td>
                                <td>
                                    <?php echo $row['third_title']; ?>
                                </td>
                                <td>
                                    <?php echo $row['third_text']; ?>
                                </td>
                                <td><img src="uploaded_img/<?php echo $row['first_pic']; ?>" height="100" alt=""></td>
                                <td><img src="uploaded_img/<?php echo $row['second_pic']; ?>" height="100" alt=""></td>
                                <td><img src="uploaded_img/<?php echo $row['third_pic']; ?>" height="100" alt=""></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<div class='empty'>No Details Provided</div>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
    <script>

    var message = getUrlParameter('msg');
    if (message === 'success') {
        alert('About Details Updated Successfully');
    } else if (message === 'failure') {
        alert('Couldn\'t Update Contact Details!!!');
    }
</script>

</body>
</html>
