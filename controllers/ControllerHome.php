<?php 


    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');
    $bdd->exec("SET NAMES 'UTF8'");

    if (isset($_GET['id'])AND$_GET['id']>0) {
        $getid=intval($_GET['id']);
        $reqUser=$bdd->prepare('SELECT * FROM Membres WHERE id=?');
        $reqUser->execute(array($getid));
        $userInfo=$reqUser->fetch();

        $_SESSION['id']=$userInfo['id'];
        $_SESSION['nom']=$userInfo['nom'];
        $_SESSION['prenom']=$userInfo['prenom'];
        $_SESSION['mail']=$userInfo['mail'];
        $_SESSION['dateDeNaissance']=$userInfo['dateDeNaissance'];
    };




 ?>