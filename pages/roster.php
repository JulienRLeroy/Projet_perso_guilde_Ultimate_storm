<?php 
if(!isset($_SESSION['id'])) 
{
	header('location: ./');
} 
ini_set('display_errors', 1);
?>
	<div id="Action_A1" class="col-md-4 Select_A1_B1_C1 A1">
		<h3>Selectionnez A1</h3>
	</div>
	<div id="Action_B1" class="col-md-4 Select_A1_B1_C1 B1">
		<h3>Selectionnez B1</h3>
	</div>
	<div id="Action_C1" class="col-md-4 Select_A1_B1_C1 C1">
		<h3>Selectionnez C1</h3>
	</div>

<div class="col-md-12 roster_cadre" id="A1">
	<div class="col-md-12 titre_roster">
		<h1>Roster A</h1>
	</div>
	
		<div class="col-md-12 forma_roster roster_tank"> 
			<div class="col-md-12 ico_tank">	

			</div>
			<?php aff_roster($DB, "a", "spe1","tank"); ?>
		</div>
		
		<div class="col-md-12 forma_roster roster_heal">
			<div class="col-md-12 ico_heal">	
			 
			</div>
			<?php aff_roster($DB, "a", "spe2","heal"); ?>
		</div>
		
		<div class="col-md-12 forma_roster roster_dps">
			<div class="col-md-12 ico_dps">	
			 
			</div>
			<?php aff_roster($DB, "a", "spe3","dps"); ?>
		</div>
</div>

<div class="col-md-12 roster_cadre" id="B1">

	<div class="col-md-12 titre_roster">
		<h1>Roster B</h1>
	</div>
	
	<div class="col-md-12 forma_roster roster_tank">
		<div class="col-md-12 ico_tank">	
			
		</div>
			<?php aff_roster($DB, "b", "spe1","tank"); ?>
	</div>
	<div class="col-md-12 forma_roster roster_heal">
		<div class="col-md-12 ico_heal">	
			 
		</div>
			<?php aff_roster($DB, "b", "spe2","heal"); ?>
	</div>
	<div class="col-md-12 forma_roster roster_dps">
			<div class="col-md-12 ico_dps">	
			 
			</div>
			<?php aff_roster($DB, "b", "spe3","dps"); ?>
	</div>
</div>

<div class="col-md-12 roster_cadre" id="C1">

	<div class="col-md-12 titre_roster">
		<h1>Roster C</h1>
	</div>
	
	<div class="col-md-12 forma_roster roster_tank">
		<div class="col-md-12 ico_tank">	
			
		</div>
			<?php aff_roster($DB, "c", "spe1","tank"); ?>
	</div>
	<div class="col-md-12 forma_roster roster_heal">
		<div class="col-md-12 ico_heal">	
			 
		</div>
			<?php aff_roster($DB, "c", "spe2","heal"); ?>
	</div>
	<div class="col-md-12 forma_roster roster_dps">
			<div class="col-md-12 ico_dps">	
			 
			</div>
			<?php aff_roster($DB, "c", "spe3","dps"); ?>
	</div>
</div>


<?php
// A = lundi mercredi = 1


function aff_roster ($DB, $roster, $spe, $name_spe){
	
	$req = $DB->query("SELECT pseudonyme, jours from candidature where $spe='$name_spe'");
	

	while($aff_roster = $req->fetch())
		{	
			if($roster == "a") {
				if($aff_roster['jours'] == 1 || $aff_roster['jours'] == 3 || $aff_roster['jours'] == 5 || $aff_roster['jours'] == 7) {
					echo '<label class="col-md-6">'.($aff_roster['pseudonyme']).'</label>';	
				}
			}
			else if ($roster == "b") {
				if($aff_roster['jours'] == 2 || $aff_roster['jours'] == 3 || $aff_roster['jours'] == 6 || $aff_roster['jours'] == 7) {
					echo '<label class="col-md-6">'.$aff_roster['pseudonyme'].'</label>';	
				}
			}
			else {
				if($aff_roster['jours'] == 4 || $aff_roster['jours'] == 5 || $aff_roster['jours'] == 6 || $aff_roster['jours'] == 7) {
					echo '<label class="col-md-6">'.$aff_roster['pseudonyme'].'</label>';	
				}
			}
		}
}

// function getClass($DB, $class) {
	
	// if($class == "chasseur")
		// {
			// echo '
				// <label class="col-md-6" style="background-color: red;">'.getClass($aff_roster['pseudonyme']).'</label>
			// ';
		// }
	
// }
?>