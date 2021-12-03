CREATE TABLE profileInfo (
    picture varchar(50) NOT NULL,   	
    firstName varchar(10) NOT NULL UNIQUE,
    lastName varchar(15) NOT NULL,
	bio varchar(150) NOT NULL,
	age int NOT NULL,
	jobTitle varchar(15) NOT NULL,
	sex varchar(15) NOT NULL,
	lookingForSex varchar(15) NOT NULL,
    relationType varchar(15) NOT NULL,
	instagram varchar(60) NOT NULL,
	twitter varchar(60) NOT NULL,
	spotify varchar(60) NOT NULL,
    username varchar(50),
    FOREIGN KEY (username) REFERENCES accountInfo(username)
);


CREATE TABLE accountInfo (username VARCHAR(30) NOT NULL , password VARCHAR(30) NOT NULL , email VARCHAR(320) NOT NULL , PRIMARY KEY (username));



CREATE TABLE questionsInfo (
	accountID int NOT NULL AUTO_INCREMENT, 
    one int NOT NULL,
    two int NOT NULL,
    three int NOT NULL,
    four int NOT NULL,
    five int NOT NULL,
    username varchar(50),
	PRIMARY KEY (accountID),
 	FOREIGN KEY (username) REFERENCES accountInfo(username)
);