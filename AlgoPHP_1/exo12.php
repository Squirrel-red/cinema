<h1>Exercice 12</h1>

<p> A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») </p>

<h2> Resultat </h2>

<?php

$langues= [
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($langues);

foreach($langues as $prenom => $langue) {
    if ($langue=="FRA") {
        echo "Salut $prenom<br>";
    }
    elseif ($langue=="ESP") {
        echo "Hola $prenom<br>";
    }
    elseif ($langue== "ENG") {
        echo "Hello $prenom<br>";
    }

}

// Ou avec deux tableaux 

$Mot= [
    "FRA" => "Salut",
    "ENG" => "Hello",
    "ESP" => "Hola"
];

foreach($langues as $prenom => $langue){
    echo $Mot[$langue]." ".$prenom."<br>";
}