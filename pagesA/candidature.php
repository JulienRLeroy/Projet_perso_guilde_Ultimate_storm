<?php

function CheckCandidature()
{ 

	include('./config/db.php');
	$req = $DB->query("SELECT * FROM candidature where status='1'");
	
	if($req->rowCount() != 0) { 
		echo "<ol>";
		while($afficher_candidature =$req->fetch())
		{
			echo "<li> Candidature de : ".$afficher_candidature["prenom"]."
			<p>
					<p>Pseudonyme : ".$afficher_candidature["pseudonyme"]."</p>
					<p>Class : ".$afficher_candidature["classe"]."</p>
					<p>Spécialisations 1 : ".$afficher_candidature["spe1"]."</p>
					<p>Spécialisations 2 : ".$afficher_candidature["spe2"]."</p>
					<p>Spécialisations 3 : ".$afficher_candidature["spe3"]."</p>
					<p>Age : ".$afficher_candidature["age"]."</p>
					<p>Ilvl : ".$afficher_candidature["ilvl"]."</p>
					<p>Commentaire : ".$afficher_candidature["com"]."</p>
					<p>Jours 1 :  ".$afficher_candidature["jours1"]."</p>
					<p>Jours 2 :  ".$afficher_candidature["jours2"]."</p>
					<p>Jours 3 :  ".$afficher_candidature["jours3"]."</p>
			</p>
				</li>
				<form method='post'> 
				<input type='hidden' name='id' value='".$afficher_candidature['id']."'>
				<input type='submit' name='accepte' value='Accepter'>
				<input name='refuser' type='submit' value='Refuser'>
				</form>";
				
		}
				
	}
	else
	{
		echo "Toutes les candidatures ont été traitées";
		
	}
	echo "</ol>";
}

if(isset($_POST['accepte'])) {
	
	$id = $_POST['id'];
	$req = $DB->query("UPDATE candidature SET status='2' where id='$id'"); 
}
if (isset($_POST['refuser'])) {

	$id = $_POST['id'];
	$req = $DB->query("UPDATE candidature SET status='3' where id='$id'"); 
}


function CompterCandidatureEnAttente() 
{
	include('./config/db.php');
	$req = $DB->query("SELECT * FROM candidature where status='1'");
	echo $req->rowCount(); 
}

function CompterCandidatureAcceptee() 
{
	include('./config/db.php');
	$req = $DB->query("SELECT * FROM candidature where status='2'");
	echo $req->rowCount(); 
}

function CompterCandidatureRefusee() 
{
	include('./config/db.php');
	$req = $DB->query("SELECT * FROM candidature where status='3'");
	echo $req->rowCount(); 
}


?>
<div class="col-md-4">
	<h3>Candidature en cours : <?php CompterCandidatureEnAttente(); ?></h3>
</div>
<div class="col-md-4">
	<h3>Candidature Acceptée : <?php CompterCandidatureAcceptee(); ?></h3>
</div>
<div class="col-md-4">
	<h3>Candidature Refusée : <?php CompterCandidatureRefusee(); ?></h3>
</div>

<div class="col-md-12 link_candidature"> 
	<?php CheckCandidature(); ?>
</div>
