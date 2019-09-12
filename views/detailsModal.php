<?php 

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');

    if (isset($_SESSION['id'])) {

        $reqUser = $bdd->prepare("SELECT * FROM Membres WHERE id=?");
        $reqUser -> execute(array($_SESSION['id']));
        $userInfo = $reqUser->fetch();

        if (isset($_POST['bio']) AND !empty ($_POST['bio'])) {
            $bio = htmlspecialchars($_POST['bio']);
            $insertBio = $bdd->prepare('UPDATE Membres SET bio =? WHERE id =?');
            $insertBio->execute(array($bio, $_SESSION['id']));
        }
            if (isset($_POST['genre']) AND !empty ($_POST['genre'])) {
            $genre = htmlspecialchars($_POST['genre']);
            $insertGender = $bdd->prepare('UPDATE Membres SET genre =? WHERE id =?');
            $insertGender->execute(array($genre, $_SESSION['id']));
        }

            if (isset($_POST['status']) AND !empty ($_POST['status'])) {
            $status = htmlspecialchars($_POST['status']);
            $insertstatus = $bdd->prepare('UPDATE Membres SET status =? WHERE id =?');
            $insertstatus->execute(array($status, $_SESSION['id']));
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
    }    
?>