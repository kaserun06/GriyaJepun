<?php
include "../helper/connect.php";

$kode = $_GET['kode_kamar'];
$nama = $_GET['nama_kamar'];
$kelas = $_GET['kelas'];
$tarif = $_GET['tarif'];
$status = $_GET['status'];


$query = "UPDATE tbl_kos SET nama_kamar='$nama' , kelas='$kelas', tarif='$tarif', status='$status' WHERE kode_kamar='$kode' ";

if (mysqli_query($con, $query)) {
 header("location:../kamarkos.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

?>