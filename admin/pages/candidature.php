<?php

function CheckCandidature()
{ 

	include('../config/db.php');
	$req = $DB->query("SELECT * FROM candidature where status='1'")or die(print_r($DB->errorInfo(), true));
	
	if($req->rowCount() != 0) { 
		$req = $DB->query("SELECT prenom, pseudonyme, classe, spe1,spe2,spe3, jours1, jours2, jours3, age, ilvl, com FROM candidature order by id")or die(print_r($DB->errorInfo(), true)); 
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
				</li>";
		}
				
	}
	else
	{
		echo "Toutes les candidatures ont été traitées ( SALE PUTE <3 )";
		
	}
	echo "</ol>";
}

function CompterCandidatureEnAttente() 
{
	include('../config/db.php');
	$req = $DB->query("SELECT * FROM candidature where status='1'")or die(print_r($DB->errorInfo(), true)); 
	echo $req->rowCount(); 
}

?>

<h2>Candidature en cours : <?php CompterCandidatureEnAttente(); ?></h2>

<div class="col-md-12 link_candidature"> 
	<?php CheckCandidature(); ?>
</div>
<div class="col-md-12">
	<input type="text" placeholder="Entrez le pseudonyme"><input type="submit" value="Accepté(e)"><input type="submit" value="Refusé(e)">
</div>
