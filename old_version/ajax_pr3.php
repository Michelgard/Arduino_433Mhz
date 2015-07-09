<?php
include "connexion.php";
	$html       = '';
$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '3'");
$Temp = $reponse->fetch();
$prise3 = $Temp[0];


if ($prise3=="ON"){
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
	}
	
if (isset($_POST["LED3"])){
	 $LED3= $_POST["LED3"];
}
else{
	$LED3="";
}

if ($LED3 == "OFF"){
	$h = fopen("http://192.168.0.34/?LED3=ON", "rb");
	$imageled3 = "bouton/BoutonOFF.gif";
	$imageled3M = "bouton/BoutonOFF-ON.gif";
	$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'ON' WHERE  N_Prise = '3'");
	$prise3 = "ON";
}
else if ($LED3 == "ON"){
	$h= fopen("http://192.168.0.34/?LED3=OFF", "rb");
	$imageled3 = "bouton/BoutonON.gif";
	$imageled3M = "bouton/BoutonON-OFF.gif";
	$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'OFF' WHERE  N_Prise = '3'");
	$prise3 = "OFF";
}

$html .='<form action="#" method="post" name="led3" id="formbouton3">';
$html .='<input type="hidden" name="LED3" value="' . $prise3 . '">';
$html .='<input  type="image" id="pr3" 
onmouseover="src=\'' . $imageled3M . '\'" 
onmouseout="src=\'' . $imageled3 . '\'" 
src="' . $imageled3 . '">
</form>';

	echo $html;
	


?>
