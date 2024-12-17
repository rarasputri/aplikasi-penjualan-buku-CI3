<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		// if($this->session->userdata('level')==NULL){
		// 	redirect('admin/auth');
		// }
    }
   
    public function index(){
        $this->db->from('blog');
        $this->db->order_by('tanggal', 'DESC');
        $blog = $this->db->get()->result_array();

        $data = array(
            'blog'          => $blog,
        );
        $this->load->view('admin/blog', $data);
    }
    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'upload/blog/';
        $config['max_size'] = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/blog');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }

        $blog = $this->input->post('judul');
        $this->db->from('blog');
        $this->db->where('judul', $blog);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Nama blog sudah digunakan SILAHKAN GANTI
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/blog');
        }
        $data = array(
            'judul'      => $this->input->post('judul'),
            'deskripsi'      => $this->input->post('deskripsi'),
            'tanggal'      => date('Y-m-d'),
            'foto'      => $namafoto,
            'slug'      => str_replace(' ', '-', $this->input->post('judul')),
            'penulis'      => $this->input->post('penulis')
        );

        $this->db->insert('blog', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        blog Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/blog');
    }
    public function update(){
        $namafoto =  date("YmHis") . '.jpg';
        $config['upload_path']      = 'upload/blog/';
        $config['max_size'] = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $config['overwrite']        = true;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/blog');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        
        $id = $this->input->post('id_blog');

        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto'      => $namafoto,
            'slug'      => str_replace(' ', '-', $this->input->post('judul')),
            'penulis'      => $this->input->post('penulis')
        
        );
        $where = array('id_blog' => $id);
        $this->db->update('blog', $data, $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil disimpan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/blog');
    }
    public function hapus($id) {
        $where = array('id_blog' => $id);
        $this->db->delete('blog', $where);
        $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
    
    );
        redirect('admin/blog');
    }
}

