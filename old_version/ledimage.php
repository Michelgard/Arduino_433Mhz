
<?php
if ((!(isset($_POST["LED1"]))) & (!(isset($_POST["LED2"]))) & (!(isset($_POST["LED3"]))) & (!(isset($_POST["LEDA"]))) )
{
$imageled1 = "bouton/BoutonON.gif";
$imageled1M = "bouton/BoutonON-OFF.gif";

$imageled2 = "bouton/BoutonON.gif";
$imageled2M = "bouton/BoutonON-OFF.gif";

$imageled3 = "bouton/BoutonON.gif";
$imageled3M = "bouton/BoutonON-OFF.gif";

$imageledA = "bouton/BoutonON.gif";
$imageledAM = "bouton/BoutonON-OFF.gif";

$onoff1="ON";
$onoff2="ON";
$onoff3="ON";
$onoffA="ON";
}

// Check of LED1 is set.  If it is use it
if (isset($_POST["LED1"]))
{
	$LED1= $_POST["LED1"];

	$onoff2= $_POST["posled2"];
	if ($onoff2 == "ON"){
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}
	else{
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	$onoff3= $_POST["posled3"];
	if ($onoff3 == "ON"){
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
	}
	else{
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
	$onoffA= $_POST["posledA"];
	if ($onoffA == "ON"){
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
}
	else{
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
}
else{
	$LED1="";
}

// Check of LED2 is set.  If it is use it
if (isset($_POST["LED2"]))
{
	$LED2= $_POST["LED2"];

	$onoff1= $_POST["posled1"];
	if ($onoff1 == "ON"){
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}
	else{
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	$onoff3= $_POST["posled3"];
	if ($onoff3 == "ON"){
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
}
	else{
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
	$onoffA= $_POST["posledA"];
	if ($onoffA == "ON"){
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
}
	else{
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
}
else{
	$LED2="";
}

// Check of LED3 is set.  If it is use it
if (isset($_POST["LED3"]))
{
	$LED3= $_POST["LED3"];

	$onoff2= $_POST["posled2"];
	if ($onoff2 == "ON"){
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}
	else{
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	$onoff1= $_POST["posled1"];
	if ($onoff1 == "ON"){
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}
	else{
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	
	$onoffA= $_POST["posledA"];
	if ($onoffA == "ON"){
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
	}
	else{
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
}
else{
	$LED3="";
}

// Check of LEDA is set.  If it is use it
if (isset($_POST["LEDA"]))
{
	$LEDA= $_POST["LEDA"];

	$onoff2= $_POST["posled2"];
	if ($onoff2 == "ON"){
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
}
	else{
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	$onoff1= $_POST["posled1"];
	if ($onoff1 == "ON"){
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
}
	else{
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	$onoff3= $_POST["posled3"];
	if ($onoff3 == "ON"){
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
}
	else{
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
}
else{
	$LEDA="";
}

if ($LED1 == "ON")
{
$h = @fopen("http://192.168.0.34/?LED1=ON", "rb");
$imageled1 = "bouton/BoutonOFF.gif";
$imageled1M = "bouton/BoutonOFF-ON.gif";
$onoff1="OFF";
}
else if ($LED1 == "OFF")
{
$h= @fopen("http://192.168.0.34/?LED1=OFF", "rb");
$imageled1 = "bouton/BoutonON.gif";
$imageled1M = "bouton/BoutonON-OFF.gif";
$onoff1="ON";
}


if ($LED2 == "ON")
{
$h = fopen("http://192.168.0.34/?LED2=ON", "rb");
$imageled2 = "bouton/BoutonOFF.gif";
$imageled2M = "bouton/BoutonOFF-ON.gif";
$onoff2="OFF";
}
else if ($LED2 == "OFF")
{
$h= fopen("http://192.168.0.34/?LED2=OFF", "rb");
$imageled2 = "bouton/BoutonON.gif";
$imageled2M = "bouton/BoutonON-OFF.gif";
$onoff2="ON";
}


if ($LED3 == "ON")
{
$h = fopen("http://192.168.0.34/?LED3=ON", "rb");
$imageled3 = "bouton/BoutonOFF.gif";
$imageled3M = "bouton/BoutonOFF-ON.gif";
$onoff3="OFF";
}
else if ($LED3 == "OFF")
{
$h= fopen("http://192.168.0.34/?LED3=OFF", "rb");
$imageled3 = "bouton/BoutonON.gif";
$imageled3M = "bouton/BoutonON-OFF.gif";
$onoff3="ON";
}

if ($LEDA == "ON")
{
$h = fopen("http://192.168.0.34/?LEDA=ON", "rb");
$imageledA = "bouton/BoutonOFF.gif";
$imageledAM = "bouton/BoutonOFF-ON.gif";
$onoffA="OFF";
}
else if ($LEDA == "OFF")
{
$h= fopen("http://192.168.0.34/?LEDA=OFF", "rb");
$imageledA = "bouton/BoutonON.gif";
$imageledAM = "bouton/BoutonON-OFF.gif";
$onoffA="ON";
}
?>

<!-- Start of the HTML -->
<html>
<head>

 <style type="text/css">
 
body{
	background-color  : rgba(0, 0, 0, 1);
	width             : 100%;
	height            : 100%;
}
	
input:focus {
    outline	: none;
}			

  </style>
  
<title>Commande prise 433Mhz</title>
</head>
<body >
<center>

<table border="0"  align="center" style="margin:30px">
<tr align="center" >
<td><font size="4" color="#ffffff">Lampe Chambre</font></H4></td>
<td><font size="4" color="#ffffff">Lustre Chambre</font></H4></td>
<td><font size="4" color="#ffffff">Prise N° 2</font></H4></td>
<td><font size="4" color="#ffffff">Ecran PI</font></H4></td>
</tr>

<tr align="center">
<td style="padding:30px" >
<form action="ledimage.php" method="post" name="led1">
<input type="hidden" name="LED1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input type="hidden" name="posledA" value="<?php echo $onoffA?>">
<input  type="image" name="submit" value="ON" onClick="led1.submit()" 
onmouseover="src='<?php echo $imageled1M ?>'" 
onmouseout="src='<?php echo $imageled1 ?>'" 
src="<?php echo $imageled1 ?>">
</form>
</td>
<td style="padding:30px" >
<form action="ledimage.php" method="post" name="ledA">
<input type="hidden" name="LEDA" value="<?php echo $onoffA?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input  type="image" name="submit" value="ON" onClick="ledA.submit()" 
onmouseover="src='<?php echo $imageledAM ?>'" 
onmouseout="src='<?php echo $imageledA ?>'" 
src="<?php echo $imageledA ?>">
</form>
</td>
<td style="padding:30px" >
<form action="ledimage.php" method="post" name="led2">
<input type="hidden" name="LED2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input type="hidden" name="posledA" value="<?php echo $onoffA?>">
<input type="image" name="submit" value="ON" onClick="led2.submit()" 
onmouseover="src='<?php echo $imageled2M ?>'" 
onmouseout="src='<?php echo $imageled2 ?>'" 
src='<?php echo $imageled2 ?>'>
</form>
</td>
<td style="padding:30px" >
<form action="ledimage.php" method="post" name="led3">
<input type="hidden" name="LED3" value="<?php echo $onoff3?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="hidden" name="posledA" value="<?php echo $onoffA?>">
<input type="image" name="submit" value="ON" onClick="led3.submit()" 
onmouseover="src='<?php echo $imageled3M ?>'" 
onmouseout="src='<?php echo $imageled3 ?>'" 
src='<?php echo $imageled3 ?>'>
</form>
</td>
</tr>
</table>
</center>
</body>
</html>