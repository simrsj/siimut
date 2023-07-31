<!-- Halaman Pengadaan  -->
<script type="text/javascript">

$(document).ready(function(){

         $('#jenis2').select2({dropdownParent: $('#Modal_Add')});
       
       
        ptable = $('#PenggunaTable').DataTable( {
            'processing'	: true,
            'scrollX'   :true,
            //'serverSide'	: true,
            'responsive': true, 
            ajax:{
                url   : '<?php echo base_url('Master/ambil_kamus')?>',
                dataSrc : function(response){
                  var row = new Array();
                  // console.log(response);
                  var i = 1;
                  var button;
                  var hitung = response.data.length;
                    if (hitung>0) {
                      for(var x in response.data){
                        button = '<button onClick="BukaRealisasi('+response.data[x].id_kamus+')" name="btn_edit" class="btn btn-outline-info btn-block btn-sm" title="Edit Kamus"><i class="fa fa-cog" aria-hidden="true"></i>';
                       
                        row.push({
                          'no'            : i,
                          'nama_indikator'     : response.data[x].nama_indikator,
                          'nama_indikator'     : response.data[x].nama_indikator,
                          'penanggung_jawab'     : response.data[x].penanggung_jawab,
                          'pengumpul_data'        : response.data[x].pengumpul_data,
                          'aksi'          : button
                        });
                        i = i + 1;
                      }
                              
                      response.data = row;
                      return row;
                    } else{
                      response.draw = 0;
                      return [];
                    }
                }
            },
            columns : [ 
              {'data': 'no'},
              {'data': 'nama_indikator'},
              {'data': 'nama_indikator'},
              {'data': 'penanggung_jawab'},              
              {'data': 'pengumpul_data'},             
              {'data': 'aksi'}
              
             ],
                 
        } );
        ambiljenis();
    });
     //Save Pengguna
            $('#form-tambah-pengguna').submit(function() {
           // console.log('xx');
                var data =$('#form-tambah-pengguna').serialize();
            
                //tambah
                // die;
             //  console.log(data);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('Master/save_kamus')?>",
                    data : data,
                    success: function(response){
                       //console.log(response.data);
                        
                        // $('[name="unit_kerja"]').val("");
                        // $('[name="ukl"]').val("");
                        // $('[name="username"]').val("");
                        // $('[name="pass"]').val("");
                        // $('[name="bidang"]').val("");
                        // $('[name="direksi"]').val("");
                        ptable.ajax.reload(null,false);
                        tata.success('Sukses', 'Kamus Berhasil Ditambah .. ', 
                        {
                            duration: 3000
                        })
                   
                
                        
                        //$('#Modal_Edit').modal('hide');
                    }, 
                    error: function(response){
                        console.log(response);
                        tata.error('Gagal', 'Kamus Gagal ditambah ', {
                            duration: 3000
                        })
                    }
                             
                });
                $('#Modal_Add').modal('hide');
      
                return false;   
                           
            })
               function BukaInfoKamus(id){
           //console.log(id);
            $.ajax({
                type:"POST",
                url  : "<?php echo base_url('Master/get_id_kamus')?>",
                dataType : "JSON",
                data : {id:id},
                        success: function(data){
                            // console.log(data[0]);
                                                
                            $('#e_id_kamus').val(data[0].id_kamus);
                            $('#e_nama_indikator').val(data[0].nama_indikator);
                            $('#e_perspektif').val(data[0].perspektif);
                            $('#e_sas_stra').val(data[0].sasaran_strategis);
                            $('#e_bobot').val(data[0].bobot_kpi);
                            $('#e_alasan').val(data[0].alasan);
                            $('#e_definisi').val(data[0].definisi);
                            $('#e_numerator').val(data[0].numerator);
                            $('#e_denumerator').val(data[0].denumerator);
                            $('#e_formula').val(data[0].formula);
                            $('#e_inklusi').val(data[0].inklusi);
                            $('#e_ekslusi').val(data[0].ekslusi);
                            $('#e_tipe_indikator').val(data[0].tipe_indikator);
                            $('#e_sumber_data').val(data[0].sumber_data);
                            $('#e_sampel').val(data[0].sampel);
                            $('#e_rencana_analisis').val(data[0].rencana_analisis);
                            $('#e_wilayah').val(data[0].wilayah_pengamatan);
                            $('#e_metode').val(data[0].metode_pengumpulan);
                            $('#e_PJ').val(data[0].penanggung_jawab);
                            $('#e_pengumpul_data').val(data[0].pengumpul_data);
                            $('#e_frekuensi').val(data[0].frekuensi);
                            $('#e_periode').val(data[0].periode_pelaporan);
                            $('#e_rencana').val(data[0].rencana_penyebaran);
                            $('#e_formulir').val(data[0].formulir_pengumpulan);
                            $('#e_t1').val(data[0].target_ke_n);
                            $('#e_t2').val(data[0].target_ke_n1);
                            $('#e_t3').val(data[0].target_ke_n2);
                            $('#e_t4').val(data[0].target_ke_n3);
                            $('#e_t5').val(data[0].target_ke_n4);
                            $('#e_user').val(data[0].id_user);
                            $('#e_jenis').val(data[0].id_jenis);

                                      
                            $('#Modal_Edit_Kamus').modal('show');
                            
                        }
                    });
            return false;

            
        }
            function BukaRealisasi(id){
           //console.log(id);
            $.ajax({
                type:"POST",
                url  : "<?php echo base_url('Master/get_id_kamus')?>",
                dataType : "JSON",
                data : {id:id},
                        success: function(data){
                            // console.log(data[0]);
                                                
                            $('#e_id_kamus').val(data[0].id_kamus);
                            $('#e_nama_indikator').val(data[0].nama_indikator);
                            $('#e_perspektif').val(data[0].perspektif);
                            $('#e_sas_stra').val(data[0].sasaran_strategis);
                            $('#e_bobot').val(data[0].bobot_kpi);
                            $('#e_alasan').val(data[0].alasan);
                            $('#e_definisi').val(data[0].definisi);
                            $('#e_numerator').val(data[0].numerator);
                            $('#e_denumerator').val(data[0].denumerator);
                            $('#e_formula').val(data[0].formula);
                            $('#e_inklusi').val(data[0].inklusi);
                            $('#e_ekslusi').val(data[0].ekslusi);
                            $('#e_tipe_indikator').val(data[0].tipe_indikator);
                            $('#e_sumber_data').val(data[0].sumber_data);
                            $('#e_sampel').val(data[0].sampel);
                            $('#e_rencana_analisis').val(data[0].rencana_analisis);
                            $('#e_wilayah').val(data[0].wilayah_pengamatan);
                            $('#e_metode').val(data[0].metode_pengumpulan);
                            $('#e_PJ').val(data[0].penanggung_jawab);
                            $('#e_pengumpul_data').val(data[0].pengumpul_data);
                            $('#e_frekuensi').val(data[0].frekuensi);
                            $('#e_periode').val(data[0].periode_pelaporan);
                            $('#e_rencana').val(data[0].rencana_penyebaran);
                            $('#e_formulir').val(data[0].formulir_pengumpulan);
                            $('#e_t1').val(data[0].target_ke_n);
                            $('#e_t2').val(data[0].target_ke_n1);
                            $('#e_t3').val(data[0].target_ke_n2);
                            $('#e_t4').val(data[0].target_ke_n3);
                            $('#e_t5').val(data[0].target_ke_n4);
                            $('#e_user').val(data[0].id_user);
                            $('#e_jenis').val(data[0].id_jenis);

                            
                            $('#Modal_Add').modal('show');
                            
                        }
                    });
            return false;

            
        }
            $('#form-edit-pengguna').submit(function() {
           // console.log('xx');
                var data =$('#form-edit-pengguna').serialize();
            
                //tambah
                // die;
             //  console.log(data);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('Master/update_kamus')?>",
                    data : data,
                    success: function(response){
                       //console.log(response.data);
                        
                        $('[name="e_id"]').val("");
                        $('[name="e_unit_kerja"]').val("");
                        $('[name="e_ukl"]').val("");
                        $('[name="e_username"]').val("");
                        $('[name="e_pass"]').val("");
                        $('[name="e_bidang"]').val("");
                        $('[name="e_direksi"]').val("");
                        ptable.ajax.reload(null,false);
                        tata.success('Sukses', 'Data Berhasil Berubah .. ', {
                            duration: 3000
                        })
                        $('#Modal_Edit_Kamus').modal('hide');
                
                        
                        //$('#Modal_Edit').modal('hide');
                    }, 
                    error: function(response){
                        console.log(response);
                        tata.error('Gagal', 'Data Gagal diubah ', {
                            duration: 3000
                        })
                    }
                             
                });
                $('#Modal_Edit_Kamus').modal('hide');
      
                return false;   
                           
            });
            function ambilgrup(){
            $.ajax ({
                    // type: 'POST',
                    url: '<?php echo base_url('Master/ambil_grup')?>',
                    dataType: 'json',
                    success: function(response){
                      $('#grup').empty();

                        $('#grup').append('<option value="0">- Pilih Grup -</option>');
                        
                        $.each(response.data, function(key,value){
                                $('#grup').append(
                                    $('<option></option>').val(value['id']).html(value['name'])
                                );
                        });        
                        }
            });
            };
       
            function ambilstatus(){
            $.ajax ({
                    // type: 'POST',
                    url: '<?php echo base_url('Master/ambil_status')?>',
                    dataType: 'json',
                    success: function(response){
                      $('#status').empty();

                        $('#status').append('<option value="0">- Pilih Status -</option>');
                        
                        $.each(response.data, function(key,value){
                                $('#status').append(
                                    $('<option></option>').val(value['id']).html(value['nama_status'])
                                );
                        });        
                        }
            });
            };
            
            function ambiljenis(){
            $.ajax ({
                    // type: 'POST',
                    url: '<?php echo base_url('Master/ambil_jenis')?>',
                    dataType: 'json',
                    success: function(response){
                      $('#jenis2').empty();

                        $('#jenis2').append('<option value="0">- Pilih Jenis Kelompok -</option>');
                        
                        $.each(response.data, function(key,value){
                                $('#jenis2').append(
                                    $('<option></option>').val(value['id']).html(value['nama'])
                                );
                        });        
                        }
            });
            };
        
       

  </script>    
