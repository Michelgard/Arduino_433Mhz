
<?php

// connexion a la base
try
{
$bdd = new PDO('mysql:host=IP;dbname=name base', 'login', 'pass',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '1'");
$Temp = $reponse->fetch();
$prise1 = $Temp[0];

$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '2'");
$Temp = $reponse->fetch();
$prise2 = $Temp[0];

$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '3'");
$Temp = $reponse->fetch();
$prise3 = $Temp[0];

$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = '4'");
$Temp = $reponse->fetch();
$priseA = $Temp[0];

if ((!(isset($_POST["LED1"]))) & (!(isset($_POST["LED2"]))) & (!(isset($_POST["LED3"]))) & (!(isset($_POST["LEDA"])))  )
{
	if ($prise1=="ON"){
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}

	if ($prise2=="ON"){
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}

	if ($prise3=="ON"){
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($priseA=="ON"){
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
	}

}

// Check of LED1 is set.  If it is use it
if (isset($_POST["LED1"]))
{
	 $LED1= $_POST["LED1"];

	if ($prise2 == "ON"){
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($prise3 == "ON"){
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($priseA == "ON"){
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
	}
}
else{
	$LED1="";
}

// Check of LED2 is set.  If it is use it
if (isset($_POST["LED2"]))
{
	$LED2= $_POST["LED2"];

	if ($prise1 == "ON"){
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($prise3 == "ON"){
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
}
	else{
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
	}
	if ($priseA == "ON"){
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
	}
}
else{
	$LED2="";
}

// Check of LED3 is set.  If it is use it
if (isset($_POST["LED3"]))
{
	$LED3= $_POST["LED3"];

	if ($prise2 == "ON"){
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
}
	else{
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($prise1 == "ON"){
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($priseA == "ON"){
		$imageledA = "bouton/BoutonOFF.gif";
		$imageledAM = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageledA = "bouton/BoutonON.gif";
		$imageledAM = "bouton/BoutonON-OFF.gif";
	}
}
else{
	$LED3="";
}

// Check of LEDA is set.  If it is use it
if (isset($_POST["LEDA"]))
{
	$LEDA= $_POST["LEDA"];

	if ($prise2 == "ON"){
		$imageled2 = "bouton/BoutonOFF.gif";
		$imageled2M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled2 = "bouton/BoutonON.gif";
		$imageled2M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($prise1 == "ON"){
		$imageled1 = "bouton/BoutonOFF.gif";
		$imageled1M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled1 = "bouton/BoutonON.gif";
		$imageled1M = "bouton/BoutonON-OFF.gif";
	}
	
	if ($prise3 == "ON"){
		$imageled3 = "bouton/BoutonOFF.gif";
		$imageled3M = "bouton/BoutonOFF-ON.gif";
	}
	else{
		$imageled3 = "bouton/BoutonON.gif";
		$imageled3M = "bouton/BoutonON-OFF.gif";
	}
}
else{
	$LEDA="";
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
<form action="ledimagesql.php" method="post" name="led1">
<input type="hidden" name="LED1" value="<?php echo $prise1?>">
<input  type="image" name="submit" value="ON" onClick="led1.submit()" 
onmouseover="src='<?php echo $imageled1M ?>'" 
onmouseout="src='<?php echo $imageled1 ?>'" 
src="<?php echo $imageled1 ?>">
</form>
</td>
<td style="padding:30px" >
<form action="ledimagesql.php" method="post" name="ledA">
<input type="hidden" name="LEDA" value="<?php echo $priseA?>">
<input type="image" name="submit" value="ON" onClick="ledA.submit()" 
onmouseover="src='<?php echo $imageledAM ?>'" 
onmouseout="src='<?php echo $imageledA ?>'" 
src='<?php echo $imageledA ?>'>
</form>
</td>
<td style="padding:30px" >
<form action="ledimagesql.php" method="post" name="led2">
<input type="hidden" name="LED2" value="<?php echo $prise2?>">
<input type="image" name="submit" value="ON" onClick="led2.submit()" 
onmouseover="src='<?php echo $imageled2M ?>'" 
onmouseout="src='<?php echo $imageled2 ?>'" 
src='<?php echo $imageled2 ?>'>
</form>
</td>
<td style="padding:30px" >
<form action="ledimagesql.php" method="post" name="led3">
<input type="hidden" name="LED3" value="<?php echo $prise3?>">
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