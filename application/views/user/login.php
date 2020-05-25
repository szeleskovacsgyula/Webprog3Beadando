<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
    <title>Bejelentkezés</title>
</head>
<body class="userbground">
<div class="user">
<?php echo validation_errors(); ?>
<?php if(isset($error)):?>
    <?php echo $error; ?>
<?php endif; ?>
<?php echo form_open(); ?>
<br/>
<?php echo form_label('Email cím:','email'); ?> <br/>
<?php echo form_input('email',set_value('email',''),[ 'id' => 'email',
                                  /*'required' => 'required'*/]); ?>
<?php echo form_error('email');?>
<br/>
<br/>
<?php echo form_label('Jelszó:','pwd'); ?> <br/>
<?php echo form_password('pwd',set_value('pwd',''),[]); ?>
<?php echo form_error('pwd'); ?>
<br/>
<br/>
<div class="loginBtn">
<?php echo form_submit('submit','Belépés'); ?>
</div>
<br/>
<br/>
<p>Amennyiben még nem regisztráltál <?php echo anchor(base_url('user/register/'),'itt megteheted!');?></p>
<?php echo form_close(); ?>

