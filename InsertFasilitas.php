<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Insert Fasilitas</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="proses_admin/prosesInsertFasilitas.php" method="POST">
        <div class="container">
            <h3>Form insert Fasilitas</h3>
            <div class="form-group">
                <label>Kode Fasilitas</label>
                <input type="text" name="kode_fasilitas" class="form-control" placeholder="Kode Fasilitas">
            </div>
            <div class="form-group">
                <label>Tipe</label>
                <input type="text" name="tipe" class="form-control" placeholder="Tipe">
            </div>
            <div class="custom-control custom-checkbox">
                <label>Fasilitas</label><br>
                <input type="checkbox" name="fasilitas[]" value="Kamar Mandi dalam" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Kamar mandi dalam  </label>
                <input type="checkbox" name="fasilitas[]" value="Free Wifi" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Free wifi</label>
                <input type="checkbox" name="fasilitas[]" value="AC" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck2">Ac</label>
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
            <input type="hidden" name="flag" value="1" >
            <div>
                <input class="btn btn-success" type="submit" name="submit" value="Simpan">
            </div>
        </div>
    </form>
    
</body>
</html>