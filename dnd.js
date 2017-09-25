var ab = [0, 0, 0, 0, 0, 0];

function randAllBasic() {
	var name = Math.random() * 3;
	if (name < 1) {
		$("#charName").val("Indecisive Joe");
	}
	else if (name < 2) {
		$("#charName").val("Lucky Joe");
	}
	else {
		$("#charName").val("Lazy Joe");
	}
	rollGender();
	rollClass();
	rollRace();
	rollAbl();
	asgAbl();
}

function validate() {
	console.log($("#charName").val());
	if ($("#charName").val() == "") {
		$("#error").html("Please enter a name");
	}
	else if ($("#charGender").val() == "") {
		$("#error").html("Please enter a gender");
	}
	else if ($("#charRace").val() == "none") {
		$("#error").html("Please select a race");
	}
	else if ($("#charClass").val() == "none") {
		$("#error").html("Please select a class");
	}
	else if ($("#ab1").val() == "") {
		$("#error").html("Please enter a Strength score");
	}
	else if ($("#ab2").val() == "") {
		$("#error").html("Please enter a Constitution score");
	}
	else if ($("#ab3").val() == "") {
		$("#error").html("Please enter a Dexterity score");
	}
	else if ($("#ab4").val() == "") {
		$("#error").html("Please enter an Intelligence score");
	}
	else if ($("#ab5").val() == "") {
		$("#error").html("Please enter a Wisdom score");
	}
	else if ($("#ab6").val() == "") {
		$("#error").html("Please enter a Charisma score");
	}
	else {
		$("#basicInfoForm").submit();
	}
}

function asgAbl() {
	var places = [0, 0, 0, 0, 0, 0];
	if (ab[1] == 0) {
		rollAbl();
	}
	var place;
	for (var i = 0; i < 6; i++) {
		place = Math.floor(Math.random() * 6);
		while (places[place] != 0) {
			place = (place + 1) % 6;
		}
		places[place] = ab[i];
		//console.log(ab[i] + " at " + place);
	}
	$("#ab1").val(places[0]);
	$("#ab2").val(places[1]);
	$("#ab3").val(places[2]);
	$("#ab4").val(places[3]);
	$("#ab5").val(places[4]);
	$("#ab6").val(places[5]);
}

function rollAbl() {
	var roll = [4];
	var add;
	for (var i = 0; i < 6; i++) {
		add = 0;
		for (var j = 0; j < 4; j++) {
			roll[j] = Math.ceil(Math.random() * 6);
			add += roll[j];
			//console.log("I rolled " + roll[j]);
		}
		add -= Math.min.apply(null, roll);
		//console.log("saving " + add);
		ab[i]=add; 
	}
	$("#showRoll").show();
	$("#yourRolls").html(ab[0] + ", " + ab[1] + ", " + ab[2] + ", " + ab[3] + ", " + ab[4] + ", " + ab[5]);
}

function rollClass() {
	var x = Math.random() * 6;
	if (x < 1) {
		$("#charClass").val("ftr");
	}
	else if (x < 2) {
		$("#charClass").val("rge");
	}
	else if (x < 3) {
		$("#charClass").val("brd");
	}
	else if (x < 4) {
		$("#charClass").val("clr");
	}
	else if (x < 5) {
		$("#charClass").val("dru");
	}
	else {
		$("#charClass").val("wiz");
	}
}

function rollGender() {
	var x = Math.random() * 3;
	if (x < 1) {
		$("#charGender").val("Male");
	}
	else if (x < 2) {
		$("#charGender").val("Female");
	}
	else {
		$("#charGender").val("NB");
	}
}

function rollRace() {
	var x = Math.random() * 9;
	if (x < 1) {
		$("#charRace").val("drg");
	}
	else if (x < 2) {
		$("#charRace").val("dwf");
	}
	else if (x < 3) {
		$("#charRace").val("elf");
	}
	else if (x < 4) {
		$("#charRace").val("hfd");
	}
	else if (x < 5) {
		$("#charRace").val("hfe");
	}
	else if (x < 6) {
		$("#charRace").val("hfo");
	}
	else if (x < 7) {
		$("#charRace").val("hfl");
	}
	else if (x < 8) {
		$("#charRace").val("hmn");
	}
	else {
		$("#charRace").val("orc");
	}
}