<!-- Start of the HTML -->
<html>
<head>

<title>Commande prise 433Mhz</title>
</head>
<body bgcolor="#000000">


<?php
if ((!(isset($_POST["LED1"]))) & (!(isset($_POST["LED2"]))) & (!(isset($_POST["LED3"]))) )
{
$imageled1 = "bouton/BoutonON.gif";
$imageled2 = "bouton/BoutonON.gif";
$imageled3 = "bouton/BoutonON.gif";
$onoff1="ON";
$onoff2="ON";
$onoff3="ON";
}

// Check of LED1 is set.  If it is use it
if (isset($_POST["LED1"]))
{
	$LED1= $_POST["LED1"];

	$onoff2= $_POST["posled2"];
	if ($onoff2 == "ON"){
		$imageled2 = "bouton/BoutonON.gif";
	}
	else{
		$imageled2 = "bouton/BoutonOFF.gif";
	}
	$onoff3= $_POST["posled3"];
	if ($onoff3 == "ON"){
		$imageled3 = "bouton/BoutonON.gif";
	}
	else{
		$imageled3 = "bouton/BoutonOFF.gif";
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
	}
	else{
		$imageled1 = "bouton/BoutonOFF.gif";
	}
	$onoff3= $_POST["posled3"];
	if ($onoff3 == "ON"){
		$imageled3 = "bouton/BoutonON.gif";
}
	else{
		$imageled3 = "bouton/BoutonOFF.gif";
	}
}
else{
	$LED2="";
}

// Check of LED4 is set.  If it is use it
if (isset($_POST["LED3"]))
{
	$LED3= $_POST["LED3"];

	$onoff2= $_POST["posled2"];
	if ($onoff2 == "ON"){
		$imageled2 = "bouton/BoutonON.gif";
}
	else{
		$imageled2 = "bouton/BoutonOFF.gif";
	}
	$onoff1= $_POST["posled1"];
	if ($onoff1 == "ON"){
		$imageled1 = "bouton/BoutonON.gif";
}
	else{
		$imageled1 = "bouton/BoutonOFF.gif";
	}
}
else{
	$LED3="";
}

if ($LED1 == "ON")
{
// Set led1 ON by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h = @fopen("http://192.168.0.34/?LED1=ON", "rb");
$imageled1 = "bouton/BoutonOFF.gif";
$onoff1="OFF";
}
else if ($LED1 == "OFF")
{
// Set led1 OFF by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h= @fopen("http://192.168.0.34/?LED1=OFF", "rb");
$imageled1 = "bouton/BoutonON.gif";
$onoff1="ON";
}


if ($LED2 == "ON")
{
// Set led2 ON by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h = fopen("http://192.168.0.34/?LED2=ON", "rb");
$imageled2 = "bouton/BoutonOFF.gif";
$onoff2="OFF";
}
else if ($LED2 == "OFF")
{
// Set led2 OFF by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h= fopen("http://192.168.0.34/?LED2=OFF", "rb");
$imageled2 = "bouton/BoutonON.gif";
$onoff2="ON";
}


if ($LED3 == "ON")
{
// Set led3 ON by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h = fopen("http://192.168.0.34/?LED3=ON", "rb");
$imageled3 = "bouton/BoutonOFF.gif";
$onoff3="OFF";
}
else if ($LED3 == "OFF")
{
// Set led3 OFF by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h= fopen("http://192.168.0.34/?LED3=OFF", "rb");
$imageled3 = "bouton/BoutonON.gif";
$onoff3="ON";
}

?>
<!-- LED1 FORM -->
<table>
<tr><td ><font size="4" color="#ffffff">Prise N° 1</font></H4></td></tr>
<tr><td> 
<form action="ledimage.php" method="post" name="led1">
<input type="hidden" name="LED1" value="<?php echo $onoff1?>">

<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input type="image" name="submit" value="ON" onClick="led1.submit()" src = "<?php echo $imageled1 ?>" >
</form>
</td></tr>
</table>

<!-- LED2 FORM -->
<table>
<tr><td ><font size="4" color="#ffffff">Prise N° 2</font></H4></td></tr>
<tr><td> 
<form action="ledimage.php" method="post" name="led2">

<input type="hidden" name="LED2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input type="image" name="submit" value="ON" onClick="led2.submit()" src = "<?php echo $imageled2 ?>" >
</form>
</td></tr>
</table>

<!-- LED3 FORM -->
<table>
<tr><td><font size="4" color="#ffffff">Prise N° 3</font></H4></td></tr>
<tr><td> 
<form action="ledimage.php" method="post" name="led3">

<input type="hidden" name="LED3" value="<?php echo $onoff3?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="image" name="submit" value="ON" onClick="led3.submit()" src = "<?php echo $imageled3 ?>" >
</form>
</td></tr>
</table>

<table>
<tr>
<td><font size="4" color="#ffffff">Prise N° 1</font></H4></td>
<td><font size="4" color="#ffffff">Prise N° 2</font></H4></td>
<td><font size="4" color="#ffffff">Prise N° 3</font></H4></td>
</tr>

<tr>
<td>
<form action="ledimage.php" method="post" name="led1">
<input type="hidden" name="LED1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input type="image" name="submit" value="ON" onClick="led1.submit()" src = "<?php echo $imageled1 ?>" >
</form>
</td>
<td>
<form action="ledimage.php" method="post" name="led2">
<input type="hidden" name="LED2" value="<?php echo $onoff2?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled3" value="<?php echo $onoff3?>">
<input type="image" name="submit" value="ON" onClick="led2.submit()" src = "<?php echo $imageled2 ?>" >
</form>
</td>
<td>
<form action="ledimage.php" method="post" name="led3">
<input type="hidden" name="LED3" value="<?php echo $onoff3?>">
<input type="hidden" name="posled1" value="<?php echo $onoff1?>">
<input type="hidden" name="posled2" value="<?php echo $onoff2?>">
<input type="image" name="submit" value="ON" onClick="led3.submit()" src = "<?php echo $imageled3 ?>" >
</form>
</td>
</tr>
</table>

</body>
</html>