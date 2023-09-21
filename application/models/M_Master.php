<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Master extends CI_Model {
	

	//private $_table = "users";

   

    public function ambil_jenis_barang(){
        
        $sql = "SELECT * FROM jenis_barang";


    	return $this->db->query($sql)->result();
        
    }
    
    public function ambil_tipe_barang(){
        
        $sql = "SELECT * FROM tipe_barang";


    	return $this->db->query($sql)->result();
        
    }
    public function ambil_program(){

        $sql = "SELECT * FROM Program where isdeleted = 0";


    	return $this->db->query($sql)->result();
        
  }
    public function ambil_uraian(){
        $data = $this->input->post();

        $sql = "SELECT * FROM Uraian WHERE isdeleted = 0 and id_jenis_belanja=".$data['id_jenis_belanja'];


    	return $this->db->query($sql)->result();
        
  }
  
    public function ambil_kegiatan(){
      $data = $this->input->post();
      $sql = "SELECT * FROM Kegiatan
                JOIN program on Kegiatan.id_program = program.id_program
                where kegiatan.isdeleted = 0 and Program.id_program =".$data['id'];


    return $this->db->query($sql)->result();
            
    }
    
    public function ambil_pengguna(){
      $data = $this->input->post();
      $sql = "SELECT * FROM Users
      LEFT JOIN m_jenis on Users.id_jenis = m_jenis.id 
      LEFT JOIN Groups on Users.id_grup = Groups.id 
      LEFT Join Status on Users.status = Status.id
      where Users.id_grup != '1'  ";


    return $this->db->query($sql)->result();
            
    }
    public function ambil_kamus(){
      $data = $this->input->post();
      $sql = "SELECT * FROM Kamus";
    return $this->db->query($sql)->result();
            
    }
    public function ambil_capaian(){
      $data = $this->input->post();
      $sql = "SELECT * FROM capaian where status = 0";
    return $this->db->query($sql)->result();
            
    }
    public function ambil_grup(){
        // var_dump("grup");
        $sql = "SELECT * FROM groups";
        return $this->db->query($sql)->result();        
    }
    public function ambil_user(){
        // var_dump("grup");
        $sql = "SELECT * FROM Users   where Users.id_grup != '1' ";
        return $this->db->query($sql)->result();        
    }
    public function ambil_status(){
        // var_dump("grup2");
        $sql = "SELECT * FROM status";
        return $this->db->query($sql)->result();        
    }
    public function ambil_jenis(){
        // var_dump("grup3");
      $sql = "SELECT * FROM m_jenis";
        return $this->db->query($sql)->result();        
    }

  
	public function insert()
	{
		$post = $this->input->post();
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->bio = $post["bio"];
        $this->hobby = $post["hobby"];
        $this->gender = $post["gender"];
        $this->password = $post["password"];
        $this->picture = $this->UploadImage();
        
        $this->db->insert($this->_table,$this);
 	}
 	public function check_login($user,$pass)
 	{
 		
 		$this->db->select('*');
 		$this->db->from($this->_table);
 		$this->db->where('username',$user);
 		$this->db->where('password',$pass);

 		return $this->db->get();
 	}

 	public function getById($id_user)
 	{
 		return $this->db->get_where($this->_table,["id_user" =>$id_user])->row();
 	}

 	public function update(){
 		$post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->bio = $post["bio"];
        $this->hobby = $post["hobby"];
        $this->gender = $post["gender"];
        
        if($post["password"]!=NULL){
        	$this->password = $post["password"];
        }else{
        	$this->password = $post["old_password"];
        }

        if(!empty($_FILES["picture"]["name"])){
        	$this->picture = $this->UploadImage();

        }else{
        	$this->picture = $post['old_picture'];

        }
        $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
    
 	}

 	private function UploadImage(){
 		$date = new DateTime();
	    $now =  $date->format('U');
 		
 		$config['upload_path']          = './assets/img_profile/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $new_name = $now.$_FILES['picture']['name'];
        $config['file_name']           = $new_name;
        
		$this->load->library('upload', $config);
 		
 		$path          = '../assets/img_profile/';
  		
		if ($this->upload->do_upload('picture')){
	
			$data = array('upload_data' => $this->upload->data());
			$return = $path . $new_name;
			return $return;
		}

		$return =  $path. "default.jpg";
		return $return;
	
 	}
    

    public function save_pengguna()
    {
        // var_dump($id);die;
        $post = $this->input->post();
        // var_dump($post);die;
        
        
        $this->nama_user = $post["nama_user"];
        $this->id_grup = $post["grup"];
        $this->username = $post["username"];
        $this->password = md5($post["pass"]);
        $this->id_jenis = $post["jenis"];
        $this->nama_pic = $post["namapic"];
        $this->kontak_pic = $post["kontakpic"];
        $this->parent = $post["parent"];
        $this->email = $post["email"];
        $this->status = $post["status"];
        $this->isdeleted = 0;
        $this->create_at = date('Y-m-d');
        $this->modified_at = '';
        $this->delete_at = '';
        // $this->keterangan = $post["keterangan"];
      // $this->session_id = $this->session->session_id();
        // //$this->datetime = $date->format('Y-m-d H:i:s');
        $this->db->insert('users', $this);
    }
    public function get_id_pengguna()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $sql = "SELECT * FROM Users 
        JOIN Groups on Users.id_grup = Groups.id 
                where Users.id_user = ".$id;


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
     public function get_id_kamus()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $sql = "SELECT * FROM Kamus 
                where Kamus.id_kamus = ".$id;


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function update_kamus()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        $this->nama_indikator = $post["e_nama_indikator"];
        $this->perspektif = $post["e_perspektif"];
        $this->sasaran_strategis = $post["e_sas_stra"];
        $this->bobot_kpi = $post["e_bobot"];
        $this->alasan = $post["e_alasan"];
        $this->definisi = $post["e_definisi"];
        $this->numerator = $post["e_numerator"];
        $this->denumerator = $post["e_denumerator"];
        $this->formula = $post["e_formula"];
        $this->inklusi = $post["e_inklusi"];
        $this->eksklusi = $post["e_eksklusi"];
        $this->tipe_indikator = $post["e_tipe_indikator"];
        $this->sumber_data = $post["e_sumber_data"];
        $this->sampel = $post["e_sampel"];
        $this->rencana_analisis = $post["e_rencana_analisis"];
        $this->wilayah_pengamatan = $post["e_wilayah"];
        $this->metode_pengumpulan = $post["e_metode"];
        $this->penanggung_jawab = $post["e_PJ"];
        $this->pengumpul_data = $post["e_pengumpul_data"];
        $this->frekuensi = $post["e_frekuensi"];
        $this->periode_pelaporan = $post["e_periode"];
        $this->rencana_penyebaran = $post["e_rencana"];
        $this->formulir_pengumpulan = $post["e_formulir"];
        $this->target_ke_n = $post["e_t1"];
        $this->target_ke_n1 = $post["e_t2"];
        $this->target_ke_n2= $post["e_t3"];
        $this->target_ke_n3 = $post["e_t4"];
        $this->target_ke_n4= $post["e_t5"];
        $this->id_user = $post["e_user"];
        $this->id_jenis = $post["e_jenis"];
        
        $this->db->where('id_kamus',$post["e_id_kamus"]);
        $this->db->update('kamus', $this);
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
      public function save_kamus()
    {
        // var_dump($id);die;
        $post = $this->input->post();
        //  var_dump($post);die;
        
        
        $this->nama_indikator = $post["nama_indikator"];
        $this->perspektif = $post["perspektif"];
        $this->sasaran_strategis = $post["sas_stra"];
        $this->bobot_kpi = $post["bobot"];
        $this->alasan = $post["alasan"];
        $this->definisi = $post["definisi"];
        $this->numerator = $post["numerator"];
        $this->denumerator = $post["denumerator"];
        $this->formula = $post["formula"];
        $this->inklusi = $post["inklusi"];
        $this->eksklusi = $post["eksklusi"];
        $this->tipe_indikator = $post["tipe_indikator"];
        $this->sumber_data = $post["sumber_data"];
        $this->sampel = $post["sampel"];
        $this->rencana_analisis = $post["rencana_analisis"];
        $this->wilayah_pengamatan = $post["wilayah"];
        $this->metode_pengumpulan = $post["metode"];
        $this->penanggung_jawab = $post["PJ"];
        $this->pengumpul_data = $post["pengumpul_data"];
        $this->frekuensi = $post["frekuensi"];
        $this->periode_pelaporan = $post["periode"];
        $this->rencana_penyebaran = $post["rencana"];
        $this->formulir_pengumpulan = $post["formulir"];
        $this->target_ke_n = $post["t1"];
        $this->target_ke_n1 = $post["t2"];
        $this->target_ke_n2= $post["t3"];
        $this->target_ke_n3 = $post["t4"];
        $this->target_ke_n4= $post["t5"];
        $this->id_user = $post["user"];
        $this->id_jenis = $post["jenis"];
      
        // $this->keterangan = $post["keterangan"];
      // $this->session_id = $this->session->session_id();
        // //$this->datetime = $date->format('Y-m-d H:i:s');
        $this->db->insert('kamus', $this);
    }
    public function save_program()
    {
        // var_dump($id);die;
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_program = $post["kodering_program"];
        $this->nama_program = $post["nama_program"];
        $this->isdeleted = 0;
        $this->id_urusan = 1;
        // $this->keterangan = $post["keterangan"];
      // $this->session_id = $this->session->session_id();
        // //$this->datetime = $date->format('Y-m-d H:i:s');
        $this->db->insert('program', $this);
    }
    public function get_id_program()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $sql = "SELECT * FROM Program 
                where Program.id_program = ".$id;


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function update_program()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_program = $post["e_kodering_program"];
        $this->nama_program = $post["e_nama_program"];
        $this->isdeleted = 0;
        $this->id_urusan = 1;


        $this->db->where('id_program',$post["e_id_program"]);
        $this->db->update('program', $this);
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function save_kegiatan()
    {
        // var_dump($id);die;
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_kegiatan = $post["kodering_kegiatan"];
        $this->nama_kegiatan = $post["nama_kegiatan"];
        $this->id_program = $post["id_program"];
        $this->isdeleted = 0;
        // $this->keterangan = $post["keterangan"];
      // $this->session_id = $this->session->session_id();
        // //$this->datetime = $date->format('Y-m-d H:i:s');
        $this->db->insert('kegiatan', $this);
    }
    public function get_id_kegiatan()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $sql = "SELECT * FROM kegiatan 
                JOIN program on kegiatan.id_program = program.id_program
                where kegiatan.id_kegiatan = ".$id;


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function update_kegiatan()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_kegiatan = $post["e_kodering_kegiatan"];
        $this->nama_kegiatan = $post["e_nama_kegiatan"];
        $this->id_program = $post["e_id_program"];
        $this->isdeleted = 0;
       
        $this->db->where('id_kegiatan',$post["e_id_kegiatan"]);
        $this->db->update('kegiatan', $this);
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function save_subkegiatan()
    {
        // var_dump($id);die;
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_subkegiatan = $post["kodering_subkegiatan"];
        $this->nama_subkegiatan = $post["nama_subkegiatan"];
        $this->id_kegiatan = $post["id_kegiatan"];
        $this->isdeleted = 0;
        // $this->keterangan = $post["keterangan"];
      // $this->session_id = $this->session->session_id();
        // //$this->datetime = $date->format('Y-m-d H:i:s');
        $this->db->insert('subkegiatan', $this);
    }
    public function get_id_subkegiatan()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $sql = "SELECT * FROM Subkegiatan 
                JOIN Kegiatan on kegiatan.id_kegiatan = Subkegiatan.id_kegiatan
                JOIN program on kegiatan.id_program = program.id_program
                where Subkegiatan.id_subkegiatan = ".$id;


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function update_subkegiatan()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_subkegiatan = $post["e_kodering_subkegiatan"];
        $this->nama_subkegiatan = $post["e_nama_subkegiatan"];
        $this->id_kegiatan = $post["e_id_kegiatan"];
        $this->isdeleted = 0;
       
        $this->db->where('id_subkegiatan',$post["e_id_subkegiatan"]);
        $this->db->update('subkegiatan', $this);
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function save_uraian()
    {
        // var_dump($id);die;
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_uraian = $post["kodering_uraian"];
        $this->nama_uraian = $post["nama_uraian"];
        $this->isdeleted = 0;
        // $this->keterangan = $post["keterangan"];
      // $this->session_id = $this->session->session_id();
        // //$this->datetime = $date->format('Y-m-d H:i:s');
        $this->db->insert('uraian', $this);
    }
    public function get_id_uraian()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $sql = "SELECT * FROM uraian 
                where Uraian.id_uraian = ".$id;


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function update_uraian()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $this->kodering_uraian = $post["e_kodering_uraian"];
        $this->nama_uraian = $post["e_nama_uraian"];
        $this->isdeleted = 0;
       
        $this->db->where('id_uraian',$post["e_id_uraian"]);
        $this->db->update('uraian', $this);
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function tampil_program()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "SELECT * FROM Program where isdeleted = 0 and program.id_program=".$post['id'];


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function tampil_kegiatan()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "SELECT * FROM Kegiatan where isdeleted = 0 and Kegiatan.id_kegiatan=".$post['id'];


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function tampil_subkegiatan()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "SELECT * FROM Subkegiatan where isdeleted = 0 and Subkegiatan.id_subkegiatan=".$post['id'];


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function tampil_uraian()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "SELECT * FROM Uraian where isdeleted = 0 and Uraian.id_uraian=".$post['id'];


    	return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function delete_program()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "UPDATE Program 
                    SET isdeleted = 1 
                where id_program=".$post['id'];

        return $this->db->query($sql);
    	//return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function delete_kegiatan()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "UPDATE Kegiatan 
                    SET isdeleted = 1 
                where id_kegiatan=".$post['id'];

        return $this->db->query($sql);
    	//return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function delete_subkegiatan()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "UPDATE Subkegiatan 
                    SET isdeleted = 1 
                where id_subkegiatan=".$post['id'];

        return $this->db->query($sql);
    	//return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }
    public function delete_uraian()
    {
        $post = $this->input->post();
        //var_dump($post);die;
        
        
        $sql = "UPDATE Uraian 
                    SET isdeleted = 1 
                where id_uraian=".$post['id'];

        return $this->db->query($sql);
    	//return $this->db->query($sql)->result();
        
        
        // $this->db->where(["id_temp_pengadaan" => $id]);
        // return $this->db->get($this->_table)->result();
    }

 	/*setelah login*/
	
}

/* End of file log_model.php */
/* Location: ./application/models/log_model.php */