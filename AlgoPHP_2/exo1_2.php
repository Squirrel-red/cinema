<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée "convertirMajRouge()" permettant de 
    transformer une chaîne de de caractère passée en argument en majuscules 
    et en rouge.
    Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);

<br>
<h2> Résultat 1 </h2>
<?php

//* Déclarer la variable
$texte=" Mon texte en paramètre";

//* Créer la fonction personnalisée
function convertirMajRouge($text){
   return "<span style='color: red';> " . mb_strtoupper("$text", "UTF8") . "</span><br>";

}

echo convertirMajRouge($texte);

//* Bonus

$texte1="Mon texte en minuscules et en bleu";
function convertirMajBlue($text1){
   return "<span style='color: blue';> " . mb_strtolower("$text1", "UTF8") . "</span><br>";

}

echo convertirMajBlue($texte1);