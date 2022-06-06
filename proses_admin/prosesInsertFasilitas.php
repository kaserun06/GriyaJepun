<?php
include '../helper/connect.php';



if(isset($_POST['submit'])){
    $kode = $_POST["kode_fasilitas"];
    $tipe = $_POST["tipe"];
    $fasilitas = implode(', ', $_POST['fasilitas']);
    $status = $_POST["status"];
    $flag = $_POST["flag"];
    
    $query = "INSERT INTO tbl_fasilitas (id_fasilitas, tipe_fasilitas, fasilitas, status, flag) VALUES ('$kode', '$tipe', '$fasilitas','$status','$flag')";
    if (mysqli_query($con, $query)) {
        ?>
        <script language="javascript">
            alert("Data berhasil dimasukkan");
            document.location="../InsertFasilitas.php";
        </script>
        <?php
    } else {
        echo "gagal";
    }
}
    
mysqli_close($con); 
?>