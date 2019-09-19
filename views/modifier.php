<?php 
include '../controllers/sessionController.php';
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge');
        $bdd->exec("SET NAMES 'UTF8'");


    if (isset($_SESSION['id'])) {

        $reqUser = $bdd->prepare("SELECT * FROM Membres WHERE id=?");
        $reqUser -> execute(array($_SESSION['id']));
        $userInfo = $reqUser->fetch();

        if (isset($_POST['nouveauNom']) AND !empty ($_POST['nouveauNom']) AND $_POST['nouveauNom'] !=$user['nom']) {
            $nouveauNom = htmlspecialchars($_POST['nouveauNom']);
            $insertNom = $bdd->prepare('UPDATE Membres SET nom =? WHERE id =?');
            $insertNom->execute(array($nouveauNom, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }
            if (isset($_POST['nouvelleBio']) AND !empty ($_POST['nouvelleBio']) AND $_POST['nouvelleBio'] !=$user['bio']) {
            $nouvelleBio = htmlspecialchars($_POST['nouvelleBio']);
            $insertBio = $bdd->prepare('UPDATE Membres SET bio =? WHERE id =?');
            $insertBio->execute(array($nouvelleBio, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }
            if (isset($_POST['nouveauPrenom']) AND !empty ($_POST['nouveauPrenom']) AND $_POST['nouveauPrenom'] !=$user['prenom']) {
            $nouveauPrenom = htmlspecialchars($_POST['nouveauPrenom']);
            $insertNom = $bdd->prepare('UPDATE Membres SET prenom =? WHERE id =?');
            $insertNom->execute(array($nouveauPrenom, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id'].'#!/messenger');
        }

            if (isset($_POST['nouveauMail']) AND !empty ($_POST['nouveauMail'])  AND $_POST['nouveauMail'] !=$user['mail']) {
            $nouveauMail = htmlspecialchars($_POST['nouveauMail']);
            $insertMail = $bdd->prepare('UPDATE Membres SET mail =? WHERE id =?');
            $insertMail->execute(array($nouveauMail, $_SESSION['id']));
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

                    $mdp1=password_hash($_POST['newMdp'], PASSWORD_DEFAULT);
                    $mdp2=$_POST['newMdp2'];

                    if (password_verify($mdp2, $mdp)) {
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
        }?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- SEMENTIC UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">

<!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!-- BOOTSTRAP -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

<!-- SEMENTIC JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous">
    </script>
<!-- PROPER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">   
    </script>
<!-- ANGULAR JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <!--Main JS-->
    <script src="../assets/script/script.js"></script>
 
        <link rel="stylesheet" href="/assets/css/styleLogin.css">

    <title>Edition de Profil</title>
</head>

<body>
    <div class="ui container">
        <div class="ui grid centered" >
  
            <div class="ten wide column bg-white mt-5">
  
                <form action="" method="POST" class="ui form" enctype="multipart/form-data">  
                    <h1>Editer Profil</h1> 
                    <div class="two fields">
                        <div class="field">
                            <label for="nouveauNom">Nom :</label>
                            <input type="text" placeholder="<?= $userInfo['nom'] ?>"  name="nouveauNom" value="<?= $user['nom']; ?>">
                        </div>
                        <div class="field">
                            <label for="nouveauPrenom">Prenom :</label>
                            <input type="text" placeholder="<?= $userInfo['prenom'] ?>"  name="nouveauPrenom" value="<?= $user['prenom']; ?>">
                        </div>
                    </div> 

                    <div class="two fields">
                            
                            <div class="field">
                              <label for="genre">Genre :</label>
                              <select class="ui fluid dropdown" name='genre'>
                                <option value="NaN">Non renseigné</option>
                                <option value="femme">Femme</option>
                                <option value=homme>Homme</option>
                                <option value="autre">Autre</option>
                              </select>
                            </div>

                            <div class="field">
                              <label for="status">Status :</label>
                              <select class="ui fluid dropdown" name='status'>
                                <option value="">Status</option>
                                <option value="Developpeur Pro">Developpeur Pro</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="Autodidacte">Autodidactes</option>
                              </select>
                            </div>
                        </div>    
            
                    <div class="field">
                        <label for="nouveauMail">Mail :</label>
                        <input type="text" placeholder="<?= $userInfo['mail'] ?>"  name="nouveauMail" >
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label for="nouveauMdp">Mot de passe :</label>
                            <input type="password" placeholder="nouveau mot de passe" name="nouveauMdp">
                        </div>
                        <div class="field">
                            <label for="nouveauMdp2">Confirmation mot de passe :</label>
                            <input type="password" placeholder="confirmer votre nouveau mot de passe" name="nouveauMdp2">
                        </div>
                    </div>
                    <div class="field">
                        <label for="avatar">Photo de profil :</label>
                        <input type="file"  name="avatar">
                    </div>
                    <div class="field">
                        <label for="nouvelleBio">Bio :</label>
                        <textarea name="nouvelleBio" id="" cols="30" rows="10" placeholder=" <?= $userInfo['bio'] ?> "></textarea>
                    </div>
                    <?php if (isset($msg)) {
                        echo $msg;
                    } ?>

                        <input class="ui button red " type="submit" name='formInscription' value="Mettre à Jour  ">
                        <button class="btn "><a href="profil.php?id=<?= $_SESSION['id'] ?>"><i class="reply icon"></i></a></button>
                      
                </form>
            
        </div>


    </div>

</body>


</html>
<?php 

}else{
    header('connexion.php');
}

 ?>
