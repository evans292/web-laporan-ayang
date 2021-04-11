<div class="card shadow">
    <div class="card-header text-success">
        My Profile
    </div>
    <div class="card-body">

    <?php
    require '../koneksi.php';
    $sqli=mysqli_query($konek, "select * from petugas where id_petugas='$_SESSION[id_petugas]' ");
    if($data=mysqli_fetch_array($sqli))
    {
        ?>
    
        <form action="update_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>ID Petugas</label>
                <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?> " class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Nama Petugas</label>
                <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Password</label>
                <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Telp</label>
                <input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control">
            </div>
            <div class="form-group cols-sm-6">
                <label>Level</label>
                <input type="text" name="level" value="<?php echo $data['level']; ?>" class="form-control" readonly>
            </div>
             
        
                <input type="submit" value="Edit" class="btn btn-success float-right">
        </form>
    <?php } ?>

