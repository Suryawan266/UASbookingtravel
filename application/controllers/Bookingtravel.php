<?php
defined('BASEPATH') OR exit('NO direct script accses allowed');
class Bookingtravel extends CI_Controller{
    function  __construct() { 
        parent :: __construct();
        $this->load->model('M_booking');
    }
    function Home(){
        $data['content']='template';
        $this->load->view('template');
    } 
    function Gallery_aling_aling(){
        $data['beranda']='gallery_detail/aling-aling/index';
        $this->load->view('template_galeri',$data);
    } 

    function Gallery_tembok_barak(){
        $data['beranda']='gallery_detail/tembok_barak/index';
        $this->load->view('template_galeri',$data);
    } 

    function Gallery_secret_garden(){
        $data['beranda']='gallery_detail/secret_garden/index';
        $this->load->view('template_galeri',$data);
    } 

    function Gallery_alam_sambangan(){
        $data['beranda']='gallery_detail/alam_sambangan/index';
        $this->load->view('template_galeri',$data);
    } 

    function buat_pesanan(){
        $data['title']="form input data mahasiswa";
        $data['tb_pesanan'] = $this->M_booking->get_data_pesanan();
        $data['beranda']="form_pesan";
    $this->load->view('template_galeri',$data);
    } 

    function form_register(){
        $data['title']="form input data mahasiswa";
        $data['beranda']="register";
    $this->load->view('register',$data);
    } 
    function info_paket(){
        $data['beranda']='info_paket';
        $this->load->view('template_galeri',$data);
    } 
    function kirim_data_pesanan(){
        //mengirim post ke model
        $this->M_booking->kirim_data_pesanan($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('Bookingtravel/Home');
    }
    function kirim_data_register(){
        //mengirim post ke model
        $this->M_booking->kirim_data_register($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('Login/index');
    }



}?>