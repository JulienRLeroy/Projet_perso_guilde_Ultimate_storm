<?php include('config/db.php'); session_start(); 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Ultimate Størm</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css"> 
		<link rel="stylesheet" href="css/styles.css">
		<link rel="icon" type="image/png" href="./css/img/favicon.gif" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="./js/roster.php.js"> </script>
		<script src="./js/controlPlayer.js"></script>
	</head>
	<body>
	
		<header class="col-md-12">
			<ul class="col-md-12">
					<li class="col-md-2"> <a href="./">Home</a></li>
					<li class="col-md-2"> <a href="http://eu.battle.net/wow/fr/guild/hyjal/Ultimate%20St%C3%B8rm/" target="_blanc">Guilde</a></li>
					
				<?php if(!isset($_SESSION['id'])) { ?>
					<li class="col-md-2"> <a href="?p=candidature">Candidature</a></li>
					<li class="col-md-2"> <a href="?p=connexion">Connexion</a></li>
				
				<?php  } else { ?>
					<li class="col-md-2"><a href="?p=compte">Compte</a></li>
					<li class="col-md-2"> <a href="?p=roster">Rosters</a> 
					<li class="col-md-2"> <a href="?p=souvenirs">Souvenirs</a></li>
				<?php if((isset($_SESSION['admin']))) 
					{
					
						echo"<li class='col-md-2'> <a href='admin.php'>Admin</a></li>";
					}
				  } ?>
			</ul>	
		</header>
		
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<div class="col-md-12 cadre_general">
				<?php 
					if(isset($_GET["p"]))
						{ 
							if(file_exists("pages/".$_GET["p"].".php"))
							{
								include("pages/".$_GET["p"].".php"); 
							}
						}
					else
						{
							include("module/video.php");
							include("module/news.php");
						}  
					
				?>
				</div>
			</div>
		</div>
	</body>
</html>
