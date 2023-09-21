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
            <h1 class="m-0">Indikator</h1>
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
                    <!-- <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Tambah User</a> -->
                    
              </div>
   
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-striped table-bordered" id="PenggunaTable" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Jenis Mutu </th>
                          <th>Nama Indikator </th>
                          <th>Unit Kerja</th>
                          <th>Pengumpul Data</th>
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
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Realisasi Target Indikator</h5>
                    <div>
                      <!-- <button  type="button" class="btn btn-success" name="btn-save-pengadaan" id="btn-save-pengadaan"><i class="fas fa-save"></i> Simpan Usulan</button>  -->
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" name="btn-batal-pengadaan" id="btn-batal-pengadaan">
                      <!-- <span aria-hidden="true">&times;</span> -->
                       <i class="fa fa-times"></i>
                      </button>
                  
                  </div>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row" style="margin-bottom: 0px !important;">
                            
                          <div class="col-6">
                            <table class="table table-striped">
                              <tr>
                                <td class="pad-2">Nama Indikator</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_nama_indikator">coba</p></th>
                              </tr>
                              <tr>
                                <td class="pad-2">Numerator</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_numerator">coba</p></th>
                              </tr>
                              <tr>
                                <td class="pad-2">Denumerator</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_denumerator">coba</p></th>
                              </tr>
                            </table>
                          </div>
                          <div class="col-6">
                            <table class="table table-striped">
                              <tr>
                                <td class="pad-2">Target Capaian</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_target">coba</p></th>
                              </tr>
                              <tr>
                                <td class="pad-2">Formula</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_formula">coba</p></th>
                              </tr>
                              <tr>
                                <td class="pad-2">Unit Kerja</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_unit_kerja">coba</p></th>
                              </tr>
                            </table>
                          </div>
                  
                  <div class="col-12">
                        
                        <form id="form-tambah-barang" method="POST"  enctype="multipart/form-data">            
                          <div class="form-group row" style="margin-bottom: 0px !important;">
                                <input type="hidden" name="id_capaian" id="id_capaian" class="form-control" placeholder="Kode Barang" >
                                <input type="hidden" name="id_indikator" id="id_indikator" class="form-control" >
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Tanggal</label>
                               <input type="date" name="tgl" id="tgl" class="form-control" required>
                               </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Numerator</label>
                                <input type="text" name="numerator" id="numerator" class="form-control" placeholder="Jumlah Numerator" required>
                            </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Denumerator</label>
                                <input type="text" name="denumerator" id="denumerator" class="form-control" placeholder="Jumlah Denumerator" required>
                            </div>
                            <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Laporan Bulan</label>
                               <select name="bulan" id="bulan" class="form-control">
                                  <option value="januari">Januari</option>
                                  <option value="februari">Februari</option>
                                  <option value="maret">Maret</option>
                                  <option value="april">April</option>
                                  <option value="mei">Mei</option>
                                  <option value="juni">juni</option>
                                  <option value="juli">Juli</option>
                                  <option value="agustus">Agustus</option>
                                  <option value="september">September</option>
                                  <option value="oktober">Oktober</option>
                                  <option value="november">November</option>
                                  <option value="desember">Desember</option>
                                </select>
                            </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Plan</label>
                                <textarea class="form-control" name="plan" id="plan" placeholder="Masukan Plan" ></textarea>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Do</label>
                                <textarea class="form-control" name="do" id="do" placeholder="Masukan Do" ></textarea>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Study </label>
                                <textarea class="form-control" name="study" id="study" placeholder="Masukan Study" ></textarea>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Action </label>
                                <textarea class="form-control" name="action" id="action" placeholder="Masukan Action" ></textarea>
                              </div>
                              <div class="col-md-6 custom-file">
                                <label class="col-md-12 col-form-label mini-text">file Pendukung </label>
                                <input type="file" class="custom-file-input" name="upload" id="upload"  >
                              </div>
                              <div class="col-md-4">
                                 <input type="hidden" name="status" id="status" class="form-control" placeholder="Masukan Status" required>
                              </div>
                               
                              </form>
                            
                        
                        
                  </div>
                    
                    
                     <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Tambah Capaian</button> 
                            
                          </div>
                  <div class="modal-body">
                  <table class="table table-striped" id="CapaianTable" style="min-width:100% !important;">
                    <thead>
                       <tr>
                         <th>Laporan Bulan</th>
                        <th>Numerator</th>
                        <th>Denumerator</th>
                        <th>Capaian</th>
                        <th>Plan</th>
                        <th>Do</th>
                        <th>Study</th>
                        <th>Action</th>
                        <th>Status</th>
                        <th>Tombol</th>
                      </tr>
                    </thead>
                    <tbody>                      
                    </tbody>
                     <tfoot>
                          <tr>
                              <th colspan="9" style="text-align:right">Total:</th>
                              <th></th>
                          </tr>
                    </tfoot>
                    </table>
                  </div>
                  
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
                  <div class="col-6">
                        
                        <form id="form-tambah-barang" method="POST"  enctype="multipart/form-data">            
                          <div class="form-group row" style="margin-bottom: 0px !important;">
                                <input type="hidden" name="kode_barang" id="kode_barang" class="form-control" placeholder="Kode Barang" >
                                <input type="hidden" name="id_temp" id="id_temp" class="form-control" >
                                <input type="hidden" name="jenis_belanja" id="jenis_belanja" value="0" class="form-control" >
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Tanggal</label>
                               <input type="date" name="tgl" id="tgl" class="form-control" required>
                               </div>
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
		<?php $this->load->view("admin/_js/jsindikator.php") ?>


</html>
