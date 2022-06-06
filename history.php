<?php
session_start();
include 'helper/connect.php';
$username = $_SESSION["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GriyaJepun</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-sm content-center fixed-top">
        <div class="container">
            <!-- Brand -->
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt=""></a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="landing-user.php">Home</a>
            <li class="nav-item">
            <a class="nav-link" href="history.php">History</a>
            </li>
            <?php if(isset($_SESSION["nama"])): ?>
            <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
            </li>
            <?php else: ?>
            <?php endif ?>
            <li class="nav-item">
            <a class="nav-link">Hi, <?php echo $username; ?></a>
            </li>
            
            <li class="nav-item">
            <a class="tombol" href="logout.php">Logout</a>
            </li>
        </ul>
        </div>  
    </nav>


    <section class="riwayat">
        <div class="container">
            <h3 style="margin-top:130px;">Riwayat Pemesanan <?php echo $_SESSION["nama"] ?></h3><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Kamar</th>
                        <th>Fasilitas</th>
                        <th>Tanggal Check In</th>
                        <th>Tanggal Check Out</th>
                        <th>Lama inap</th>
                        <th>Total Bayar</th>
                        <th>Aksi</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $nomor=1;
                    $id_pelanggan = $_SESSION["nama"];

                    $sql = "select id_reservasi, nama_tamu, nama_kamar, fasilitas, tanggal_check_in, tanggal_check_out, lama_inap, total_biaya
                    from tbl_kos, tbl_fasilitas, tbl_reservasi
                    where tbl_kos.kode_kamar = tbl_reservasi.kode_kamar
                    and tbl_fasilitas.id_fasilitas = tbl_reservasi.id_fasilitas and tbl_reservasi.flag=1 and nama_tamu='$id_pelanggan'";
                    $query = mysqli_query($con, $sql);
                    while($data = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $data['nama_tamu']; ?></td>
                        <td><?php echo $data['nama_kamar']; ?></td>
                        <td><?php echo $data['fasilitas']; ?></td>
                        <td><?php echo $data['tanggal_check_in']; ?></td>
                        <td><?php echo $data['tanggal_check_out']; ?></td>
                        <td><?php echo $data['lama_inap']; ?></td>
                        <td>Rp. <?php echo $data['total_biaya']; ?></td>
                        <td>
                            <a href="pembatalan.php?id=<?php echo $data['id_reservasi'] ?>" class="btn btn-danger">Batal</a>
                        </td>
                        
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>    
</body>
</html>