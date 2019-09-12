<?php

class Membres {
    public $db = null;
    public $_id = 0;
    public $_nom = '';
    public $_prenom = '';
    public $_dateDeNaissance = '';
    public $_avatar = '';
    public $_mail = '';
    public $_motDePasse = '';
    public $_exp = 1;


    public function __construct($nom, $prenom, $dateDeNaissance,$avatar, $mail, $mdp, $exp) {
      $this->db = new PDO('mysql:host=localhost;dbname=Espace-Menbre', 'Stanley', 'Borromee1', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $this->_nom = $nom;
      $this->_prenom = $prenom;
      $this->_dateDeNaissance = $dateDeNaissance;
      $this->_avatar = $avatar;
      $this->_mail = $mail;
      $this->_motDePasse = $mdp;
      $this->_exp= $exp;
    }


    public function getMembresList(){
        $sql  = 'SELECT * FROM `Membres`';
        $result = $this->db->query($sql)->fetchAll();
        return $result;
    }
    
    public function addMembres() {
    $sql = 'INSERT INTO `Membres`(nom, prenom, dateDeNaissance, avatar, mail, motDePasse, exp) VALUES (:nom, :prenom, :dateDeNaissance, :avatar, :mail, :motDePasse, :exp)';       
    $request = $this->db->prepare($sql);
    $request->bindValue(':nom', $this->_nom);
    $request->bindValue(':prenom', $this->_prenom);
    $request->bindValue(':dateDeNaissance', $this->_dateDeNaissance);
    $request->bindValue(':avatar', $this->_avatar);
    $request->bindValue(':mail', $this->_mail);
    $request->bindValue(':motDePasse', $this->_motDePasse);
    $request->bindValue(':exp', $this->_exp);
    $request->execute();
    }
};
