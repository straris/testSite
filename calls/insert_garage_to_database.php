<?php

include('connect_to_mysql.php');

$sql = "INSERT INTO garage_entries (description, steet)
VALUES ('description', 'steet')";

if( $_GET["title"] || $_GET["address"] || $_GET["type"] || $_GET["security"] || $_GET["from"] || $_GET["to"] || $_GET["price"] || $_GET["price"] || $_GET["description"] || $_GET["steet"])
{

$title=$_GET["title"];

$address=$_GET["address"];

$type=$_GET["type"];

$security=$_GET["security"];

$from=$_GET["from"];

$to=$_GET["to"];

$price=$_GET["price"];

$to=$_GET["to"];

$price=$_GET["price"];


$price=$_GET["description"];
$price=$_GET["steet"];



/*

echo "Title: ". $_GET["title"]. "<br />";

echo "Address: ". $_GET["address"]. "<br />";

echo "Type: ". $_GET["type"]. "<br />";

echo "Security: ". $_GET["security"]. "<br />";

echo "From: ". $_GET["from_start"].;

	echo "To: ". $_GET["from_end"]. "<br />";

echo "Price: ". $_GET["price_start"].;

	echo "Until: ". $_GET["price_end"]. "<br />";



*/

}


?>




