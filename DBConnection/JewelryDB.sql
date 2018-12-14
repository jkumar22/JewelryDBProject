DROP SCHEMA IF EXISTS `JewelryDB`;

CREATE SCHEMA IF NOT EXISTS  `JewelryDB`; 
USE `JewelryDB`;

CREATE TABLE IF NOT EXISTS `USER` (
  `userID` int  NOT NULL AUTO_INCREMENT,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `creditCard`varchar(65) NOT NULL,
  `phone` varchar(65) NOT NULL,
  `address1` varchar(65) NOT NULL,
  `address2` varchar(65)  NULL,
  `city` varchar(65) NOT NULL,
  `state` varchar(65) NOT NULL,
  `zip` int(22) NOT NULL,
  `country` varchar(65) NOT NULL,
  `date` varchar(65) NOT NULL,
  `markingEmailFlag` int NOT NULL DEFAULT 0, 
CONSTRAINT USERUserIDPK
		PRIMARY KEY (`userID`)
);

INSERT INTO `USER` 
(`fname`, `lname`, `email`, `creditCard`, `phone`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `date`, `markingEmailFlag` ) 
VALUES
('kim', 'Pam', 'jnpatel@umich.edu', '1234567887654321', '313-322-4456', '123 home street', '342 APT', 'Canton', 'MI', 41881, 'USA', '2018-06-13 08:20:44pm', 0),
('Jay', 'Patel', 'admin@email.com', '1234567887654321', '313-322-4456', '42422 Test Dr', '', 'Canton', 'MI', 48188, 'USA', '2018-06-13 08:53:22pm',1);

CREATE TABLE IF NOT EXISTS `LOGIN` (
  `userID` int NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL DEFAULT 'password', 
  `adminFlag` int NOT NULL DEFAULT 0,
CONSTRAINT LogInUserIDPK
	PRIMARY KEY(`email`),
CONSTRAINT LoginUserFK
	FOREIGN KEY( `userID`)REFERENCES USER(`userID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `LOGIN` (`userID`, `email`, `password`, `adminFlag`) 
VALUES
('1', 'jnpatel@umich.edu', 'password',0),
('2', 'admin@email.com', 'password',1);

CREATE TABLE IF NOT EXISTS `PRODUCT` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `prodcutName` varchar(65) NOT NULL, 
  `price` int NOT NULL,
  `inventory` int NOT NULL,
  `inventoryDate` varchar(65) NOT NULL, 
  `stock` int NOT NULL, 
  `image` varchar(65) NOT NULL,
CONSTRAINT PRODUCTproductIDPK
	PRIMARY KEY(`productID`)
);

INSERT INTO `PRODUCT` 
(`productID`, `price`, `inventory`, `inventoryDate`, `stock`, `image`) 
VALUES
(1, 7, 20, '11/29/2018', 20, 'er1.jpg'),
(2, 16, 15, '11/29/2018', 15, 'er2.jpg'),
(3, 25, 35, '11/29/2018', 35, 'er3.jpg'),
(4, 17, 5, '11/29/2018', 5, 'cb1.jpg'),
(5, 25, 18, '11/29/2018', 18, 'cb2.jpg'),
(6, 35, 75, '11/30/2018', 75, 'cb3.jpg'),
(7, 30, 45, '11/29/2018', 45,'er3.jpg'),
(8, 45, 55, '11/29/2018', 55, 'er2.jpg'),
(9, 65, 70, '11/29/2018', 70, 'er1.jpg'),
(10, 17, 56, '11/30/2018', 56,'mb1.jpg'),
(11, 117, 80, '11/29/2018', 80,'mb2.jpg'),
(12, 127, 50, '11/29/2018', 50,'mb3.jpg'),
(13, 217, 45, '11/27/2018', 45, 's3.jpg'),
(14, 50, 85, '11/27/2018', 85, 's2.jpg'),
(15, 75, 18, '11/29/2018', 18, 's1.jpg'),
(16, 65, 45, '11/30/2018', 45, 'gm1.jpg'),
(17, 125, 55, '11/27/2018', 55, 'gm2.jpg'),
(18, 125, 45, '11/29/2018', 45, 'gm3.jpg'),
(19, 187, 78, '11/29/2018', 78, 'W1.jpg'),
(20, 99, 77, '11/23/2018', 77, 'W2.jpg'),
(21, 123, 79, '11/29/2018', 79, 'W3.jpg'),
(22, 22, 12, '11/30/2018', 12, 'n1.jpg'),
(23, 20, 11, '11/30/2018', 11, 'n2.jpg'),
(24, 24, 15, '11/30/2018', 15, 'n3.jpg');


CREATE TABLE IF NOT EXISTS `CART` (
  `purchaseID` int NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `productID` int NOT NULL,
  `ratings` int NULL, 
  `dateOfPurchase` varchar(65) NOT NULL,
  `isPurchasedFlag` int NOT NULL DEFAULT 0,
  `Option` varchar(65),
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
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `SETS` (
  `productID` int NOT NULL,
CONSTRAINT SETSproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
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
            ON DELETE CASCADE    		ON UPDATE CASCADE
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
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `EARRINGS` 
(`productID`) 
VALUES
(1),
(2),
(3);

CREATE TABLE IF NOT EXISTS `WEDDINGBRACELETS` (
  `productID` int NOT NULL,
    `size` int NOT NULL,
  `strandColor` varchar(65) NOT NULL,
  `strandPrice` varchar(65) NOT NULL,
  `strandName` varchar(65) NOT NULL,
CONSTRAINT WEDDINGproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `WEDDINGBRACELETS` 
(`productID`) 
VALUES
(19),
(20),
(21);

CREATE TABLE IF NOT EXISTS `GMBRACELETS` (
  `productID` int NOT NULL,
  `size` int NOT NULL,
  `gemColor` varchar(65) NOT NULL,
  `gemPrice` varchar(65) NOT NULL,
CONSTRAINT GMBRACELETSproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `GMBRACELETS` 
(`productID`) 
VALUES
(16),
(17),
(18);

CREATE TABLE IF NOT EXISTS `BABYBRACELETS` (
  `productID` int NOT NULL,
  `size` int NOT NULL,
  `Color` varchar(65) NOT NULL,
  `Name` varchar(65) NOT NULL,
CONSTRAINT BABYproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `BABYBRACELETS` 
(`productID`) 
VALUES
(4),
(5),
(6);

CREATE TABLE IF NOT EXISTS `MOTHERBRACELETS` (
  `productID` int NOT NULL,
  `size` int NOT NULL,
  `birthstonColor` varchar(65) NOT NULL,
  `birthstonPrice` varchar(65) NOT NULL,
CONSTRAINT MOTHERSproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `MOTHERBRACELETS` 
(`productID`) 
VALUES
(10),
(11),
(12);

CREATE TABLE IF NOT EXISTS `EVERYDAYJEWELRY` (
  `productID` int NOT NULL,
CONSTRAINT EVERYDAYproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`) 
            ON DELETE CASCADE    		ON UPDATE CASCADE
);

INSERT INTO `EVERYDAYJEWELRY` 
(`productID`) 
VALUES
(7),
(8),
(9);

CREATE TABLE IF NOT EXISTS `COMPLAIN` (
  `complainID` int NOT NULL AUTO_INCREMENT,
  `productID` int NOT NULL,
  `purchaseID` int NOT NULL,
     `userID` int NOT NULL,
    CONSTRAINT COMPLAINcomplainIDPK
	PRIMARY KEY(`complainID`),
CONSTRAINT COMPLAINPRODUCTproductIDFK
	FOREIGN KEY( `productID`)REFERENCES PRODUCT(`productID`),
CONSTRAINT COMPLAINUSERuserIDFK
	FOREIGN KEY( `userID`)REFERENCES USER(`userID`), 
    CONSTRAINT COMPLAINCARTpurchaseIDFK
	FOREIGN KEY( `purchaseID`)REFERENCES CART(`purchaseID`)
);
