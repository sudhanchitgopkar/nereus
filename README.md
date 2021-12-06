CREATE TABLE accountInfo (username VARCHAR(30) NOT NULL , password VARCHAR(30) NOT NULL , email VARCHAR(320) NOT NULL , PRIMARY KEY (username));

CREATE TABLE profileInfo (
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
    one int NOT NULL,
    two int NOT NULL,
    three int NOT NULL,
    four int NOT NULL,
    five int NOT NULL,
    username varchar(50),
	PRIMARY KEY (accountID),
 	FOREIGN KEY (username) REFERENCES accountInfo(username)
);



<<<<<<< HEAD
INSERT INTO accountInfo VALUES ('sabamerchant', 'lolololol', 'saba@gmail.com), ('venus', 'password@12','venus@gmail.com'), ('lod', 'passw%rd','lod@gmail.com'), ('sudhan', 'l#l3l#l','dude@gmail.com');
=======
INSERT INTO accountInfo VALUES ('sabamerchant', 'lolololol', 'saba@gmail.com'), ('venus', 'helpmeplslol','venus@gmail.com'), ('lod', 'helpmeplslol1','lod@gmail.com'), ('sudhan', 'helpmeplslol3','dud@gmail.com');
>>>>>>> 3a1b86dabe74688cc99fcdd61495ef251b412278

INSERT INTO profileInfo VALUES ('saba','merchant','help me this is saba', '21', 'studnwt', 'Male', 'Female','serious','jjdsl','sdlkf','sldfkm','sabamerchant'), ('venusly','yang','hi yo im venus','21','stuendt','Female','Male','serious','khf','sds','dsf','venus');

<<<<<<< HEAD
INSERT INTO questionsInfo VALUES ('1','2','1','2','2','sabamerchant'), ('1','2','1','2','2','venus'), ('2','2','2','2','2','lod'), ('1','1','1','1,'1','sudhan' );
=======
INSERT INTO questionsInfo VALUES ('0','1','2','1','2','2','sabamerchant'), ('0','1','2','1','2','2','venus');
>>>>>>> 3a1b86dabe74688cc99fcdd61495ef251b412278
