<?php 

	/**
	 * 
	 */
	class userConnexion 
	{
		
		function connexion($mailConnect, $mdpConnect)
		{
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace-Menbre','Stanley','Borromee1');
			$sql = 'SELECT * FROM `Membres` WHERE `mail` = :mail ';
			$connectAtmpt = $bdd->prepare($sql);
			$connectAtmpt->bindValue(':mail' , $mailConnect, PDO::PARAM_STR);
			$connectAtmpt-> execute;
			$userInfo = $connectAtmpt->FETCH (PDO::FETCH_ASSOC);  
		var_dump($mdpConnect);
			if (!empty($userInfo)) {
				password_verify($mdpConnect, $userInfo['motDePasse']);
				return true;
			}else{
				$error='Votre mail ne correspond à aucun inscrit';
				return false;
			}

			

		}
	}

 ?>