<?php 

 $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');
 include '../models/ModelMembre.php';

    if (isset($_POST['formInscription'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $dateDeNaissance = htmlspecialchars(($_POST['dateDeNaissance']));
            $mail = htmlspecialchars($_POST['mail']);
            $mail2 = htmlspecialchars($_POST['mail2']);
            $mdp = password_hash($_POST['mdp'], PASSWORD_ARGON2I);
            $mdp2 = $_POST['mdp2'];
            $avatar = '1.jpg'; 
            $exp =0;

            $prenomRegex = '/^[A-ZÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+([-]{1}[A-Z][a-z]+)*$/';
            $nomRegex = '/^[A-ZÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+([\s-]{1}[A-Z][a-z]+)*$/';
            $mdpRegex = '/[a-zA-Z1-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{8}(?=[0-9])+(?=[@!*$^!?£&-_@^`!²#~¹])/';


        if(!empty($nom)AND !empty($prenom)AND !empty($dateDeNaissance) AND !empty($mail) AND !empty($mail2) AND !empty($mdp) AND !empty($mdp2)) {
            if (preg_match($nomRegex, $nom) AND preg_match($prenomRegex, $prenom)) {
                if (preg_match($mdpRegex, $mdp2) ){
                    if ($mail == $mail2) {
                        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            $reqMail = $bdd->prepare('SELECT * FROM Membres WHERE mail=? ');
                            $reqMail->execute(array($mail));
                            //rowCont Pour connaitre le nombre de collones qui existe pou ce qu'on a noté avant.
                            $mailExist = $reqMail->rowCount();
                            if ($mailExist==0) {
                                if (password_verify ( $mdp2 , $mdp )) {
                                    $membres = new Membres($nom , $prenom, $dateDeNaissance, $avatar, $mail, $mdp, $exp  );
                                    $membres->addMembres();
                                    $erreur = 'votre compte a bien été crée';
                                }else{
                                    $erreur ='Vos mots de passe ne correspondent pas';
                                }
                            }else{
                                $erreur = 'adresse mail deja utilisée';
                            }
                        }else{
                            $erreur='Votre adresse mail n\'est pas valide';
                        };
                    }else{
                        $erreur ='Vos adresses mail ne correspondent pas';
                    } 
                }else{
                    $erreur ='Votre mot de passe est invalide';
                }
             }else{
                $erreur='Votre Nom ou votre prénom est incorrecte';
             } 
        }else{
            $erreur='Tout les champs doivent etre completes';
        }
    };
 ?>