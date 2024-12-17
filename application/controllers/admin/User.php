<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        // if($this->session->userdata('level') !== 'admin'){
		// 	redirect('auth');
		// }
    }
    
	
    public function index() {
        $this->db->from('user');
        $user = $this->db->get()->result_array();
        $data = array(
            'user' => $user
        );
    
        $this->load->view('admin/user', $data);
    }
    
    

    public function simpan(){
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Omg, username telah digunakan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/user'); 
           }
        
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('passsword')),
            'nama'     => $this->input->post('nama'),
            'level'    => $this->input->post('level'),

        );
        $this->db->insert('user', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil disimpan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/user');
       


}
public function edit($id){
    $this->db->select('*')->from('user');
    $this->db->where('id_user', $id);
    $user = $this->db->get()->result_array();
    $data = array('user' => $user);
    $this->load->view('admin/user','user_edit', $data);
    redirect('admin/user');
}

public function hapus($id) {
    $where = array('id_user' => $id);
    $this->db->delete('user', $where);
    $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'

);
    redirect('admin/user');
}
public function update() {
  
    $id = $this->input->post('id_user');
  
    $data = array(
        'nama'     => $this->input->post('nama'),
        'level'    => $this->input->post('level'),
    );
    $where = array('id_user' => $id);
    
    $this->db->update('user', $data, $where);

    $this->session->set_flashdata('alert', '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil diperbarui!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ');

    redirect('admin/user');
}

}