<?php

require 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $items_id = $_GET["id"]; 
    $users_id = $_SESSION['users_id'];
    
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM users_items WHERE items_id='$items_id' AND users_id='$users_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>