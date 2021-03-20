<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'validasi_pengaduan':
        include 'validasi_pengaduan.php';
        break;

        case 'verifikasi_pengaduan':
        include 'verifikasi_pengaduan.php';
        break;

        case 'detail_validasi':
        include 'detail_validasi.php';
        break;

        case 'detail_pengaduan':
        include 'detail_pengaduan.php';
        break;

        case 'tanggapan':
        include'tanggapan.php';
        break;
    }
}
else
{
    ?>
 <?php
    
    require '../koneksi.php';
    $sqli=mysqli_query($konek, "select * from pengaduan where status='0'");
    if ($cek=mysqli_num_rows($sqli))
    {
    ?>

<div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
             <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Pengaduan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> laporan dari masyarakat</div>
                        </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success text-capitalize">Halo <?= $_SESSION['nama']; ?></h6>
    </div>
    <div class="card-body">
        <div class="text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../img/undraw_posting_photo.svg" alt="">
        </div>
        <p class="text-justify">Selamat datang di Aplikasi Pengaduan Masyarakat layanan yang menampung saran maupun kritikan dari masyarakat untuk kemajuan dan kenyamanan bersama</p>
    </div>
    </div>
<?php
} else { ?>
<div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
             <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Pengaduan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada 0 laporan dari masyarakat</div>
                        </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success text-capitalize">Halo <?= $_SESSION['nama']; ?></h6>
    </div>
    <div class="card-body">
        <div class="text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../img/undraw_posting_photo.svg" alt="">
        </div>
        <p class="text-justify">Selamat datang di Aplikasi Pengaduan Masyarakat layanan yang menampung saran maupun kritikan dari masyarakat untuk kemajuan dan kenyamanan bersama</p>
    </div>
    </div>
<?php } 

}
?>