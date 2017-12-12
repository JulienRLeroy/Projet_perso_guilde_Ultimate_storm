<?php include('config/db.php'); 

?>
<form method="post">
	<div class="col-md-12 add_news">
		<div class="col-md-12 news_left center">
			<div class="row">
				<input type="text" name="titre" placeholder="Titre de la news">
				<input type="text" name="auteur" placeholder="Auteur de la news">
			</div>
			<div class="row center news_right">
				<div class="container">
					<textarea class="col-md-12" name="commentaire" placeholder="Ecrivez la news" ></textarea> 
				</div>
			</div>
		</div>


		<div class="col-md-12 right">
			<input type="submit" name="submit" value="Envoyer la news">
		</div>
	</div>
</form>





<?php 
if (isset($_POST['submit']))
{  
    $titre = htmlentities($DB->quote($_POST['titre']));
    $auteur = htmlentities($DB->quote($_POST['auteur']));
	$commentaire = htmlentities($DB->quote($_POST['commentaire']));
	$date_news = date("d/m/y");

	
	
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
		$req = $DB->query("INSERT INTO news SET titre=$titre, auteur=$auteur, message=$commentaire, date='$date_news'");
		
			echo "News Envoyée";
		
	}
}

// function AfficheNews($DB) {
	// $req = $DB->query("SELECT * FROM news order by id DESC limit 6");
		// echo '<form method="post"><select>';
		// while($afficher_news = $req->fetch())
		// {
			// echo '<option value="'.$afficher_news['id'].'">'.$afficher_news["titre"].'</option>';
		// }
		// echo'<input type="submit" value="modifier" name="submitmodifier">';
		// echo '</select></form>'; 
//  AfficheNews($DB);
// }



?>
