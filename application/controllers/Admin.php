<?php

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index(){
    }

    public function adminregister(){
        $this->load->helper('url');
        if($this->input->post('submit')){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','E-mail cím','trim|required|valid_email');
            $this->form_validation->set_rules('adminnev','Adminisztrátor név','required');
            $this->form_validation->set_rules('pwd','Jelszó','required');

            if($this->form_validation->run() == TRUE){
                $this->load->helper('form');
                
                $this->admin_model->register($this->input->post('email'),
                                            $this->input->post('adminnev'),
                                            $this->input->post('pwd'));
                 $this->load->helper('url');
                 redirect(base_url('products'));
            } else{

            }


        } else{
            $this->load->helper('form');      
           
        }
        $this->load->helper('form');
        $this->load->view('admin/adminregister');
    }

    public function adminlogin(){
        if($this->input->post('submit')){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','E-mail cím','trim|required|valid_email');
            $this->form_validation->set_rules('adminnev','Adminisztrátor név','required');
            $this->form_validation->set_rules('pwd','Jelszó','trim|required');

            if($this->form_validation->run() == TRUE){
                $this->load->helper('form');
                
                if($this->admin_model->adminlogin($this->input->post('email'),
                $this->input->post('adminnev'),$this->input->post('pwd')) == TRUE){
                    
                    $this->load->library('session');
                    $this->session->set_userdata('admin','email');
                    
                    $this->load->helper('url');
                    redirect(base_url('products'));
                }else{
                    echo"Nem jo";
                }
                   
                        
                
            } else{
                echo 'ez fut le';
            }

        } else{
            $this->load->helper('form');
            $this->load->view('admin/adminlogin');
        }
    }

    public function adminlogout(){
        $this->session->unset_userdata('admin');
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect(base_url('admin/adminlogin'));
    }

    public function listofusers(){
        $this->load->helper('url');
        $this->load->helper('form');
        $records = $this->admin_model->get_list(); 
        $view_params = [
            'users'  =>  $records
        ];
        $this->load->helper('url'); 
        $this->load->view('admin/listofusers', $view_params);
    }



}