<?php
include "../helper/connect.php";

$nip = $_GET['nip'];
$nama = $_GET['nama'];
$jabatan = $_GET['jabatan'];
$alamat = $_GET['alamat'];
$no_tlp = $_GET['no_tlp'];

$query = "UPDATE tbl_admin SET nama_karyawan='$nama' , jabatan='$jabatan', alamat='$alamat', no_tlp='$no_tlp' WHERE nip='$nip' ";

if (mysqli_query($con, $query)) {
 header("location:../karyawan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysql_error();
}

mysqli_close($con); 

?>