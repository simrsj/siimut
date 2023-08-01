<!DOCTYPE html>
<html lang="en">


<head>
<?php $this->load->view("admin/_partials/head.php"); ?>

 </head>


<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <?php $this->load->view("admin/_partials/preload.php"); ?>
  <?php $this->load->view("admin/_partials/navbar.php"); ?>
  <?php $this->load->view("admin/_partials/sidebar.php"); ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Validasi Indikator</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <?php $this->load->view("admin/_partials/breadcrumb.php"); ?>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header right">
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-check"></span> Terima Validasi</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Delete"><span class="fa fa-times"></span> Tolak Validasi</button>
   
                    
              </div>
   
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-striped table-bordered" id="PenggunaTable" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Indikator </th>
                          <th>Bulan </th>
                          <th>Unit Kerja</th>
                          <th>Numerator</th>
                          <th>Denumerator</th>
                          <th>Plan</th>
                          <th>Do</th>
                          <th>Study</th>
                          <th>Action</th>
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody id="show_data">
                      
                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
         
 


<!-- Modal -->
<div id="Modal_Add" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Terima Validasi</h4>
      </div>
      <div class="modal-body">
        <strong>Apakah Anda Yakin Melakukan Validasi ?</strong>
          </div>
          <div class="modal-footer">
            <input type="text" name="id_capaian" id="id_capaian" class="form-control">
            <input type="hidden" name="id_hapus" id="id_hapus" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="button" type="submit" id="btn_hapus" class="btn btn-primary">Ya</button>
          </div>
          </div>

  </div>
</div>
         
<div id="Delete" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog"> 

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Tolak Validasi</h4>
      </div>
       <div class="modal-body">
            <strong>Alasan Melakukan Tolak Validasi ?</strong>
            <textarea id="alasan" name="alasan" class="form-control"></textarea>
        
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_hapus" id="id_hapus" class="form-control">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tidak</button>
        <button type="button" type="submit" id="btn_hapus" class="btn btn-outline-success">Simpan</button>
      </div>
    </div>

  </div>
</div>
       
      
  	</div> 
		<!-- /.container-fluid -->
  
  </div>

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>
		
	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
    

</body>
    <?php $this->load->view("admin/_partials/js.php") ?>
		<?php $this->load->view("admin/_js/jsvalidasi.php") ?>


</html>
