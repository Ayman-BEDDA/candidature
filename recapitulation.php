<?php
$civilites = array(
		"Mr" => "Monsieur",
		"Mme" => "Madame",
		"Mlle" => "Mademoiselle"
	);
	
$frameworks = array (
		"1" => "Synfony",
		"2" => "Codelgniter",
		"3" => "FuelPHP",
		"4" => "CakePHP",
		"5" => "Laravel"
	);
	
$niveauPHP = array (
		"deb" => "debutant",
		"moy" => "Moyen",
		"bon" => "Bon"
	);

$frameworksSelectionnees = $_GET['frameworks'] ;
?>





<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 5</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    </head>

    <body>
		
		<h1>Votre candidature</h1>
		
		<table border>
			
			<tr>
				<th>Civilité</th>
				<th> <?php echo $civilites[$_GET['civilite']] ?></th>
			
			</tr>
			<tr>
				<th>Nom</th>
				<th> <?php echo $_GET["nom"] ?></th>
			
			</tr>
			<tr>
				<th>Prénom</th>
				<th> <?php echo $_GET["prenom"] ?></th>
			
			</tr><tr>
				<th>Date de naissance</th>
				<th> <?php echo $_GET["date"] ?></th>
			
			</tr>
			<tr>
				<th>Téléphone</th>
				<th> <?php echo $_GET["numero"] ?></th>
			
			</tr>
			<tr>
				<th>Adresse électronique</th>
				<th> <?php echo $_GET["email"] ?></th>
			
			</tr>
			<tr>
				<th>Niveau en PHP</th>
				<th> <?php echo $niveauPHP[$_GET['niveau']] ?></th>
			
			</tr>
			<tr>
				<th>Frameworks PHP</th>
				<th> <?php echo $frameworks[$_GET['langues[]']] ?></th>
			
			</tr>
			<tr>
				<th>Moi</th>
				<th> <?php echo $_GET["moi"] ?></th>
			
			</tr>
			
		
		</table>
		
		
	</body>

</html>	

