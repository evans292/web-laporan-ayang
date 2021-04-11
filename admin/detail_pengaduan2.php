<div class="card shadow">
    <div class="card-header text-success">
        Detail Pengaduan
    </div>
    <div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="?url=daftar_pengaduan" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>

        <?php
        require '../koneksi.php';
        $sqli=mysqli_query($konek, "select * from pengaduan where id_pengaduan='$_GET[id]'");
        $tanggapan=mysqli_query($konek, "select * from tanggapan where id_pengaduan='$_GET[id]' ");
        $data=mysqli_fetch_array($sqli);
        $tanggapan=mysqli_fetch_array($tanggapan);
        if ($sqli)
        { 
        ?>
    
    
        <form action="update_tanggapan.php" method="post" class="form-horizontal mt-4" enctype="multipart/form-data">

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
                <img src="../foto/<?php echo $data['foto']; ?>" width=600>
                <?php } else { ?>
                    <p class="font-weight-bold">Tidak ada</p> 
                <?php } ?>
                </div>
            </div>
            
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>ID Tanggapan</label>
                <input type="text" name="id_tanggapan" value="<?php echo $tanggapan['id_tanggapan']; ?> " class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>ID Pengaduan</label>
                <input type="text" name="id_pengaduan" value="<?php echo $tanggapan['id_pengaduan']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Tanggal</label>
                <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control"
                readonly>
            </div>                
            <div class="form-group cols-sm-6">
                <label>Tanggapan</label>
                <input type="text" name="tanggapan" value="<?php echo $tanggapan['tanggapan']; ?>" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>ID Petugas</label>
                <input type="text" name="id_petugas" value="<?php echo $tanggapan['id_petugas']; ?>" class="form-control" readonly>
            </div>
            
            <input type="submit" class="btn btn-success float-right" value="Edit" >
        </form>
            
            <?php } ?>
        </form>
    </div>
