<div class="card shadow">
    <div class="card-header text-success">
        Edit Tanggapan
    </div>
    <div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="?url=daftar_tanggapan" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>

    <?php
    require '../koneksi.php';
    $sqli=mysqli_query($konek, "select * from tanggapan where id_tanggapan='$_GET[id]' ");
    if($data=mysqli_fetch_array($sqli))
    {
    ?>
    
        <form action="update_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>ID Tanggapan</label>
                <input type="text" name="id_tanggapan" value="<?php echo $data['id_tanggapan']; ?> " class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>ID Pengaduan</label>
                <input type="text" name="id_pengaduan" value="<?php echo $data['id_pengaduan']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Tanggal</label>
                <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control"
                readonly>
            </div>                
            <div class="form-group cols-sm-6">
                <label>Tanggapan</label>
                <input type="text" name="tanggapan" value="<?php echo $data['tanggapan']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>ID Petugas</label>
                <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly>
            </div>
            
             
            
                <input type="submit" value="Edit" class="btn btn-success float-right">
        </form>
    <?php } ?>
