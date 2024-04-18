<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un 
    palindrome.</P>


<?php
// déclaration de la variable à manipuler
$phrase="Engage le jeu que je le gagne";

// enlever majuscule
$phraseMin=strtolower($phrase);

// enlever les espaces ' '
$list = str_replace(' ', '', $phraseMin);

// reverser la phrase
$listInv=strrev($list);

// tester la phrase
if ($list == $listInv){
    echo "La phrase « $phrase » est un palindrome.";
} else {
    echo "La phrase « $phrase » n'est pas un palindrome.";

}