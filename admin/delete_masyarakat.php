<?php
require '../koneksi.php';
$nik=$_GET['nik'];

$sqli=mysqli_query($konek, "delete from masyarakat where nik='$nik' ");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='admin.php?url=lihat_masyarakat';
    </script>
<?php   
}
?>