<?php

///////////////////////////////////////////////////
// Température salon
//////////////////////////////////////////////////


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

echo  $html;
?>