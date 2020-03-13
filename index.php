<?php
$tab["kluczJeden"]="jeden";
$tab["kluczDwa"]="dwa";
$tab["kluczTrzy"]="trzy";
$tab["kluczCztery"]="cztery";
$tab["kluczPiec"]="piec";
$tabKluczy=array_rand($tab, 2);//chyba od lewej do prawej
shuffle($tabKluczy);
foreach($tabKluczy as $wartosc){
	$podTablicaTablicy_tab[$wartosc]=$tab[$wartosc];
}
print_r($podTablicaTablicy_tab);
//print_r($tabKluczy);
//https://www.php.net/manual/en/function.array-rand.php
//shuffle - Przetasuj tablicę
//https://www.php.net/manual/en/function.shuffle.php

?>