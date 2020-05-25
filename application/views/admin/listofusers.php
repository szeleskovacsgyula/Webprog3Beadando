<?php if($this->session->userdata('admin')): ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.css">
    <title>Felhasználók</title>
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
    </div>
    <div class="lista2">
<?php if($users == NULL || empty($users)): ?>
    <p>Nincs regisztrálva egyetlen user sem</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($users as &$user): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->email?></td>
                <td><?php echo anchor(base_url('user/user_profile/'.$user->id), $user->fsznev);?>
                <td><?=md5($user->pwd)?></td>
                
                <td>
                    <?php echo anchor(base_url('user/delete/'.$user->id),'Törlés');?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>    
    </table>
<?php endif; ?>

<?php else: 
    echo 'Először jelentkezzen be';
?>

<?php endif; ?>