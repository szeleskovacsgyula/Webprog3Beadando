<?php if($this->session->userdata('admin')): ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
        <title>Felhasználó hozzáadása fájlból</title>
    </head>
    <body class="userbground">
    <div class="user2">
    <div class="list">
        <div class="action">
<div class="centermenu">
<?php echo anchor(base_url('products/insert'),'Új hozzáadása'); ?>
    <?php echo anchor(base_url('admin/listofusers/'),'Userek kezelése');?>
    <?php echo anchor(base_url('Fileread'),'Fájl olvasás');?>
    <?php echo anchor(base_url('admin/adminregister/'),'Admin hozzáadása');?>
    <?php echo anchor(base_url('admin/adminlogout/'),'Kilépés');?>
    </div>
</br>
     </div>
    </div>

        <div class="critic">
        <?php echo anchor(base_url('fileread/read_from_text/'),'Ide kattinva felviheti a usert, a táblába');?>
        <div>

    </div>
    
    <?php endif;?>


    