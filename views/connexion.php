<?php 
session_start();
include '../controllers/ControllerConnexion.php';
 ?>
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
 
        <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styleLogin.css">

    <!--Main JS-->
    <script src="../assets/script/script.js"></script>
    <title>Login</title>
</head>

<body>
    <div align="center" class="ui container">
        <div class="ui grid centered ">
            <div class="four wide column bg-white raised">
                <h1>Connexion</h1>
                <br>    
                <form action="" method="POST" class="ui form">        
                    <div class="field">
                        <label for="mail">Mail :</label>
                        <input type="email" placeholder="Enter mail"  name="mailConnect" value="<?php if(isset($mail)) {echo $mail; } ?>">
                    </div>
                    <div class="field">
                        <label for="mdp">Mot de Passe :</label>
                        <input type="password" placeholder="Enter password"  name="mdpConnect">
                    </div>
  
                        <input class="ui button olive " type="submit" name='formConnection' value="Log-in"> 
                    
         
                </form>
                <div class="ui bottom attached info message">
                  <i class="icon help"></i>
                  Pas encore de compte ?  <a   href="inscription.php">inscrivez vous ici</a> .
                </div>
                <?php 
                    if (isset($erreur)) {
                        echo '<font color="red">'.$erreur;
                    }
                 ?>
            </div>
        </div>
    </div>
</body>

</html>