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
	twitter varchar(150) NOT NULL,
	spotify varchar(150) NOT NULL,
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
 	FOREIGN KEY (username) REFERENCES accountInfo(username)
);



INSERT INTO accountInfo VALUES ('sabamerchant', 'lolololol', 'saba@gmail.com'), ('venus', 'password@12','venus@gmail.com'), ('lod', 'passw%rd','lod@gmail.com'), ('sudhan', 'l#l3l#l','dude@gmail.com');

INSERT INTO profileInfo VALUES ('saba','merchant','help me this is saba', '21', 'studnwt', 'Male', 'Female','serious','jjdsl','sdlkf','sldfkm','sabamerchant'), ('venusly','yang','hi yo im venus','21','stuendt','Female','Male','serious','khf','sds','dsf','venus');

<<<<<<< HEAD
INSERT INTO questionsInfo VALUES ('0','1','2','1','2','2','sabamerchant'), ('0','1','2','1','2','2','venus';

INSERT INTO profileInfo VALUES ('Saba','Merchant','Looking for a good time', '21', 'student', 'Female', 'Male','Serious','https://www.instagram.com/saba_merchant123/',' https://twitter.com/SabaMerchant6',' https://open.spotify.com/user/fhk5k0ei207rdsw76iv5kggaz?si=f44bfd8b52194d3b',,'sabamerchant'), ('Venusly','Yang','8 feet tall CS Major','21','barista','Female','Male','Serious','https://www.instagram.com/venusly.y/','https://twitter.com/','https://open.spotify.com/','venus'), ('Elodie','Collier','I love to dance and tell funny jokes', '21', 'Tutor', 'Other', 'Female','Friends','https://www.instagram.com/elodiecollier/','https://twitter.com/elodiecollier','https://open.spotify.com/','lod')('Sudhan','Chitgopkar','color and font boy', '20', 'Intern', 'Male', 'Male','Fling',' https://www.instagram.com/not.sudhan/','https://twitter.com/','https://open.spotify.com/user/sudhan.chitgopkar?si=92f9aeb83e5f40ee','sudhan');
=======
INSERT INTO questionsInfo VALUES ('1','2','1','2','2','sabamerchant'), ('1','2','1','2','2','venus'), ('2','2','2','2','2','lod'), ('1','1','1','1,'1','sudhan' );
>>>>>>> 48da0743b52d3798af7684496f528fd20dfa6e07
