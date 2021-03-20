<?php
    require '../koneksi.php';
    $id_pengaduan=$_POST['id_pengaduan'];
    $tgl=$_POST['tgl_tanggapan'];
    $tanggapan=$_POST['tanggapan'];
    $id_petugas=$_POST['id_petugas'];
    $st='selesai';

    $sqli=mysqli_query($konek, "insert into tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
    $update_st=mysqli_query($konek, "update pengaduan set status='$st' where id_pengaduan='$id_pengaduan' ");

    if ($update_st)
    {
        ?>
        <script type="text/javascript">
            alert ('Data Sudah Ditanggapi');
            window.location="petugas.php?url=verifikasi_pengaduan";
            </script>

        <?php
    }
?>