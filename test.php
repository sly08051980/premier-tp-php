<?php
	/*  Initialisation d'une variable, affectation d'une valeur à une variable */
	// variable de type chaine de caractères 
	$prenom="Jérôme";
	//envoyer à l'écran
	print $prenom;
	
	print mb_strtoupper($prenom);
	//variable de type numérique
	$nombre=0;
	
	// boucle (répétition) "pour"
	for($compteur=1;$compteur<=10;$compteur++) {
		//print $compteur;
		// imprimer un retour à la ligne
		//print PHP_EOL;
	}
	//demander une saisie utilisateur
	$saisie=readline();
	
	/*if ($saisie=="Jérôme") {
		print "Tu es le formateur";
	} else {
		print "Tu es une personne en formation";
	}*/
	// tant que je n'ai pas saisi password, j'affiche essaies encore
	/*while($saisie!="password") {
		print "Oups ! Essaies encore.";
		$saisie=readline();
	}
	print "Gagné";*/
	
	//$tableau=array("Jérôme","Nadya","Rayan");
	
	//$tableau=["Jérôme","Nadya","Rayan"];

	$tableau=array();
	$tableau[]="Nadya"; // case 1 - indice 0
	$tableau[]="Jérôme"; // case 2 - indice 1
	$tableau[]="Rayan"; // case 3 - indice 2
	var_dump($tableau);
	print PHP_EOL;
	print count($tableau);
	for($indice=0;$indice<count($tableau);$indice++) {
		// Afficher le contenu de la case à l'indice '$indice'
		print $tableau[$indice];
		print PHP_EOL;
	}
	
	sort($tableau);
	
	foreach($tableau as $valeur) {
		print $valeur;
		print PHP_EOL;
	}
	
	
	
?>