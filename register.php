<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/register.css">
</head>
<body id="register">
<div class="container">
    <div class="insertTamu-form">
        <div class="main-div">
            <h4 style="margin-top:135px; color: white; text-align: center">S e l a m a t   D a t a n g !</h4>
            <h3 style="color: white; text-align: center">Isikan Data Anda</h3><br>
            <form action="proses/register.php" method="POST">
                <div class="container" style="color: white">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jk" value="P">Perempuan
                        </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jk" value="L">Laki laki
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="no_tlp" class="form-control" placeholder="No Telepon">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div>
                        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                    </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>