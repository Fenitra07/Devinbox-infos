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

    public function modification($id){
        $query=$this->db->get_where('info',array('i_id'=>$id));
        $posts=$query->result_array();
        $this->load->view('dashboard_edit',['posts'=>$posts]);
        
    }

    public function maj($data,$id){
        $this->db->where('i_id',$id);
        $this->db->update('info',$data);
        redirect('/main_controller/dashboard');
    }

    public function supprimer($id){
        $this->db->where('i_id',$id);
        $this->db->delete('info');
        redirect('/main_controller/dashboard');
    }
}