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
class Feed {
    public $db = null;
    public $_id = 0;
    public $_id_utilisateur = '';
    public $_vote = '';
    public $_commentaires = '';
    public $_dateHeureCreation = '';
    public $_contenu = '';
    public $_nom_utilisateur = '';



    public function __construct( $id_utilisateur, $vote,$commentaires, $dateHeureCreation, $contenu, $nom) {
      $this->db = new PDO('mysql:host=localhost;dbname=Espace-Menbre', 'Stanley', 'Borromee1', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $this->_id_utilisateur = $id_utilisateur;
      $this->_vote = $vote;
      $this->_commentaires = $commentaire;
      $this->_dateHeureCreation = $dateHeureCreation;
      $this->_contenu = $contenu;
      $this->_nom_utilisateur = $nom;
  

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
    $sql = 'INSERT INTO `Feed`(id_utilisateur, vote, commentaires, dateHeureCreation, contenu, nom_utilisateur) VALUES (:id_utilisateur, :vote, :commentaires, :dateHeureCreation, :contenu, :nom_utilisateur)';       
    $request = $this->db->prepare($sql);
    $request->bindValue(':id_utilisateur', $this->_id_utilisateur);
    $request->bindValue(':vote', $this->_vote);
    $request->bindValue(':commentaires', $this->_commentaires);
    $request->bindValue(':dateHeureCreation', $this->_dateHeureCreation);
    $request->bindValue(':contenu', $this->_contenu);
    $request->bindValue(':nom_utilisateur', $this->_nom_utilisateur);

    $request->execute();
    }
};