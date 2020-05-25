<?php

class Usersdata_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    //Beszúrás
    public function insert($email,$kNev,$vNev, $varos, $irsz,$lakcim,$telszam){
        $record = [
            'email' => $email,
            'kNev' => $kNev,
            'vNev' => $vNev,
            'varos' => $varos,
            'irsz'  =>  $irsz,
            'lakcim' => $lakcim,
            'telszam' => $telszam
        ];
        return $this->db->insert('fszadatok',$record);
        return $this->db->insert_id();
    }



}