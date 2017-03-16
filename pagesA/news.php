<?php include('config/db.php'); ?>
<form method="post">
	<div class="col-md-12 add_news">
		<div class="col-md-6 news_left center">
			<input type="text" name="titre" placeholder="Titre de la news">
			<input type="text" name="auteur" placeholder="Auteur de la news">
		</div>
		<div class="col-md-6 news_right center">
			<textarea  class="col-md-12" name="commentaire" placeholder="Ecrivez la news" ></textarea> 
		</div>

		<div class="col-md-12 right">
			<input type="submit" name="submit" value="Envoyer la news">
		</div>
	</div>
</form>


<?php 
if (isset($_POST['submit']))
{  
    $titre = stripcslashes($DB->quote($_POST['titre']));
    $auteur = stripcslashes($DB->quote($_POST['auteur']));
	$commentaire = stripcslashes($DB->quote($_POST['commentaire']));

	
	
	if(empty($_POST['titre'])) 
	{
			echo"Vous n'avez indiqué de titre";
			
	} 
	else if (empty($_POST['auteur'])) 
	{
		echo "Vous n'avez pas indiqué d'auteur";
	}
	else if (empty($_POST['commentaire'])) 
	{
		echo "Vous n'avez pas mis de commentaires";
	}
	else {
		$req = $DB->query("INSERT INTO news SET titre=$titre, auteur=$auteur, message=$commentaire");
		
			echo "News Envoyée";
		
	}
}



?>