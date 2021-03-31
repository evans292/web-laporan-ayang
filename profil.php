<div class="card shadow">
    <div class="card-header text-success">
        My Profile
    </div>
    <div class="card-body">

    <?php
    require './koneksi.php';
    $sqli=mysqli_query($konek, "select * from masyarakat where nik='$_SESSION[nik]' ");
    if($data=mysqli_fetch_array($sqli))
    {
        ?>
    
        <form action="update_masyarakat.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                <label>NIK</label>
                <input type="text" name="nik" value="<?php echo $data['nik']; ?> " class="form-control" readonly>
            </div>
            <div class="form-group cols-sm-6">
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control">
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
            
             
        
                <input type="submit" value="Edit" class="btn btn-success float-right">
        </form>
    <?php } ?>

