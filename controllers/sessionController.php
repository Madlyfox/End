<?php 
    session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');
    $bdd->exec("SET NAMES 'UTF8'");



    if (isset($_GET['id'])AND$_GET['id']) {
        
        $reqUser=$bdd->prepare('SELECT * FROM Membres WHERE id=:id');
        $reqUser->bindValue(':id', $_GET['id'] );
        $reqUser->execute();
        $userInfo=$reqUser->fetch(PDO::FETCH_ASSOC);

        $_SESSION=$userInfo;
        

        
    }