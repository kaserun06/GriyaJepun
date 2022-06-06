<?php
    session_start();
    $username = $_SESSION["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page-Pelanggan</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>
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
    
    <!-- Header Image-->
    <div class="header">
        <div class="img-header">
            <img src="images/jepun.jpg">
        </div>
    </div>
    <br>

    <div class="container">
        <div class="greed">
             <h4>Selamat Datang <?php echo $username; ?></h4> 
             <h5>Temukan Berbagai penawaran menarik seputar properti Griya Jepun</h5>  
        </div>
    </div>

    <?php
    include 'helper/connect.php';
        $sql = "select nama_kamar, gambar from tbl_kos where flag = 1 and kode_kamar = '001'";
        $query = mysqli_query($con, $sql);
        if($row = mysqli_fetch_assoc($query)){
        $image = $row["gambar"];
        $kamar = $row["nama_kamar"];  
    ?>
    <div class="row">
    <div class="col-sm-4 my-4 float-right">
        <div class="card">
        <?php
        echo "
        <img class='card-img-top float-right' src='upload/".$image."' alt='gambar'>
        "
        ?>
        <div class="card-body">
            <h4 class="card-title"><?php echo $kamar ?></h4>
            <p class="card-text" style="text-align: justify">Berlokasi strategis dan dekat dengan akses ke tempat wisata, Kamar yang cocok untuk anda yang sedang mencari kamar dengan harga UMR, dengan harga yang terjangkau anda dapat memiliki fasilitas kamar mandi dalam, free air PDAM dan juga akses jalan yang cukup luas.</p>
        </div>
        <div class="card-footer text-center">
            <a href="product.php" class="btn btn-primary">Book Now</a>
        </div>
        </div>
    </div>
    <?php
        }
    ?>

    <?php
        $sql = "select nama_kamar, gambar from tbl_kos where flag = 1 and kode_kamar = '002'";
        $query = mysqli_query($con, $sql);
        if($row = mysqli_fetch_assoc($query)){
        $image = $row["gambar"];
        $kamar = $row["nama_kamar"];  
    ?>
    <div class="col-sm-4 my-4 float-right">
        <div class="card">
        <?php
        echo "
        <img class='card-img-top float-right' src='upload/".$image."' alt='gambar'>
        "
        ?>
        <div class="card-body">
            <h4 class="card-title"><?php echo $kamar ?></h4>
            <p class="card-text" style="text-align: justify">Kamar yang cocok untuk kaum mahasiswa maupun kaum rebahan, dimana dalam kamar ini tidak hanya memiliki kamar mandi dalam, namun ia juga mendapat akses free wifi yang dapat dinikmati baik dalam kegiatan kuliah maupun gaming stumble guys bareng keluarga.</p>
        </div>
        <div class="card-footer text-center">
            <a href="product.php" class="btn btn-primary">Book Now</a>
        </div>
        </div>
    </div>
    <?php
        }
    ?>

    <?php
        $sql = "select nama_kamar, gambar from tbl_kos where flag = 1 and kode_kamar = '003'";
        $query = mysqli_query($con, $sql);
        if($row = mysqli_fetch_assoc($query)){
        $image = $row["gambar"];
        $kamar = $row["nama_kamar"];  
    ?>

    <div class="col-sm-4 my-4 float-right">
        <div class="card">
        <?php
            echo "
            <img class='card-img-top float-right' src='upload/".$image."' alt='gambar'>
            "
        ?>
            <div class="card-body">
            <h4 class="card-title"><?php echo $kamar ?></h4>
            <p class="card-text" style="text-align: justify">Kamar kos dengan interior yang sangat luxury, dengan fasilitas yang cukup komplit, selain itu lokasi yang sangat strategis untuk penginapan disektor pariwisata, ini menjadikan kamar ini menjadi opsi terbaik yang dapat anda sewa, baik sebagai inap sementara maupun tempat tinggal jangka lama</p>
            </div>
            <div class="card-footer text-center">
            <a href="product.php" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="container">
        <div class="tengah">
            <div class="kolom">
                <img src="images/about_us.png">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tengah">
            <div class="kolom">
                <img src="images/contact1.png">
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Griya Jepun</b>All Rights Reserved.
        </div>
    </div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>