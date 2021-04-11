          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Data Tanggapan</h6>
            </div>
            <div class="card-body">



              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Tanggapan</th>
                      <th>ID Pengaduan</th>
                      <th>Tanggal</th>
                      <th>Tanggapan</th>
                      <th>ID Petugas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <?php
                  require '../koneksi.php';
                  $sqli=mysqli_query($konek, "select * from tanggapan");
                  while ($data=mysqli_fetch_array($sqli)) {

                  ?>
                  
                  <tbody>
                    <tr>
                        <td><?php echo $data['id_tanggapan']; ?></td>
                        <td><?php echo $data['id_pengaduan']; ?></td>
                        <td><?php echo $data['tgl_tanggapan']; ?></td>
                        <td><?php echo $data['tanggapan']; ?></td>
                        <td><?php echo $data['id_tanggapan']; ?></td>
                  

                      <td>

                      <!--Button-->
                    <a href="admin.php?url=edit_tanggapan&id=<?php echo $data['id_tanggapan']; ?>" 
                    class="btn btn-warning btn-circle">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="delete_tanggapan.php?id=<?php echo $data['id_tanggapan']; ?>" 
                    class="btn btn-danger btn-circle" onclick="return confirm('Yakin akan dihapus?')">
                        <i class="fa fa-trash"></i>
                    </a>
                     

                      </td>
                    </tr>
                    
                    
                  </tbody>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
  
          </div>
        </div>
      </footer>
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
