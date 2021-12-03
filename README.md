# Nereus

Contributors: [Sudhan Chitgopkar](https://sudhanchitgopkar.com), Saba Merchant, Elodie Collier, Venusly Yang

This README is a work in Progress.

## About Nereus

Nereus is a dating application for UGA students built as final coursework for CSCI4300, Web Programming. 

# SQL table GUI command

CREATE TABLE profileInfo (
	accountID int NOT NULL AUTO_INCREMENT, 
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
	PRIMARY KEY (accountID),
	KEY(accountID));

	//maybe
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

CREATE TABLE accountInfo ( accountID INT NOT NULL AUTO_INCREMENT , username VARCHAR(15) NOT NULL , password VARCHAR(15) NOT NULL , email VARCHAR(320) NOT NULL , PRIMARY KEY (accountID), KEY(accountID));

//amybe 
CREATE TABLE accountInfo (username VARCHAR(30) NOT NULL , password VARCHAR(30) NOT NULL , email VARCHAR(320) NOT NULL , PRIMARY KEY (username));



CREATE TABLE questionsInfo (
	accountID int NOT NULL AUTO_INCREMENT, 
    one int NOT NULL,
    two int NOT NULL,
    three int NOT NULL,
    four int NOT NULL,
    five int NOT NULL,
	PRIMARY KEY (accountID),
 	KEY(accountID));


//maube 

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
  
    
    



INSERT INTO profileInfo VALUES (1,'h','saba', 'merchant','3rd yr cs major', '20', 'student', 'female','serious','male', '@svm','@svm','@svm'), (2,'h','v', 'yang','3rd yr cs major', '20', 'student', 'female','male' ,'serious','@vy','@vy','@vy'), (3, 'h','elodie', 'collier','3rd yr cs major', '20', 'student', 'female','male','serious', '@ec','@ec','@ec');
