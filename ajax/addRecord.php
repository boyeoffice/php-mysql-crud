<?php

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])) :
    include('../db/connection.php');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $query = "INSERT INTO users(first_name, last_name, email) VALUES('$first_name', '$last_name', '$email')";

    if (!$result = mysqli_query($con, $query)) :
        exit(mysqli_error($con));
    endif;

    echo '1 Record Added!';

endif;

?>
