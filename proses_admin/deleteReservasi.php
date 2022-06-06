<?php

include '../helper/connect.php';

$id = $_GET["id"];

$query = "UPDATE tbl_reservasi SET flag = 0 WHERE id_reservasi = $id";

if (mysqli_query($con, $query)) {
    header("Location:../dataReservasi.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../dataReservasi.php?error=$error");
}

mysqli_close($con); 

?>