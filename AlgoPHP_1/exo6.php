<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture
    à régler à partir de la quantité d'articles, son prix hors taxe et 
    un taux de TVA (exprimé en décimal. Ex: 20%->0.2)</p>

    <h2> Résultat </h2>

<?php
// déclarer les variables et les manipuler
$prixHT=9.99;
$tva=0.2;
$prixTTC= $prixHT*(1+$tva); // formule 1
$quantite=5;
$total=$prixTTC*$quantite;  // formule 2

// afficher le résultat
echo"Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : $total €";