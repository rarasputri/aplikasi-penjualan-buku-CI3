<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$this->load->view('login_pelanggan');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->from('pelanggan')->where('username',$username);
        $pelanggan = $this->db->get()->row();
        if($pelanggan==NULL){ 
            $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
        Username tidak ditemukan
        </div>
        ');
        redirect('pelanggan');
        } else if($pelanggan->password==$password){
            $data = array (
                'email' => $pelanggan->username,
                'nama_pelanggan' => $pelanggan->nama_pelanggan,
                'email'         => $pelanggan->email,
                'id_pelanggan' => $pelanggan->id_pelanggan,
            );
            $this->session->set_userdata($data);
            redirect('beranda');
        } else {
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger" role="alert">
            Password salah
            </div>
            ');
            redirect('pelanggan');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('pelanggan');
    }
}
