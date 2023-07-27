<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends CI_Controller {

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
		$this->load->model('M_Post');
		$this->load->model('M_Master');
	}
	
	public function Indikator(){
        $this->session_check();

        $id_user =  $this->session->userdata('id_user');
        // $role =  $this->session->userdata('role');
        $result =  $this->M_User->getById($id_user);
        
        $data['profile'] = $result;
        
        
        $this->load->view('indikator/index',$data);
    }

	function session_check(){
		//var_dump($this->session->userdata('is_login'));die; 
		if($this->session->userdata('is_login') == FALSE){
			$data = ['status' => true, 'message' => 'Silahkan Login Terlebih Dahulu! '];
			$this->session->set_flashdata('data', $data);
			redirect('C_Home/index');
		}
	}
}
