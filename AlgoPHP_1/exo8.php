<h1>Exercice 8</h1>

<p> Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sousc la forme : 1x8 = 8 ; 2x8=16 ; 3x8=24 ; ...
    Remarque: proposer 2 solutions avec 2 types de boucles. </p>

<?php
 /* Première solution avec la boucle  FOR */ 
$chiffre=8;
$produit=0;

echo "Table de $chiffre :<br>" ; 

for ($i=1; $i<=10; $i++) {
    $produit=($i*$chiffre); 
    echo "$i x $chiffre = $produit <br>";
}

?> 
<br> 
<br>

<?php 
 /* Seconde solution avec la  boucle WHILE */
 echo "Table de $chiffre :<br>" ; 
 $i=1;

 while($i<= 10) {
    $produit=($i*$chiffre); 
     echo "$i x $chiffre = $produit <br>";
     $i++;
 }