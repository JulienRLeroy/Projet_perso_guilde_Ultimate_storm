<?php include('config/db.php'); session_start();  
		if(!isset($_SESSION['admin'])) {
		header('location: ./');
	} 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Administration</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css"> 
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/stylesadmin.css">

	</head>
	<body>
		<div class="col-md-12 header_admin">
			<h1>Administrations</h1>
		</div>
		<div class="col-md-12 nav_admin">
			<ul>
				<li class="col-md-2"><a href="admin.php">Home</a></li>
				<li class="col-md-2"><a href="?a=candidature">Candidature</a></li>
				<li class="col-md-2"><a href="?a=membres">Membres</a></li>
				<li class="col-md-2"><a href="?a=roster">Roster</a></li>
				<li class="col-md-2"><a href="?a=souvenirs">Souvenirs</a></li>
				<li class="col-md-2"><a href="?a=news">News</a></li>
			</ul>
		</div>
		
		<div class="col-md-12 contenu_admin">
				<?php
					if(isset($_GET["a"]))
						{ 
							if(file_exists("pagesA/".$_GET["a"].".php"))
							{
								include("pagesA/".$_GET["a"].".php"); 
							}
						}
						else {
							echo "<h2>Bienvenue dans l'interface admin !</h2>";
						}
				?>
		</div>
	</body>
</html>
