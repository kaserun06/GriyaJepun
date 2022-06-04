<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Griya Jepun</title>
    <link rel="shortcut icon" type="images/png" href="images/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
 
  <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm content-center fixed-top">
        <div class="container">
            <!-- Brand -->
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt=""></a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
            <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
            <li class="nav-item">
            <a class="nav-link" href="#aboutus">About Us</a>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contacts</a>
            </li>
            <?php if(isset($_SESSION["nama"])): ?>
            <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
            <a class="tombol" href="login.php">Login</a>
            </li>
            <?php endif ?>
        </ul>
        </div>  
    </nav>
    
    <!-- isi konten--> 
    <div class="wrapper">
        <section id="home">
            <img src="images/simbol1.png">
            <div class="kolom">
                <p class="deskripsi">Explore Our Properties</p>
                <h2>Penyedia Layanan Sewa Properti Kawasan Jimbaran Bali</h2>
                <p>“Nyewa Penginapan anti ribet dengan Griya Jepun!</p>
                <p><a href="login.php" class="tombol2">get started</a></p>
            </div>
        </section>
        <section id="products">
            <div class="tengah">
                <div class="kolom">
                    <h2>Product</h2>
                    <p>“Eksplore pengalaman liburanmu dan penuhi kebuuhan penginapanmu hanya di Griya Jepun.”</p>
                </div>
                <div class="product-list">
                    <div class="img-product">
                        <img src="images/product1.png">
                        <p>Harga terjangkau</p>
                    </div>
                    <div class="img-product">
                        <img src="images/product2.png">
                        <p>Fasilitas Memadai</p>
                    </div>
                    <div class="img-product">
                        <img src="images/product3.png">
                        <p>Reservasi dan Pembatalan</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutus">
            <div class="tengah">
                <div class="kolom">
                    <img src="images/about_us.png">
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="kolom">
                <img src="images/contact1.png">
            </div>
        </section>
    </div>
    
    
    
    
    
    
    
    
    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Griya Jepun</b>All Rights Reserved.
        </div>
    </div>
    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>

