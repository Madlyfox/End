<?php  

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    if (isset($_POST['sendPost'])) {
	   $id_utilisateur = $userInfo['id'];
	   $vote = 0;
	   $commentaire ='';
	   $dt = new DateTime();
	   $dateHeureCreation = $dt->format('Y-m-d H:i:s');
	   $contenu = $_POST['post'];
	   $nom_utilisateur = $userInfo['prenom'].' '.$userInfo['nom'];



	   if (!empty($_POST['post'])) {
	   	require_once '../models/ModelFeed.php';
        $post = new Feed ($id_utilisateur, $vote, $commentaires ,$dateHeureCreation, $contenu, $nom_utilisateur );
        $post->addPost();
	   }else{};

    }else{

    }