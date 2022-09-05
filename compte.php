<?php $Auth->allow('member'); ?>
<?php
$req = $PDO->prepare('SELECT address FROM users WHERE id=:id');
$req->execute(array(
    'id' => $Auth->user('id')                   
)); 
$user = $req->fetch();
?>

<h1>Mon compte</h1>

<p>Mon adresse : </p>

<p><strong><?php echo $user->address; ?></strong></p>