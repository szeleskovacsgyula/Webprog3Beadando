<?php

class Products_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select('*'); 
        $this->db->from('termekek'); 
        $this->db->order_by('termekNev','ASC'); 
        
        $query = $this->db->get(); 
        $result = $query->result(); 
    
        return $result;
    }

    public function get_user_list(){
        $this->db->select('*'); 
        $this->db->from('termekek'); 
        $this->db->order_by('termekNev','ASC'); 
        
        $query = $this->db->get(); 
        $result = $query->result(); 
    
        return $result;
    }
    
    public function update($id, $termekCsop, $termekNev, $termekLeiras,$termekAr,$termekKod){
        $record = [
            'termekCsop'  =>  $termekCsop, 
            'termekNev'   =>  $termekNev,
            'termekLeiras'   =>  $termekLeiras,
            'termekAr' => $termekAr,
            'termekKod' => $termekKod
        ];
      
        $this->db->where('id',$id);
        return $this->db->update('termekek',$record);
    }
    
    public function select_by_id($id){
       
        $this->db->select("*");
        $this->db->from('termekek');
        $this->db->where('id',$id); 
        
        return $this->db->get()
                        ->row(); 
    }

    public function getId(){
        $this->db->select_max('id');
        $this->db->from('termekek');
        
        return $this->db->get()->row(); 
    }

    
    public function insert($termekCsop, $termekNev, $termekLeiras,$termekAr,$termekKep,$termekKod){
       
        $record = [
            'termekCsop'  =>  $termekCsop, 
            'termekNev'   =>  $termekNev,
            'termekLeiras'   =>  $termekLeiras,
            'termekAr' => $termekAr,
            'termekKep' => $termekKep,
            'termekKod' => $termekKod

        ];
        
        return $this->db->insert('termekek',$record);
        
        return $this->db->insert_id();
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete('termekek');
    }
}
