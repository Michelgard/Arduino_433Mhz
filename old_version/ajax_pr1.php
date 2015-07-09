<?php
include "connexion.php";
	$html       = '';

$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '1'");
$Temp = $reponse->fetch();
$prise1 = $Temp[0];


if ($prise1=="ON"){
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}
	
if (isset($_POST["LED1"])){
	 $LED1= $_POST["LED1"];
}
else{
	$LED1="";
}

if ($LED1 == "OFF"){
	$h = @fopen("http://192.168.0.34/?LED1=ON", "rb");
	$imageled1 = "bouton/BoutonOFF.gif";
	$imageled1M = "bouton/BoutonOFF-ON.gif";
	$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'ON' WHERE  N_Prise = '1'");
	$prise1= "ON";
}
else if ($LED1 == "ON"){
	$h= @fopen("http://192.168.0.34/?LED1=OFF", "rb");
	$imageled1 = "bouton/BoutonON.gif";
	$imageled1M = "bouton/BoutonON-OFF.gif";
	$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'OFF' WHERE  N_Prise = '1'");
	$prise1 = "OFF";
}
$html .='<form action="#" method="post" name="led1" id="formbouton1">';
$html .='<input type="hidden" name="LED1" value="' . $prise1 . '">';
$html .='<input  type="image" id="pr1" 
onmouseover="src=\'' . $imageled1M . '\'" 
onmouseout="src=\'' . $imageled1 . '\'" 
src="' . $imageled1 . '">
</form>';

	echo $html;
	


?>
