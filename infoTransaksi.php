<!DOCTYPE html>
<html lang="en">
<head>
<title>Loyal member</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
    include 'helper/connect.php';
?>

<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>Data Transaksi</h3>
<hr>

<table class="table table-stripped table-hover datatab" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Pemesan</th>
            <th>Kode Kamar</th>
            <th>ID Fasilitas</th>
            <th>Total Bayar</th>
            <th> Status</th> 
            <th> Tanggal Reservasi</th>
            <th> Lama Inap</th>
            <th> Alamat</th>   
        </tr>
    </thead>  
    <tbody>
    <?php
        $nomor=1;

        $sql = "SELECT * FROM tbl_pembayaran INNER JOIN tbl_reservasi ON tbl_pembayaran.id_reservasi=tbl_reservasi.id_reservasi";
        $query = mysqli_query($con, $sql);
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $data['nama_tamu']; ?></td>
            <td><?php echo $data['kode_kamar']; ?></td>
            <td><?php echo $data['id_fasilitas']; ?></td>
            <td>Rp. <?php echo $data['total_bayar']; ?></td>
            <td><?php echo $data['status']; ?></td>
            <td><?php echo $data['tanggal_check_in']; ?></td>
            <td><?php echo $data['lama_inap']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>