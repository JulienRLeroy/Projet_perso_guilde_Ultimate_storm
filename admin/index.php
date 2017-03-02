
<!DOCTYPE HTML>
<html>
	<head>
		<title>Administration</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css"> 
		<link rel="stylesheet" href="css/styles.css">

	</head>
	<body>
		<header class="col-md-12">
			<div class="container">
				<h1>Administrations & Gestions</h1>
			</div>
		</header>
		<div class="col-md-2 menu">
			<label class="col-md-12">
				<a href="?p=video">Video</a>
			</label>
			<label class="col-md-12">
				<a href="?p=membres">Membres</a>
			</label>
			<label class="col-md-12">
				<a href="?p=">Roster</a>
			</label>
			<label class="col-md-12">
				<a href="?p=candidature">Candidature</a>
			</label>
		</div>
		<div class="col-md-10 resultat">
				<?php

					 include('../config/db.php');
					if(isset($_GET["p"]))
						{ 
							if(file_exists("pages/".$_GET["p"].".php"))
							{
								include("pages/".$_GET["p"].".php"); 
							}
						}
				?>
		</div>
		<footer class="col-md-12 footer">
			
		</footer>
	</body>
</html>
