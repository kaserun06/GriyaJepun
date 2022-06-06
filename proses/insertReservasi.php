<?php
include '../helper/connect.php';

if(isset($_POST['submit'])){
    $nama_tamu = $_POST["nama_tamu"];
    $alamat_tamu = $_POST["alamat"];
    $nama_kamar = $_POST["nama_kamar"];
    $fasilitas = $_POST["fasilitas"];
    $tgl_ci = $_POST["tgl_ci"];
    $tgl_co = $_POST["tgl_co"];
    $lama_inap = $_POST["lama_inap"];
    $tarif = $_POST['tarif'];
    $total_biaya = $lama_inap * $tarif;
 
    $query = "INSERT INTO tbl_reservasi (nama_tamu, kode_kamar, id_fasilitas, tanggal_check_in, tanggal_check_out, lama_inap, total_biaya, alamat) 
    VALUES ('$nama_tamu', '$nama_kamar', '$fasilitas', '$tgl_ci','$tgl_co','$lama_inap','$total_biaya', '$alamat_tamu');";

    if (mysqli_query($con, $query)) {
?>
<script language="javascript">
    alert("Data berhasil dimasukkan");
    document.location="../pembayaran.php";
</script>
<?php
    } else {
?>
    <script language="javascript">
	    alert("Data gagal dimasukkan");
	    
    </script>
<?php
    }
}
?>

<?php

mysqli_close($con); 

?>