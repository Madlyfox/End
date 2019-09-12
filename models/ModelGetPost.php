<?php 
	
	class Post 
{
  
       function getPost()
    {
      $post= '';
      $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $req = $bdd->prepare('SELECT * FROM `Feed` ORDER BY `dateHeureCreation` DESC' );
      $req->execute();
      return $req->fetchAll(PDO::FETCH_ASSOC) ;
    }

};
    $post = new Post;
    $posts = $post->getPost();

 ?>