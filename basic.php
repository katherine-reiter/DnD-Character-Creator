<!DOCTYPE html>
<html>
<head>
	<title>D&D Character Creator ~ Basics</title>
	<meta name="description" content="D&D character creator">
	<meta name="keywords" content="D&D, character">
	<link rel="stylesheet" type="text/css" href="dnd.css">
	<script src="dnd.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<?php session_start();
$_SESSION["username"] = "newUser";
 ?>

<!-- For the future:
-add rolls to make random, use javascript?
-hover over for description? like a lil fairy symbol that can fly around maybe
-cool fantasy font
-set table size so the stuff oesn't move around when u roll
-better names?????
-master page w links to other pages

Other page ideas:
-appearance (body type, eye color, hair, distinguishing features)
-personality (quirks, friendliness, special talents)
-background (location, family, life events)
-->
<h1>Basic Character Information</h1>

<!--add action-->
<form id="basicInfoForm" name="basicOrderForm" method="post" action="http://yoda.cs.uwec.edu/CS268/Students/REITERKL9561/268/finalproejct/processBasic.php">

<table class="formTable">

<tr>
<td colspan="3"><button type="button" onclick="randAllBasic()">Leave it all to fate!</button></td>

<tr>
<td>Name:</td>
<td><input type="text" id="charName" name="charName"></td>
</tr>

<tr>
<td>Gender:</td>
<td><input type="text" name="charGender" id="charGender"></td>
<td><button type="button" onclick="rollGender()">Roll!</button></td>
</tr>

<tr>
<td>Race:</td>
<td>
	<select id="charRace">
		<option value="none"></option>
		<option value="drg">Dragonborn</option>
		<option value="dwf">Dwarf</option>
		<option value="elf">Elf</option>
		<option value="hfd">Half-Dwarf</option>
		<option value="hfe">Half-Elf</option>
		<option value="hfo">Half-Orc</option>
		<option value="hfl">Halfling</option>
		<option value="hmn">Human</option>
		<option value="orc">Orc</option>
	</select>
</td>
<td><button type="button" onclick="rollRace()">Roll!</button></td>
</tr>

<tr>
<td>Class:</td>
<td>
	<select id="charClass">
		<option value="none"></option>
		<option value="ftr">Fighter</option>
		<option value="brd">Bard</option>
		<option value="clr">Cleric</option>
		<option value="dru">Druid</option>
		<option value="rge">Rogue</option>
		<option value="wiz">Wizard</option>
	</select>
</td>
<td><button type="button" onclick="rollClass()">Roll!</button></td>
</tr>

<tr>
<td colspan="2"><h1>Abilities</h1></td>
</tr>

<tr>
<td><button type="button" onclick="rollAbl()">Roll numbers</button></td>
<td><button type="button" onclick="asgAbl()">Asign numbers</button></td>
</tr>

<tr id="showRoll" style="display:none">
<td>Your rolls:</td>
<td id="yourRolls"></td>

<tr>
<td>Strength:</td>
<td><input id="ab1" type="text" name="str"></td>
</tr>

<tr>
<td>Constitution:</td>
<td><input id="ab2" type="text" name="con"></td>
</tr>

<tr>
<td>Dexterity:</td>
<td><input id="ab3" type="text" name="dex"></td>
</tr>

<tr>
<td>Intelligence:</td>
<td><input id="ab4" type="text" name="int"></td>
</tr>

<tr>
<td>Wisdom:</td>
<td><input id="ab5" type="text" name="wis"></td>
</tr>

<tr>
<td>Charisma:</td>
<td><input id="ab6" type="text" name="chr"></td>
</tr>

<tr>
<td><button type="button" onclick="validate()">Finished!</button></td>
<td id="error"></td>
</tr>

</table>
</form>
</body>
</html>