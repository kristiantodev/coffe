  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{

        $menu = $this->db->query("SELECT*FROM keranjang LEFT JOIN menu ON menu.id_menu=keranjang.id_menu WHERE keranjang.status=2 AND keranjang.deleted=0 ");
        $transaksi = $this->db->query("SELECT transaksi.id_transaksi, user.nm_user, transaksi.file_pembayaran, transaksi.jam_booking, transaksi.jml_org, transaksi.status, tgl_transaksi, SUM(menu.harga*keranjang.qty) AS total FROM transaksi LEFT JOIN keranjang ON keranjang.id_transaksi=transaksi.id_transaksi LEFT JOIN menu ON keranjang.id_menu=menu.id_menu LEFT JOIN user ON user.id_user=transaksi.id_user GROUP BY transaksi.id_transaksi");

         $data=array(
            "menuku"=>$menu->result(),
            "transaksiku"=>$transaksi->result(),
        );

		 $this->Mypage('isi/adm/pembelian',$data);
	}

    public function konfirmasi($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Update");
            redirect('adm/pembelian');
        }else{
            $data=array(
                "status"=> 2
            );
            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi',$data);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/pembelian');
        }
    }
	
}
