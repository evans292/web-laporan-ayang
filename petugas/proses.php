<?php
require '../koneksi.php';
$sqli=mysqli_query($konek, "update pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($sqli)
{
    header('location:petugas.php?url=verifikasi_pengaduan');
}
?>