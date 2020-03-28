<?php
class podtablicaTabAsocjacyjnej{
	public function podtablica($tablica=array(), $dlugoscPodTablicy){
		try{
			if($dlugoscPodTablicy<=count($tablica)){
			$tabKluczy=array_rand($tablica, $dlugoscPodTablicy);
			shuffle($tabKluczy);
			$podTablicaTablicyTablica=array();
			foreach($tabKluczy as $wartosc){
			$podTablicaTablicyTablica[$wartosc]=$tablica[$wartosc];
			}
			return $podTablicaTablicyTablica;
			}
			else throw new Exception("Błąd");
		}
		catch(Exception $x){
			echo $x->getMessage();
		}
	}
}
/*
$podtablicaTabAsocjacyjnej=new podtablicaTabAsocjacyjnej();
$arr["red"]="czerwony";
$arr["green"]="zielony";
$arr["yellow"]="żółty";
$arr["car"]="samochód";
$arr["apple"]="jabłko";
$x=$podtablicaTabAsocjacyjnej->podtablica($arr, 3);
print_r($x);
*/
?>
