<?php 
// for ($i=1; $i <= 3; $i++) { 
//     print $i;
//     print PHP_EOL;
// }

// for ($i=10; $i <=20 ; $i++) { 
//     $chiffre = readline();
//     if ($chiffre<10){
//         print "le chiffre est trop petit";
//         print PHP_EOL;
//     }else if($chiffre>20){
//         print "le chiffre est trop grand";
//         print PHP_EOL;
//     }else{
//         print "bravo";
//         print PHP_EOL;
//     }
// }
// chiffre();
// function chiffre(){
// $test = readline();
// $maxi= 10;

// $total = $test+$maxi;

// for ($i=$test; $i <$total ; $i++) { 
//     print $i;
//     print PHP_EOL;
// }

// }

// $nombre = readline();
// for ($i=0; $i <=10 ; $i++) { 
//     print $nombre*$i;
//     print PHP_EOL;
// }
// 
// $nombre = intval(readline());
// $somme = 0;

// for ($i = 0; $i <= $nombre; $i++) {
   
//     print $somme +=$i;
//     print PHP_EOL;
    
// }
// $factoriel = intval(readline());
// $somme=1;
// for ($i=1; $i <=$factoriel ; $i++) { 
//    print $somme *= $i;
    
//    print PHP_EOL;
// }
// $values = array();
// for ($i = 1; $i <= 20; $i++) {  
//     $value = readline("Enter a value $i: ");
//     $values[] = $value;
//     if ($i == 20) {
//         $max=max($values);
//         print "le plus grand nombre saisie est : $max";
//         print PHP_EOL;
//         $position = array_search($max,$values)+1;
//         print "a été entré en position : $position";
//     }
// }

// $values = array();
// $i=1;
// $toto=0;
// while (true) {

// $toto +=$i;
// $value = readline("Enter a value $i: ");
// $values[] = $value;
//     if ($value == 0) {
        
//         $max=max($values);
//         print "le plus grand nombre saisie est : $max";
//         print PHP_EOL;
//         $position = array_search($max,$values)+1;
//         print "a été entré en position : $position";
//         break;
//     }
//   print $toto;

// }

//exercice 5.10
// $tableau = array(
//     "0" => array("id" => 1, "nom" => "tele", "prix" => 1000),
//     "1" => array("id" => 2, "nom" => "decodeur", "prix" => 50),
//     "2" => array("id" => 3, 'nom' => "enceinte wifi", "prix" => 29)
// );


// $tele = readline("nbr de tele acheté : ");
// $decodeur=readline("nbr de décodeur acheter : ");
// $enceinte = readline("nbr d enceinte acheté : ");



// $prixTele = $tableau[0]['prix'];
// $prixDecodeur = $tableau[1]['prix'];
// $prixEnceinte=$tableau[2]['prix'];

// $total=(($prixTele * $tele)+($prixDecodeur*$decodeur)+($prixEnceinte*$enceinte));

// $totalTele=$prixTele * $tele;
// $totalDecodeur=$prixDecodeur * $decodeur;
// $totalEnceinte=$prixEnceinte * $enceinte;

// print "Montant total des teles : $totalTele euro";
// print PHP_EOL;
// print "Montant total des décodeurs : $totalDecodeur euro";
// print PHP_EOL;
// print "Montant total des enceintes : $totalEnceinte euro";
// print PHP_EOL;
// print " Montant total : $total euros";
// print PHP_EOL;

// $montantPayer = readline("montant donnée : ");
// $montantArendre = $montantPayer-$total;

// print "montant a rendre : $montantArendre";
// print PHP_EOL;
// for ($i=0; $i <strlen($montantArendre) ; $i++) { 
   
// }
// print "i : $i";
// print PHP_EOL;
// $unite =substr($montantArendre,$i-1,$i);


// if ($unite<=4) {
//     print " il faut rendre $unite pieces de 1 euros";
// }elseif ($unite>5){
//     $euro = 9-$unite;
   
//     print "il faut rendre $euro piece de 1 euros";
//     print PHP_EOL;
//     print 'il faut rendre un billet de 5 euros';
// }else{
//     print " il faut rendre un billet de 5 euro";
// }

// $dizaine=substr($montantArendre,$i-2,$i-2);
// print PHP_EOL;


// if ($dizaine<=4) {
  
//      print " il faut rendre $dizaine billet de 10 euros";
// }else if($dizaine>5){
//     $dizaineEuro=$dizaine-5;
//     print "il faut rendre $dizaineEuro de billet de 10 euros";
//     print PHP_EOL;
//     print "il faut rendre 1  billet de 50 euros";

// }else{
//     print PHP_EOL;
//     print "il faut rendre 1  billet de 50 euros";
// }

// $centaine=substr($montantArendre,$i-3,$i-2);



// if($centaine>0){
//     print PHP_EOL;
//     print "il faut rendre $centaine billet de 100 euro ";
// }
// ?>


