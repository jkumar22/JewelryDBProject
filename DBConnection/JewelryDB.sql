DROP SCHEMA IF EXISTS `JewelryDB`;

CREATE SCHEMA IF NOT EXISTS  `JewelryDB`; 
USE `JewelryDB`;

CREATE TABLE IF NOT EXISTS `USER` (
  `userID` int  NOT NULL AUTO_INCREMENT,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `creditCard`varchar(65) NOT NULL,
  `address1` varchar(65) NOT NULL,
  `address2` varchar(65)  NULL,
  `city` varchar(65) NOT NULL,
  `state` varchar(65) NOT NULL,
  `zip` int(22) NOT NULL,
  `country` varchar(65) NOT NULL,
  `date` varchar(65) NOT NULL,
  `markingEmailFlag` int NOT NULL DEFAULT 0, 
  `rating` int NOT NULL DEFAULT 0, 
CONSTRAINT USERUserIDPK
    PRIMARY KEY (`userID`)
);

INSERT INTO `USER` 
(`fname`, `lname`, `email`, `creditCard`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `date`, `markingEmailFlag` ) 
VALUES
('Jim', 'Pam', 'jnpatel@umich.edu', '1234567887654321', '123 home street', '342 APT', 'Canton', 'MI', 41881, 'USA', '2018-06-13 08:20:44pm', 0),
('Jay', 'Patel', 'admin@email.com', '1234567887654321', '42422 Test Dr', '', 'Canton', 'MI', 48188, 'USA', '2018-06-13 08:53:22pm',1);

CREATE TABLE IF NOT EXISTS `LOGIN` (
  `userID` int NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL DEFAULT 'password', 
  `adminFlag` int NOT NULL DEFAULT 0,
CONSTRAINT LogInUserIDPK
  PRIMARY KEY(`email`),
CONSTRAINT LoginUserFK
  FOREIGN KEY( `userID`)REFERENCES USER(`userID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `LOGIN` (`userID`, `email`, `password`, `adminFlag`) 
VALUES
('1', 'jnpatel@umich.edu', 'password',0),
('2', 'admin@email.com', 'password',1);

CREATE TABLE IF NOT EXISTS `PRODUCT` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(65) NOT NULL,
  `ptype` varchar(65) NOT NULL,
  `price` int NOT NULL,
  `inventory` int NOT NULL,
  `pCost` int NOT NULL,
  `inventoryDate` varchar(65) NOT NULL, 
  `stock` int NOT NULL, 
  `image` varchar(65) NOT NULL,
CONSTRAINT PRODUCTproductIDPK
  PRIMARY KEY(`productID`)
);

INSERT INTO `PRODUCT` 
(`productID`,`pname`, `ptype`, `price`, `inventory`, `inventoryDate`, `pCost`, `stock`, `image`) 
VALUES
(1, 'Dimond', 'Earring', 7, 20, '11/29/2018', 3, 20, 'er1.jpg'),
(2, 'Loop', 'Earring',16, 15, '11/29/2018' , 10, 15, 'er2.jpg'),
(3, 'Flower', 'Earring',25, 15, '11/29/2018',18, 15, 'er3.jpg'),
(4, 'Classic', 'Baby Bracelet',17, 4, '11/29/2018',12, 4, 'cb1.jpg'),
(5, 'Cultured', 'Baby Bracelet',25, 16, '11/29/2018',20, 16, 'cb2.jpg'),
(6, 'Sweet Classic', 'Baby Bracelet', 35, 24, '11/30/2018',28, 24, 'cb3.jpg'),
(10, 'Classic', 'Mother Bracelet',17, 16, '11/30/2018',11, 16,'mb1.jpg'),
(11, 'Perl', 'Mother Bracelet',117, 20, '11/29/2018',100, 20,'mb2.jpg'),
(12, 'Birthstone', 'Mother Bracelet',127, 12, '11/29/2018',115, 12,'mb3.jpg'),
(13, 'Hart', 'Set',217, 15, '11/27/2018',200, 15, 's3.jpg'),
(14, 'Butterfly', 'Set',50, 25, '11/27/2018',35, 25, 's2.jpg'),
(15, 'Quartz', 'Set',75, 18, '11/29/2018',60, 18, 's1.jpg'),
(16, 'Wish', 'GM Bracelet',65, 24, '11/30/2018',45, 24, 'gm1.jpg'),
(17, 'Gemstone', 'GM Bracelet',125, 14, '11/27/2018',95, 14, 'gm2.jpg'),
(18, 'Remembrance', 'GM Bracelet',125, 20, '11/29/2018',95, 20, 'gm3.jpg'),
(19, 'Classic Dimond', 'Wedding Bracelet',135, 12, '11/29/2018',110, 12, 'W1.jpg'),
(20, 'Classic Perl', 'Wedding Bracelet',99, 16, '11/23/2018',70, 16, 'W2.jpg'),
(21, 'Classic Band', 'Wedding Bracelet',123, 16, '11/29/2018',120, 16, 'W3.jpg'),
(22, 'Double Hart', 'Necklace',22, 12, '11/30/2018',13, 12, 'n1.jpg'),
(23, 'Round Dimond', 'Necklace',20, 11, '11/30/2018',15, 11, 'n2.jpg'),
(24, 'Leaf', 'Necklace',24, 15, '11/30/2018',18, 15, 'n3.jpg');


CREATE TABLE IF NOT EXISTS `CART` (
  `purchaseID` int NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `productID` int NOT NULL,
  `ratings` int, 
  `dateOfPurchase` varchar(65) NOT NULL,
  `isPurchasedFlag` int NOT NULL DEFAULT 0,
  `option1` varchar(65),
  `option2` varchar(65),
  `option3` varchar(65),
  `addprice` int NOT NULL DEFAULT 0,
CONSTRAINT CARTuserIDproductIDPK
  PRIMARY KEY(`purchaseID`),

  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE,
  FOREIGN KEY( `userID`)REFERENCES USER(`userID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `COUPON` (
  `purchaseID` int NOT NULL,
  `code` varchar(65) NOT NULL,
  `discountedPrice` int NOT NULL,
  CONSTRAINT COUPONcodePK
  PRIMARY KEY(`code`),
  CONSTRAINT COUPONpurchaseIDFK
  FOREIGN KEY( `purchaseID`)REFERENCES CART(`purchaseID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `SETS` (
  `productID` int NOT NULL,
CONSTRAINT SETSproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `SETS` 
(`productID`) 
VALUES
(13),
(14),
(15);

CREATE TABLE IF NOT EXISTS `NECKLACES` (
  `productID` int NOT NULL,
CONSTRAINT NECKLACESproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `NECKLACES` 
(`productID`) 
VALUES
(22),
(23),
(24);

CREATE TABLE IF NOT EXISTS `EARRINGS` (
  `productID` int NOT NULL,
CONSTRAINT EARRINGSproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `EARRINGS` 
(`productID`) 
VALUES
(1),
(2),
(3);

CREATE TABLE IF NOT EXISTS `WEDDINGBRACELETS` (
  `productID` int NOT NULL,
  `option1` varchar(65),
  `option2` varchar(65),
  `option3` varchar(65),
  `option4` varchar(65),
  `option1Price` int,
  `option2Price` int,
  `option3Price` int,
  `option4Price` int,
  `option1Cost` int,
  `option2Cost` int,
  `option3Cost` int,
  `option4Cost` int,
  `option1Inventory` int,
  `option2Inventory` int,
  `option3Inventory` int,
  `option4Inventory` int,
  `option1Stock` int,
  `option2Stock` int,
  `option3Stock` int,
  `option4Stock` int,

CONSTRAINT WEDDINGproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `WEDDINGBRACELETS` 
(`productID`, `option1`, `option2`, `option3`, `option4`, `option1Price`, `option2Price`, `option3Price`, `option4Price`, `option1Cost`, `option2Cost`, `option3Cost`,`option4Cost`,`option1Inventory`,`option2Inventory`,`option3Inventory`,`option4Inventory`,`option1Stock`,`option2Stock`,`option3Stock`,`option4Stock`) 
VALUES
(19,"1 Strand","2 Strands","3 Strands","4 Strands",20,40,60,80,10,30,50,70,3,3,3,3,3,3,3,3),
(20,"1 Strand","2 Strands","3 Strands","4 Strands",20,40,60,80,10,30,50,70,4,4,4,4,4,4,4,4),
(21,"1 Strand","2 Strands","3 Strands","4 Strands",20,40,60,80,10,30,50,70,4,4,4,4,4,4,4,4);

CREATE TABLE IF NOT EXISTS `GMBRACELETS` (
  `productID` int not null,
  `option1` varchar(65),
  `option2` varchar(65),
  `option1Price` int,
  `option2Price` int,
  `option1Cost` int,
  `option2Cost` int,
  `option1Inventory` int,
  `option2Inventory` int,
  `option1Stock` int,
  `option2Stock` int,
CONSTRAINT GMBRACELETSproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `GMBRACELETS` 
(`productID`, `option1`, `option2`, `option1Price`, `option2Price`, `option1Cost`, `option2Cost`, `option1Inventory`,`option2Inventory`, `option1Stock`,`option2Stock`) 
VALUES
(16, 'Gold Metal','Silver Metal',80,50,60,35,12,12,12,12),
(17, 'Gold Metal','Silver Metal',80,50,60,35,7,7,7,7),
(18, 'Gold Metal','Silver Metal',80,50,60,35,7,7,7,7);

CREATE TABLE IF NOT EXISTS `BABYBRACELETS` (
  `productID` int not null,
  `option1` varchar(65),
  `option2` varchar(65),
  `option1Price` int,
  `option2Price` int,
  `option1Cost` int,
  `option2Cost` int,
  `option1Inventory` int,
  `option2Inventory` int,
  `option1Stock` int,
  `option2Stock` int,
CONSTRAINT BABYproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `BABYBRACELETS` 
(`productID`, `option1`, `option2`, `option1Price`, `option2Price`, `option1Cost`, `option2Cost`, `option1Inventory`,`option2Inventory`, `option1Stock`,`option2Stock`) 
VALUES
(4, 'Gold Color','Silver Color',5,7,2,3,2,2,2,2),
(5, 'Gold Color','Silver Color',5,7,2,3,8,8,8,8),
(6, 'Gold Color','Silver Color',5,7,2,3,12,12,12,12);

CREATE TABLE IF NOT EXISTS `MOTHERBRACELETS` (
  `productID` int NOT NULL,
  `option1` varchar(65),
  `option2` varchar(65),
  `option3` varchar(65),
  `option4` varchar(65),
  `option1Price` int,
  `option2Price` int,
  `option3Price` int,
  `option4Price` int,
  `option1Cost` int,
  `option2Cost` int,
  `option3Cost` int,
  `option4Cost` int,
  `option1Inventory` int,
  `option2Inventory` int,
  `option3Inventory` int,
  `option4Inventory` int,
  `option1Stock` int,
  `option2Stock` int,
  `option3Stock` int,
  `option4Stock` int,
CONSTRAINT MOTHERSproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `MOTHERBRACELETS` 
(`productID`, `option1`, `option2`, `option3`, `option4`, `option1Price`, `option2Price`, `option3Price`, `option4Price`, `option1Cost`, `option2Cost`, `option3Cost`,`option4Cost`,`option1Inventory`,`option2Inventory`,`option3Inventory`,`option4Inventory`,`option1Stock`,`option2Stock`,`option3Stock`,`option4Stock`) 
VALUES
(10,"Garnet","Amethyst","Aquamarine","Diamond",20,30,50,80,10,20,40,60,4,4,4,4,4,4,4,4),
(11,"Garnet","Amethyst","Aquamarine","Diamond",20,30,50,80,10,20,40,60,5,5,5,5,5,5,5,5),
(12,"Garnet","Amethyst","Aquamarine","Diamond",20,30,50,80,10,20,40,60,3,3,3,3,3,3,3,3);

CREATE TABLE IF NOT EXISTS `EVERYDAYJEWELRY` (
  `productID` int NOT NULL,
CONSTRAINT EVERYDAYproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE       ON UPDATE CASCADE
);

INSERT INTO `EVERYDAYJEWELRY` 
(`productID`) 
VALUES
(3),
(13),
(24);

CREATE TABLE IF NOT EXISTS `COMPLAIN` (
  `complainID` int NOT NULL AUTO_INCREMENT,
  `productID` int NOT NULL,
  `purchaseID` int NOT NULL,
     `userID` int NOT NULL,
  `description` varchar(65),
    CONSTRAINT COMPLAINcomplainIDPK
  PRIMARY KEY(`complainID`),
CONSTRAINT COMPLAINPRODUCTproductIDFK
  FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`),
CONSTRAINT COMPLAINUSERuserIDFK
  FOREIGN KEY( `userID`)REFERENCES USER(`userID`), 
    CONSTRAINT COMPLAINCARTpurchaseIDFK
  FOREIGN KEY( `purchaseID`)REFERENCES CART(`purchaseID`)
);
