<?php
include "connexion.php";
///////////////////////////////////////////////////
// Température exterieur
///////////////////////////////////////////////////

	$html       = '';

	// récupération de la valeur de la base de donnée vérifier en amont


// Max ID de la base
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

	echo $html;
?>