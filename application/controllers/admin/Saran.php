<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
   
    public function index() {
        $data['saran'] = $this->db->get('saran')->result_array();
        $this->load->view('admin/saran', $data);
    }

    public function simpan()
    {
        $this->db->from('saran');
        $data = array 
        (
            'isi_saran' => $this->input->post('isi_saran'),
            'tanggal'   => date('Y-m-d'),
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email')
        );
        $this->db->insert('saran', $data);
        echo "
        <script>
        alert('Berhasil Ditambahkan');
        window.location = '".site_url('beranda')."'
        </script>
        ";
    }
    public function hapus($id) {
        $this->db->delete('saran', ['id_saran' => $id]);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, saran berhasil dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/saran');
    }

}
