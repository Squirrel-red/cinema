<h1> Exercice 10 </h1>

<p> A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €. </p>

<h2> Resultat </h2>

<?php

$montantAPAyer=152;
$montantVerse=200;
$resteAPayer= $montantVerse - $montantAPAyer; // formule pour calculer le reste à payer

$nbBilletDe10= floor($resteAPayer/10);
// $billetDe5= floor(($resteAPayer-$billetDe10*10)/5);
$nbBilletDe5= floor(($resteAPayer % 10)/5);
$restePieces= $resteAPayer - ($nbBilletDe10*10 + $nbBilletDe5*5);
$nbPiecesDe2= floor($restePieces/2);
$nbPiecesDe1= $restePieces % 2;

echo "Montant à payer : $montantAPAyer €<br>";
echo "Montant versé : $montantVerse €<br>";
echo "Reste à payer : $resteAPayer €<br>";
echo "--------------------------------------------<br>";
echo "Rendue de monnaie :<br>";
echo "$nbBilletDe10 billets de 10 € et $nbBilletDe5 billet de 5 € et $nbPiecesDe2 pièce de 2 € et $nbPiecesDe1 pièce de 1 €<br>";


// Vérification de la somme du reste à payer
$verifSomme = $nbBilletDe10*10 + $nbBilletDe5*5 +  $nbPiecesDe2*2 + $nbPiecesDe1*1;
echo "Rendue en total: $verifSomme €<br>";
?>