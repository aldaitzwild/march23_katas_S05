<?php
/**
 * 1/ Prenez le tableau suivant et ranger le dans un ordre aléatoire
 * 
 * 2/ Puis en suivant le nouvel ordre du tableau, afficher chaque membre dans une grande
 * soustraction, puis l'effectuer
 * 
 * Ex : 
 * [9, 3, 5, 12]
 * 
 * => 9 - 3 - 5 - 12 = -11
 */

 $values = [6, 78, 3, 5, 26, 14, 1, 9];

 shuffle($values);

 $total = $values[0];

 for($i = 1; $i < count($values); $i++) {
    $total -= $values[$i];
 }

 echo implode(' - ', $values) . " = " . $total;
