<?php
session_start(); 
include("darioDBConnection.php");
//echo "testing";
//echo isset($_SESSION["charID"]);
/*
if (isset($_SESSION["charID"])) {
	$query = 	"UPDATE charMaster ".
				SET charName='test2' ".
				WHERE charID = :id";
	try {
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":id", $_SESSION["charID"]);
		$stmt->execute();
	}
	catch (PDOException $e) {
		echo "Connection failed: ".$e->getMessage();
	}
}
else {
	$query = "INSERT INTO charMaster (username, charName) VALUES (:username, 'test')";
	$stmt = $conn->prepare($query);
	$stmt->bindParam(":username", $_SESSION["username"]);
	$stmt->execute();
	$query = "SELECT MAX(charID) AS maxCharID FROM charMaster";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	foreach($stmt as $row) {
		$_SESSION["charID"] = $row["maxCharID"];
	}
}

//$query = "SELECT * FROM charMaster WHERE username = :username";
try {
$stmt = $conn->prepare($query);
$stmt->bindParam(":username", $_SESSION["username"]);
$stmt->execute();
if ($stmt->rowCount = 0) {
	//$query = "INSERT INTO charMaster (username, charName, charGender, charClass, charRace, ab1, ab2, ab3, ab4, ab5, ab6) VALUES (:username, :charName, :charClass, :charRace, :ab1, :ab2, :ab3, :ab4, :ab5, :ab6)";
	$query = "INSERT INTO charMaster (username, charName) VALUES (:username, 'test')";
	$stmt = $conn->prepare($query);
	$stmt->bindParam(":username", $_SESSION["username"]);
	$stmt->execute();
}
else {
	
}
}
catch (PDOException $e) {
	echo "Connection failed: ".$e->getMessage();
}*/

?>