<h1>Exercise 13</h1>

<p> Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales. </p>

<h2> Resultat </h2>

<?php

$notes=[10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes= count($notes) ;
echo "Les notes obtenues par l'élève sont : ";

for ($i = 0; $i < $nbNotes; $i++) { 
    echo $notes[$i]." ";
}

echo implode(" ", $notes);
echo "<br>Sa moyenne générale est donc de : ";

$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);
echo $moyenne;