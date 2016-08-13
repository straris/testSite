<?php
include_once 'connect_to_mysql.php';
$price=$_GET["price"];

$sql="SELECT * FROM garage_entries where price='$price'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
	 	echo $row["description"];
	 }
}
else {
	echo "No results";
}

?>