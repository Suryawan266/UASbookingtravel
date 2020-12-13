<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Backend extends CI_Controller{
    function __construct()
    { parent :: __construct();
        $this->load->model('M_backend');
    }

    function index(){
            $data['title']="Tampilan Beranda";
            $data['meta']="suryawan";
            $data['beranda']="backend/beranda_backend";
        $this->load->view('backend/template_backend',$data);
    }



    function form_user(){
        $data['title']="form input data mahasiswa";
        $data['tb_user'] = $this->M_backend->get_user();
        $data['beranda']="backend/user/index";
    $this->load->view('backend/template_backend',$data);
    }
    function form_tambah_data_user(){
        $data['title']="form input data mahasiswa";
        $data['tb_user'] = $this->M_backend->get_user();
        $data['beranda']="backend/user/add";
    $this->load->view('backend/template_backend',$data);
    }
    function kirim_data_user(){
        //mengirim post ke model
        $this->M_backend->kirim_data_user($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('Backend/form_user');
    }


    function data_pesanan(){
        $data['title']="form input data mahasiswa";
        $data['tb_pesanan'] = $this->M_backend->get_pesanan();
        $data['beranda']="backend/form_pesanan/index";
    $this->load->view('backend/template_backend',$data);
    }  
    public function hapus_pesanan(){

		$key = $this->uri->segment(3);
		$this->db->where('id_paket',$key);
		$query =$this->db->get('tb_paket');
		if($query->num_rows()>0)
		{
			$this->M_backend->hapus_pesanan($key);
		}
		redirect('Backend/data_pesanan');
	}
    

   
}?>