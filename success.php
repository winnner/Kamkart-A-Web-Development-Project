<?php
require 'common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$users_id = $_SESSION['users_id'];
$items_ids_string = $_GET['items_id'];
$query = "UPDATE users_items SET status='Confirmed' WHERE users_id=" . $users_id . " AND items_id IN (" . $items_ids_string . ") and status='Added to cart'";
mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kamkart</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="bootstrap.css" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="bootstrap.min.js"></script>
</head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h2 align="center">Your order is confirmed. Thank you for shopping with us.</h2>
                      <h4 align="center">It will be deivered within the said days.</h4>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include 'footer.php';
        ?>
    </body>
</html>