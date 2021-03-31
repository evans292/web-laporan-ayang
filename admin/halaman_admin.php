<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'profil':
        include'profil.php';
        break; 

        case 'verifikasi_pengaduan':
        include'verifikasi_pengaduan.php';
        break;

        case 'validasi_pengaduan':
        include'validasi_pengaduan.php';
        break;

        case 'detail_validasi':
        include'detail_validasi.php';
        break;

        case 'detail_pengaduan':
        include'detail_pengaduan.php';
        break;

        case 'detail_pengaduan2':
        include'detail_pengaduan2.php';
        break;

        case 'tanggapan':
        include'tanggapan.php';
        break;

        case 'lihat_petugas':
        include 'lihat_petugas.php';
        break;

        case 'tambah_petugas':
        include'tambah_petugas.php';
        break;

        case 'edit_petugas':
        include'edit_petugas.php';
        break;

        case 'preview_petugas':
        include'preview_petugas.php';
        break;

        case 'lihat_masyarakat':
        include'lihat_masyarakat.php';
        break;

        case 'preview_masyarakat':
        include'preview_masyarakat.php';
        break;

        case 'daftar_pengaduan': 
        include'daftar_pengaduan.php';
        break;
 
        case 'preview_pengaduan':
        include'preview_pengaduan.php';
        break;

        case 'daftar_tanggapan': 
        include'daftar_tanggapan.php';
        break;
        
        case 'edit_tanggapan':
        include'edit_tanggapan.php';
        break;

        case 'preview_tanggapan':
        include'preview_tanggapan.php';
        break;
    }
}
else
{
    ?>
    
    <?php

require '../koneksi.php';
$sqli=mysqli_query($konek, "select * from pengaduan where status='tunggu'");
$sqlie=mysqli_query($konek, "select * from pengaduan where status='proses'");
$cek=mysqli_num_rows($sqli); 
$ceki=mysqli_num_rows($sqlie);
if ($cek >= 1 || $ceki >= 1)
{
?>

<div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
             <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Pengaduan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> laporan yang belum di VALIDASI</div>
                        </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
             <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Pengaduan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $ceki; ?> laporan yang belum di VERIFIKASI</div>
                        </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $ceki; ?></span>
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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada 0 laporan yang belum di VALIDASI</div>
                        </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
             <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Pengaduan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada 0 laporan yang belum di VERIFIKASI</div>
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