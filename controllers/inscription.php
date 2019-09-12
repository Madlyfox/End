<?php  
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace-Menbre','Stanley','Borromee1');


    if (isset($_POST['formInscription'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $dateDeNaissance = htmlspecialchars(($_POST['dateDeNaissance']));
            $mail = htmlspecialchars($_POST['mail']);
            $mail2 = htmlspecialchars($_POST['mail2']);
            $mdp = sha1($_POST['mdp']);
            $mdp2 = sha1($_POST['mdp2']);
            $avatar = '1.jpg'; 
            $exp =0;
        if(!empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['dateDeNaissance']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])) {
            if ($mail == $mail2) {
                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqMail = $bdd->prepare('SELECT * FROM Membres WHERE mail=? ');
                    $reqMail->execute(array($mail));
                    //rowCont Pour connaitre le nombre de collones qui existe pou ce qu'on a noté avant.
                    $mailExist = $reqMail->rowCount();
                    
                    if ($mailExist==0) {
                       
                        if ($mdp == $mdp2) {
                            require_once 'MembreConfig.php';
                            $membres = new Membres($nom , $prenom, $dateDeNaissance, $avatar, $mail, $mdp  );
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
            $erreur='Tout les champs doivent etre completes';
        }
    };
 ?>