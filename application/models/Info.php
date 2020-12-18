<?php

class Info extends CI_Model{
    public function getAll(){
        $query=$this->db->get('info');
        return $query->result();
    }

    public function insertion($data){
        $this->db->insert('info',$data);
        redirect('/main_controller/dashboard');
    }

    public function modification(){
        
    }
}