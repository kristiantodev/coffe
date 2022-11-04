<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends My_Controller {

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

        $menu = $this->db->query("SELECT*FROM menu WHERE menu.deleted=0");

         $data=array(
            "menuku"=>$menu->result(),
        );
		 $this->Mypage('isi/adm/menu',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nm_menu', 'nm_menu', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/menu');
        }else{
            $id = rand();
            $config['upload_path']          = './assets/images/coffe/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){
              if ($this->upload->do_upload('foto')) {
                 $img = $this->upload->data('file_name');
                  }else{
                    $this->session->set_flashdata('sukses',"gagal");
                    redirect('adm/menu');
                  }

              }else{
                $img = 'default.jpg';
              }

            $data=array(
                "nm_menu"=>$_POST['nm_menu'],
                "harga"=>$_POST['harga'],
                "foto" => $img,
                "deleted" => 0
            );
            $this->db->insert('menu',$data);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/menu');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_menu', 'id_menu', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/menu');
        }else{
            $id = rand();
            $config['upload_path']          = './assets/images/coffe/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){
                 if ($this->upload->do_upload('foto')) {

                 $img = $this->upload->data('file_name');

                 if($_POST['old_image'] != 'default.jpg'){
                    $path = './assets/images/coffe/'.$_POST['old_image'];
                    chmod($path, 0777);
                    unlink($path);
                 }

                  }else{
                    $this->session->set_flashdata('sukses',"gagal");
                    redirect('adm/menu');
                  }

              }else{
                $img = $_POST['old_image'];
              }

            $data=array(
                "nm_menu"=>$_POST['nm_menu'],
                "harga"=>$_POST['harga'],
                "foto" => $img
            );
            $this->db->where('id_menu', $_POST['id_menu'] );
            $this->db->update('menu',$data);
            $this->session->set_flashdata('sukses',"berhasil");
            redirect('adm/menu');
        }
    }

    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/menu');
        }else{
            $data=array(
                "deleted"=> 1
            );
            $this->db->where('id_menu', $id);
            $this->db->update('menu',$data);
            $this->session->set_flashdata('sukses',"hapus");
            redirect('adm/menu');
        }
    }


	
}
