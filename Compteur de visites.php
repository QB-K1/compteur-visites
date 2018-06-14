<?php

// stocker dans variable : chemin d’accès du fichier et droits d’accès
$file = fopen('Compteur de visites.txt', 'r+');

// va stocker contenu de la première ligne du document auquel amène $file dans variable
$line = fgets($file);

// Incrémente pour augmenter de 1 le compteur à chaque tour
$line++;

// se positionne au tout début du contenu de file
fseek($file, 0);

// Rajouter une string à la fin du document en dur qui correspond à la première ligne du doc
fputs($file, $line);

// Affiche le compteur
echo '<p>'.$line.'</p>';

// indique que fini de modifier $file
fclose($file);

?>