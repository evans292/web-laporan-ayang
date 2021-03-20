<?php
require '../koneksi.php';
$sqli=mysqli_query($konek, "update pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($sqli)
{
    header('location:admin.php?url=validasi_pengaduan');
}
?>