<span class="navbar fixed-top">
        <div class="ml-5">
            <img class="logo" src="../assets/img/TheNodeBlack.svg" alt="">
            <p class="logoTitle color-text-flow" style="font-family: 'Quicksand', sans-serif;">TheNode</p>
        </div>
    <div class="nav-bran title disable color-text-flow" style="font-family: 'Quicksand', sans-serif;">TheNode</div>
    <div class="btn-group ">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
        </button>
        <i class="plus bell outline large black icon mt-2 float-right"></i>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="profil.php?id=<?=$_SESSION['id']?>">Profil</a>
            <a class="dropdown-item disabled" href="#">Feeds</a>
            <a class="dropdown-item" href="/Forum/index.php?id=<?=$_SESSION['id']?>">Forum</a>
            <div class="dropdown-divider"></div>
            <?php
                if (isset($_SESSION['id']) && $userInfo['id']==$_SESSION['id']) {
            ?>
            <a class="dropdown-item" href="deconnexion.php">Log-Out</a>
            <a class="dropdown-item" href="#">Settings</a>
            <?php  }else{ ; ?>
            <a class="dropdown-item" href="connexion.php">Log-In </a>
            <?php }; ?>
        </div>
    </div>
</span>