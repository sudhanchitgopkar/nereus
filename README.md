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



INSERT INTO accountInfo VALUES ('sabamerchant', 'lolololol', 'saba@gmail.com), ('venus', 'password@12','venus@gmail.com'), ('lod', 'passw%rd','lod@gmail.com'), ('sudhan', 'l#l3l#l','dude@gmail.com');


INSERT INTO profileInfo VALUES ('Saba','Merchant','Looking for a good time', '21', 'student', 'Female', 'Male','Serious','https://www.instagram.com/saba_merchant123/',' https://twitter.com/SabaMerchant6',' https://open.spotify.com/user/fhk5k0ei207rdsw76iv5kggaz?si=f44bfd8b52194d3b%27,,%27sabamerchant%27), ('Venusly','Yang','8 feet tall CS Major','21','barista','Female','Male','Serious','https://www.instagram.com/venusly.y/%27,%27https://twitter.com/%27,%27https://open.spotify.com/%27,%27venus%27), ('Elodie','Collier','I love to dance and tell funny jokes', '21', 'Tutor', 'Other', 'Female','Friends','https://www.instagram.com/elodiecollier/%27,%27https://twitter.com/elodiecollier%27,%27https://open.spotify.com/%27,%27lod%27)(%27Sudhan%27,%27Chitgopkar%27,%27color and font boy', '20', 'Intern', 'Male', 'Male','Fling',' https://www.instagram.com/not.sudhan/%27,%27https://twitter.com/%27,%27https://open.spotify.com/user/sudhan.chitgopkar?si=92f9aeb83e5f40ee%27,%27sudhan%27);

INSERT INTO questionsInfo VALUES ('1','2','1','2','2','sabamerchant'), ('1','2','1','2','2','venus'), ('1','1','2','2','2','sudhan'), ('2','2','2','2','2','lod');