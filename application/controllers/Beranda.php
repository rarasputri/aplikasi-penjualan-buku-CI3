<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load library pagination
        $this->load->library('pagination');
        $this->load->library(['cart', 'form_validation']);
        $this->load->helper('url');
        $this->load->model('model_konten'); // Pastikan model ini diload
        
    }

    public function index() {
        
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();

        $caraousel = $this->db->get('caraousel')->result_array();
        $saran = $this->db->get('saran')->result_array();
        $galeri = $this->db->get('galeri')->result_array();
        $kategori = $this->db->get('kategori')->result_array();
        $blog = $this->db->get('blog')->result_array();

       
        // Ambil data dari tabel `konten` sesuai halaman
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        
        $konten = $this->db->get()->result_array();

        // Kirim data ke view
        $data = array(
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten,
            'saran' => $saran,
            'galeri' => $galeri,
            'blog' => $blog
            
        );
        $this->load->view('beranda', $data);
    }
    public function kategori($id)
	{
		$this->db->from('konfigurasi');
        $konfigurasi =$this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
       
		
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array (
			'nama_kategori' => $nama_kategori,
			'konfigurasi' => $konfigurasi,
			'kategori'	 => $kategori,
			'konten'	=> $konten
		);
		$this->load->view('kategori', $data);
	}

	public function artikel($id) {
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();
    
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
		$data = array (
			'konfigurasi' => $konfigurasi,
			'kategori'	 => $kategori,
			'konten'	=> $konten
		);
		$this->load->view('detail', $data);  
	}
    public function blog($id) {
		$this->db->from('konfigurasi');
        $konfigurasi =$this->db->get()->row();
        
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('blog');
        $this->db->where('slug', $id);
        $blog = $this->db->get()->row();
		$data = array (
			'konfigurasi' => $konfigurasi,
			'kategori'	 => $kategori,
			'blog'	=> $blog
		);
		$this->load->view('blog', $data);  
	}
    
    public function blogitem()
	{
		$this->db->from('konfigurasi');
        $konfigurasi =$this->db->get()->row();  

        $this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->from('blog');
        $blog = $this->db->get()->result_array();
		$data = array (
			
            'konfigurasi' => $konfigurasi,
			'kategori'	 => $kategori,
            'blog'	=> $blog
			
		);
		$this->load->view('blogitem', $data);
	}
    public function cart()
    {
        $this->load->view('cart');
    }
 

    public function tambah_keranjang($id_konten){

        $konten = $this->model_konten->find($id_konten);

        $qty= 1;
        if($this->input->post('qty'))
        {
            $qty = $this->input->post('qty');
        }

        $data = array(
                'id'  => $konten->id_konten,
                'qty' => $qty,
                'price' => $konten->harga,
                'name' => $konten->judul
        );

        $this->cart->insert($data);
        redirect('beranda');
    }
        
    public function keranjang()
{
    $this->db->from('konten a');
    $konten = $this->db->get()->result_array();
    $data = array(
        'konten' => $konten
    );

    $this->load->view('keranjang', $data);
}


    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('beranda');
    }

    public function delete($rowid){
        $this->cart->remove($rowid);
        redirect('beranda/keranjang');
    }
    public function update()
    {
        $no = 1;
        foreach ($this->cart->contents() as $items){
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($no.'[qty]'),
            );
            $this->cart->update($data);
        }
        
        redirect('beranda/keranjang');
    }
    
    public function orders()
    {
        $this->db->from('alamat');
        $alamat = $this->db->get()->result_array();

        $this->db->from('orders');
        $orders = $this->db->get()->result_array();
       
        $data = array (
            'alamat' => $alamat,
            'orders' => $orders,
            
        );
        $this->load->view('orders', $data);
    }

    public function pesanan()
    {
        $this->db->from('alamat');
        $alamat = $this->db->get()->result_array();

        $this->db->from('orders');
        $orders = $this->db->get()->result_array();
        
        
        $data = array (
            'alamat' => $alamat,
            'orders' => $orders,
          
        );
        $this->load->view('pesanan', $data);
    }

    public $api_key = "188d816409500b95ce6b7d2aeabfedde";
    public function pembayaran()
    {

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: ".$this->api_key,
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
        $this->db->from('orders');
        $orders = $this->db->get()->result_array();
        
        $data = array (
            'orders' => $orders,
          
        );
        $this->load->view('pembayaran', $data);
    }
    public function print()
    {
        $this->db->from('orders');
        $this->db->order_by('tanggal', 'DESC');
        $orders = $this->db->get()->row();
        
        $data = array (
          
            'orders' => $orders,
           
        );
        $this->load->view('struk', $data);
    }
}
?>