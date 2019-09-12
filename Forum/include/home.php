<?php 
$getId=intval($_GET['id']);
        $reqUser=$bdd->prepare('SELECT * FROM Membres WHERE ID=?');
        $reqUser->execute(array($getId));
        $userInfo=$reqUser->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
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
    <div class="navbar">
        <div class="nav-brand">TheNode</div>
        <div class="btn-group mr-5">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
            </button>
            <i class="plus bell outline large black icon mt-2 ml-3"></i>
            <div class="dropdown-menu">
                <a class="dropdown-item " href="http://end/profil.php?id=<?=$_SESSION['ID']?>">Profile</a>
                <a class="dropdown-item" href="#">WorkSpace</a>
                <a class="dropdown-item disabled" href="/Forum/index.php?id=<?=$_SESSION['ID']?>">Forum</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="deconnexion.php">Log-Out</a>
                <a class="dropdown-item" href="#">Settings</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
        <!--left-->    
                        <?php
              
                 if (isset($_SESSION['ID']) && $userInfo['ID']==$_SESSION['ID']) {
                    
                 ?>
            <div class="container col-2 ">
                <div class="profilCard  ui raised">
                    <div align="right">
                        <a href="modifier.php?id=<?= $_SESSION['ID']  ?>">
                            <i  class="black pencil alternate icon"></i>
                        </a>
                    </div>
                    <div class="">
                        <?php 
                        if (!empty($userInfo['avatar'])) {
                        ?>
                            <img class="PP" src="assets/img/membres/avatar/<?= $userInfo['avatar'];?>" >
                        <?php
                        }
                         ?>
                        
                    </div>
                    <p><?php echo $userInfo['pseudo']; ?><br>
                        <small>WebDev Jr.</small></p>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>lvl 9</small>
                </div>
                <div class="profilCard  ui raised">
                        <p><button class="btn ">Files </button><button class="btn">Posts </button><button class="btn">Follows</button></p>
                    </div>
            </div>
            <?php }; ?>
        <!--center-->
            <div class="container  mt-5">
                <div class="container">
                    <div  id="forum" class=" container  bgWhite  ">
                        <div class="ui grid ">
                            <div class=" four column   ">
                                <table class="forum ">
                                   <tr class="header">
                                      <th class="main">Catégories</th>
                                      <th class="sub-info">Messages</th>
                                      <th class="sub-info">Dernier message</th>
                                   </tr>
                                       <?php
                                       while($c = $categories->fetch()) {
                                          $subcat->execute(array($c['ID']));
                                          $souscategories = '';
                                          while($sc = $subcat->fetch()) { 
                                             $souscategories .= '<a href="">'.$sc['nom'].'</a> | ';
                                          }
                                               $souscategories = substr($souscategories, 0, -3);
                                       ?>
                                   <tr>
                                      <td class="main">
                                         <p><?= $c['nom'] ?></p>
                                         <small>
                                              <?= $souscategories ?>
                                         </small>
                                      </td>
                                      <td class="sub-info">4083495</td>
                                      <td class="sub-info">04.12.2015 à 14h52<br />de PrimFX</td>
                                   </tr>
                                   <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--right-->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>