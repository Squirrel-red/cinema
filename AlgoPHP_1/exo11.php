<h1>Exercise 11</h1>

<p> Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau. </p>

<h2> Résultat </h2>

<?php
// déclarer le tableau
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
// compter le nombre des éléments du tableau
$nbMarques = count($marques);
echo "Le tableau contient $nbMarques marques de voitures.<br>";

// afficher le contenu du tableau $marques
for ($i = 0; $i < $nbMarques; $i++) { 
    echo $marques[$i]."<br>";
}

foreach($marques as $ind => $marque) {
    echo ($ind+1)." - ".$marque."<br>";
}
?>