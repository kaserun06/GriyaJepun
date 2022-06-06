<?php
    if(isset($_SESSION['user'])){
        header("location: profile.php");
    }
    
    if(isset($_GET['pesan'])) {
        $mess = "<p> {$_GET['pesan']}</p>";
    } else {
        $mess = "";
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
 
  <link href="style.css" rel="stylesheet">
</head>
<body id="loginform">
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h3>Login</h3>
                <p>Type your username and password</p>
            </div>
            <form action="proses/login.php" method="POST">
            <?php echo $mess; ?>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <div class="reg">
                    <br>
                    <span style="font-size:15px">Belum Punya Akun?</span><a href="register.php" style="color:green; font-size: 15px"> Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

