<?php
$server = "dario.cs.uwec.edu";
$username = "REITERKL9561";
$password = "XXBWRXKP";
$conn = new PDO("mysql:host=".$server.";dbname=".$username, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>