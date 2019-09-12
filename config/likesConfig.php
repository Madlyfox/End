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
class Like {
    public $db = null;
    public $_id = 0;
    public $_id_post = '';
    public $_id_membre = '';

    public function __construct( $id_utilisateur, $id_membre) {
      $this->db = new PDO('mysql:host=localhost;dbname=Espace-Menbre', 'Stanley', 'Borromee1', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $this->_id_post = $id_post;
      $this->_id_membre = $id_membre;
  
    }
    /**
     * 
     */
    public function getLikesList(){
        $sql  = 'SELECT * FROM `Likes`';
        $result = $this->db->query($sql)->fetchAll();
        return $result;
    }
    
    public function addLike() {
    $sql = 'INSERT INTO `Likes`(id_post, id_membre) VALUES (:id_post, :id_membre )';       
    $request = $this->db->prepare($sql);
    $request->bindValue(':id_post', $this->_id_post);
    $request->bindValue(':id_membre', $this->_id_membre);

    $request->execute();
    }
};


class Dislike {
    public $db = null;
    public $_id = 0;
    public $_id_post = '';
    public $_id_membre = '';

    public function __construct( $id_utilisateur, $id_membre) {
      $this->db = new PDO('mysql:host=localhost;dbname=Espace-Menbre', 'Stanley', 'Borromee1', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $this->_id_post = $id_post;
      $this->_id_membre = $id_membre;
  
    }
    /**
     * 
     */
    public function getDislikesList(){
        $sql  = 'SELECT * FROM `Dislikes`';
        $result = $this->db->query($sql)->fetchAll();
        return $result;
    }
    
    public function addDislike() {
    $sql = 'INSERT INTO `Likes`(id_post, id_membre) VALUES (:id_post, :id_membre )';       
    $request = $this->db->prepare($sql);
    $request->bindValue(':id_post', $this->_id_post);
    $request->bindValue(':id_membre', $this->_id_membre);

    $request->execute();
    }
};
