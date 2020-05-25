<?php

class Fileread extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('fileread_model');

    }

    public function index(){
       $this->load->helper('url'); 
       $this->load->view('admin/filereading');

    }

    
    public function read_from_text(){
        $this->load->helper('url');
        $this->load->helper('form');
        
        $data=file_get_contents('localhost:8081/webprog3szkgy/uploads/text.txt');
        
        $splittedstring=explode(" ",$data);
        
        $email = $splittedstring[0];
        $fsznev = $splittedstring[1];
        $pwd = $splittedstring[2];

        $requested = '.';
        ?>
        <?php if(strpos($email,$requested)): ?>
            <?php $this->fileread_model->insert_from_text($email,$fsznev,$pwd); ?>
            <div class="readsucc">
            <?php echo 'Siker'; ?>
            </div>
        <?php else: ?> 
            <div class="readerror">
            <?php echo 'Nem megfelelő e-mail input'; ?>
            </div>
        <?php endif; ?>
        <?php
       $this->load->helper('url'); 
       $this->load->view('admin/filereading');

    }

    
}



