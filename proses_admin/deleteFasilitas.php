<?php

include '../helper/connect.php';

$id = $_GET["id"];

$query = "DELETE FROM tbl_fasilitas WHERE id_fasilitas = $id";

if (mysqli_query($con, $query)) {
    header("Location:../fasilitas.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../fasilitas.php?error=$error");
}

mysqli_close($con); 

?>