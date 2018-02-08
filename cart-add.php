<?php
require 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $items_id = $_GET['id'];
    $users_id = $_SESSION['users_id'];
    $query = "INSERT INTO users_items(users_id, items_id, status) VALUES('$users_id', '$items_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?> 