<?php

include('../db/connection.php');

if (isset($_POST['id'])) :
    $user_id = $_POST['id'];

    $query = "SELECT * FROM users WHERE id = '$user_id'";

    if (!$result = mysqli_query($con, $query)) :
        exit(mysqli_error($con));
    endif;

    $response = [];

    if (mysqli_num_rows($result) > 0) :
        while ($row = mysqli_fetch_assoc($result)) :
            $response = $row;
        endwhile;
    else:
        $response['status'] = 404;
        $response['message'] = "Data not found!";
    endif;
    // display JSON data
    echo json_encode($response);
else :
    $response['status'] = 400;
    $response['message'] = "Invalid Request!";
endif;
