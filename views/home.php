<?php  
include '../controllers/homeController.php';
include '../controllers/ControllerPost.php';
?>
<!DOCTYPE html>
<html lang="fr" ng-app="messengerApp">

<head>
    <?php include '../assets/include/head.php'; ?>
        <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/animation.css">
    <title>TheNode</title>
</head>
    
<body>
    <?php
        if (isset($_SESSION['id']) && $userInfo['id']==$_SESSION['id']) {
        include '../assets/include/navbar.php';
     }; ?>
    <div class="container-fluid content p-0">
        <div class="row">
        <!--left-->    
        <?php
            if (isset($_SESSION['id']) && $userInfo['id']==$_SESSION['id']) 
                {
                    include '../assets/include/resume.php';
                };
        ?>
        <!--center-->
        <div class="container col-md-6 ">
            <div class="container">
                <h1 class="display-3" style="   font-family: 'Quicksand', sans-serif;">Actualitées</h1>
                <form action="" method="POST">
                    
                <div class="ui  input large fluid ">
                    <textarea class='autoExpand mt1' rows='3' data-min-rows='3' placeholder='Quelque chose à raconter ?' name="post"></textarea>

                    <button class="btn" name="sendPost" type="submit"><i class="send  icon"></i></button>
                </div>
                </form>
                <div class="container" align="">
                    <i class="file outline icon "></i>
                </div>
                <hr class="mt-5">
                <?php 
                    include '../models/ModelGetPost.php';
                    foreach ($posts as $post) {
                ?>
                <div class="ui card mt-5 mb-5 raised" id="card">
                    <div class="p-2">
                        <div class="right floated meta"><?= $post['dateHeureCreation'] ?></div>
                        <p class="nameUserPost">
                            
                        <?= $post['nom_utilisateur'] ?> 
                        </p>
                    </div>
                    <div class="p-2 card-content fluid" >
                        <p class="p-3">  
                            <?= $post['contenu']; ?>
                        </p>
                        <div class="parent">
                            <a href="javascript:void(0)" class="like-button like-button-up">
                                <i class="thumbs up outline icon" aria-hidden="true"> </i>
                                <small>123</small>
                            </a>
                            <a href="javascript:void(0)" class="like-button like-button-down">
                              <i class="thumbs down outline icon " aria-hidden="true"></i>
                              <small>33</small>
                            </a>
                        </div>
                    </div>
                </div>
                <?php }; ?>
            </div>
        </div>
        <!--right-->
        <div class="container-fluid  col-3  p-0 " id="rightAligned" >
            <?php
                if (isset($_SESSION['id']) && $userInfo['id']==$_SESSION['id']) {
            ?>
            <div class=" white p-4 raised rightDivFilled" style="position: fixed;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore doloribus, repudiandae tempora nam soluta quaerat blanditiis quo nemo! Fugiat ad, quisquam qui eaque dolores corrupti in quod ipsam accusantium id.
            </div>
            <div class=" white p-4 raised rightDivFilled2" style="position: fixed;" >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore doloribus, repudiandae tempora nam soluta quaerat blanditiis quo nemo! Fugiat ad, quisquam qui eaque dolores corrupti in quod ipsam accusantium id.

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas minima consectetur illo dolorem quia illum amet, sit veniam deleniti nemo cumque saepe dolorum, doloremque architecto culpa nulla eum neque beatae!
            </div>

            <div class=" contact">
                <div class="container-fluid raised search">
                    <div class="ui icon input mini search p-2">
                        <input type="text" class="mt-1" placeholder="Looking for someone ?">
                        <button class="btn"><i class="search   icon"></i></button>
                    </div>    
                <i class="cog icon float-right large mt-3 pointer"></i>
                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="icon largun minimize window float-right mt-2 "></i>
                </button>
            </div>
                <div class="collapse" id="collapseExample">
                    <div class="container-fluid" ng-view >
                    </div>
                </div>
            </div>

            <?php }else{  ?>
            <div class="  p-4 raised leftDivFilledOffline" style="position: fixed;">
                <div class="text-center">
                    <h1 class="offlineBanner">You must be logged in to interact with this community</h1>
                    <a href="inscription.php">    
                        <button class="btn btn-primary">Sign-In</button>
                    </a>
                    <a href="connexion.php">    
                        <button class="btn btn-danger">Log-In</button>
                    </a>
                </div>   
            </div>
            <?php };?>
        </div>
    </div>
    <script>
        $('.like-button').click(function() {  
    $(this).parent().find('.like-button').not(this).removeClass('like-button--active');
    $(this).toggleClass('like-button--active');
});

    </script>
    <?php include '../assets/include/script.php'; ?>
</body>
</html>
