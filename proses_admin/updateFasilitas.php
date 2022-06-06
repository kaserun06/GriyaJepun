<?php
include "../helper/connect.php";

$kode = $_POST['kode'];
$tipe = $_POST['tipe'];

$status = $_POST['status'];

if(!empty($_POST['fasilitas'])){
    $fasilitas = implode(', ', $_POST['fasilitas']);    
}else{
    $fasilitas = "Data kosong";
}

$query = "UPDATE tbl_fasilitas SET tipe_fasilitas='$tipe' , fasilitas='$fasilitas', status='$status' WHERE id_fasilitas='$kode' ";

if (mysqli_query($con, $query)) {
header("location:../fasilitas.php"); 
}else{
echo "ERROR, data gagal diupdate". mysql_error();
}

mysqli_close($con); 

?>