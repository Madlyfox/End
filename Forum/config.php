<?php 

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace-Menbre','root','Borromee1', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $bdd2= new PDO('mysql:host=127.0.0.1;dbname=Forum','root','Borromee1', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    	$getId=intval($_GET['id']);
        $reqUser=$bdd->prepare('SELECT * FROM Membres WHERE ID=?');
        $reqUser->execute(array($getId));
        $userInfo=$reqUser->fetch();


        $_SESSION['ID']=$userInfo['ID'];
        $_SESSION['pseudo']=$userInfo['pseudo'];
        $_SESSION['mail']=$userInfo['mail'];
    
 ?>