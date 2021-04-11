<div class="card shadow">
    <div class="card-header text-success">
        Tambah Petugas
    </div>
    <div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="?url=lihat_petugas" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>

   
        <form action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>Nama Petugas</label>
                <input type="text" name="nama_petugas" value="" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>Username</label>
                <input type="text" name="username" value="" class="form-control" required> 
            </div>
            <div class="form-group cols-sm-6">
                <label>Password</label>
                <input type="password" name="password" value="" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>Telp</label>
                <input type="text" name="telp" value="" class="form-control" required>
            </div>
            <div class="form-group cols-sm-6">
                <label>Level</label>
                <select class="form-control" name="level" required>
                    <option value=""> Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
             
            
                <input type="submit" value="Simpan" class="btn btn-success float-right">
                
        </form>
