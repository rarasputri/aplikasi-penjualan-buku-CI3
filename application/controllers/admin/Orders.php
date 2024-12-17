<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Orders extends CI_Controller
{


	// public function __construct()
    // {
    //     parent::__construct();
	// 	$this->load->model('User_model');
    // }
	public function index()
	{
        $data['orders'] = $this->db->get('orders')->result_array();
        $this->load->view('admin/orders', $data);
	}

	public function bayar() {
        $uploadPath = 'upload/pembayaran/';
        $namafoto1 = date("YmHis") . '_1.jpg';
    
        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024, // Maksimum 50MB
            'allowed_types' => 'jpg|jpeg|png|gif',
            'file_name'     => $namafoto1,
        ];
    
        $this->load->library('upload');
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('foto')) {
            echo "<script>
                    alert('Gagal Mengunggah Foto');
                    window.location = '" . base_url('admin/konten') . "';
                  </script>";
            redirect('beranda/orders');
            return;
        }
    
        // Ambil id_pelanggan berdasarkan email pelanggan
        $email = $this->input->post('email');
        $pelanggan = $this->db->get_where('pelanggan', ['email' => $email])->row_array();
    
        if (!$pelanggan) {
            echo "<script>
                    alert('Pelanggan tidak ditemukan');
                    window.location = '" . base_url('beranda/keranjang') . "';
                  </script>";
            return;
        }
    
        // Convert 'produk' array to string
        $produk = $this->input->post('produk');
        $produkString = is_array($produk) ? implode(', ', $produk) : $produk;
    
        // Data yang akan diinsert ke tabel orders
        $data = [
            'id_pelanggan'  => $pelanggan['id_pelanggan'], // Ambil id_pelanggan dari tabel pelanggan
            'alamat'        => $this->input->post('alamat'),
            'no_telp'       => $this->input->post('no_telp'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'payment'       => $this->input->post('payment'),
            'barcode'       => $this->input->post('barcode'),
            'produk'        => $produkString,
            'status'        => $this->input->post('status'),
            'total'         => $this->input->post('total'),
            'email'         => $email,
            'tanggal'       => date('Y-m-d'), // Tambahkan tanggal sekarang
            'foto'          => $namafoto1,
        ];
    
        // Insert ke database
        if ($this->db->insert('orders', $data)) {
            echo "<script>
                    alert('Pembayaran berhasil');
                    window.location = '" . base_url('beranda/pesanan') . "';
                  </script>";
        } else {
            echo "<script>
                    alert('Pembayaran Gagal');
                    window.location = '" . base_url('beranda/keranjang') . "';
                  </script>";
        }
    }
    
    
    

   public function update()
    {
        $uploadPath = 'upload/pembayaran/';
        $namafoto1 = date("YmHis") . '_1.jpg';

        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024,
            'allowed_types' => 'jpg|jpeg|png|gif',
        ];

        $this->load->library('upload');


        $config['file_name'] = $namafoto1;
        $this->upload->initialize($config);
       $this->upload->do_upload('foto');

        $data = array (
            'alamat'        => $this->input->post('alamat'),
            'no_telp'        => $this->input->post('no_telp'),
            'nama_penerima'        => $this->input->post('nama_penerima'),
            'payment'  => $this->input->post('payment'),
          
            'barcode'        => $this->input->post('barcode'),
            'produk'        => $this->input->post('produk'),
            'status'        => $this->input->post('status'),
            'total'        => $this->input->post('total'),
			'email'     => $this->input->post('email'),
            'tanggal'      => date('Y-m-d'),
            'foto'        => $namafoto1,
        );

        $where = [
            'id_order' => $this->input->post('id_order')
        ];

        if ($this->db->update('orders', $data,$where)) {
            echo "
           <script>
           alert('Pembayaran berhasil');
           window.location = '" . base_url('admin/orders') . "';
           </script>
           ";
        } else {
            echo "
            <script>
            alert('Pembayaran Gagal');
            window.location = '" . base_url('admin/orders') . "';
            </script>
            ";
        }
    }
    public function laporan() {
        $tanggal1 = $this->input->get('tanggal1');
        $tanggal2 = $this->input->get('tanggal2');
        date_default_timezone_set("Asia/Jakarta");
    
        // Query default: tampilkan semua data jika tanggal kosong
        $this->db->from('orders a');
        $this->db->join('pelanggan c', 'a.id_pelanggan = c.id_pelanggan', 'left');
        $this->db->order_by('a.tanggal', 'DESC');
    
        if (!empty($tanggal1) && !empty($tanggal2)) {
            $this->db->where('a.tanggal >=', $tanggal1);
            $this->db->where('a.tanggal <=', $tanggal2);
        }
    
        $orders = $this->db->get()->result_array();
    
        $data = array(
            'tanggal1' => $tanggal1,
            'tanggal2' => $tanggal2,
            'orders'   => $orders,
        );
        $this->load->view('laporan', $data);
    }
    


}