<!-- Halaman Pengadaan  -->
<script type="text/javascript">

$(document).ready(function(){

         $('#grup').select2({'width': '-webkit-fill-available'});
         $('#status').select2({'width': '-webkit-fill-available'});
         $('#jenis').select2({'width': '-webkit-fill-available'});
      
      
        ptable = $('#PenggunaTable').DataTable( {
            'processing'	: true,
            'scrollX'   :true,
            //'serverSide'	: true,
            'responsive': true, 
            ajax:{
                url   : '<?php echo base_url('Master/ambil_pengguna')?>',
                dataSrc : function(response){
                  var row = new Array();
                  // console.log(response);
                  var i = 1;
                  var button;
                  var hitung = response.data.length;
                    if (hitung>0) {
                      for(var x in response.data){
                        button = '<button onClick="BukaEditPengguna('+response.data[x].id_user+')" name="btn_edit" class="btn btn-warning" title="Edit Data Pengguna"><i class="fas fa-edit"></i></button>';
                       
                        row.push({
                          'no'            : i,
                          'nama_user'     : response.data[x].nama_user,
                          'username'      : response.data[x].username,
                          'id_grup'          : response.data[x].id_grup,
                          'id_jenis'        : response.data[x].id_jenis,
                          'status'        : response.data[x].status,
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
              {'data': 'nama_user'},
              {'data': 'username'},
              {'data': 'id_grup'},              
              {'data': 'id_jenis'},              
              {'data': 'status'},              
              {'data': 'aksi'}
              
             ],
                 
        } );

          ambilgrup();
        ambilstatus();
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
                    url  : "<?php echo base_url('Master/save_pengguna')?>",
                    data : data,
                    success: function(response){
                       //console.log(response.data);
                        
                        $('[name="unit_kerja"]').val("");
                        $('[name="ukl"]').val("");
                        $('[name="username"]').val("");
                        $('[name="pass"]').val("");
                        $('[name="bidang"]').val("");
                        $('[name="direksi"]').val("");
                        ptable.ajax.reload(null,false);
                        tata.success('Sukses', 'User Berhasil Ditambah .. ', 
                        {
                            duration: 3000
                        })
                   
                
                        
                        //$('#Modal_Edit').modal('hide');
                    }, 
                    error: function(response){
                        console.log(response);
                        tata.error('Gagal', 'User Gagal ditambah ', {
                            duration: 3000
                        })
                    }
                             
                });
                $('#Modal_Add').modal('hide');
      
                return false;   
                           
            })
            function BukaEditPengguna(id){
           //console.log(id);
            $.ajax({
                type:"POST",
                url  : "<?php echo base_url('Master/get_id_pengguna')?>",
                dataType : "JSON",
                data : {id:id},
                        success: function(data){
                            console.log(data[0]);
                                                
                            $('#e_id_user').val(data[0].id_user);
                            $('#e_unit_kerja').val(data[0].unit_kerja);
                            $('#e_ukl').val(data[0].unit_kerja_lengkap);
                            $('#e_username').val(data[0].username);
                            $('#e_pass').val(data[0].password);
                            $('#e_role').val(data[0].role);
                            $('#e_blokir').val(data[0].isblokir);
                            $('#e_bidang').val(data[0].bidang);
                            $('#e_direksi').val(data[0].direksi);
                            
                            $('#Modal_Edit_Pengguna').modal('show');
                            
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
                    url  : "<?php echo base_url('Master/update_pengguna')?>",
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
                        $('#Modal_Edit_Pengguna').modal('hide');
                
                        
                        //$('#Modal_Edit').modal('hide');
                    }, 
                    error: function(response){
                        console.log(response);
                        tata.error('Gagal', 'Data Gagal diubah ', {
                            duration: 3000
                        })
                    }
                             
                });
                $('#Modal_Add').modal('hide');
      
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
                                $('#Modal_Add #grup').append(
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
                      $('#jenis').empty();

                        $('#jenis').append('<option value="0">- Pilih Jenis Kelompok -</option>');
                        
                        $.each(response.data, function(key,value){
                                $('#jenis').append(
                                    $('<option></option>').val(value['id']).html(value['nama'])
                                );
                        });        
                        }
            });
            };
       

  </script>    
