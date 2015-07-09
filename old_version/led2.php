<!-- Start of the HTML -->
<html>
<head>
<title>Click to Turn on or OFF the LED in the background</title>
</head>
<body bgcolor="#FF9933">
<?php

// Check of LED1 is set.  If it is use it
if (isset($_POST["LED1"]))
{
$LED1= $_POST["LED1"];
}
else
{
$LED1 ="";
}
if ($LED1 == "ON")
{
// Set led1 ON by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h = fopen("http://192.168.0.34/?LED1=ON", "rb");
}
else if ($LED1 == "OFF")
{
// Set led1 OFF by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h= fopen("http://192.168.0.34/?LED1=OFF", "rb");
}

// Check of LED2 is set.  If it is use it
if (isset($_POST["LED2"]))
{
$LED2= $_POST["LED2"];
//echo "<b>$LED2</b>";
}
else
{
$LED2 ="";
}
if ($LED2 == "ON")
{
// Set led2 ON by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h = fopen("http://192.168.0.34/?LED2=ON", "rb");
}
else if ($LED2 == "OFF")
{
// Set led2 OFF by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h= fopen("http://192.168.0.34/?LED2=OFF", "rb");
}

// Check of LED4 is set.  If it is use it
if (isset($_POST["LED3"]))
{
$LED4= $_POST["LED3"];
//echo "<b>LED4 is $LED4</b>";
}
else
{
$LED3 ="";
}
if ($LED3 == "ON")
{
// Set led3 ON by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h = @fopen("http://192.168.0.34/?LED3=ON", "rb");
}
else if ($LED3 == "OFF")
{
// Set led3 OFF by calling the Arduino using fopen
//ini_set("allow_url_fopen On", true);
$h= @fopen("http://192.168.0.34/?LED3=OFF", "rb");
}

?>
<!-- LED2 FORM -->
<table>
<tr><td colspan="2"><font size="4" color="yellow">Turn on and off the LED1</font></H4></td></tr>
<tr><td> 
<form action="led2.php" method="post">
<input type="hidden" name="LED1" value="ON">
<input type="submit" name="submit" value="ON">
</form>
</td><td>
<form action="led2.php" method="post">
<input type="hidden" name="LED1" value="OFF">
<input type="submit" name="submit" value="OFF">
</form>
</td></tr>
</table>

<table>
<tr><td colspan="2"><font size="4" color="yellow">Turn on and off the LED2</font></H4></td></tr>
<tr><td> 
<form action="led2.php" method="post">
<input type="hidden" name="LED2" value="ON">
<input type="submit" name="submit" value="ON">
</form>
</td><td>
<form action="led2.php" method="post">
<input type="hidden" name="LED2" value="OFF">
<input type="submit" name="submit" value="OFF">
</form>
</td></tr>
</table>

<table>
<tr><td colspan="2"><font size="4" color="green">Turn on and off the LED3</font></td></tr>
<tr><td> 
<form action="led2.php" method="post">
<input type="hidden" name="LED3" value="ON">
<input type="submit" name="submit" value="ON">
</form>
</td><td>
<form action="led2.php" method="post">
<input type="hidden" name="LED3" value="OFF">
<input type="submit" name="submit" value="OFF">
</form>
</td></tr>
</table>


</body>
</html>