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
            <h1 class="m-0">Kamus Indikator</h1>
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
                    <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_modal"><span class="fa fa-plus"></span> Tambah Kamus</a>
                    
              </div>
   
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-striped table-bordered" id="PenggunaTable" width="100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Indikator</th>
                          <th>Periode Pelaporan</th>
                          <th>Penanggung Jawab</th>
                          <th>Pengumpul Data</th>
                          <th>Target Tahunan</th>
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
            <div class="modal fade" id="Add_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form id="form-tambah-pengguna" method="POST">            
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kamus</h5>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" name="btn-batal-pengguna" id="btn-batal-pengguna">
                      <i class="fa fa-window-close" aria-hidden="true"></i>  
                    </button>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row">
                              <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Nama Indikator</label>
                                <input type="text" name="nama_indikator" id="nama_indikator" class="form-control js-data-example-basic-multiple"  placeholder="Nama Indikator" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Perspektif</label>
                                <select name="perspektif" id="perspektif" class="form-control">
                                  <option >- Pilih Perspektif -<option>
                                  <option value="stakeholder">Stakeholder<option>
                                  <option value="finansial">Finansial<option>
                                  <option value="Proses Bisnis Internal">Proses Bisnis Internal<option>
                                  <option value="Pengembangan Personil & Organisasi">Pengembangan Personil & Organisasi<option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Sasaran Strategis</label>
                                <input type="text" name="sas_stra" id="sas_stra" class="form-control" placeholder="Sasaran Strategis"  required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Bobot KPI(%)</label>
                                <input type="text" name="bobot" id="bobot" class="form-control" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Alasan Memilih Indikator</label>
                              <input type="checkbox" name="alasan" id="alasan"  value="High Risk"> High Risk 
                                <input type="checkbox" name="alasan" id="alasan"  value="High Cost" >
                                High Cost
                                <input type="checkbox" name="alasan" id="alasan" value="High Volume" >High Volume
                                <input type="checkbox" name="alasan" id="alasan" value="Bad Performance" >Bad Performance
                              </div>
                               <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Definisi</label>
                                <textarea name="definisi" id="definisi" class="form-control"></textarea>                            </div>
                             
                              <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Numerator</label>
                                <input type="text" name="numerator" id="numerator" class="form-control" placeholder="numerator" required>
                              </div>
                              
                              <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Denumerator</label>
                                <input type="text" name="denumerator" id="denumerator" class="form-control" placeholder="Denumerator" required>
                              </div>
                               <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Formula</label>
                                <textarea name="formula" id="formula" class="form-control"></textarea>                            </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Kriteria Inklusi</label>
                                <input type="text" name="inklusi" id="inklusi" class="form-control" placeholder="inklusi" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Kriteria Eksklusi</label>
                                <input type="text" name="eksklusi" id="eksklusi" class="form-control" placeholder="Eksklusi" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Tipe Indikator</label>
                               <input type="radio" name="tipe_indikator" id="tipe_indikator" value="Struktur" > Struktur
                                <input type="radio" name="tipe_indikator" id="tipe_indikator" value="Outcome" >
                                Outcome
                               <input type="radio" name="tipe_indikator" id="tipe_indikator" value="Proses"> Proses
                                <input type="radio" name="tipe_indikator" id="tipe_indikator"  value="Proses & Outcome">
                                Proses & Outcome
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Sumber Data</label>
                                <input type="text" name="sumber_data" id="sumber_data" class="form-control" placeholder="Sumber Data" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Sampel</label>
                                <input type="radio" name="sampel" id="sampel" value="Ya" > Ya
                                <input type="radio" name="sampel" id="sampel"  value="Tidak">
                                Tidak
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Rencana Analisis</label>
                                <input type="text" name="rencana_analisis" id="rencana_analisis" class="form-control" placeholder="Rencana Analisis" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Wilayah Pengamatan</label>
                                <input type="text" name="wilayah" id="wilayah" class="form-control" placeholder="Wilayah Pengamatan" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Metode Pengumpulan Data</label>
                                <input type="radio" name="metode" id="metode" value="Restrospektif" > Restrospektif
                                <input type="radio" name="metode" id="metode" value="Concurrent" >
                                Concurrent
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Penanggung Jawab Indikator</label>
                                <input type="text" name="PJ" id="PJ" class="form-control" placeholder="Penanggung Jawab Indikator" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Pengumpul Data Indikator</label>
                                <input type="text" name="pengumpul_data" id="pengumpul_data" class="form-control" placeholder="Pengumpul Data indikator" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Frekuensi Penilaian Data</label>
                                <input type="text" name="frekuensi" id="frekuensi" class="form-control" placeholder="Frekuensi Penilaian Data" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Periode Pelaporan</label>
                                <input type="text" name="periode" id="periode" class="form-control" placeholder="Periode Pelaporan" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Rencana Penyebaran</label>
                                <input type="text" name="rencana" id="rencana" class="form-control" placeholder="Rencana Penyebaran" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Formulir Pengumpulan Data</label>
                                <input type="text" name="formulir" id="formulir" class="form-control" placeholder="Formulir Pengumpulan Data" required>
                              </div>
                               <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">User</label>
                                <input type="text" name="user" id="user" class="form-control" placeholder="Nama User" required>
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
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2023</label>
                                <input type="text" name="t1" id="t1" class="form-control" placeholder="Target Capaian 2023" required>
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2024</label>
                                <input type="text" name="t2" id="t2" class="form-control" placeholder="Target Capaian 2024" required>
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2025</label>
                                <input type="text" name="t3" id="t3" class="form-control" placeholder="Target Capaian 2025" required>
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2026</label>
                                <input type="text" name="t4" id="t4" class="form-control" placeholder="Target Capaian 2026" required>
                              
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2027</label>
                                <input type="text" name="t5" id="t5" class="form-control" placeholder="Target Capaian 2025" required>
                              </div>
                              
                             
                              
                              
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Tambah Kamus</button> 
                            
                          </div>
                        </form>
                 
                  
                </div>
              </div>
            </div>
         
        <!--MODAL EDIT-->
        <form id="form-edit-pengguna">           
          <div class="modal fade" id="Modal_Edit_Kamus"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kamus</h5>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" name="btn-batal-pengguna" id="btn-batal-pengguna">
                      <i class="fa fa-window-close" aria-hidden="true"></i>  
                    </button>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row">
                              <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Nama Indikator</label>
                                <input type="text" name="e_nama_indikator" id="e_nama_indikator" class="form-control js-data-example-basic-multiple"  placeholder="Nama Indikator" required>
                                <input type="hidden" name="e_id_kamus" id="e_id_kamus" class="form-control js-data-example-basic-multiple"  placeholder="Nama Indikator" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Perspektif</label>
                                <select name="e_perspektif" id="e_perspektif" class="form-control">
                                  <option >- Pilih Perspektif -<option>
                                  <option value="Stakeholder">Stakeholder<option>
                                  <option value="Finansial">Finansial<option>
                                  <option value="Proses_Bisnis_Internal">Proses Bisnis Internal<option>
                                  <option value="Pengembangan_Personil_&_Organisasi">Pengembangan Personil & Organisasi<option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Sasaran Strategis</label>
                                <input type="text" name="e_sas_stra" id="e_sas_stra" class="form-control" placeholder="Sasaran Strategis"  required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Bobot KPI(%)</label>
                                <input type="text" name="e_bobot" id="e_bobot" class="form-control" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Alasan Memilih Indikator</label>
                              <input type="checkbox" name="e_alasan" id="e_alasan" value="High Risk"> High Risk 
                                <input type="checkbox" name="e_alasan" id="e_alasan"  value="High Cost">
                                High Cost
                                <input type="checkbox" name="e_alasan" id="e_alasan"  value="High Volume">High Volume
                                <input type="checkbox" name="e_alasan" id="e_alasan"  value="Bad Performance">Bad Performance
                              </div>
                               <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Definisi</label>
                                <textarea name="e_definisi" id="e_definisi" class="form-control"></textarea>                            </div>
                             
                              <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Numerator</label>
                                <input type="text" name="e_numerator" id="e_numerator" class="form-control" placeholder="numerator" required>
                              </div>
                              
                              <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Denumerator</label>
                                <input type="text" name="e_denumerator" id="e_denumerator" class="form-control" placeholder="Denumerator" required>
                              </div>
                               <div class="col-md-12">
                                <label class="col-md-12 col-form-label mini-text">Formula</label>
                                <textarea name="e_formula" id="e_formula" class="form-control"></textarea>                            </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Kriteria Inklusi</label>
                                <input type="text" name="e_inklusi" id="e_inklusi" class="form-control" placeholder="inklusi" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Kriteria Eksklusi</label>
                                <input type="text" name="e_eksklusi" id="e_eksklusi" class="form-control" placeholder="Eksklusi" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Tipe Indikator</label>
                               <input type="radio" name="e_tipe_indikator" id="e_tipe_indikator" > Struktur
                                <input type="radio" name="e_tipe_indikator" id="e_tipe_indikator"  >
                                Outcome
                               <input type="radio" name="e_tipe_indikator" id="e_tipe_indikator" > Proses
                                <input type="radio" name="e_tipe_indikator" id="e_tipe_indikator"  >
                                Proses & Outcome
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Sumber Data</label>
                                <input type="text" name="e_sumber_data" id="e_sumber_data" class="form-control" placeholder="Sumber Data" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Sampel</label>
                                <input type="radio" name="e_sampel" id="e_sampel" > Ya
                                <input type="radio" name="e_sampel" id="e_sampel"  >
                                Tidak
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Rencana Analisis</label>
                                <input type="text" name="e_rencana_analisis" id="e_rencana_analisis" class="form-control" placeholder="Rencana Analisis" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Wilayah Pengamatan</label>
                                <input type="text" name="e_wilayah" id="e_wilayah" class="form-control" placeholder="Wilayah Pengamatan" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Metode Pengumpulan Data</label>
                                <input type="radio" name="e_metode" id="e_metode" > Restrospektif
                                <input type="radio" name="e_metode" id="e_metode"  >
                                Concurrent
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Penanggung Jawab Indikator</label>
                                <input type="text" name="e_PJ" id="e_PJ" class="form-control" placeholder="Penanggung Jawab Indikator" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Pengumpul Data Indikator</label>
                                <input type="text" name="e_pengumpul_data" id="e_pengumpul_data" class="form-control" placeholder="Pengumpul Data indikator" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Frekuensi Penilaian Data</label>
                                <input type="text" name="e_frekuensi" id="e_frekuensi" class="form-control" placeholder="Frekuensi Penilaian Data" required>
                              </div>
                              
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Periode Pelaporan</label>
                                <input type="text" name="e_periode" id="e_periode" class="form-control" placeholder="Periode Pelaporan" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Rencana Penyebaran</label>
                                <input type="text" name="e_rencana" id="e_rencana" class="form-control" placeholder="Rencana Penyebaran" required>
                              </div>
                              <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">Formulir Pengumpulan Data</label>
                                <input type="text" name="e_formulir" id="e_formulir" class="form-control" placeholder="Formulir Pengumpulan Data" required>
                              </div>
                               <div class="col-md-6">
                                <label class="col-md-12 col-form-label mini-text">User</label>
                                <input type="text" name="e_user" id="e_user" class="form-control" placeholder="Nama User" required>
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
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2023</label>
                                <input type="text" name="e_t1" id="e_t1" class="form-control" placeholder="Target Capaian 2023" required>
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2024</label>
                                <input type="text" name="e_t2" id="e_t2" class="form-control" placeholder="Target Capaian 2024" required>
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2025</label>
                                <input type="text" name="e_t3" id="e_t3" class="form-control" placeholder="Target Capaian 2025" required>
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2026</label>
                                <input type="text" name="e_t4" id="e_t4" class="form-control" placeholder="Target Capaian 2026" required>
                              
                              </div>
                              <div class="col-md-3">
                                <label class="col-md-12 col-form-label mini-text">Target Capaian 2027</label>
                                <input type="text" name="e_t5" id="e_t5" class="form-control" placeholder="Target Capaian 2025" required>
                              </div>
                             
                              
                              
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Edit Kamus</button> 
                            
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
		<?php $this->load->view("admin/_js/jskamus.php") ?>


</html>
