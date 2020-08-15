<?php

if (isset($_POST['id'])) :
    include('../db/connection.php');

    $user_id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) :
        exit(mysqli_error($con));
    endif;
endif;

?>
