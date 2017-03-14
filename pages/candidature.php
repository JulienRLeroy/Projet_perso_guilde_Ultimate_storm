<?php include('config/db.php'); session_start();  
		if(isset($_SESSION['id'])) 
		{
			header('location: ./');
		} 
		if(isset($_SESSION['captcha'])) 
		{
			$captcha = $_SESSION['captcha'];
		}
?>

<form method="post" action="?p=candidature" >
		<div class="condition">
			Pour tout recrutement, il est nécéssaire d'envoyer une candidature, ou de devoir contacter une personne adapté pour l'invitation​
			N'oubliez pas que la guilde est uniquement de l'alliance, et du serveur Hyjal. Si vous ne respectez pas ces deux critères, la candidature sera refusé.
		</div>
		<div class="col-md-3">
			<div class="row">
				<input class="input_candidature decoration" type="text" name="prenom" placeholder="Prénom" >
			</div>
			<div class="row">
				<input class="input_candidature decoration" type="text"  name="pseudonyme" placeholder="Pseudonyme" >
			</div>
			<div class="row">
				<input class="input_candidature decoration" type="email" name="email" placeholder="Email" >
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
				<input class="input_candidature decoration" type="number" name="age" placeholder="Age" >
			</div>
			<div class="row">
				<input class="input_candidature decoration" type="number" name="ilvl" max="940" placeholder="ilvl" >
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
				<select class="input_candidature decoration" name="classe">		
					<option value="chaman">Chaman</option>
					<option value="Chasseur">Chasseur</option>
					<option value="Chasseur_de_demons">Chasseur de démons</option>			
					<option value="Chevalier_de_la_Mort">Chevalier de la Mort</option>
					<option value="Demoniste">Démoniste</option>
					<option value="Druide">Druide</option>
					<option value="Guerrier">Guerrier</option>
					<option value="Mage">Mage</option>
					<option value="Moine">Moine</option>
					<option value="Paladin">Paladin	</option>
					<option value="Pretre">Prêtre</option>
					<option value="Voleur">Voleur</option>
				</select>
			</div>		
		</div>
		
		<div class="col-md-3">
			<table>
			<tr>
				<th>
					<img class="role_spe_class" src="./css/img/role_spe/tank.png">
				</th>
				<th>
					<img class="role_spe_class" src="./css/img/role_spe/heal.png">
				</th>
				<th>
					<img class="role_spe_class" src="./css/img/role_spe/dps.png">
				</th>
			</tr>
			<tr>
				<td>
					<input type="checkbox" value="tank" name="spe1">
				</td>
				<td>
					<input type="checkbox" value="heal" name="spe2">
				</td>
				<td>
					<input type="checkbox" value="dps" name="spe3">
				</td>
			</tr>
			</table>
		</div>
		
	<div class="col-md-12 calendrier_dispo decoration">
		<table class="col-md-12">
			<tr>
				
				<th><input type="checkbox" name="jours1" value="Vendredi Samedi" name="jour1" ></th>
				<td>Vendredi</td>
				<td>
					<p>&</p>
				</td>
				<td>Samedi</td>
			</tr>
			<tr>
				<th><input type="checkbox" name="jours2" value="Lundi Mercredi" name="jour2" ></th>
				<td>Lundi</td>
				<td>
					<p>&</p>
				</td>
				<td>Mercredi</td>
			</tr>
			<tr>
				<th><input type="checkbox" name="jours3" value="Mardi Jeudi" name="jour3" ></th>
				<td>Mardi</td>
				<td>
					<p>&</p>
				</td>
				<td>Jeudi</td>
			</tr>
		</table>
	</div>
		
	<div class="col-md-12">
			<textarea class="col-md-12 decoration" placeholder="Décrivez-vous" name="com" style="margin-top: 5px; resize: none; height: 150px;" ></textarea>
	</div>
	<div class="col-md-12 input_send_candidature" style="color: white;">
		Combien font <?php echo Captcha(); ?> 
		<input style="color: green;" type="text" name="captcha" placeholder="Votre réponse ?">
	</div>
	<div class="col-md-12 input_send_candidature">
		<input class="input_candidature decoration" type="submit" name="submit" value="Envoyer la candidature" >
	</div>
	
</form>
<?php
if (isset($_POST['submit']))
{  
    $prenom = stripcslashes($DB->quote($_POST['prenom']));
    $age = stripcslashes($DB->quote($_POST['age']));
    $pseudonyme = stripcslashes($DB->quote($_POST['pseudonyme']));
	$classe = stripcslashes($DB->quote($_POST['classe']));
	$ilvl = stripcslashes($DB->quote($_POST['ilvl']));
	$com = stripcslashes($DB->quote($_POST['com']));
	$spe1 = stripcslashes($DB->quote($_POST['spe1']));
	$spe2 = stripcslashes($DB->quote($_POST['spe2']));
	$spe3 = stripcslashes($DB->quote($_POST['spe3']));
	$email = stripcslashes($DB->quote($_POST['email']));
	$jours1 = stripcslashes($DB->quote($_POST['jours1']));
	$jours2 = stripcslashes($DB->quote($_POST['jours2']));
	$jours3	= stripcslashes($DB->quote($_POST['jours3']));
	$captchaUsers = $_POST['captcha'];
	
	
	if(empty($_POST['prenom']) || empty($_POST['age']) || empty($_POST['pseudonyme']) || empty($_POST['classe']) || empty($_POST['ilvl']) || empty($_POST['com']) || empty($_POST['email'])) {
		
			echo"<div class='col-md-12'>";
			echo"Vous n'avez pas remplis les informations";
			echo"</div>";
			
	} 
	else if(empty($_POST['jours1']) && empty($_POST['jours2']) && empty($_POST['jours3'])) 
	{
			echo"<div class='col-md-12'>";
			echo "Veuillez signaler vos jours de raids";
			echo"</div>";
		
	}
	else if ((empty($_POST['spe1']) && empty($_POST['spe2']) && empty($_POST['spe3'])))
	{
			echo"<div class='col-md-12'>";
			echo" Vous n'avez pas choisis une spécialisation";
			echo"</div>";
	}
	else if ($captchaUsers != $captcha)
	{
			echo"<div class='col-md-12'>";
			echo "Vous n'avez pas valider le captcha";
			echo"</div>";
		
	}
	else {
		$req = $DB->query("INSERT INTO candidature SET prenom=$prenom, age=$age, pseudonyme=$pseudonyme, classe=$classe, ilvl=$ilvl, com=$com, spe1=$spe1, spe2=$spe2 ,spe3=$spe3, email=$email, jours1=$jours1, jours2=$jours2,jours3=$jours3,  status='1'");
		
			echo"<div class='col-md-12'>";
			echo " candidature envoyée ";
			echo"</div>";
		
	}
}

function Captcha()
{
	$captcha = rand(1,50);
	$captcha2 = rand(1,10);
	$total = $captcha + $captcha2;
	
	$_SESSION['captcha'] = $total;
	return $captcha. "+" . $captcha2." : "; 
}

?>