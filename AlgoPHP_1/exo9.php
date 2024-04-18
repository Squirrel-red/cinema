<h1> Exercice 9 </h1>

<p> 
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
 </p>

<h2> Résultat </h2>

<?php

$age=32;
$sexe="F";
$resultat=" ";

$condition1 = ($sexe === "F" AND $age>=18 AND $age <=35);
$condition2 = ($sexe === "H" AND $age>20);

if($condition1 OR $condition2) {
    $resultat="est imposable.";
} else{
    $resultat="n'est pas imposable.";
}
echo "La personne $resultat";
