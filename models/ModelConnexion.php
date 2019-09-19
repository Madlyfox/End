<?php 
	

					$bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');
			$sql = 'SELECT * FROM `Membres` WHERE `mail` = :mail ';
			$connectAtmpt = $bdd->prepare($sql);
			$connectAtmpt->bindValue(':mail' , $_POST['mailConnect'], PDO::PARAM_STR);
			$connectAtmpt-> execute();
			$userInfo = $connectAtmpt->FETCH (PDO::FETCH_ASSOC);

	class userConnexion 
	{


		function connexion()
		{
			
			$pswCheck =   password_verify($_POST['mdpConnect'], $userInfo['motDePasse']);

			

		}
	}

 ?>