<?php
require '../koneksi.php';
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];
$id=$_POST['id_petugas'];

$sqli=mysqli_query($konek, "update petugas set nama_petugas='$nama', username='$user', password='$pass', telp='$telp',
    level='$level' where id_petugas='$id' ");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Diedit');
    window.location='admin.php?url=profil';
    </script>
    <?php
}

?>