USE nereus;  -- Select the database.

-- CREATE TABLE `accountInfo` ( `accountID` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(15) NOT NULL , `password` VARCHAR(15) NOT NULL , `email` VARCHAR(320) NOT NULL , PRIMARY KEY (`accountID`));

-- insert data into the database
INSERT INTO accountInfo VALUES
(1,'sabamerchant', 'password@', 'svm21714@uga.edu'),
(2,'venusyand', 'pass@w0rd', 'yang@gmail.com'),
(3, 'sudhan', 'passw#d', 'sudhan@uga.edu'),
(4, 'elodie', 'Yamaha', 'elodie@uga.edu'),
(5, 's', 'e', 'g');

INSERT INTO profileInfo VALUES
(1,'saba', 'merchant', '3rd yr cs major', '20', 'student', 'female','male', '@svm','@svm','@svm'),
(2,'v', 'yang', '3rd yr cs major', '20', 'student', 'female','male', '@vy','@vy','@vy'),
(3, 'elodie', 'collier', '3rd yr cs major', '20', 'student', 'female','male', '@ec','@ec','@ec'),

