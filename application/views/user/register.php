<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
    <title>Regisztráció</title>
</head>
<body class="userbground">
<div class="user">
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

<?php echo form_label('Felhasználó név:','fsznev'); ?> <br/>
<?php echo form_input('fsznev',set_value('fsznev',''), [ /*'required' => 'requried',*/ 
                                  ]); ?>
<?php echo form_error('fsznev'); ?>
<br/>
<br/>
<?php echo form_label('Jelszó:','pwd'); ?> <br/>
<?php echo form_password('pwd',set_value('pwd',''),[]); ?>
<?php echo form_error('pwd'); ?>
<br/>
<br/>


<?php echo form_submit('submit','Regisztáció'); ?>
<br/>
<br/>
<p>Már regisztráltál? <?php echo anchor(base_url('user/login/'),'Lépj be itt');?></p>

<?php echo form_close(); ?>