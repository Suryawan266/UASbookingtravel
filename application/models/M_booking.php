<?php
class M_booking extends CI_Model{


   
    function kirim_data_register($post){
        $data = array(
            'nama'=>$post['nama'],
            'password'=>$post['password'],
            'nama_lengkap'=>$post['nama_lengkap'],
            'no_hp'=>$post['no_hp'],
            'alamat'=>$post['alamat'],
            'email'=>$post['email'],
        );   
        $this->db->insert('tb_user',$data);
    }
    function get_data_pesanan(){
        $data=$this->db->get('tb_pesanan')->result();
        return $data;
    } 

    function kirim_data_pesanan($post){
        $data = array(
            'id_paket'=>$post['id_paket'],
            'nama_pemesan'=>$post['nama_pemesan'],
            'no_hp'=>$post['no_hp'],
            'email'=>$post['email'],
            'alamat'=>$post['alamat'],   
        );   
        $this->db->insert('tb_pesanan',$data);
    }
}?>