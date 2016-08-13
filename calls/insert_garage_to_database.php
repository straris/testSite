<?php

	include_once('connect_to_mysql.php');  //sindesi me tin basi
	

if( $_GET["title"] || $_GET["address"] || $_GET["type"] || $_GET["security"] || $_GET["from_start"] || $_GET["from_end"] || $_GET["price_start"] || $_GET["price_end"])
{

$title=$_GET["title"];
$address=$_GET["address"];
$type=$_GET["type"];
$security=$_GET["security"];
$from_start=$_GET["from_start"];
$from_end=$_GET["from_end"];
$price_start=$_GET["price_start"];
$price_end=$_GET["price_end"];

/*

echo "Title: ". $_GET["title"]. "<br />";

echo "Address: ". $_GET["address"]. "<br />";

echo "Type: ". $_GET["type"]. "<br />";

echo "Security: ". $_GET["security"]. "<br />";

echo "From: ". $_GET["from_start"].;

	echo "To: ". $_GET["from_end"]. "<br />";

echo "Price: ". $_GET["price_start"].;

	echo "Until: ". $_GET["price_end"]. "<br />";

}

*/


?>




