<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
    <title>Summary</title>
</head>
<body class="userbground">
<?php if($this->session->userdata('email')): ?>
    <div class="list">
    <div class="action">
<div class="centermenu">
<?php echo anchor(base_url('products/userList'),'Termékek'); ?>

<?php echo anchor(base_url('user/show_cart'),'Kosaram');?>
    <?php echo anchor(base_url('user/logout/'),'Kilépés');?>
</div>
</div>
    <p class="summtitle">Szállítási adatok</p>
<div class="user">
<?php echo form_open_multipart() ?>
<?php echo form_input('email',set_value('email',''), [ 
                                  'placeholder' => 'Email cím']); ?>
<?php echo form_error('email'); ?>
<br/>
<br/>
<?php echo form_input('kNev',set_value('kNev',''), [ 
                                  'placeholder' => 'Kereszt név']); ?>
<?php echo form_error('kNev'); ?>
<br/>
<br/>
<?php echo form_input('vNev',set_value('vNev',''),[
                                  'placeholder' => 'Vezeték név']); ?>
<?php echo form_error('vNev');?>
<br/>
<br/>
<?php echo form_input('varos',set_value('varos',''),[ 
                                 'placeholder' => 'Város']);?>
<?php echo form_error('varos');?>
<br/>
<br/>
<?php echo form_input('irsz',set_value('irsz',''),[
                                  'placeholder' => 'Irányító szám']); ?>
<?php echo form_error('irsz');?>
<br/>
<br/><?php echo form_input('lakcim',set_value('lakcim',''),[
                                  'placeholder' => 'Utca házszám']); ?>
<?php echo form_error('lakcim');?>
<br/>
<br/><?php echo form_input('telszam',set_value('telszam',''),[
                                  'placeholder' => 'Telefon szám']); ?>
<?php echo form_error('telszam');?>
<br/>
<br/>

<?php echo form_submit('submit','Mentés'); ?>
<br/>

<?php echo form_close(); ?>
<?php endif; ?>