<?php
	include "connexion.php";

	if(isset($_REQUEST['block'])){
		 $block = $_REQUEST['block'];
		 }
	else{
		$block = 'none';
	}
	  
	switch ($block) {
	case 'pr1':
		 echo pr1();
		 break;
	
	case 'auto_pr1':
		 echo auto_pr1();
		 break;
	
	case 'pr2':
		 echo pr2();
		 break;
		 
	case 'auto_pr2':
		 echo auto_pr2();
		 break;
		 
	case 'pr3':
		 echo pr3();
		 break;
		 
	case 'pr6':
		 echo pr6();
		 break;
		 
	case 'prA':
		 echo prA();
		 break;
		 
	case 'temp_salon':
		 echo temp_salon();
		 break;
		 
	case 'temp_ext':
		 echo temp_ext();
		 break;
		 
	case 'volet_lucie_haut':
		 echo volet_lucie_haut();
		 break;
		 
	case 'volet_lucie_bas':
		 echo volet_lucie_bas();
		 break;
		 
	case 'volet_lucie_stop':
		 echo volet_lucie_stop();
		 break;
	}
	 
	function emetteur($led, $on_off, $nb){
		global $bdd;
		$url="http://xx.xxx.xx.xx:80/?" . $led . "=" . $on_off;
		
		for ($i=0; $i<$nb; $i++){
			$h = @fopen($url, "rb");	
			//usleep(200000);
		}
		$sql= "UPDATE Position_prise SET  Valeur_Prise ='". $on_off . "' WHERE  N_Prise ='" . $led . "'";
		$bdd->exec($sql);
	}
	
	function pr1(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED1'");
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
			emetteur("LED1", "ON", 2);
			$imageled1 = "bouton/BoutonOFF.gif";
			$imageled1M = "bouton/BoutonOFF-ON.gif";
			$prise1= "ON";
		}
		else if ($LED1 == "ON"){
			emetteur("LED1", "OFF", 2);
			$imageled1 = "bouton/BoutonON.gif";
			$imageled1M = "bouton/BoutonON-OFF.gif";
			$prise1 = "OFF";
		}
		$html .='<form action="#" method="post" name="led1" id="formbouton1">';
		$html .='<input type="hidden" name="LED1" value="' . $prise1 . '">';
		$html .='<input  type="image" id="pr1" 
				onmouseover="src=\'' . $imageled1M . '\'" 
				onmouseout="src=\'' . $imageled1 . '\'" 
				src="' . $imageled1 . '"></form>';

		return $html;
	}

	function auto_pr1(){
		
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select AUTO from Position_prise where N_Prise = 'LED1'");
		$Temp = $reponse->fetch();
		$auto_prise1 = $Temp[0];


		if ($auto_prise1=="ON"){
			$auto_imageled1 = "bouton/ON-VERT.gif";
			
		}
		else{
			$auto_imageled1 = "bouton/OFF-ROUGE.gif";
		}
		
		if (isset($_POST["auto_LED1"])){
			 $auto_LED1= $_POST["auto_LED1"];
		}
		else{
			$auto_LED1="";
		}
	
		if ($auto_LED1 == "OFF"){
			$auto_imageled1 = "bouton/ON-VERT.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'ON' WHERE  N_Prise = 'LED1'");
			$auto_prise1 = "ON";
		}
		else if ($auto_LED1 == "ON"){
			$auto_imageled1 = "bouton/OFF-ROUGE.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'OFF' WHERE  N_Prise = 'LED1'");
			$auto_prise1 ="OFF";
		}

		$html .='<form action="#" method="post" name="auto_led1" id="auto_formbouton1">';
		$html .='<input type="hidden" name="auto_LED1" value="' . $auto_prise1 . '">';
		$html .='<input  type="image" id="auto_pr1" 
				src="' . $auto_imageled1 . '"></form>';

		return $html;
	}
	
	function pr2(){
		
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED2'");
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
			emetteur("LED2", "ON", 2);
			$imageled2 = "bouton/BoutonOFF.gif";
			$imageled2M = "bouton/BoutonOFF-ON.gif";
			$prise2 = "ON";
		}
		else if ($LED2 == "ON"){
			emetteur("LED2", "OFF" ,2);
			$imageled2 = "bouton/BoutonON.gif";
			$imageled2M = "bouton/BoutonON-OFF.gif";
			$prise2 ="OFF";
		}

		$html .='<form action="#" method="post" name="led2" id="formbouton2">';
		$html .='<input type="hidden" name="LED2" value="' . $prise2 . '">';
		$html .='<input  type="image" id="pr2" 
				onmouseover="src=\'' . $imageled2M . '\'" 
				onmouseout="src=\'' . $imageled2 . '\'" 
				src="' . $imageled2 . '"></form>';

		return $html;
	}
	
	function auto_pr2(){
		
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select AUTO from Position_prise where N_Prise = 'LED2'");
		$Temp = $reponse->fetch();
		$auto_prise2 = $Temp[0];


		if ($auto_prise2=="ON"){
			$auto_imageled2 = "bouton/ON-VERT.gif";
			
		}
		else{
			$auto_imageled2 = "bouton/OFF-ROUGE.gif";
		}
		
		if (isset($_POST["auto_LED2"])){
			 $auto_LED2= $_POST["auto_LED2"];
		}
		else{
			$auto_LED2="";
		}
	
		if ($auto_LED2 == "OFF"){
			$auto_imageled2 = "bouton/ON-VERT.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'ON' WHERE  N_Prise = 'LED2'");
			$auto_prise2 = "ON";
		}
		else if ($auto_LED2 == "ON"){
			$auto_imageled2 = "bouton/OFF-ROUGE.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'OFF' WHERE  N_Prise = 'LED2'");
			$auto_prise2 ="OFF";
		}

		$html .='<form action="#" method="post" name="auto_led2" id="auto_formbouton2">';
		$html .='<input type="hidden" name="auto_LED2" value="' . $auto_prise2 . '">';
		$html .='<input  type="image" id="auto_pr2" 
				src="' . $auto_imageled2 . '"></form>';

		return $html;
	}

	function pr3(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED3'");
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
			emetteur("LED3", "ON", 2);
			$imageled3 = "bouton/BoutonOFF.gif";
			$imageled3M = "bouton/BoutonOFF-ON.gif";
			$prise3 = "ON";
		}
		else if ($LED3 == "ON"){
			emetteur("LED3", "OFF", 2);
			$imageled3 = "bouton/BoutonON.gif";
			$imageled3M = "bouton/BoutonON-OFF.gif";
			$prise3 = "OFF";
		}

		$html .='<form action="#" method="post" name="led3" id="formbouton3">';
		$html .='<input type="hidden" name="LED3" value="' . $prise3 . '">';
		$html .='<input  type="image" id="pr3" 
				onmouseover="src=\'' . $imageled3M . '\'" 
				onmouseout="src=\'' . $imageled3 . '\'" 
				src="' . $imageled3 . '"></form>';

		return $html;
	}
	
	function pr6(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED6'");
		$Temp = $reponse->fetch();
		$prise6 = $Temp[0];


		if ($prise6=="ON"){
			$imageled6 = "bouton/BoutonOFF.gif";
			$imageled6M = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled6 = "bouton/BoutonON.gif";
			$imageled6M = "bouton/BoutonON-OFF.gif";
		}
		
		if (isset($_POST["LED6"])){
			 $LED6= $_POST["LED6"];
		}
		else{
			$LED6="";
		}

		if ($LED6 == "OFF"){
			emetteur("LED6", "ON", 2);
			$imageled6 = "bouton/BoutonOFF.gif";
			$imageled6M = "bouton/BoutonOFF-ON.gif";
			$prise6 = "ON";
		}
		else if ($LED6 == "ON"){
			emetteur("LED6", "OFF", 2);
			$imageled6 = "bouton/BoutonON.gif";
			$imageled6M = "bouton/BoutonON-OFF.gif";
			$prise6 = "OFF";
		}

		$html .='<form action="#" method="post" name="led6" id="formbouton6">';
		$html .='<input type="hidden" name="LED6" value="' . $prise6 . '">';
		$html .='<input  type="image" id="pr6" 
				onmouseover="src=\'' . $imageled6M . '\'" 
				onmouseout="src=\'' . $imageled6 . '\'" 
				src="' . $imageled6 . '"></form>';

		return $html;
	}

	function prA(){
		$html       = '';
	
		$imageledA = "bouton/bouton-On-Off.gif";
		$imageledAM = "bouton/bouton-On-Off_M.gif";
		
		if (isset($_POST["LEDA"])){
			emetteur("LEDA", "ON", 1);
		}
		

		$html .='<form action="#" method="post" name="ledA" id="formboutonA">';
		$html .='<input type="hidden" name="LEDA" value="ON">';
		$html .='<input  type="image" id="prA" 
				onmouseover="src=\'' . $imageledAM . '\'" 
				onmouseout="src=\'' . $imageledA . '\'" 
				src="' . $imageledA . '"></form>';

		return $html;
	}

	function volet_lucie_haut(){
		$html       = '';
		
		if (isset($_POST["VOLETLUM"])){
			emetteur("VOLETLU", "MON", 2);
		}
		
		
		$imageledvolet_lucie = "bouton/haut.gif";
		$imageledvolet_lucieM = "bouton/hautM.gif";
		
		$html .='<form action="#" method="post" name="ledvolet_lucie_haut" id="formvolet_lucie_haut">';
		$html .='<input type="hidden" name="VOLETLUM" value="ON">';
		$html .='<input  type="image" id="volet_lucie_haut" 
				onmouseover="src=\'' . $imageledvolet_lucieM . '\'" 
				onmouseout="src=\'' . $imageledvolet_lucie . '\'" 
				src="' . $imageledvolet_lucie . '"></form>';

		return $html;
	}
	
	function volet_lucie_stop(){
		$html       = '';
		
		if (isset($_POST["VOLETLUS"])){
			emetteur("VOLETLU", "STO", 2);
		}
		
		$imageledvolet_lucie = "bouton/Stop_Volet.gif";
		$imageledvolet_lucieM = "bouton/Stop_VoletM.gif";
		
		$html .='<form action="#" method="post" name="ledvolet_lucie_stop" id="formvolet_lucie_stop">';
		$html .='<input type="hidden" name="VOLETLUS" value="ON">';
		$html .='<input  type="image" id="volet_lucie_stop" 
				onmouseover="src=\'' . $imageledvolet_lucieM . '\'" 
				onmouseout="src=\'' . $imageledvolet_lucie . '\'" 
				src="' . $imageledvolet_lucie . '"></form>';

		return $html;
	}
	
	function volet_lucie_bas(){
		$html       = '';
		
		if (isset($_POST["VOLETLUD"])){
			emetteur("VOLETLU", "DES", 2);
		}
		
		$imageledvolet_lucie = "bouton/bas.gif";
		$imageledvolet_lucieM = "bouton/basM.gif";
		
		$html .='<form action="#" method="post" name="ledvolet_lucie_bas" id="formvolet_lucie_bas">';
		$html .='<input type="hidden" name="VOLETLUD" value="ON">';
		$html .='<input  type="image" id="volet_lucie_bas" 
				onmouseover="src=\'' . $imageledvolet_lucieM . '\'" 
				onmouseout="src=\'' . $imageledvolet_lucie . '\'" 
				src="' . $imageledvolet_lucie . '"></form>';

		return $html;
	}
?>
