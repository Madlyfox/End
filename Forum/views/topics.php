<?php 
	require('config.php');
		if (isset($_GET['categorie'])) {
			$categorie= $_GET['categorie'];

			$topics = $bdd2 ->prepare($req);

		}
 ?>