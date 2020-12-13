<?php
class M_backend extends CI_Model{

    

    function get_user(){
        
        $data=$this->db->get('tb_user')->result();
        return $data;
    } 
    function kirim_data_user($post){
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

    function get_pesanan(){
        
        $data=$this->db->get('tb_pesanan')->result();
        return $data;
    } 
    public function hapus_pesanan($key)
	{
		$this->db->where('si_paket',$key);
		$this->db->delete('tb_pesanan');
    }
    
    
    
}?>
