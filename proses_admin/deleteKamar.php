<?php

include '../helper/connect.php';

$id = $_GET["id"];

$query = "UPDATE tbl_kos SET flag = 0 WHERE kode_kamar = $id";

if (mysqli_query($con, $query)) {
    header("Location:../kamarkos.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../kamarkos.php?error=$error");
}

mysqli_close($con); 

?>