<?php 
	 class  Model
	{
		
		//instancie la connexion à la BDD
		  function setBdd()
		{
		
			$_bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace-Menbre','Stanley','Borromee1');
			$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		}
		//Recupère la connexion  à la BDD
		 function getBdd()
		{
			if (self::$_bdd == null) {
				self::setBdd();
				return self::$_bdd;

			};
		}
		 function getAll($table)
		{
			$var = [];
			$_bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace-Menbre','Stanley','Borromee1');
			$req = $_bdd->prepare('SELECT * FROM  ".$table."  ORDER BY id');
			$req->execute();
			return $req->fetchAll(PDO::FETCH_ASSOC) ;
		}
	}

 ?>