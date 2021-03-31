<div class="card shadow">
    <div class="card-header text-success">
        Tulis Pengaduan
    </div>
    <div class="card-body">
        <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>Tanggal Pengaduan</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control"
                readonly>
            </div>
             <div class="form-group cols-sm-6">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" 
                    readonly>
            </div>
             <div class="form-group cols-sm-6">
                <label>Tulis Laporan</label>
                <textarea class="form-control" rows="7" name="isi_laporan"></textarea>
            </div>
             <div class="form-group cols-sm-6">
                <label>Unggah Foto</label>
                <input type="file" name="foto"  class="form-control" accept=".jpg, .jpeg, .png, .gif">
                <p class="my-2 text-danger">* tipe yang bisa di upload adalah : jpg, .jpeg, .png, .gif</p>
            </div>
            
            <div class="form -group col-sm-6">
                <input type="submit" value="Simpan" class="btn btn-success">
                <input type="reset" value="Kosongkan" class="btn btn-secondary">
            </div>
        </form>