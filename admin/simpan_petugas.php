<?php
require '../koneksi.php';
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$cek = mysqli_query($konek, "select * from petugas where telp=$telp");

if(mysqli_num_rows($cek) !== 1) {
    $sqli=mysqli_query($konek, "insert into petugas(nama_petugas,username,password,telp,level) 
    values('$nama','$user','$pass','$telp','$level')");

if ($sqli)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Disimpan');
    window.location='admin.php?url=lihat_petugas';
    </script>
    <?php
}
} else {
?>
    <script type="text/javascript">
        alert ('Petugas sudah terdaftar');
        window.location='admin.php?url=tambah_petugas';
    </script>
    <?php
}

?>