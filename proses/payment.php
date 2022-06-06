<?php
// Include DB connection file
include '../helper/connect.php';


    // Insert query comman
    $query = "INSERT INTO tbl_pembayaran (id_reservasi, nama_tamu,kode_kamar,id_fasilitas,total_bayar) 
    SELECT id_reservasi,nama_tamu,kode_kamar,id_fasilitas,total_biaya 
    FROM tbl_reservasi WHERE id_reservasi='$_GET[id]'";

    // Do insert query
    if (mysqli_query($con, $query)) {
?>
    <script language="javascript">
	    alert("Data berhasil dimasukkan, Screenshot tab history sebagai bukti reservasi");
	    document.location="../index.php";
    </script>
<?php
    } else {
?>
    <script language="javascript">
	    alert("Data gagal dimasukkan");
	    
    </script>
<?php
    }
?>

<?php
// close mysql connection
mysqli_close($con); 

?>