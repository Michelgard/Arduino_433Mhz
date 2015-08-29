<?php
	include "connexion.php";
	$reponse = $bdd->query("select AUTO from Position_prise where N_Prise = 'LED2'");
	$Temp = $reponse->fetch();
	$auto_led2 = $Temp[0];
		
	if ($auto_led2 == 'ON'){
		$heure = date("H",time()); // récupération des heures
		$reponse = $bdd->query("select * from Auto_Cron_Prises where N_Prise = 'LED2'");
		while ($Temp = $reponse->fetch()){
			if ($Temp[2] == $heure){
				$h = fopen("http://192.168.0.34/?LED2=ON", "rb");
				$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'ON' WHERE  N_Prise = 'LED2'");
			}
			if ($Temp[3] == $heure){
				$h = fopen("http://192.168.0.34/?LED2=OFF", "rb");
				$bdd->exec("UPDATE Position_prise SET  Valeur_Prise =  'OFF' WHERE  N_Prise = 'LED2'");
			}
		}	
	}
?>