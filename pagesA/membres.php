	<div class="container">
		<div class="col-md-12 center">
		
		<?php CheckMembre($DB); ?>

		
		</div>
	</div>


<?php 

	function CheckMembre($DB) {
		$req = $DB->query("SELECT pseudonyme,jours, id, spe1,spe2,spe3 from candidature where status='2'");
		$cpt= 0;
		$cptotal = $req->rowCount(); 
		echo'<form method="post">';
		echo'<input type="hidden" name="mbtotal" value="'.$cptotal.'">';		
		
		while($aff_membre = $req->fetch())
		{
			echo  '<input type="hidden" name="'.$cpt.'pseudo" value="'.$aff_membre["id"].'">'.$aff_membre["pseudonyme"].'<table>
			
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
				<th> A1</th>
				<th> B1	</th>
				<th> C1</th>	
			</tr>
			<tr>
			 ';
			 
			 
			if($aff_membre['spe1'] == "tank") 
			{
			echo '<td><input type="checkbox" checked value="tank" name="'.$cpt.'spe1">
			</td>';
			}
			else {
				echo'<td><input type="checkbox"  value="tank" name="'.$cpt.'spe1">
			</td>';
			}
			
			if($aff_membre['spe2'] == "heal") 
			{
				echo'<td><input type="checkbox" checked value="heal" name="'.$cpt.'spe2">
			</td>';
			}
			else {
				echo'<td><input type="checkbox"  value="heal" name="'.$cpt.'spe2">
			</td>';
			}
			
			if($aff_membre['spe3'] == "dps") 
			{
				echo'<td><input type="checkbox" checked value="dps" name="'.$cpt.'spe3">
			</td>';
			}
			else {
				echo'<td><input type="checkbox"  value="dps" name="'.$cpt.'spe3">
			</td>';
			}
	
			if($aff_membre['jours'] == 1) 
			{
				echo'
				<td><input type="checkbox"  checked name="'.$cpt.'a1"></td>
				<td><input type="checkbox" name="'.$cpt.'b1"></td>
				<td><input type="checkbox" name="'.$cpt.'c1"></td>';
			}
			else if($aff_membre['jours']  == 2) 
			{
				echo '
				<td><input type="checkbox" name="'.$cpt.'a1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'b1"></td>
				<td><input type="checkbox" name="'.$cpt.'c1"></td>';
			}
			else if($aff_membre['jours']  == 4) 
			{
				echo '	
				<td><input type="checkbox" name="'.$cpt.'a1"></td>
				<td><input type="checkbox" name="'.$cpt.'b1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'c1"></td>
				';
			}
			else if($aff_membre['jours']  == 3) {
				echo '	
				<td><input type="checkbox" checked name="'.$cpt.'a1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'b1"></td>
				<td><input type="checkbox" name="'.$cpt.'c1"></td>';
			}
			else if($aff_membre['jours']  == 5) 
			{
				echo '	
				<td><input type="checkbox" checked name="'.$cpt.'a1"></td>
				<td><input type="checkbox" name="'.$cpt.'b1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'c1"></td>
				';
			}
			else if($aff_membre['jours']  == 6) {
				echo '	
				<td><input type="checkbox"  name="'.$cpt.'a1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'b1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'c1"></td>
				';
			}
			else if($aff_membre['jours']  == 7) 
			{
				echo '	
				<td><input type="checkbox" checked name="'.$cpt.'a1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'b1"></td>
				<td><input type="checkbox" checked name="'.$cpt.'c1"></td>
				';
			}
			else {
				echo 't 	
				<td><input type="checkbox" name="'.$cpt.'a1"></td>
				<td><input type="checkbox" name="'.$cpt.'b1"></td>
				<td><input type="checkbox" name="'.$cpt.'c1"></td>
				';
			}
					
			echo'</tr></table>';

		$cpt++;	
		}
		echo'	<div class="col-md-12 center">
		<input type="submit" name="submit" value="Valider">
	</div>';
		echo"</form>";
	}


if(isset($_POST['submit'])) 
{
	$mbtotal = $_POST['mbtotal'];
	
	for($i = 0; $i < $mbtotal; $i++) 
	{
		// echo $i." ";
		
		if(isset($_POST[$i.'spe1'])) 
		{
			
			$spe1 = "tank";
		}
		else {
			$spe1 = "";
		}
		
		if(isset($_POST[$i.'spe2'])) 
		{
			
			$spe2 = "heal";
		}
		else {
			$spe2 = "";
		}
		
		if(isset($_POST[$i.'spe3'])) 
		{
			
			$spe3 = "dps";
		}
		else {
			$spe3 = "";
		}
		
		if(isset($_POST[$i.'a1'])) 
		{
			
			$a1 = 1;
		}
		else {
			$a1 = 0;
		}
		
		if(isset($_POST[$i.'b1'])) 
		{
			
			$b1 = 2;
		}
		else {
			$b1 = 0;
		}
		
		if(isset($_POST[$i.'c1'])) 
		{
			
			$c1 = 4;
		}
		else {
			$c1 = 0;
		}
		
		$id = $_POST[$i.'pseudo'];
		$jours = $a1 + $b1 + $c1;
		$update = $DB->query("UPDATE candidature SET spe1='$spe1', spe2='$spe2', spe3='$spe3', 	jours='$jours' WHERE id='$id'");
		echo'<meta http-equiv="refresh" content="0;URL=#">';
	}
}

?>