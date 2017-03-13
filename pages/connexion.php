<form method="post">
	<input type="text" placeholder="Pseudonyme" name="pseudonyme"><br />
	<input type="email" placeholder="Votre email" name="email"><br /><br />
	<input type="submit" name="submitconnexion" value="Connexion">
</form>
<?php
	session_start();
	
	if(isset($_SESSION['id'])) 
	{
		header('location: index.php');
	}
	
	if(isset($_POST['submitconnexion'])) {
		
		$pseudonyme = stripcslashes($DB->quote($_POST['pseudonyme']));
		$email = stripcslashes($DB->quote($_POST['email']));
		
		$req = $DB->query("SELECT id, rank FROM candidature WHERE status='2' and email=$email and pseudonyme=$pseudonyme");
		
		if($tab = $req->fetch()) 
		{
			$_SESSION['id'] = $tab['id'];
				
			if($tab['rank'] == 1) 
			{
					$_SESSION['admin'] = 1;
			} 
			header('location: index.php');	
		} 
		else 
		{
			echo"Mauvais identifiants";
		}
	} 
?>