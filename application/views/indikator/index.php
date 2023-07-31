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
                          <th>Jenis Indikator </th>
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
                      <button  type="button" class="btn btn-success" name="btn-save-pengadaan" id="btn-save-pengadaan"><i class="fas fa-save"></i> Simpan Usulan</button> 
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" name="btn-batal-pengadaan" id="btn-batal-pengadaan">
                      <!-- <span aria-hidden="true">&times;</span> -->
                       <i class="fa fa-times"></i>
                      </button>
                  
                  </div>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row" style="margin-bottom: 0px !important;">
                            
                          <div class="col-md-12">
                            <table class="table table-striped">
                              <tr>
                                <td class="pad-2">Unit Kerja</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_unit_kerja">coba</p></th>
                              </tr>
                              <tr>
                                <td class="pad-2">Unit Kerja</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_unit_kerja">coba</p></th>
                              </tr>
                              <tr>
                                <td class="pad-2">Unit Kerja</td>
                                <td class="pad-2">:</td>
                                <th class="pad-2" style="width:80%;"><p id="p_unit_kerja">coba</p></th>
                              </tr>
                            </table>
                          </div>
                  </div>
                        <form id="form-tambah-barang" method="POST"  enctype="multipart/form-data">            
                          <div class="form-group row" style="margin-bottom: 0px !important;">
                                <input type="hidden" name="kode_barang" id="kode_barang" class="form-control" placeholder="Kode Barang" >
                                <input type="hidden" name="id_temp" id="id_temp" class="form-control" >
                                <input type="hidden" name="jenis_belanja" id="jenis_belanja" value="0" class="form-control" >
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Nama Program</label>
                                <select name="id_program" id="id_program" class="form-control js-data-example-basic-multiple" onChange="bukakegiatan(this);" style="width: 100%"></select> 
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Nama Kegiatan</label>
                                <select type="text" name="id_kegiatan" id="id_kegiatan" class="form-control "  onChange="bukasubkegiatan(this);" style="width: 100%"></select>
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Nama SubKegiatan</label>
                                <select type="text" name="id_subkegiatan" id="id_subkegiatan" class="form-control" style="width: 100%"></select>
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Uraian</label>
                                <select type="text" name="id_uraian" id="id_uraian" class="form-control" style="width: 100%" required></select>
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Jenis Sumber Dana</label>
                                <!-- <input type="text" name="sumber_dana" id="sumber_dana" class="form-control" placeholder="Sumber Dana" required> -->
                                <select name="sumber_dana" id="sumber_dana" class="form-control" style="width: 100%" required>
                                  <option value="">Pilih Sumber Dana</option>
                                  <option value="apbd">APBD</option>
                                  <option value="apbn">APBN</option>
                                  <option value="blud">BLUD</option>
                                </select>
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Nama Rincian Belanja Pegawai</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Rincian Belanja Pegawai" required>
                              </div>
                               <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Tipe Barang</label>
                                <select type="text" name="id_tipe_barang" id="id_tipe_barang" class="form-control" style="width: 100%"  required></select>
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Jenis Barang</label>
                                <select type="text" name="id_jenis_barang" id="id_jenis_barang" class="form-control" style="width: 100%"  required></select>
                              </div>
                             
                            
                              
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Kuantitas</label>
                                <input type="number" name="kuantitas" id="kuantitas" class="form-control" placeholder="Kuantitas" required>
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Satuan" required>
                              </div>
                               <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Upload Dokumen Pendukung (PDF)</label>
                                <input type="file" name="image" id="image">
                                <input type="hidden" name="e_image" id="e_image">
                              </div>
                              <div class="col-md-4">
                                <label class="col-md-12 col-form-label mini-text">Skala Prioritas</label>
                                <!-- <input type="text" name="prioritas" id="prioritas" class="form-control" placeholder="Prioritas" required> -->
                                <select name="prioritas" id="prioritas" class="form-control" style="width: 100%" required>
                                  <option value="">Pilih Prioritas</option>
                                  <option value="tinggi">Tinggi</option>
                                  <option value="sedang">Sedang</option>
                                  <option value="rendah">Rendah</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Harga Satuan</label>
                                <input type="text" name="hs" id="hs" class="form-control" placeholder="Harga Satuan" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Spesifikasi</label>
                                <input type="text" name="spesifikasi" id="spesifikasi" class="form-control" placeholder="Merk, Ukuran, Rincian, dll" required>
                              </div>
                              <!-- <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Upload Bukti Harga</label>
                                <input type="file" name="upload_harga" id="upload_harga" class="form-control" >
                              </div>
                               -->
                             
                              
                              <div class="col-md-10">
                                <label class="col-md-12 col-form-label mini-text">Catatan</label>
                                <textarea name="catatan" id="catatan" cols="40" rows="3" class="form-control"></textarea>
                                
                              </div>
                              <?php  if($tahun == 2024 && ($id_user == 54 ||$id_user == 57 )){?>
                                <div class="col-md-2">
                                  <label class="col-md-12 col-form-label mini-text mt-03"> </label>
                                  <button type="submit" type="submit" id="btn_save_brg_temp_pengadaan" class="btn btn-primary"><i class="fas fa-add"></i> Tambah Usulan</button>
                                </div>
                              <?php } ?>
                               <?php if($tahun> 2024){ ?>
                       
                                <div class="col-md-2">
                                  <label class="col-md-12 col-form-label mini-text mt-03"> </label>
                                  <button type="submit" type="submit" id="btn_save_brg_temp_pengadaan" class="btn btn-primary"><i class="fas fa-add"></i> Tambah Usulan</button>
                                </div>
                              <?php } ?>
                            </div>
                        </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                  <div class="modal-body">
                  <table class="table table-striped" id="DetailPengadaantempTable" style="min-width:100% !important;">
                    <thead>
                       <tr>
                        <th>Nama Program</th>
                        <th>Nama Kegiatan</th>
                        <th>Nama Subkegiatan</th>
                        <th>Nama Uraian</th>
                        <th>Nama Barang</th>
                        <th>Kuantitas</th>
                        <th>Harga</th>
                        <th>Total harga</th>
                        <th>Prioritas</th>
                        <th>Catatan</th>
                        <th>Dokumen Pendukung</th>
                        <th>Aksi</th>
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
