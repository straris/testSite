<?php 
 $conn = new mysqli("83.212.116.204","kokos","chinchilla321","testSite");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 ?> 