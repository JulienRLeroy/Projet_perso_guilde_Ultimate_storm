<?php 
if(!isset($_SESSION['id'])) 
{
	header('location: ./');
} 
?>
	<div id="Action_A1" class="col-md-6 Select_A1_B1 A1">
		<h3>Selectionnez A1</h3>
	</div>
	<div id="Action_B1" class="col-md-6 Select_A1_B1 B1">
		<h3>Selectionnez B1</h3>
	</div>

<div class="col-md-12 roster_cadre" id="A1">
	<div class="col-md-12 inscription_roster">
		<span>Choississez votre rôle</span>
		<select>
			<option value="0">Tank</option>
			<option value="1">Heal</option>
			<option value="2">Dps</option>
		</select>
	</div>
	<div class="col-md-12 titre_roster">
		<h1>Roster A1 # Groupe Semaine</h1>
	</div>
	<div class="col-md-12 forma_roster roster_tank">
		<label class="col-md-1">Tank 1</label>
	</div>
	<div class="col-md-12 forma_roster roster_heal">
		<label class="col-md-1">heal 1</label>
	</div>
	<div class="col-md-12 forma_roster roster_dps">
		<label class="col-md-1">dps 1</label>
	</div>
</div>

<div class="col-md-12 roster_cadre" id="B1">
	<div class="col-md-12 inscription_roster">
		<span>Choississez votre rôle</span>
		<select>
			<option value="0">Tank</option>
			<option value="1">Heal</option>
			<option value="2">Dps</option>
		</select>
	</div>
	<div class="col-md-12 titre_roster">
		<h1>Roster B1 # Groupe Week End</h1>
	</div>
	<div class="col-md-12 forma_roster roster_tank">
		<label class="col-md-1">Tank 1</label>
	</div>
	<div class="col-md-12 forma_roster roster_heal">
		<label class="col-md-1">heal 1</label>
	</div>
	<div class="col-md-12 forma_roster roster_dps">
		<label class="col-md-1">dps 1</label>
	</div>
</div>