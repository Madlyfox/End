<?php 

session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');

    if (isset($_POST['formConnection'])) {
        $mailConnect = htmlspecialchars($_POST['mailConnect']);
        $mdpConnect = $_POST['mdpConnect'];
        if (!empty ($mailConnect) AND !empty ($mdpConnect)) {

               require_once '../models/ModelConnexion.php'; 
               $user =  new userConnexion;
               if ($user->connexion($mailConnect, $mdpConnect)) {
                
          
                header('Location: home.php?id='.$_SESSION['id'].'#!/messenger');
                   
               


            }else{
                $erreur = 'Vos identifiant semblent incorrect...';

            }
        }else{
            $erreur = 'Tout les champs doivent etres completés';
        }
    }

 ?>