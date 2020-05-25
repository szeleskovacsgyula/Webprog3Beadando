<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
    <title>Admin Bejelentkezés</title>
</head>
<body class="userbground">
<div class="user">
<?php echo validation_errors(); ?>
<?php if(isset($error)):?>
    <?php echo $error; ?>
<?php endif; ?>
<?php echo form_open(); ?>
<br/>
<?php $this->load->helper('url');  ?>
<?php echo form_label('Email cím:','email'); ?> <br/>
<?php echo form_input('email',set_value('email',''),[ 'id' => 'email',
                                  /*'required' => 'required'*/]); ?>
<?php echo form_error('email');?>
<br/>
<br/>
<?php echo form_label('Adminisztrátor név:','adminnev'); ?> <br/>
<?php echo form_input('adminnev',set_value('adminnev',''),[ 'id' => 'userEmail',
                                  /*'required' => 'required'*/]); ?>
<?php echo form_error('adminnev');?>
<br/>
<br/>
<?php echo form_label('Jelszó:','pwd'); ?> <br/>
<?php echo form_password('pwd',set_value('pwd',''),[]); ?>
<?php echo form_error('pwd'); ?>
<br/>
<br/>


<?php echo form_submit('submit','Belépés'); ?>
<br/>



<?php echo form_close(); ?>