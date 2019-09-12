<?php 
    if (isset($_SESSION['id'])) {
      
    

 ?>
    
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/animateIndex.css">
    <!--CSS-->
    <link rel="stylesheet" href="./assets/css/style_forum.css">
    <!-- SEMENTIC UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- SEMENTIC JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
    <!-- PROPER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- ANGULAR JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <!--Main JS-->
    <script src="assets/script/script.js"></script>
    <title>Forum</title>
</head>

<body>
    <div align="center" class="ui container">
        <div class="ui grid centered ">
            <div class="four wide column bg-white raised mt-5" align="center">
                <h1>Nouveau Topic</h1>
                <br>    
                <form method="POST" class="ui form">
                        <div class="field">
                             <label for="tsujet">Sujet</label>
                             <input type="text" name="tsujet" size="70" maxlength="70" />
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label for="categorie">Catégorie</label>
                                <select name="categorie" class="ui fluid dropdown">
                                   <option>Catégorie 1</option>
                                   <option>Catégorie 2</option>
                                   <option>Catégorie 3</option>
                                   <option>Catégorie 1</option>
                                </select>                             
                            </div>
                            <div class="field">
                                <label for="sous-Categorie">Sous-Catégorie</label>
                                <select name="sous-Categorie" class="ui fluid dropdown" >
                                    <option>Sous-Catégorie 1</option>
                                    <option>Sous-Catégorie 2</option>
                                    <option>Sous-Catégorie 3</option>
                                    <option>Sous-Catégorie 1</option>
                                </select>                             
                            </div>
                        </div>
                        <div class="field">
                            <label for="tcontenu">Message</label>
                            <textarea name="tcontenu"></textarea>
                        </div>

                        <label for="tmail">notification</label>
                         <input type="checkbox" name="tmail" />
                         <br>
                         <input type="submit" name="tsubmit" value="Poster le Topic" />
                        <br>
                      <?php if(isset($msgF)) { 
                            echo $msgF ;
                        } ?>
                   </table>
                </form>

            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
</body>

</html>

<?php

}else{
  echo 'You must log-in to creat topics';
}
 ?>
