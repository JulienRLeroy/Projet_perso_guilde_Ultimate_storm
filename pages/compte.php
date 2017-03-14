<?php 
if(!isset($_SESSION['id'])) 
{
	header('location: ./');
} 
?>

<form method="post" action="">
	<div class="col-md-6">
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
	<div class="col-md-6">
		<label>
			<h3>Informations In Game</h3>
		</label>
		
	</div>
	<div class="col-md-12">
		<input type="submit" value="Modifier les paramètres de compte">
	</div>
</form>
