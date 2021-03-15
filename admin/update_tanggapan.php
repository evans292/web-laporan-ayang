<?php
require '../koneksi.php';
$id=$_POST['id_tanggapan'];
$id_pengaduan=$_POST['id_pengaduan'];
$tgl=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];


$sqli=mysqli_query($konek, "update tanggapan set id_pengaduan='$id_pengaduan',tgl_tanggapan='$tgl',tanggapan='$tanggapan',id_petugas='$id_petugas' where id_tanggapan='$id'");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Diedit');
    window.location='admin.php?url=daftar_tanggapan';
    </script>
    <?php
}

?>