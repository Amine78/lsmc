<?php
if(!empty($_POST)){
    if($Auth->login($_POST)){
        
    }else{
        echo 'Mauvais identifiants'; 
    }
}
?>
<form method="post" action="index.php?p=login">
    <label for="">Login : </label>
    <input type="text" name="login"/>
    <label for="">Mot de passe : </label>
    <input type="text" name="password"/>
    <input type="submit" value="Se connecter"/>
</form>