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
	
	<div class="col-md-12 input_send_candidature">
		<input class="input_candidature decoration" type="submit" name="submit" value="Envoyer la candidature" >
	</div>
</form>
<?php
if (isset($_POST['submit']))
{  
    $prenom = stripcslashes($_POST['prenom']);
    $age = stripcslashes($_POST['age']);
    $pseudonyme = stripcslashes($_POST['pseudonyme']);
	$classe = stripcslashes($_POST['classe']);
	$ilvl = stripcslashes($_POST['ilvl']);
	$com = stripcslashes($_POST['com']);
	$spe1 = stripcslashes($_POST['spe1']);
	$spe2 = stripcslashes($_POST['spe2']);
	$spe3 = stripcslashes($_POST['spe3']);
	$email = stripcslashes($_POST['email']);
	$jours1 = stripcslashes($_POST['jours1']);
	$jours2 = stripcslashes($_POST['jours2']);
	$jours3	= stripcslashes($_POST['jours3']);
	
	if(empty($prenom) || empty($age) || empty($pseudonyme) || empty($classe) || empty($ilvl) || empty($com) || empty($email) || (empty($spe1) && empty($spe2) && empty($spe3)) || (empty($jours1) && empty($jours2) && empty($jours3))) {
		
		
	}
	else {
		$req = $DB->query("INSERT INTO candidature SET prenom='$prenom', age='$age', pseudonyme='$pseudonyme', classe='$classe', ilvl='$ilvl', com='$com', spe1='$spe1', spe2='$spe2',spe3='$spe3', email='$email', jours1='$jours1', jours2='$jours2',jours3='$jours3',  status='1'");
	}
}

// $sql = sprintf("INSERT INTO candidature SET prenom='%s', age=%d, pseudonyme='%s', classe='%s', ilvl='%d', com='%s', spe1='%s' ,spe2='%s', spe3='%s'",$prenom,$age,$pseudonyme,$classe,$ilvl,$com,$sp1,$spe2,$spe3 );
		// $res = $DB->query($sql);
		// if($res->row_count() < 1) {
			// echo "candidature envoyée";			
		// }
		// else {
			// echo "un problème est survenu";
		// }  or die(print_r($DB->errorInfo(), true));
		// quote, il y a un bug que je n'arrive pas à résoudre
?>