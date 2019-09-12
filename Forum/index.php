<?php 
	require('config.php');
session_start();
$categories = $bdd2->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $bdd2->prepare('SELECT * FROM f_souscategories WHERE ID_categorie =? ORDER BY nom');
	require('include/home.php');
 ?>