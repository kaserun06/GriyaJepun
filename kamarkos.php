<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Data Kamar</title>
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
    <h3>Data Kamar Kos</h3>
<hr>
<table class="table table-stripped table-hover datatab" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Kamar</th>
            <th>Tipe Kamar</th>
            <th>Kelas</th>
            <th>Tarif</th>
            <th>Status</th>
            <th>Action</th>                         
        </tr>
    </thead>  
<tbody>

<?php 
    $sql = "SELECT * FROM tbl_kos WHERE kelas IN('Reguler','Menengah','Komplit')";
    $query = mysqli_query($con, $sql);
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['kode_kamar']; ?></td>
    <td><?php echo $data['nama_kamar']; ?></td>
    <td><?php echo $data['kelas']; ?></td>
    <td><?php echo $data['tarif']; ?></td>
    <td><?php echo $data['status']; ?></td>
    <td>
    <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['kode_kamar']; ?>">Edit</a>
    <a href="proses_admin/deleteKamar.php?id=<?php echo $data['kode_kamar'] ?>" class="btn btn-danger">Delete</a>
    </td>
</tr>

<div class="modal fade" id="myModal<?php echo $data['kode_kamar']; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Kamar</h4>
                </div>
            <div class="modal-body">
            <form role="form" action="proses_admin/updateKos.php" method="get">
            <?php
            $id = $data['kode_kamar']; 
            $sql2 = "SELECT * FROM tbl_kos WHERE kode_kamar='$id'";
            $query_edit = mysqli_query($con, $sql2);
            while ($row = mysqli_fetch_array($query_edit)) {  
            ?>
                <div class="form-group">
                    <label>Kode Kamar</label>
                    <input type="text" name="kode_kamar" class="form-control" value="<?php echo $row['0']; ?>" readonly="true">     
                </div>

                <div class="form-group">
                    <label>Nama Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control" value="<?php echo $row['1']; ?>">      
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?php echo $row['2']; ?>">      
                </div>

                <div class="form-group">
                    <label>Tarif</label>
                    <input type="text" name="tarif" class="form-control" value="<?php echo $row['4']; ?>">      
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $row['5']; ?>">      
                </div>

                <div class="modal-footer">  
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            <?php 
            }
            ?>        
            </form>
                </div>
            </div>
     
         </div>
     </div>
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