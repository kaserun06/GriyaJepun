<?php

include '../helper/connect.php';

$id = $_GET["id"];

$query = "UPDATE tbl_pelanggan SET flag = 0 WHERE id_tamu = $id";

if (mysqli_query($con, $query)) {
    header("Location:../pelanggan.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../pelanggan.php?error=$error");
}

mysqli_close($con); 

?>