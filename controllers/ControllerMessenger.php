<?php 


    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Espace_Membre','Stanley','Ludwidge',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


?>
<div class="contactItem" style="background-color:var(--anthracit) ">

    <div class="">
        <?php    
        $currentId= $userInfo['id'];
      $getMembers= $bdd->query('SELECT * FROM Membres EXCEPT ');
      $membres= $getMembers->fetchAll();

      foreach ($membres as $membre){
        if ($membre['id'] != $userInfo['id']){ ?>
        
   
        <a href="#!messenger/victor" style="text-decoration: none; color: white;"> 
            <div class="container-fluid row ml-1 row" >           
                <div class="list victor " ><img class="contactIcon" src="../assets/img/membres/avatar/<?= $membre['avatar']  ?>" alt=""></div>
                <div class=" mt-1 p-1">
                    <p class="mt-3 ml-2 mb-0"><?= $membre['nom'].' '.$membre['prenom'] ?></p>
                    <p class="ml-1 "><i class="ui circle icon olive"></i>Online</p>
                </div>
            </div>
        </a>
    <?php }}; ?>

    </div>
</div>