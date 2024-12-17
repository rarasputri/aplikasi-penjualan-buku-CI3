<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
   
    public function index() {
        $data['alamat'] = $this->db->get('alamat')->result_array();
        $this->load->view('admin/alamat', $data);
    }

    public function simpan()
    {
        $data = array(
            'id_user'   => $this->session->userdata('id_user'), // Tambahkan id_user
            'alamat'    => $this->input->post('alamat'),
            'nama'      => $this->input->post('nama'),
            'kode_pos'  => $this->input->post('kode_pos'),
            'no_telp'  => $this->input->post('no_telp')
        );
        $this->db->insert('alamat', $data);
        echo "
        <script>
        alert('Berhasil Ditambahkan');
        window.location = '".site_url('beranda/orders')."'
        </script>
        ";
    }
    
    public function hapus($id) {
        $this->db->delete('alamat', ['id_alamat' => $id]);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, alamat berhasil dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/alamat');
    }

}
