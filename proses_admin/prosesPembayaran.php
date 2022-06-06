<?php
include "../helper/connect.php";

$query = "UPDATE tbl_pembayaran SET status = 'Terbayar' WHERE id_reservasi='$_GET[id]' ";

if (mysqli_query($con, $query)) {
header("location:../dataPembayaran.php"); 
}else{
echo "ERROR, data gagal diupdate". mysql_error();
}

mysqli_close($con); 

?>