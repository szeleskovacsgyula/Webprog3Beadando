<?php

class Fileread_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert_from_text($email,$fsznev,$pwd){
        $record = [
            'email'  =>  $email, 
            'fsznev'   =>  $fsznev,
            'pwd'   =>  $pwd
        ];
        
        return $this->db->insert('felhasznalok',$record);
        return $this->db->insert_id();
    }

}
