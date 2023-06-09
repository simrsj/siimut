<?php

/*
 * ***************************************************************
 *  Script : 
 *  Version : 
 *  Date :
 *  Author : Pudyasto Adi W.
 *  Email : mr.pudyasto@gmail.com
 *  Description : 
 * ***************************************************************
 */

/**
 * Description of Menus_qry
 *
 * @author adi
 */
class Menus_qry extends CI_Model {

    //put your code here
    protected $res = "";
    protected $delete = "";
    protected $state = "";

    public function __construct() {
        parent::__construct();
    }

    public function select_main_menu($param = null) {
        $this->db->where('mainmenuid', NULL, FALSE);
        if ($param) {
            $this->db->where('id !=', $param);
        }
        $query = $this->db->get('menus');
        return $query->result_array();
    }

    public function select_data($param) {
        $this->db->where('id', $param);
        $query = $this->db->get('menus');
        return $query->result_array();
    }

    public function submit() {
        try {
            $array = $this->input->post();
            if(isset($array['link']) && trim($array['link'])==""){
                $array['link'] = "#";
            }
            if (empty($array['id'])) {
                unset($array['id']);
                $resl = $this->db->insert('menus', $array);
                if (!$resl) {
                    $err = $this->db->error();
                    $this->title = "Kesalahan";
                    $this->msg = " Kesalahan : " . $this->apps->err_code($err['message']);
                    $this->state = "0";
                } else {
                    $this->title = "Berhasil";
                    $this->msg = "Data Berhasil Disimpan";
                    $this->state = "1";
                }
            } 
            elseif (!empty($array['id']) && empty($array['stat'])) {
                if (isset($array['mainmenuid']) && ($array['mainmenuid'] == "" || empty($array['mainmenuid']))) {
                    unset($array['mainmenuid']);
                    $this->db->set('mainmenuid', 'NULL', FALSE);
                }elseif (!isset($array['mainmenuid'])) {
                    $this->db->set('mainmenuid', 'NULL', FALSE);
                }
                $this->db->where('id', $array['id']);
                $resl = $this->db->update('menus', $array);
                if (!$resl) {
                    $err = $this->db->error();
                    $this->title = "Kesalahan";
                    $this->msg = " Kesalahan : " . $this->apps->err_code($err['message']);
                    $this->state = "0";
                } else {
                    $this->title = "Berhasil";
                    $this->msg = "Data Berhasil Diupdate";
                    $this->state = "1";
                }
            } elseif (!empty($array['id']) && ($array['stat']=="delete")) {
                $this->db->where('id', $array['id']);
                $resl = $this->db->delete('menus');
                if (!$resl) {
                    $err = $this->db->error();
                    $this->title = "Kesalahan";
                    $this->msg = " Kesalahan : " . $this->apps->err_code($err['message']);
                    $this->state = "0";
                } else {
                    $this->title = "Berhasil";
                    $this->msg = "Data Berhasil Dihapus";
                    $this->state = "1";
                }
            } elseif (!empty($array['id']) && ($array['stat']=="deleteall")) {
                $this->db->trans_begin();
                foreach ($array['id'] as $value) {
                    $this->db->where('id', $value);
                    $resl = $this->db->delete('menus');
                    if (!$resl) {
                        $this->db->trans_rollback();
                        $err = $this->db->error();
                        throw new Exception($this->apps->err_code($err['message']));
                    }
                }
                $this->db->trans_commit();
                $this->title = "Berhasil";
                $this->msg = "Data Berhasil Dihapus";
                $this->state = "1";
            } else {
                $this->title = "Kesalahan";
                $this->msg = "Variabel Tidak Sesuai";
                $this->state = "0";
            }
        } catch (Exception $e) {
            $this->title = "Kesalahan";
            $this->msg = $e->getMessage();
            $this->state = "0";
        }
        
        $arr = array(
            'title' => $this->title,
            'msg' => $this->msg,
            'state' => $this->state,
            'csrf_return' => $this->security->get_csrf_hash(),
        );
        return json_encode($arr);
    }

}
