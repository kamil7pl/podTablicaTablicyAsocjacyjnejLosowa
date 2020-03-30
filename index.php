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

$podtablicaTabAsocjacyjnej=new podtablicaTabAsocjacyjnej();
$arr["car"]="samochód";
$arr["apple"]="jabłko";
$arr["pencil"]="ołówek";
$arr["respositorie"]="magazyn";
$arr["guide"]="przewodnik";
$arr["development"]="rozwój";
$arr["team"]="zespół";
$arr["security"]="bezpieczeństwo";
$arr["white"]="biały";
$arr["red"]="czerwony";
$arr["orange"]="pomarańczowy";
$arr["green"]="zielony";
$arr["announces"]="ogłosić";
$arr["book"]="książka";
$arr["immediate"]="natychmiastowy";
$arr["release"]="wydanie";
$arr["several"]="kilka";
$arr["fixes"]="poprawki";
$arr["encouraged"]="zachęcany";
$arr["upgrade"]="aktualizacja";

$x=$podtablicaTabAsocjacyjnej->podtablica($arr, 3);
print_r($x);

?>
