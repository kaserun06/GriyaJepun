<?php
if(isset($_POST["submit"])){
    print_r($_POST);
    print_r($_FILES);  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Insert kamar</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="proses_admin/prosesInsertKamar.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h3>Form insert Kamar</h3>
            <div class="form-group">
                <label>Kode Kamar</label>
                <input type="text" name="kode_kamar" class="form-control" placeholder="Kode Kamar">
            </div>
            <div class="form-group">
                <label>Nama Kamar</label>
                <input type="text" name="nama_kamar" class="form-control" placeholder="Nama Kamar">
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas">
            <div class="custom-file">
                <label class="custom-file-label" for="customFile">Gambar</label>
                <input type="file"  name="gambar" class="custom-file-input" id="customFile">    
            </div>
            <div class="form-group">
                <label>Tarif</label>
                <input type="number" name="tarif" class="form-control" placeholder="Tarif">
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
            <div>
                <input class="btn btn-success" type="submit" name="submit" value="Simpan">
            </div>
        </div>
    </form>
</body>
</html>