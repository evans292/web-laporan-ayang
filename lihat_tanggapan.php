<div class="card shadow">
    <div class="card-header">
        Detail Pengaduan
    </div>
    <div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="?url=lihat_pengaduan" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
    </div>
    
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

        <?php
        require 'koneksi.php';
        $sqli=mysqli_query($konek, "select * from pengaduan,tanggapan where tanggapan.id_pengaduan='$_GET[id]' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");
        $cek=mysqli_num_rows($sqli);
            if ($cek<1) //jika tidak ditemukan
            {
                echo "<font color='red'> Mohon Bersabar, Pengaduan Belum di Tanggapi</font>";
            }
            else 
        { 
            $data=mysqli_fetch_array($sqli);                     
        ?>
        
            <div class="form-group cols-sm-6">
                <label>Tanggal Tanggapan</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control"
                readonly>
            </div>
             
             <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
                <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
            </div>
            <div class="form-group cols-sm-6">
                <label>Lihat Tanggapan</label>
                <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['tanggapan']; ?></textarea>
            </div> 
            <?php } ?>
        </form>
    </div>
</div>