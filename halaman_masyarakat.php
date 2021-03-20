<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;
    }
}
else
{
    ?>
        <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success text-capitalize">Halo <?= $_SESSION['nama']; ?></h6>
    </div>
    <div class="card-body">
        <div class="text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
        </div>
        <p class="text-justify">Selamat datang di Aplikasi Pengaduan Masyarakat layanan yang menampung saran maupun kritikan dari masyarakat untuk kemajuan dan kenyamanan bersama</p>
    </div>
    </div>
    <?php
}
?>