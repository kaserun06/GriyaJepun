<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

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
    <h3>User List</h3>
<hr>

<form action="" method="GET" autocomplete="off">
    <label for="search">Search: </label>
    <input type="text" id="search" name="search">
</form>

<table class="table table-stripped table-hover datatab" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Status</th>                         
        </tr>
    </thead>  
<tbody id="users-table"></tbody>
</table>        
</div>

</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#users-table').load('proses_admin/fetchUsers.php');
    $('#search').keyup(function(){
        console.log($('#search').val());
        $('#users-table').load('proses_admin/fetchUsers.php?search=' + $('#search').val());
    });
});
</script>

</html>