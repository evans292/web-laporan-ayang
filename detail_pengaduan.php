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
        $sqli=mysqli_query($konek, "select * from pengaduan where id_pengaduan='$_GET[id]'");
        $data=mysqli_fetch_array($sqli);
        if ($sqli)
        { 
            ?>
        
            <div class="form-group cols-sm-6">
                <label>Tanggal Pengaduan</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control"
                readonly>
            </div>
             
             <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
                <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo $data['isi_laporan']; ?></textarea>
            </div>
            <div class="form-group cols-sm-6">
                <label>Bukti Foto</label>
                <div>
                <?php if ($data['foto'] != '') { ?>
                <img src="foto/<?php echo $data['foto']; ?>" width=600>
                <?php } else { ?>
                    <p class="font-weight-bold">Tidak ada</p> 
                <?php } ?>
                </div>
            </div>
            
            <?php } ?>
        </form>