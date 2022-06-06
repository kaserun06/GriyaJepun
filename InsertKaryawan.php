<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Insert Karyawan</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="proses_admin/prosesInsertKaryawan.php" method="POST">
    <div class="container">
        <h3>Form insert Karyawan</h3>
        <div class="form-group">
            <label>Nip</label>
            <input type="text" name="nip" class="form-control" placeholder="Nip">
        </div>
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
            <input type="text" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="no_tlp" class="form-control" placeholder="No Telepon">
        </div>
        <input type="hidden" name="level" value="1" ><br/>
        <div>
            <input class="btn btn-success" type="submit" name="submit" value="Simpan">
        </div>
    </div>
</form>
</body>
</html>