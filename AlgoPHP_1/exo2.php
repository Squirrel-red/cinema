<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction
     permettant de compter le nombre de mots contenus dans celle-ci.</p>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase $chaineDeCaracteres contient $nbMots mots";
