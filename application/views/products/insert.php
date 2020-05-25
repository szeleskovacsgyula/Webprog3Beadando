<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
    <title>Új termék</title>
</head>
<body class="userbground">
<?php if($this->session->userdata('admin')): ?>
    
<div class="user">
<?php echo validation_errors(); ?>
<?php echo form_open_multipart() ?>


<?php echo form_input('termekCsop',set_value('termekCsop',''), [
                                  'placeholder' => 'Termékcsoport']); ?>
<?php echo form_error('termekCsop'); ?>
<br/>

<br/>
<?php echo form_input('termekKod',set_value('termekK',''),[
                                'placeholder' => 'Termékkód']); ?>
<?php echo form_error('termekKod'); ?>
<br/>

<br/>
<?php echo form_input('termekNev',set_value('termekNev',''),[ 'id' => 'prod_name',
                                 'placeholder' => 'Terméknév']); ?>
<?php echo form_error('termekNev');?>
<br/>

<br/>
<?php echo form_input('termekAr',set_value('termekAr',''),[ 
                                'placeholder' => 'Ár']); ?>
<?php echo form_error('	termekAr'); ?>
<br/>

<br/>
<?php echo form_input('termekLeiras',set_value('termekLeiras',''), [ 
                                  'placeholder' => 'Leírás']); ?>
<?php echo form_error('termekLeiras'); ?>
<br/>

<br/>
<?php echo form_upload('file'); ?>
<br/>

<br/>
<?php echo form_submit('submit','Mentés'); ?>
<br/>

<?php echo form_close(); ?>

<?php endif; ?>