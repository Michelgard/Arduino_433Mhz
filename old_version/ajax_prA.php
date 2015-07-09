<?php
include "connexion.php";
	$html       = '';

$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '4'");
$Temp = $reponse->fetch();
$priseA = $Temp[0];


if ($priseA=="ON"){
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
	}
	
if (isset($_POST["LEDA"])){
	 $LEDA= $_POST["LEDA"];
}
else{
	$LEDA="";
}

if ($LEDA == "OFF") {
	if ($priseA == "OFF"){
		$h = fopen("http://192.168.0.34/?LEDA=ON", "rb");
		$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'ON' WHERE  N_Prise = '4'");
	}
	$imageledA = "bouton/BoutonOFF.gif";
	$imageledAM = "bouton/BoutonOFF-ON.gif";
	$priseA = "ON";
}
else if ($LEDA == "ON"){
	if ($priseA == "ON"){
		$h= fopen("http://192.168.0.34/?LEDA=OFF", "rb");
		$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'OFF' WHERE  N_Prise = '4'");
	}
	$imageledA = "bouton/BoutonON.gif";
	$imageledAM = "bouton/BoutonON-OFF.gif";
	$priseA = "OFF";
}

$html .='<form action="#" method="post" name="ledA" id="formboutonA">';
$html .='<input type="hidden" name="LEDA" value="' . $priseA . '">';
$html .='<input  type="image" id="prA" 
onmouseover="src=\'' . $imageledAM . '\'" 
onmouseout="src=\'' . $imageledA . '\'" 
src="' . $imageledA . '">
</form>';

	echo $html;
	


?>
