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
            <h1 class="m-0">User</h1>
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
              <div class="card-header">
                <h3 class="card-title"></h3>
                    <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Tambah User</a>
                    
              </div>
   
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-striped table-bordered" id="PenggunaTable" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama User</th>
                          <th>Username</th>
                          <th>Role</th>
                          <th>Bagian</th>
                          <th>Status</th>
                          <th>Aksi</th>
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
         
 
        <!--MODAL ADD-->
            <div class="modal fade" id="Modal_Add" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form id="form-tambah-pengguna" method="POST">            
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" name="btn-batal-pengguna" id="btn-batal-pengguna">
                      <i class="fa fa-window-close" aria-hidden="true"></i>  
                    </button>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row">
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Nama User</label>
                                <input type="text" name="nama_user" id="nama_user" class="form-control js-data-example-basic-multiple"  placeholder="Nama User" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Role</label>
                                <select name="grup" id="grup" class="form-control">
                                  <option >- Pilih Role -<option>
                                  <option value="1">Administrator<option>
                                  <option value="3">PIC Mutu<option>
                                  <option value="4">PJ Mutu<option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username"  required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Password</label>
                                <input type="password" name="e_pass" id="e_pass" class="form-control" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Jenis</label>
                                <select name="jenis" id="jenis"  class="form-control">
                                   <option >- Pilih Jenis -<option>
                                  <option value="3">Area Klinis<option>
                                  <option value="4">Area Manajemen<option>
                                  <option value="5">Area SKP<option>
                                </select>
                              </div>
                               <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Status</label>
                                <select name="status" id="status"  class="form-control">
                                   <option >- Pilih Status -<option>
                                  <option value="1">Aktif<option>
                                  <option value="2">Tidak Aktif<option>
                                  
                                </select>
                              </div>
                             
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Nama PIC</label>
                                <input type="text" name="namapic" id="namapic" class="form-control" placeholder="namapic" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Kontak PIC</label>
                                <input type="text" name="kontakpic" id="kontakpic" class="form-control" placeholder="Kontak PIC" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Parent</label>
                                <input type="text" name="parent" id="parent" class="form-control" placeholder="parent" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="email" required>
                              </div>
                              
                              
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Tambah User</button> 
                            
                          </div>
                        </form>
                 
                  
                </div>
              </div>
            </div>
         
        <!--MODAL EDIT-->
                  <form id="form-edit-pengguna">           
          <div class="modal fade" id="Modal_Edit_Pengguna"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <div>
                      <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" name="btn-batal-pengguna" id="btn-batal-pengguna"> 
                      <i class="fa fa-window-close" aria-hidden="true"></i>  
                    </button>
                     <!-- <button  type="button" class="btn btn-success" name="btn-e-save-pengadaan" id="btn-e-save-pengadaan">Simpan Usulan</button>  -->
                    </div>
                  </div>
                  <div class="modal-body">
                          
                        <div class="modal-body">
                        <div class="form-group row">
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Nama User</label>
                                <input type="hidden" name="e_id_user" id="e_id_user" class="form-control js-data-example-basic-multiple"  placeholder="Nama User" required>
                                <input type="text" name="e_nama_user" id="e_nama_user" class="form-control js-data-example-basic-multiple"  placeholder="Nama User" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Role</label>
                                <select name="e_grup" id="e_grup" class="form-control">
                                  <option >- Pilih Role -<option>
                                  <option value="1">Administrator<option>
                                  <option value="3">PIC Mutu<option>
                                  <option value="4">PJ Mutu<option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Username</label>
                                <input type="text" name="e_username" id="e_username" class="form-control" placeholder="Username"  required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Password</label>
                                <input type="password" name="e_pass" id="e_pass" class="form-control" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Jenis</label>
                                <select name="e_jenis" id="e_jenis"  class="form-control">
                                   <option >- Pilih Jenis -<option>
                                  <option value="3">Area Klinis<option>
                                  <option value="4">Area Manajemen<option>
                                  <option value="5">Area SKP<option>
                                </select>
                              </div>
                               <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Status</label>
                                <select name="e_status" id="e_status"  class="form-control">
                                   <option >- Pilih Status -<option>
                                  <option value="1">Aktif<option>
                                  <option value="2">Tidak Aktif<option>
                                  
                                </select>
                              </div>
                             
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Nama PIC</label>
                                <input type="text" name="e_namapic" id="e_namapic" class="form-control" placeholder="Nama PIC" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Kontak PIC</label>
                                <input type="text" name="e_kontakpic" id="e_kontakpic" class="form-control" placeholder="Kontak PIC" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Parent</label>
                                <input type="text" name="e_parent" id="e_parent" class="form-control" placeholder="parent" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Email</label>
                                <input type="text" name="e_email" id="e_email" class="form-control" placeholder="email" required>
                              </div>
                        </form>
                  </div>
                  <div class="modal-footer">
                        <button  type="submit" class="btn btn-success" name="submit" id="submit">Edit User</button> 
                  
                  </div>
                </div>
              </div>
            </div>
            </form>
        
        <!--MODAL REALISASI ADMIN-->
         <form id="form-real">
            <div class="modal fade" id="Modal_Realisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Usulan Pengadaan</h5>
                    <div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" name="btn-batal-pengadaan" id="btn-batal-pengadaan">
                      <!-- <span aria-hidden="true">&times;</span> -->
                      Batal
                      </button>
                      <button  type="button" class="btn btn-success" name="btn-save-pengadaan" id="btn-save-pengadaan">Simpan Usulan</button> 
                    </div>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row">
                          <div class="col-md-3">
                            <label class="col-md-12 col-form-label mini-text" style="margin-left:0px !important;">Kode Permohonan</label>
                              <input type="text" name="kode_permohonan" id="kode_permohonan" class="form-control" placeholder="Kode Permohonan" >
                            </div>
                            <div class="col-md-3">
                              <label class="col-md-12 col-form-label mini-text">Tgl Usulan</label>
                              <input type="date" name="tgl_usulan" id="tgl_usulan" class="form-control" placeholder="Tgl Usulan">
                            </div>
                            <div class="col-md-3">
                              <label class="col-md-12 col-form-label mini-text">Unit Kerja</label>
                              <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" value="<?php echo $profile->unit_kerja; ?>" readonly>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                          <div class="col-md-12">
                            <hr>
                              <p class="modal-title" id="exampleModalLabel"><i>Isikan Data Barang</i></p>
                            <hr>
                        </div>
                        </div>
                          
                        <div class="form-group row">
                              <input type="hidden" name="kode_barang" id="kode_barang" class="form-control" placeholder="Kode Barang" >
                              <input type="hidden" name="id_temp" id="id_temp" class="form-control" >
                            <div class="col-md-2">
                              <label class="col-md-12 col-form-label mini-text">Nama Barang</label>
                              <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang" required>
                            </div>
                            <div class="col-md-2">
                              <label class="col-md-12 col-form-label mini-text">Kuantitas</label>
                              <input type="text" name="kuantitas" id="kuantitas" class="form-control" placeholder="Kuantitas" required>
                            </div>
                            <div class="col-md-2">
                              <label class="col-md-12 col-form-label mini-text">Satuan</label>
                              <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Satuan" required>
                            </div>
                            <div class="col-md-2">
                              <label class="col-md-12 col-form-label mini-text">Keterangan</label>
                              <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" required>
                            </div>
                            <div class="col-md-2">
                              <label class="col-md-12 col-form-label mini-text"> </label>
                              <button type="button" type="submit" id="btn_save_brg_pengadaan" class="btn btn-primary">Tambah Barang</button>
                            </div>
                            
                          </div>
                  </div>
                  <div class="modal-footer">
                  </div>
                  <div class="modal-body">
                  <table class="table table-striped" id="DetailpengadaanTable" style="min-width:100% !important;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kuantitas</th>
                        <th>Satuan</th>
                        <th>Realisasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>                      
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </form>

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <span id="nama_program"></span>
                      <strong>Anda yakin menghapus rekam data ini ?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_seksi" id="id_seksi" class="form-control">
                    <input type="hidden" name="id_hapus" id="id_hapus" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" type="submit" id="btn_hapus" class="btn btn-primary">Ya</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
       
        <!--Modal Konfirmasi-->
         <form>
            <div class="modal fade" id="Modal_Konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data yang ditambah/diubah akan hilang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Apakah Anda yakin meninggalkan Halaman?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="konfirmasi" id="konfirmasi">
                    <button type="button" class="btn btn-secondary">No</button>
                    <button type="button" type="submit" id="btn_konfirmasi" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
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
		<?php $this->load->view("admin/_js/jsuser.php") ?>


</html>
