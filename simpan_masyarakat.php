<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$cek = mysqli_query($konek, "select * from masyarakat where nik=$nik");
if(mysqli_num_rows($cek) !== 1) {
    $sqli=mysqli_query($konek, "insert into masyarakat values('$nik','$nama','$user','$pass','$telp')");
    if ($sqli)
    {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Disimpan, Silahkan Untuk Login');
            window.location="login.php";
        </script>
        <?php
    }
} else {
    ?>
        <script type="text/javascript">
            alert ('Nik sudah terdaftar');
            window.location="register.php";
        </script>
    <?php
}

?>