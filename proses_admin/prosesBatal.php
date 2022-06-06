<?php
include "../helper/connect.php";

$query = "UPDATE tbl_batal SET status = 'Batal' WHERE id_reservasi='$_GET[id]' ";

if (mysqli_query($con, $query)) {
    $query = "UPDATE tbl_reservasi SET flag = '0' WHERE id_reservasi='$_GET[id]' ";
    if (mysqli_query($con,$query)){
        header("location:../dataPembatalan.php"); 
    }
}else{
echo "ERROR, data gagal diupdate". mysql_error();
}

mysqli_close($con); 

?>