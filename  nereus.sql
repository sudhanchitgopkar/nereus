USE nereus;  -- Select the database.

CREATE TABLE `nereus`.`accountInfo` ( `accountID` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(15) NOT NULL , `password` VARCHAR(15) NOT NULL , `email` VARCHAR(320) NOT NULL , PRIMARY KEY (`accountID`)) ENGINE = InnoDB;

-- insert data into the database
INSERT INTO accountInfo VALUES
(1,'sabamerchant', 'password@', 'svm21714@uga.edu'),
(2,'venusyand', 'pass@w0rd', 'yang@gmail.com'),
(3, 'sudhan', 'passw#d', 'sudhan@uga.edu'),
(4, 'elodie', 'Yamaha', 'elodie@uga.edu');


