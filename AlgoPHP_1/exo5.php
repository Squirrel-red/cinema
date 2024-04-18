<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la 
    convertit en euros. Attention, la valeur générée devra être arrondie
    à 2 décimales.</p>

<h2> Résultat </h2>

<?php
// declarer les variables
$montantEnFranc=100;
$conversion = $montantEnFranc/6.55957;

// convertir les francs en euros et afficher le résultat arrondi
echo "Montant en francs : $montantEnFranc<br>";
echo "$montantEnFranc francs = ".round($conversion, 2)."<br>";

// changer le format du résultat "." --> ","
$arrondi = number_format($conversion, 2, ",", " ");
echo $arrondi;

// controller le résultat
var_dump($arrondi);