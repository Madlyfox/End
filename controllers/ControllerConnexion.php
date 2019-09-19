<?php 

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');
    if (isset($_POST['formConnection'])) {
        $mailConnect = htmlspecialchars($_POST['mailConnect']);

        $test = 1;
        if (!empty ($_POST['mdpConnect']) AND !empty ($mailConnect)) {
                

               require '../models/ModelConnexion.php'; 

               if (password_verify($_POST['mdpConnect'], $userInfo['motDePasse'])) {
                echo'
                <script language="JAVASCRIPT">
                window.location.href = "http://end/views/home.php?id='.$userInfo['id'].'#!/messenger"
                </script>';

            }else{
                var_dump($_POST['mdpConnect']);
                $erreur = 'Vos identifiant semblent incorrect...';

            }
        }else{
            $erreur = 'Tout les champs doivent etres completés';
        }
    }

 ?>