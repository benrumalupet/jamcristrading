<?php
require_once 'connection.php'; // Include the connection.php file

$conn = openConnection(); // Open the database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted form data
    $hours = $_POST['c_hours'];
    $address = $_POST['c_address'];
    $phoneOne = $_POST['c_phone_one'];
    $phoneTwo = $_POST['c_phone_two'];
    $email = $_POST['c_email'];
    $facebook = $_POST['c_fb'];

    // Perform any necessary validation on the data

    // Update the details in the database
    $sql = "UPDATE details SET hours='$hours', address='$address', phone_one='$phoneOne', phone_two='$phoneTwo', email='$email', facebook='$facebook' WHERE cID=1";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Contact Details Updated Successfully')</script>";
        echo "<script>window.location.href='edit-details.php';</script>";
        exit();
    } else {
        echo "<script>alert('Couldn't Update Contact Details!!!')</script>";
        echo "<script>window.location.href='edit-details.php';</script>";
    }
}

// Retrieve the existing details from the database
$sql = "SELECT * FROM details WHERE cID = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Close the database connection
closeConnection($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Details</title>
</head>
<link rel="stylesheet" href="add-product.css">

<body>
    <div class="container">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Edit Details</h3>
                <input type="text" name="c_hours" placeholder="Enter the Store Hours" class="box"
                    value="<?php echo $row['hours']; ?>" required>
                <input type="text" name="c_address" placeholder="Enter the Address" class="box"
                    value="<?php echo $row['address']; ?>" required>
                <input type="text" name="c_phone_one" placeholder="Enter the Phone #1" class="box"
                    value="<?php echo $row['phone_one']; ?>" required>
                <input type="text" name="c_phone_two" placeholder="Enter the Phone #2 (Optional)" class="box"
                    value="<?php echo $row['phone_two']; ?>">
                <input type="text" name="c_email" placeholder="Enter Email" class="box"
                    value="<?php echo $row['email']; ?>" required>
                <input type="url" name="c_fb" placeholder="Enter Facebook Link" class="box"
                    value="<?php echo $row['facebook']; ?>" required>
                <input type="submit" value="Update the Details" name="update_details" class="btn">
                <a href="admin.php" class="btn">Go Back</a>
            </form>
        </section>

        <section class="display-product-table">
            <table>
                <thead>
                    <th>Address</th>
                    <th>Phone 1</th>
                    <th>Phone 2</th>
                    <th>Email</th>
                    <th>Facebook</th>
                </thead>
                <tbody>
                    <?php
                    $conn = openConnection();
                    $select_products = mysqli_query($conn, "SELECT * FROM `details`");
                    if (mysqli_num_rows($select_products) > 0) {
                        while ($row = mysqli_fetch_assoc($select_products)) {
                            ?>
                            <tr>
                                <!-- Display product table data -->
                                <td>
                                    <?php echo $row['address']; ?>
                                </td>
                                <td>
                                    <?php echo $row['phone_one']; ?>
                                </td>
                                <td>
                                    <?php echo $row['phone_two']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['facebook']; ?>
                                </td>
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

</body>

</html>
