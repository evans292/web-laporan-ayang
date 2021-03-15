<?php
require '../koneksi.php';
$id=$_GET['id'];

$sqli=mysqli_query($konek, "delete from tanggapan where id_tanggapan='$id' ");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='admin.php?url=daftar_tanggapan';
    </script>
<?php   
}
?>