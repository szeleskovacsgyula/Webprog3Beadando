<?php

class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        
        $this->load->database();
    }

   

    public function register($email, $fsznev, $pwd){
       
        $record = [
            'email'  =>  $email, 
            'fsznev'   =>  $fsznev,
            'pwd'   =>  $pwd
        ];
        
        return $this->db->insert('felhasznalok',$record);
        
        return $this->db->insert_id();
    }
    
    public function login($email){
        $this->db->select('pwd');
        $this->db->from('felhasznalok');
        $this->db->where('email',$email);
        $query = $this->db->get()->row();

        return $query;
    }

    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete('felhasznalok');
    }

    public function select_by_id($id){
        
        $this->db->select("*");
        $this->db->from('felhasznalok');
        $this->db->where('id',$id); 
        
        return $this->db->get()
                        ->row(); 
    }












}    