<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  public function __construct(){
		parent::__construct();
	   	$this->load->helper('url', 'form');	   	
		$this->load->database();
		$this->load->model('M_User');

		$this->load->library('session');

		/* MODEL */
		//temp_pemeliharaan
		$this->load->model('M_T_Pengadaan');
		//head_pemeliharaan
		$this->load->model('M_H_Pengadaan');
		//detail_pemeliharaan
		$this->load->model('M_D_Pengadaan');
		//Master
		$this->load->model('M_Master');
		
	}
	
	public function index()
	{
     $this->session_check();

      $id_user =  $this->session->userdata('id_user');
      $role =  $this->session->userdata('role');
      $result =  $this->M_User->getById($id_user);
	  $jenis_belanja = 2;
      if($role =='Admin'){
        $data = $this->M_H_Pengadaan->get_pengadaan_admin($jenis_belanja);
      }else{
        $data = $this->M_H_Pengadaan->get_pengadaan_user($id_user,$jenis_belanja);
        
      }
	  $data['belanjamodal'] =  $this->M_User->totalbelanjamodal($id_user,$role);
      $data['profile'] = $result;
      
      // var_dump($data);
      $this->load->view('master/index',$data);
      
    }
	function session_check(){
        if($this->session->userdata('is_login') == FALSE){
            $this->session->set_flashdata('status', 'Silahkan Login Terlebih Dahulu!  ');
			redirect('C_Home/index');
		}
    }
    public function User(){
        $this->session_check();

        $id_user =  $this->session->userdata('id_user');
        // $role =  $this->session->userdata('role');
        $result =  $this->M_User->getById($id_user);
        
        $data['profile'] = $result;
        
        
        $this->load->view('Master/User',$data);
    }
    public function Kamus(){
        $this->session_check();

        $id_user =  $this->session->userdata('id_user');
        // $role =  $this->session->userdata('role');
        $result =  $this->M_User->getById($id_user);
        
        $data['profile'] = $result;
        
        
        $this->load->view('Master/Kamus',$data);
    }
    public function ambil_pengguna(){
        $baru =  $this->M_Master->ambil_pengguna();
        $data['data']=$baru;
       echo json_encode($data);

    }
    public function ambil_kamus(){
        $baru =  $this->M_Master->ambil_kamus();
        $data['data']=$baru;
       echo json_encode($data);

    }
     public function ambil_capaian(){
        $baru =  $this->M_Master->ambil_capaian();
        $data['data']=$baru;
       echo json_encode($data);

    }
    public function ambil_grup(){
        $baru =  $this->M_Master->ambil_grup();
        $data['data']=$baru;
       echo json_encode($data);

    }
    public function ambil_status(){
        $baru =  $this->M_Master->ambil_status();
        $data['data']=$baru;
       echo json_encode($data);

    }
    public function ambil_jenis(){
        $baru =  $this->M_Master->ambil_jenis();
        $data['data']=$baru;
       echo json_encode($data);

    }
    public function ambil_program(){
        $baru =  $this->M_Master->ambil_program();
        $data['data']=$baru;
		echo json_encode($data);

    }
    public function save_pengguna(){
        $baru =  $this->M_Master->save_pengguna();
        $data['data']=$baru;
		echo json_encode($data);
    }
    public function get_id_pengguna(){
        $data =  $this->M_Master->get_id_pengguna();
       // $data['data']=$baru;
		echo json_encode($data);
    }
    public function get_id_kamus(){
        $data =  $this->M_Master->get_id_kamus();
       // $data['data']=$baru;
		echo json_encode($data);
    }
      public function save_kamus(){
        $baru =  $this->M_Master->save_kamus();
        $data['data']=$baru;
		echo json_encode($data);
    }
    public function update_pengguna(){
        $data =  $this->M_Master->update_pengguna();
       // $data['data']=$baru;
		echo json_encode($data);
    }
    public function update_kamus(){
        $data =  $this->M_Master->update_kamus();
       // $data['data']=$baru;
		echo json_encode($data);
    }
  
    public function delete_uraian(){
        $data =  $this->M_Master->delete_uraian();
       // $data['data']=$baru;
		    echo json_encode($data);
    }
        
		
}
