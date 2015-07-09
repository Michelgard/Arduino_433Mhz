<?php
include "connexion.php";
	$html       = '';
$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '2'");
$Temp = $reponse->fetch();
$prise2 = $Temp[0];


if ($prise2=="ON"){
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}
	
if (isset($_POST["LED2"])){
	 $LED2= $_POST["LED2"];
}
else{
	$LED2="";
}

if ($LED2 == "OFF"){
	$h = fopen("http://192.168.0.34/?LED2=ON", "rb");
	$imageled2 = "bouton/BoutonOFF.gif";
	$imageled2M = "bouton/BoutonOFF-ON.gif";
	$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'ON' WHERE  N_Prise = '2'");
	$prise2 = "ON";
}
else if ($LED2 == "ON"){
	$h= fopen("http://192.168.0.34/?LED2=OFF", "rb");
	$imageled2 = "bouton/BoutonON.gif";
	$imageled2M = "bouton/BoutonON-OFF.gif";
	$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'OFF' WHERE  N_Prise = '2'");
	$prise2 ="OFF";
}

$html .='<form action="#" method="post" name="led2" id="formbouton2">';
$html .='<input type="hidden" name="LED2" value="' . $prise2 . '">';
$html .='<input  type="image" id="pr2" 
onmouseover="src=\'' . $imageled2M . '\'" 
onmouseout="src=\'' . $imageled2 . '\'" 
src="' . $imageled2 . '">
</form>';

	echo $html;
	


?>
