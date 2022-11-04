<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends My_Controller {

	function __construct(){
		parent::__construct();		
	}


	public function index()
	{
		 $this->load->view('home');
	}

	public function menu()
	{
		$menu = $this->db->query("SELECT*FROM menu WHERE deleted=0");

         $data=array(
            "menuList"=>$menu->result(),
        );

		 $this->load->view('mainmenu', $data);
	}

	public function cart()
    {
        $idUser= $this->session->userdata("id_user");
        $menu = $this->db->query("SELECT*FROM keranjang LEFT JOIN menu ON menu.id_menu=keranjang.id_menu WHERE keranjang.status=1 AND id_user='$idUser' AND keranjang.deleted=0 ");

         $data=array(
            "menuku"=>$menu->result(),
        );

         $this->load->view('keranjang', $data);
    }

    public function pembelian()
    {
        $idUser= $this->session->userdata("id_user");
        $menu = $this->db->query("SELECT*FROM keranjang LEFT JOIN menu ON menu.id_menu=keranjang.id_menu WHERE keranjang.status=2 AND id_user='$idUser' AND keranjang.deleted=0 ");
        $transaksi = $this->db->query("SELECT transaksi.id_transaksi, transaksi.jam_booking, transaksi.jml_org, transaksi.file_pembayaran, transaksi.status, tgl_transaksi, SUM(menu.harga*keranjang.qty) AS total FROM transaksi LEFT JOIN keranjang ON keranjang.id_transaksi=transaksi.id_transaksi LEFT JOIN menu ON keranjang.id_menu=menu.id_menu WHERE transaksi.id_user='$idUser' GROUP BY transaksi.id_transaksi");

         $data=array(
            "menuku"=>$menu->result(),
            "transaksiku"=>$transaksi->result(),
        );

         $this->load->view('pembelian', $data);
    }


    public function keranjang($id){

    if($this->session->userdata("level")=="Pelanggan"){
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('informasi/menu');
        }else{
            $idUser= $this->session->userdata("id_user");
            $idmenu = $id;
            $cekQuery = $this->db->query("SELECT * FROM keranjang WHERE id_user = '$idUser' AND id_menu=$idmenu AND status=1 ")->result_array();
            if(count($cekQuery) <= 0){
            $data=array(
                "id_menu"=>$idmenu,
                "id_user"=>$idUser,
                "status" => 1,
                "deleted" => 0
            );
            $this->db->insert('keranjang',$data);
            redirect('informasi/menu');
            }else{
            $this->session->set_flashdata('sukses',"gagalkeranjang");
            redirect('informasi/menu');
            }
        }
    }else{
        $this->session->set_flashdata('sukses',"gagaladd");
        redirect('informasi/menu');
    }

    }


    public function checkout(){
    $check = $this->input->post('pilihanku');
    $qtyCek = $this->input->post('qty');
    $keranjangCek = $this->input->post('keranjang');
    
    $idku = rand();
    for ($i=0; $i < sizeof($check); $i++) {
            $u=0;
            while ($u < sizeof($qtyCek)) {

                if($check[$i] == $keranjangCek[$u]){
                    $data = array(
                    'qty' => $qtyCek[$u],
                    'status' => 2,
                    'id_transaksi' => $idku
                    );
                    $this->db->where('id_keranjang', $check[$i]);
                    $this->db->update('keranjang',$data);
                    break;
                }

                 $u++;
            } 
               
    }
                 $dataTransaksi = array(
                    'id_transaksi' => $idku,
                    'id_user' => $this->session->userdata("id_user"),
                    'jam_booking' => $_POST['jam_booking'],
                    'jml_org'=> $_POST['jml_org']
                  );

            $this->db->insert('transaksi',$dataTransaksi);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('informasi/cart');
  }



  public function pembayaran()
    {
        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('informasi/pembelian');
        }else{

            $id = rand();
            $config['upload_path']          = './assets/images/bukti/';
            $config['allowed_types']        = 'pdf';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['file_pembayaran']['name'];

            if($upload_image){
              if ($this->upload->do_upload('file_pembayaran')) {
                 $img = $this->upload->data('file_name');
                  }else{
                    $this->session->set_flashdata('sukses',"gagal");
                    redirect('informasi/pembelian');
                  }

              }else{
                $img = 'default.png';
              }

            $data=array(
                "status"=>1,
                "file_pembayaran"=>$img
            );
            $this->db->where('id_transaksi', $_POST['id_transaksi'] );
            $this->db->update('transaksi',$data);

            $this->session->set_flashdata('sukses',"berhasil");
            redirect('informasi/pembelian');
        }
    }
    

	
}
