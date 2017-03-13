<?php 
if(!isset($_SESSION['id'])) 
{
	header('location: ./');
} 
?>

<form method="post" action="">
	<div class="col-md-4">
		<label>
			<h3>Mot de passe</h3>
		</label>
		<p>
			<input type="password" placeholder="Nouveau mot de passe">
		</p>
		<p>
			<input type="password" placeholder="Répétez">
		</p>
	</div>
	<div class="col-md-4">
		<label>
			<h3>Email</h3>
		</label>
		<p>
			<input type="email" disabled="off" value="$email">
		</p>
		<p>	
			<input type="email" placeholder="Changer l'email">
		</p>
	</div>
	<div class="col-md-4">
		<label>
			<h3>Avatar</h3>
		</label>
	</div>
	<div class="col-md-12">
		<input type="submit" value="Modifier les paramètres de compte">
	</div>
</form>
