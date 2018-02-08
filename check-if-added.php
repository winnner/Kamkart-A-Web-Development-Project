<?php
function check_if_added_to_cart($items_id) {
    require 'common.php';
    $users_id = $_SESSION['users_id'];
    $query = "SELECT * FROM users_items WHERE items_id='$items_id' AND users_id ='$users_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
   if (mysqli_num_rows($result) >= 1) {
        return (1);
    } else {
        return (0);
    }
}
?>