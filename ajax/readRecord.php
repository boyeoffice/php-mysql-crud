<?php

include('../db/connection.php');

$query = 'SELECT * FROM users ORDER BY id DESC';

if (!$result = mysqli_query($con, $query)) :
    exit(mysqli_error($con));
endif;

if (mysqli_num_rows($result)) :
    $number = 1;
    while ($row = mysqli_fetch_assoc($result)) :
        $data = '<tr>
            <td>'.$number.'</td>
            <td>'.$row['first_name'].'</td>
            <td>'.$row['last_name'].'</td>
            <td>'.$row['email'].'</td>
            <td>
                <button class="btn btn-primary btn-sm" onclick="getUserDetails('.$row['id'].')">Edit</button>
                <button class="btn btn-danger btn-sm" onclick="deleteUser('.$row['id'].')">Delete</button>
            </td>
        </tr>';

        echo $data;
    endwhile;
else :
    $data = '<tr><td>Recods not found!</td></tr>';

    echo $data;
endif;

