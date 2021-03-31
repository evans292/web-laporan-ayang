<?php
require './koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sqli=mysqli_query($konek, "update masyarakat set nama='$nama', username='$user', password='$pass', telp='$telp' where nik='$nik' ");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Diedit');
    window.location='masyarakat.php?url=profil';
    </script>
    <?php
}

?>