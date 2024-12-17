<?php
 
 class Registrasi extends CI_Controller{
    public function index(){

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        
        if($this->form_validation->run() == FALSE){
          
            $this->load->view('registrasi');
            
            } else {
                $data = array(
                    'id_pelanggan' => '',
                    'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'email' => $this->input->post('email'),
                );
    
                $this->db->insert('pelanggan', $data);
                redirect('pelanggan');
            }
        }

        
 }