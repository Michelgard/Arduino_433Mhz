<?php

try
{
$bdd = new PDO('mysql:host=ip;dbname=michxxxxx1', 'mixxxxxxxd1', 'pass',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}

?>
