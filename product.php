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
    <title>GriyaJepun</title>
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
            <a class="nav-link" href="#">Product</a>
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
    <?php
    include 'helper/connect.php';
    ?>   

    <div class="container" style="padding-top: 60px; padding-bottom: 20px">
        <h3>Data Kamar</h3>
    <hr>
    <table class="table table-stripped table-hover datatab">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Kamar</th>
            <th>Tipe Kamar</th>
            <th>Kelas</th>
            <th>Gambar</th>
            <th>Tarif</th>
            <th>Status</th>
            <th>Booking</th>                         
        </tr>
    </thead>  
    <tbody>
    <?php 
        $sql = "select * from tbl_kos where flag = 1";
        $query = mysqli_query($con, $sql);
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)){
        $image = $data["gambar"];
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['kode_kamar']; ?></td>
        <td><?php echo $data['nama_kamar']; ?></td>
        <td><?php echo $data['kelas']; ?></td>
        <?php
        echo "<td>" ."<img src='upload/".$image."' width='150'  height='auto' alt='gambar'>"."</td>";
        ?>
        <td><?php echo $data['tarif']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <?php
        $kode_kamar = $data["kode_kamar"];
        echo "
        <td>
        <a href='reservasi.php?id=$kode_kamar' class='btn btn-warning'>Booking</a>
        </td>";
        ?>
    </tr>
    <?php               
        } 
    ?>
    </tbody>
    </table>          
    </div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
</html>