<?php include '../controllers/ControllerInscription.php' ?>

<!DOCTYPE html >


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ANGULAR JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <!-- SEMENTIC UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styleLogin.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/script/bootstrap.js"></script>
    <!-- SEMENTIC JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
    <!-- PROPER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!--Main JS-->
    <script src="../assets/script/script.js"></script>
    <title>Registration</title>
</head>

<body>
    <div align="center" class="ui container" >
           <div class="ui grid centered row mt-">
            <div class="six wide column bg-white">
                <h1>Inscription</h1>
                <br>
                <form action="" method="POST" class="ui form needs-validation">      
                    <div class="two fields">
                        <div class="field">
                            <label for="nom">Nom de Famille </label>
                            <input type="text" placeholder="Enter nom" id="nom" name="nom" value="<?php if(isset($nom)) {echo $nom; } ?>">
                        </div>
                        <div class="field">
                            <label for="prenom">Prénom </label>
                            <input type="text" placeholder="Enter prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) {echo $prenom; } ?>">
                        </div>
                    </div>  
                        
                    <div class="field">
                        <label for="dateDeNaissance">Date de Naissance </label>
                        <input type="date"  id="dateDeNaissance" name="dateDeNaissance">
                    </div>
            
                    <div class="field">
                        <label for="mail">Mail </label>
                        <input type="text" placeholder="Enter mail" id="mail" name="mail" value="<?php if(isset($mail)) {echo $mail; } ?>">
                    </div>
                    <div class="field">
                        <label for="mail2">Confirmer  mail </label>
                        <input type="text" placeholder="Confirm mail" id="mail2" name="mail2">
                   </div>
                    <div class="field">
                        <label for="mdp">Mot de Passe 
                            <span data-tooltip="Votre mot de passe doit contenir au moins un caractère majuscule et un caractère spécial" data-variation="tiny">
                                <i class="icon help grey"></i>   
                            </span>
                        </label>
                        <input type="password" placeholder="Enter password" id="mdp" name="mdp">
                    </div>
                    <div class="field">
                        <label for="mdp2">Confirmer mot de passe </label>
                        <input type="password" placeholder="Confirm password" id="mdp2" name="mdp2">
                    </div>
                    <div class="field">
                    <div class="field">
                    </div>

                    </div>
                    <?php 
                        if (isset($erreur)) {
                            echo '<font color="red">'.$erreur;
                        }

                     ?>
                        <input class="ui button olive" type="submit" id="submit" name='formInscription' value="Inscription">
                        
                </form>
                <div class="ui bottom attached info message mt-3">
  <i class="icon help"></i>
  Déja Inscrit ?  <a href="connexion.php">Connectez vous ici</a> .
</div>
            </div>
        </div>
    </div>



</body>

</html>