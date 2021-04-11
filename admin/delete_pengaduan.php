<?php
require '../koneksi.php';
$id=$_GET['id'];

$sqli=mysqli_query($konek, "delete from pengaduan where id_pengaduan='$id' ");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='admin.php?url=daftar_pengaduan';
    </script>
<?php   
}
?>