<?php

include '../helper/connect.php';

$id = $_GET["id"];

$query = "UPDATE tbl_admin SET flag = 0 WHERE nip = $id";

if (mysqli_query($con, $query)) {
    header("Location:../karyawan.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../karyawan.php?error=$error");
}

mysqli_close($con); 

?>