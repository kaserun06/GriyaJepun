<?php
include 'helper/connect.php';
$query = "INSERT INTO tbl_batal (id_reservasi,nama_tamu,kode_kamar,id_fasilitas,tgl_check_in,tgl_check_out,
    lama_inap,total_biaya) SELECT id_reservasi,nama_tamu,kode_kamar,id_fasilitas,tanggal_check_in,tanggal_check_out,
    lama_inap,total_biaya FROM tbl_reservasi WHERE id_reservasi='$_GET[id]'";
if (mysqli_query($con, $query)) {
?>

<script language="javascript">
    alert("Request akan diproses");
    document.location="landing-user.php";
</script>

<?php
    } else {
?>

<script language="javascript">
    alert("Pembatalan gagal");
</script>

<?php
    }
?>
<?php
    mysqli_close($con); 
?>