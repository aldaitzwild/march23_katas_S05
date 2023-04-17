<?php
/**
 * Récupérez des numéros de place et le nom des clients dans les lignes de commandes 
 * suivantes et implémentant la fonction parseLine() : 
 * 
 * F67893773ALDAITZ THOMAS => ALDAITZ THOMAS place n°89
 * F67874556DORMOY LUDOVIC => DORMOY LUDOVIC place n°78
 * F93664777NGUON GWENDOLYNE => NGUON GWENDOLYNE place n°66
 * F77454286WAYNE BRUCE => WAYNE BRUCE place n°45
 * 
 * Modèle de la commande :
 * F67893773ALDAITZ THOMAS
 * [F67] : Numéro du magasin
 * [89] : Numéro de la place
 * [3773] : Code Transaction
 * [ALDAITZ THOMAS] : Nom du client
 */

 echo parseLine('F67893773ALDAITZ THOMAS') . PHP_EOL;
 echo parseLine('F67874556DORMOY LUDOVIC') . PHP_EOL;
 echo parseLine('F93664777NGUON GWENDOLYNE') . PHP_EOL;
 echo parseLine('F77454286WAYNE BRUCE') . PHP_EOL;
 