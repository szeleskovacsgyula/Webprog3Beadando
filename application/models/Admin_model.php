<?php

class Admin_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        
        $this->load->database();
    }

    
     public function get_list(){
        $this->db->select('*'); 
        $this->db->from('felhasznalok'); 
        $this->db->order_by('fsznev','ASC'); 
        
        $query = $this->db->get(); 
        $result = $query->result(); 
    
        return $result;
    }

    public function register($email, $adminnev, $pwd){
       
        $record = [
            'email'  =>  $email, 
            'adminnev'   =>  $adminnev,
            'pwd'   =>  $pwd
        ];
        
        return $this->db->insert('admin',$record);
        
        return $this->db->insert_id();
    }

    public function adminlogin($email,$adminnev,$pwd){
        
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $this->db->where('adminnev',$adminnev);
        $this->db->where('pwd',$pwd);
        $query = $this->db->get()->row();

        if($query != null){
            return true;
        }else{
            return false;
        }

    }

    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete('admin');
    }

    




}