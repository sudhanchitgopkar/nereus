CREATE TABLE accountInfo (username VARCHAR(30) NOT NULL , password VARCHAR(30) NOT NULL , email VARCHAR(320) NOT NULL , PRIMARY KEY (username));

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



INSERT INTO accountInfo VALUES ('sabamerchant', 'lolololol', 'saba@gmail.com'), ('venus', 'helpmeplslol','venus@gmail.com'), ('lod', 'helpmeplslol1','lod@gmail.com'), ('sudhan', 'helpmeplslol3','dud@gmail.com');

INSERT INTO profileInfo VALUES ('0','saba','merchant','help me this is saba', '21', 'studnwt', 'Male', 'Female','serious','jjdsl','sdlkf','sldfkm','sabamerchant'), ('0','venusly','yang','hi yo im venus','21','stuendt','Female','Male','serious','khf','sds','dsf','venus');

INSERT INTO questionsInfo VALUES ('0','1','2','1','2','2','sabamerchant'), ('0','1','2','1','2','2','venus');
