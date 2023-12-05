<?php
	// retour à la ligne "\r\n"
	// retour à la ligne PHP_EOL
	
	$tableau=array();
	
	/* tableau associatif (une clé correspond à une valeur)
		*/
	
	$tableau["jeromelesaint"]="Jérôme LESAINT";
	$tableau["rudybodenon"]="Rudy BODENON";
	
	// impression d'une valeur à l'écran gràce à sa clé 
	print $tableau["jeromelesaint"];
	
	//imprimer toutes les clés du tableau
	print_r(array_keys($tableau));
	//imprimer toutes les valeurs du tableau
	print_r(array_values($tableau));
	
	//vérifier si une clé existe dans le tableau
	print array_key_exists("jeromelesaint",$tableau);
	
	//parcourir le tableau en pouvant imprimer clé et valeur de chaque élément
	foreach($tableau as $key=>$value) {
		print $key."-".$value;
	}
	
	//regrouper tous les éléments du tableau dans une chaîne de caractères avec la virgule 
	
	print PHP_EOL.implode(",",$tableau);
	
	
	// découper en morceaux une chaîne de caractères par rapport à un séparateur prédéterminé ici l'espace
	$chaine="Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.";
	
	print_r(explode(" ",$chaine));
	
	
	//ici le point virgule
	$chaine1="Continent;Région;Pays;Population totale(en milliers);Taux de natalité;Taux de mortalité;Espérance de vie;Taux de mortalité infantile;Nombre d’enfant(s) par femme;Taux de croissance;Population de 65 ans et plus(en milliers)";
	
	print_r(explode(";",$chaine1));
	
	
	
?>