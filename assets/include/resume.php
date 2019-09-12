<?php include'../config/configExp.php' ?>
<div class="container col-2 " id="leftAligned" style="font-family: 'Quicksand', sans-serif;">
    <div class="profilCard resume ui raised" >
        <div align="right">
            <a href="modifier.php?id=<?= $_SESSION['id']  ?>">
                <i  class="black pencil alternate icon"></i>
            </a>
        </div>
        <div class="">
            <?php 
                if (!empty($userInfo['avatar'])) {
            ?>
            <img class="PP" src="../assets/img/membres/avatar/<?= $userInfo['avatar'];?>" >
            <?php
                }else{
             ?>   
            <img class="PP" src="../assets/img/membres/avatar/1.jpg" >        
            <?php
                };
             ?>       
        </div>
        <p>
            <?php echo $userInfo['nom'].' '.$userInfo['prenom']; ?>
            <br>
            <small><?= $userInfo['status'] ?></small>
        </p>
        <div class="progress" style="height: 10px;"  data-toggle="tooltip" data-placement="left" title="<?=$exp.' / '.$maxVlm?>">
            <div class="progress-bar bg" role="progressbar" style="background-color: var(--anthracitPurple); width: <?= $prcntVlm ?>%" aria-valuenow="<?=$userInfo['exp']?>" aria-valuemin="0" aria-valuemax="<?= $maxVlm ?>" >   
            </div>
        </div>
        <small>lvl <?= $lvl ?></small>
    </div>
    <div class="profilCard  ui raised navResume">
        <p><button class="btn ">Files </button><button class="btn">Posts </button><button class="btn">Follows</button></p>
    </div>
        <div class=" white p-4 raised leftDivFilled" >
            <div class="container-fluid">test</div>
            <div class="container-fluid">test</div>
            <div class="container-fluid">test</div>
        </div>
</div>

<script>
    
    
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
;
</script>