<?php 
	require('config.php');
	session_start();
	if(isset($_SESSION['ID'])) {

  		if(isset($_POST['tsubmit'])) {
  			$msgF="ok";
      		if(isset($_POST['tsujet'],$_POST['tcontenu'])) {
         		$sujet = ($_POST['tsujet']);
         		$contenu = ($_POST['tcontenu']);

         			if(!empty($sujet) AND !empty($contenu)) {
            			if(strlen($sujet) <= 70) {
               				if($_POST['tmail']) {
                  				$notif_mail = 1;
               				} else {
                  				$notif_mail = 0;
               				}
               				var_dump($ins);

	               			$ins = $bdd2->prepare('INSERT INTO topics (ID_createur, sujets, contenu, notif_createur, date_heure_creation) VALUES(?,?,?,?,NOW())');
	               			$ins->execute(array($_SESSION['ID'],$sujet,$contenu,$notif_mail));
	               			$error = $ins->errorInfo();
	               			print_r($error);
	               			$msgF= "Well done";
	        				} else {
	               				$msgF = "Votre sujet ne peut pas dépasser 70 caractères";
	            			}
	         			}else{
	            	$msgF = "Veuillez compléter tous les champs";
	         	}
	      	}
	   	}
	}else{
	   $msgF = "Veuillez vous connecter pour poster un nouveau topic";
	}

	require('include/createTopic.php');
 ?>