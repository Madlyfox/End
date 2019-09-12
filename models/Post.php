<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Membres
 *
 */
class Post 
{
	private $_id;
	private $_id_utilisateur;
    private $_vote;
    private $_commentaires;
    private $_dateHeureCreation;
    private $_contenu;
    private $_nom_utilisateur;



    public function __construct(array $data)
     {
  		
  		$this->hydrate($data);
    }

    public function hydrate(array $data)
    {
    	foreach ($data as $key => $value) {
    		$method ='set'.ucfirst($key);
    		if (method_exists($this, method)) 
    		{
    			$this->$method($value);
    		}
    	}
    }

    //Setters
    public function setId($id)
    {
    	$id =(int) $id;

    	if ($id > 0) 
    	{
    		$this->_id = $id;
    	}

    }
    public function setUserId($id_utilisateur)
    {
    	$id_utilisateur =(int) $id_utilisateur;

    	if ($id_utilisateur > 0) 
    	{
    		$this->_id_utilisateur = $id_utilisateur;
    	}

    }

    public function setCom($commentaires)
    {
    	if (is_string($commentaires)) 
    	{
    		$this->_commentaires = $commentaires;
    	}
    }
    public function setDate($dateHeureCreation)
    {
    	$this->_dateHeureCreation = $dateHeureCreation;
    }
    public function setContent($contenu)
    {
    	if (is_string($contenu)) {
    		$this->_contenu = $contenu;
    	}
    }
    public function setUserName($nom_utilisateur)
    {
    	if (is_string($nom_utilisateur)) {
    		$this->_nom_utilisateur = $nom_utilisateur;
    	}
    }

    };
    //Getters
    public function id()
    {
    	return $this->_id;
    }
    public function idUser()
    {
    	return $this->_id_utilisateur;
    }
    public function commentaire()
    {
    	return $this->_commentaires;
    }
    public function date()
    {
    	return $this->_dateHeureCreation;
    }
    public function content()
    {
    	return $this->_contenu;
    }
    public function userName()
    {
    	return $this->_nom_utilisateur;
    }



    /**
     * 
     */
    public function getFeedList(){
        $sql  = 'SELECT * FROM `Feed`';
        $result = $this->db->query($sql)->fetchAll();
        return $result;
    }
    
    public function addPost() {
    $sql = 'INSERT INTO `Feed`(id_utilisateur, vote, commentaires, dateHeureCreation, contenu, nom_utilisateur) VALUES (:id_utilisateur, :vote, :commentaires, :dateHeureCreation, :contenu, :nom)';       
    $request = $this->db->prepare($sql);
    $request->bindValue(':id_utilisateur', $this->_id_utilisateur);
    $request->bindValue(':vote', $this->_vote);
    $request->bindValue(':commentaires', $this->_commentaires);
    $request->bindValue(':dateHeureCreation', $this->_dateHeureCreation);
    $request->bindValue(':contenu', $this->_contenu);
    $request->bindValue(':nom', $this->_nom_utilisateur);

    $request->execute();
    }
};	