<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


  
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            
            <h3 class="m-0 font-weight-bold text-success" align="center">SMK NEGERI 1 SUMEDANG</h3>
            <h4 class="m-0 font-weight-bold text-success" align="center">Rekayasa Perangkat Lunak</h4>
            <h5 class="m-0 font-weight-bold text-success" align="center">Jln. Mayor Abdurakhman No.209 Sumedang, 45352 Tlp.(0261) 202056 Fax.(0261) 202056</h5>
            <br><hr>
            
            <h6 class="m-0 font-weight-bold text-success" align="center">Laporan Daftar Pengaduan</h6>
            <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  
                    <tr>
                      <th>ID</th>
                      <th>Tanggal</th>
                      <th>NIK</th>
                      <th>Isi Pengaduan</th>
                      <th>Status</th>
                    </tr>
                  

                <?php
                  require '../koneksi.php';
                  if(isset($_GET['filter_tgl'])){
                    $mulai = $_GET['tgl_mulai'];
                    $selesai = $_GET['tgl_selesai'];
                    $sqli=mysqli_query($konek, "select * from pengaduan where tgl_pengaduan between '$mulai' and '$selesai'");
                    while ($data=mysqli_fetch_array($sqli)) {

                ?>
                  
                  <tbody>
                  <tr>
                      <td><?php echo $data['id_pengaduan']; ?> </td>
                      <td><?php echo $data['tgl_pengaduan']; ?> </td>
                      <td><?php echo $data['nik']; ?> </td>
                      <td><?php echo $data['isi_laporan']; ?> </td>
                      <td><?php echo $data['status']; ?> </td>
                      </tr>
                    
                    
                  </tbody>
                  <?php } ?>
                  <?php } ?>
                </table>
              </div>
                <br>
                <br>
                <h6 class="m-0 font-weight-bold text-success" 
                align="right">Sumedang, <?php echo date('d M Y'); ?> </h6>
                <h6 class="m-0 font-weight-bold text-success" align="right">Petugas</h6>
                <br><br><br>
                <h6 class="m-0 font-weight-bold text-success" align="right"><?php echo $_SESSION['nama']; ?> </h6>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
