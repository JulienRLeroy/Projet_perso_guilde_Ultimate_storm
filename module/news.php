<?php
function CheckNews()
{ 

		include('./config/db.php');
		$req = $DB->query("SELECT * FROM news order by id DESC limit 6");
	
		while($afficher_news = $req->fetch())
		{
			echo "
					<div class='col-md-6 news'>
						<div class='col-md-9 titre_news gauche'>
							".$afficher_news["titre"]."
						</div>
						<div class='col-md-3 auteur_news droite'>
							".$afficher_news["auteur"]."
						</div>
						<div class='col-md-12 message_news gauche'>
							".$afficher_news["message"]."
						</div>
						<div class='col-md-12 date_news droite'>
							Posté le : ".$afficher_news["date"]."
						</div>
					</div>
				";
		}
}

?>

<?php CheckNews(); ?>