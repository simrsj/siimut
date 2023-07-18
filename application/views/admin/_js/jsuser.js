$(document).ready(function(){
      
          
        ptable = $('#PenggunaTable').DataTable( {
            'processing'	: true,
            'scrollX'   :true,
            //'serverSide'	: true,
            ajax:{
                url   : '<?php echo base_url('Master/ambil_pengguna')?>',
                dataSrc : function(response){
                  var row = new Array();
                  //console.log(hitung);
                  var i = 1;
                  var button;
                  var hitung = response.data.length;
                    if (hitung>0) {
                      for(var x in response.data){
                        button = '<button onClick="BukaEditPengguna('+response.data[x].id_user+')" name="btn_edit" class="btn btn-warning btn-xs btn-flat" title="Edit Data Pengguna"><i class="fas fa-edit"></i></button>';
                       
                        row.push({
                          'no'                : i,
                          'nama_user'        : response.data[x].nama_user,
                          'username'     : response.data[x].username,
                          'role'    : response.data[x].id_grup,
                          'bagian'    : response.data[x].isblokir,
                          'status'     : response.data[x].status,
                          'aksi'              : button
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
              {'data': 'role'},              
              {'data': 'bagian'},              
              {'data': 'status','render':
                  function (data, type, full) {
                      if(full.id_jenis == 0 ){
                          return "<span class='badge badge-info'>Akses Dibuka</span>";
                        }else{
                            
                            return "<span class='badge badge-danger'>diblokir</span>";
                      }
                  //  return "<p> "+full.nama_barang +"<br> Spesifikasi : "+ full.spesifikasi;
                }},              
              {'data': 'aksi'}
              
             ],
             columnDefs: [ 
                    {  targets: 0, width: '5%' }, 
                    {  targets: 1, width: '35%' }, 
                    {  targets: 2, width: '15%' },                   
                    {  targets: 3, width: '10%' }, 
                    {  targets: 4, width: '10%' }, 
                    {  targets: 5, width: '10%' }, 
                    {  targets: 6, width: '10%' }, 
                
                
                 ] ,
                 
        } );
    });
