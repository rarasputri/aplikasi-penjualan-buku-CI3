<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
		$this->db->from('konfigurasi');
        $konfigurasi =$this->db->get()->row();
		$data = array (
			'konfigurasi' => $konfigurasi
		);
		$this->load->view('admin/dashboard', $data);
	}

}