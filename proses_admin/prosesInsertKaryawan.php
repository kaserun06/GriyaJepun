<?php
include '../helper/connect.php';

if(isset($_POST['submit'])){
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $jabatan = $_POST["jabatan"];
    $alamat = $_POST["alamat"];
    $no_tlp = $_POST["no_tlp"];
    $level = $_POST["level"];
    


    // Insert query comman
    $query = "INSERT INTO tbl_admin (nip, nama_karyawan, username, password, jabatan, alamat, no_tlp, level) VALUE ('$nip', '$nama', '$username', '$password','$jabatan','$alamat','$no_tlp','$level');";
    $query .= "INSERT INTO tbl_login (nama,username, password, level) VALUE ('$nama','$username', '$password', '$level' )";

    // $result = mysqli_multi_query($con, $query);

    // Do insert query
    if (mysqli_multi_query($con, $query) == 1) {
        ?>
        <script language="javascript">
            alert("Data berhasil dimasukkan");
            document.location="../InsertKaryawan.php";
        </script>
        <?php
    } else {
        header("location:../login.php");
    }
}
mysqli_close($con); 

?>
