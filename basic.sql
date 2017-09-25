DROP TABLE charMaster;

CREATE TABLE charMaster (
charID int(10) AUTO_INCREMENT,
username char(20),
charName char(20),
charGender char(20),
charRace char(20),
charClass char(20),
ab1 int(2),
ab2 int(2),
ab3 int(2),
ab4 int(2),
ab5 int(2),
ab6 int(2),
PRIMARY KEY (charID)
);