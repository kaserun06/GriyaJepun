<?php 
include '../helper/connect.php';

$sql = "SELECT username, nama_karyawan AS nama, jabatan AS status FROM tbl_admin
        UNION
        SELECT username, nama_tamu, 'pelanggan' FROM tbl_pelanggan";
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT username, nama_karyawan AS nama, jabatan AS status FROM tbl_admin
            WHERE nama_karyawan LIKE '%$search%'
            UNION
            SELECT username, nama_tamu, 'pelanggan' FROM tbl_pelanggan
            WHERE nama_tamu LIKE '%$search%'";
}
$query = mysqli_query($con, $sql);
$no = 1;
while ($data = mysqli_fetch_assoc($query)):
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['status']; ?></td>
</tr>
<?php endwhile; ?>
?>