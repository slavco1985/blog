<?php

include '../db.php';


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE  FROM cat WHERE cat_id = $id";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
}
?>
