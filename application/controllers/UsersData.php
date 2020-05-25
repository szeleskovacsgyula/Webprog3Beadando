<?php

class usersdata extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('usersdata_model');
    }

    public function index(){
        
        $this->load->view('order/summary');
    }

    public function insert(){
        if($this->input->post('submit')){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','E-mail cím','trim|required|valid_email');
            $this->form_validation->set_rules('kNev','Keresztnév','required');
            $this->form_validation->set_rules('vNev','Vezetéknév','required');
            $this->form_validation->set_rules('varos','Város','required');
            $this->form_validation->set_rules('irsz','irszám','required');
            $this->form_validation->set_rules('lakcim','Utca, házszám','required');
            $this->form_validation->set_rules('telszam','Telefonszám','required');

            
            if($this->form_validation->run() == TRUE){
                $this->usersdata_model->insert($this->input->post('email'),
                $this->input->post('kNev'),$this->input->post('vNev'),
                $this->input->post('varos'),$this->input->post('irsz'),
                $this->input->post('lakcim'),$this->input->post('telszam'));
                
                $this->load->helper('url');
                 redirect(base_url('order'));

            } else{

            }
        } else{
            $this->load->helper('form'); 
        }
        $this->load->helper('form');
        $this->load->view('order/summary');
    }

    public function edit($id = NULL){ 
        if($id == NULL){
            show_error('A szerkesztéshez hiányzik az id!');
        }    
        $record = $this->adresses_model->select_by_id($id);
        if($record == NULL){
            show_error('Nem létezik ilyen rekord!');
        }
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('irsz','irszám','required');
        $this->form_validation->set_rules('varos','város név','required');
         
        if($this->form_validation->run() == TRUE){
            $this->adresses_model->update($id, $this->input->post('irsz'),$this->input->post('varos'));
            $this->load->helper('url');
            redirect(base_url('adresses'));
        }
        else{
            $view_params = [
                'cts'    =>  $record
            ];
            $this->load->helper('form');
            $this->load->view('adresses/edit',$view_params);
        }
            
    }

    public function delete($id = NULL){
        if($id == NULL){
            show_error('Hiányzó rekord azonosító!');
        }
        $record = $this->adresses_model->select_by_id($id);
        if($record == NULL){
            show_error('Ilyen azonosítóval nincs rekord!');
        }
        
        $this->adresses_model->delete($id);
        $this->load->helper('url');
        redirect(base_url('adresses'));
    }

    public function loadthanks(){
       
    }






}