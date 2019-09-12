<?php 
session_start();
 include '../controllers/sessionController.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<?php include '../assets/include/head.php' ?>
	<link rel="stylesheet" href="../assets/css/profil.css">
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<title>Profil</title>
</head>
<body>


	<div class="container-fluid p-0">
		<div class="container-fluid banner">
			<div class="p-4">
				
			<a href="home.php?id=<?=$_SESSION['id']?>" class	>
				<img src="../assets/img/TheNodeBlack.svg" alt="" style="width:50px; height: 50px; ">
			</a>
			</div>
			<!--image de profil-->

            <?php 
                if (!empty($userInfo['avatar'])) {
            ?>
            <img class="PP" src="../assets/img/membres/avatar/<?= $userInfo['avatar'];?>" >
            <?php
                }
             ?>  

			
			<div class="bannerContent">
			<!--info-->
			<h1> <?= $userInfo['nom'].' '.$userInfo['prenom']; ?> </h1>
			<p><?= $userInfo['status'];?></p>
			<!--bio-->
			<p>
				<?php 

					if (!empty($userInfo['bio'])) {
						echo $userInfo['bio'];
					}else{
						echo "Pas de description";
					}

				 ?>
			</p>
			<!--link-->
			</div>



		</div>
		<div class="container ">

			<div class="firstContainer raised">
				<div class="containerHeader">
					<p >Titre</p>
				</div>
				<div class="containerContent">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, vitae molestiae dicta ipsum quia et laborum fugiat, expedita omnis consequuntur perferendis, totam maiores? Ut libero, ratione accusamus odio quibusdam fugit?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia asperiores velit, facilis neque quos dolorum id iusto. Repudiandae ducimus, libero voluptas sed iste quidem dolorum neque possimus placeat dolor corrupti.</p>
				</div>

			</div>
			<div class="secondContainer raised">
				<div class="containerHeader">
					<p>Contact</p>
				</div>
				<div class="containerContent">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, vitae molestiae dicta ipsum quia et laborum fugiat, expedita omnis consequuntur perferendis, totam maiores? Ut libero, ratione accusamus odio quibusdam fugit?</p>
				</div>
				


			</div>
			<div class="thirdContainer">
				


			</div>		
			<div class="fourthContainer">
				


			</div>
		</div>
	</div>
	
</body>
</html>