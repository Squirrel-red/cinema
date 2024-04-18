<h1>Exercise 14</h1>

<p> Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours). Date d'anniversaire de la personne: 17/01/1985 </p>

<h2> Resultat </h2>

<?php

$origin = date_create('1985-01-17');
$target = date_create();
$interval = date_diff($origin, $target);

// var_dump($interval);
echo "La personne a ".$interval->format("%y ans %m mois %d jours");
/*echo $interval->format('%R%a days');
*/

// Date du jour 
// $joursAjd=15;
// $moisAjd=04;
// $anneeAjd=2021;

// // Anniversaire 
// $jourNaissance=21;
// $moisNaissance=04;
// $anneeNaissance=1983;

// $joursVecus= $joursAjd-$jourNaissance;
// $moisVecus=$moisAjd-$moisNaissance;
// $anneesVecues=$anneeAjd-$anneeNaissance;

// // Control du résultat

// if ($joursVecus < 0){
//     $joursVecus= (31+$joursVecus);
//     $moisVecus= $moisVecus-1;
// } ;

// if ($moisVecus <=0){
//     $moisVecus=12+$moisVecus;
//     $anneesVecues=$anneesVecues-1;
// }

// echo " Age de la personne : $anneesVecues ans $moisVecus mois $joursVecus jours<br>";