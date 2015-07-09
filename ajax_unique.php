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
		 
	case 'pr2':
		 echo pr2();
		 break;
		 
	case 'pr3':
		 echo pr3();
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
	}
	  
	function pr1(){
		$html       = '';
		global $bdd;
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
				src="' . $imageled1 . '"></form>';

		return $html;
	}

	function pr2(){
		
		$html       = '';
		global $bdd;
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
				src="' . $imageled2 . '"></form>';

		return $html;
	}

	function pr3(){
		$html       = '';
		global $bdd;
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
				src="' . $imageled3 . '"></form>';

		return $html;
	}

	function prA(){
		$html       = '';
		global $bdd;
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
				src="' . $imageledA . '"></form>';

		return $html;
	}

	function temp_salon(){
		$html       = '';
		
		if (!defined("THERMOMETER_SENSOR_PATH")) define("THERMOMETER_SENSOR_PATH", "/sys/bus/w1/devices/28-00044cf9b4ff/w1_slave");
		$thermometer = fopen(THERMOMETER_SENSOR_PATH, "r");
		$thermometerReadings = fread($thermometer, filesize(THERMOMETER_SENSOR_PATH));
		fclose($thermometer);
		preg_match("/t=(.+)/", preg_split("/\n/", $thermometerReadings)[1], $matches);
		$temperature = $matches[1] / 1000;
		
		$temperature = round($temperature, 1);
		$temp = explode(".", $temperature);
		if(!array_key_exists( '1', $temp)){$temp[1]='';}
	  
		$html .= '<div class="container">';
		$html .= '  <div class="de">';
		$html .= '     <div class="den">';
		$html .= '      <div class="dene">';
		$html .= '       <div class="denem">';
		$html .= '       <div class="deneme">';
		$html .= $temp[0];
		$html .= '<span>.';
		$html .= $temp[1];
		$html .= '</span><strong>&deg;</strong>';          
		$html .= '      </div>';
		$html .= '  <BR><BR><BR><BR><BR><strong>SALON</strong></div>';
		$html .= '    </div>';
		$html .= '   </div>';
		$html .= '   </div>';    
		$html .= '</div>';
		
		return $html;
	}
		
	function temp_ext(){
		$html       = '';

		global $bdd;
		$reponse = $bdd->query('select MAX(ID_Temp_Ext) from Temp_Ext');
		$Max_ID = $reponse->fetch();
		$ID =$Max_ID[0];


		//dernière valeur
		$reponse = $bdd->query("select Temp_Temp_Ext from Temp_Ext where ID_Temp_Ext = '$ID'");
		$Temp = $reponse->fetch();
		$temperature=$Temp[0];
		
		$temperature = round($temperature, 1);
		$temp = explode(".", $temperature);
	  
		$html .= '<div class="container">';
		$html .= '  <div class="de">';
		$html .= '     <div class="den">';
		$html .= '      <div class="dene">';
		$html .= '       <div class="denem">';
		$html .= '       <div class="deneme">';
		$html .= $temp[0];
		$html .= '<span>.';
		$html .= $temp[1];
		$html .= '</span><strong>&deg;</strong>';          
		$html .= '      </div>';
		$html .= '  <BR><BR><BR><BR><BR><strong>EXT</strong></div>';
		$html .= '    </div>';
		$html .= '   </div>';
		$html .= '   </div>';    
		$html .= '</div>';

		return $html;
	}
?>
