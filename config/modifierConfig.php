<?php 
session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace-Menbre','Stanley','Borromee1');

    if (isset($_SESSION['id'])) {

        $reqUser = $bdd->prepare("SELECT * FROM Membres WHERE id=?");
        $reqUser -> execute(array($_SESSION['id']));
        $userInfo = $reqUser->fetch();

        if (isset($_POST['nouveauNom']) AND !empty ($_POST['nouveauNom']) AND $_POST['nouveauNom'] !=$user['nom']) {
            $nouveauNom = htmlspecialchars($_POST['nouveauNom']);
            $insertnom = $bdd->prepare('UPDATE Membres SET nom =? WHERE id =?');
            $insertfirstname->execute(array($nouveauNom, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }

            if (isset($_POST['newMail']) AND !empty ($_POST['newMail'])  AND $_POST['newMail'] !=$user['mail']) {
            $newMail = htmlspecialchars($_POST['newMail']);
            $insertMail = $bdd->prepare('UPDATE Membres SET mail =? WHERE id =?');
            $insertMail->execute(array($newMail, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }
            if (isset($_POST['status']) AND !empty ($_POST['status'])  AND $_POST['status'] !=$user['status']) {
            $nouveauStatus = htmlspecialchars($_POST['status']);
            $insertStatus = $bdd->prepare('UPDATE Membres SET status =? WHERE id =?');
            $insertStatus->execute(array($nouveauStatus, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }

                if (isset($_POST['genre']) AND !empty ($_POST['genre'])  AND $_POST['genre'] !=$user['genre']) {
            $nouveauGenre = htmlspecialchars($_POST['genre']);
            $insertGenre = $bdd->prepare('UPDATE Membres SET genre =? WHERE id =?');
            $insertGenre->execute(array($nouveauGenre, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }

                if (isset($_POST['newMdp']) AND !empty ($_POST['newMdp']) AND isset($_POST['newMdp2']) AND !empty ( $_POST['newMdp2'] )) {

                    $mdp1=sha1($_POST['newMdp']);
                    $mdp2=sha1($_POST['newMdp2']);

                    if ($mdp1==$mdp2) {
                        $insertMdp=$bdd->prepare('UPDATE Membres SET motDePasse=? WHERE id=?');
                        $insertMdp->execute(array($mdp1,$_SESSION['id']));
                        header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
                    }else{
                        $msg='Vos mots de passe ne correspondent pas';
                    }
                }

        if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
            $tailleMax = 2195152;
            $extValid = array('jpg','png','svg','jpeg');
            if ($_FILES['avatar']['size']<=$tailleMax) {
                $extUpload= strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                if (in_array($extUpload, $extValid)) {
                   $repertoireAvatar= '../assets/img/membres/avatar/'.$_SESSION['id'].'.'.$extUpload;
                   $resultat= move_uploaded_file($_FILES['avatar']['tmp_name'], $repertoireAvatar);
                   if ($resultat) {
                       $updateAvatar = $bdd->prepare('UPDATE Membres SET avatar=:avatar WHERE id=:id');
                       $updateAvatar->execute(array(
                        'avatar'=>$_SESSION['id'].'.'.$extUpload,
                            'id'=>$_SESSION['id']

                       ));
                       
                                               header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
                   }else{
                    $msg='Erreur, l\'importation n\'a pas marché';
                   }
                }else{
                    $msg= 'Le format de votre image n\'est pas pris en charge';
                }
            }else{
                $msg="Votre photo de profile ne dois pas depasser 2Mo";
            }
        }
?>