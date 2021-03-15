<?php
require '../koneksi.php';
$id=$_GET['id'];

$sqli=mysqli_query($konek, "delete from petugas where id_petugas='$id' ");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='admin.php?url=lihat_petugas';
    </script>
<?php   
}
?>