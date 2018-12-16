DROP SCHEMA IF EXISTS `JewelryDB`;

CREATE SCHEMA IF NOT EXISTS  `JewelryDB`; 
USE `JewelryDB`;

-- Database: `JewelryDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `BABYBRACELETS`
--

CREATE TABLE `BABYBRACELETS` (
  `productID` int(11) NOT NULL,
  `option1` varchar(65) DEFAULT NULL,
  `option2` varchar(65) DEFAULT NULL,
  `option1Price` int(11) DEFAULT NULL,
  `option2Price` int(11) DEFAULT NULL,
  `option1Cost` int(11) DEFAULT NULL,
  `option2Cost` int(11) DEFAULT NULL,
  `option1Inventory` int(11) DEFAULT NULL,
  `option2Inventory` int(11) DEFAULT NULL,
  `option1Stock` int(11) DEFAULT NULL,
  `option2Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BABYBRACELETS`
--

INSERT INTO `BABYBRACELETS` (`productID`, `option1`, `option2`, `option1Price`, `option2Price`, `option1Cost`, `option2Cost`, `option1Inventory`, `option2Inventory`, `option1Stock`, `option2Stock`) VALUES
(4, 'Gold Color', 'Silver Color', 5, 7, 2, 3, 2, 2, 2, 2),
(5, 'Gold Color', 'Silver Color', 5, 7, 2, 3, 8, 8, 6, 5),
(6, 'Gold Color', 'Silver Color', 5, 7, 2, 3, 12, 12, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `CART`
--

CREATE TABLE `CART` (
  `purchaseID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `ratings` int(11) DEFAULT NULL,
  `dateOfPurchase` varchar(65) NOT NULL,
  `isPurchasedFlag` int(11) NOT NULL DEFAULT '0',
  `option1` varchar(65) DEFAULT NULL,
  `option2` varchar(65) DEFAULT NULL,
  `option3` varchar(65) DEFAULT NULL,
  `addprice` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CART`
--

INSERT INTO `CART` (`purchaseID`, `userID`, `productID`, `ratings`, `dateOfPurchase`, `isPurchasedFlag`, `option1`, `option2`, `option3`, `addprice`) VALUES
(1, 2, 1, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(2, 2, 2, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(3, 2, 24, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(4, 2, 1, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(5, 2, 1, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(6, 2, 5, NULL, '2018-12-16 01:32:17am', 1, 'S', 'Silver (+$07)', 'TReagsr', 7),
(7, 2, 14, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(8, 2, 14, NULL, '2018-12-16 01:32:17am', 1, NULL, NULL, NULL, 0),
(9, 2, 5, NULL, '2018-12-16 01:56:12am', 1, 'S', 'Silver (+$07)', 'fefe', 7),
(10, 2, 5, NULL, '2018-12-16 01:56:12am', 1, 'S', 'Gold (+$05)', 'efesfefe', 5),
(11, 2, 5, NULL, '2018-12-16 01:56:12am', 1, 'S', 'Silver (+$07)', 'fefsefsefefg', 7),
(12, 2, 5, NULL, '2018-12-16 01:56:12am', 1, 'S', 'Gold (+$05)', 'fffffffffffff', 5),
(13, 2, 6, NULL, '2018-12-16 02:06:54am', 1, 'S', 'Silver (+$07)', 'Teste', 7),
(14, 2, 19, NULL, '2018-12-16 02:06:54am', 1, 'S', '1 Strand (+$20)', '', 20),
(15, 2, 19, NULL, '2018-12-16 02:06:54am', 1, 'S', '2 Strands (+$40)', '', 40),
(16, 2, 19, NULL, '2018-12-16 02:06:54am', 1, 'S', '3 Strands (+$60)', '', 60),
(17, 2, 14, NULL, '2018-12-16 02:07:30am', 1, NULL, NULL, NULL, 0),
(18, 2, 14, NULL, '2018-12-16 02:07:30am', 1, NULL, NULL, NULL, 0),
(19, 2, 14, NULL, '2018-12-16 02:07:30am', 1, NULL, NULL, NULL, 0),
(20, 2, 14, NULL, '2018-12-16 02:07:30am', 1, NULL, NULL, NULL, 0),
(21, 2, 14, NULL, '2018-12-16 02:07:30am', 1, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `COMPLAIN`
--

CREATE TABLE `COMPLAIN` (
  `complainID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `purchaseID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `description` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COMPLAIN`
--

INSERT INTO `COMPLAIN` (`complainID`, `productID`, `purchaseID`, `userID`, `description`) VALUES
(1, 1, 1, 2, 'It is an awesome looking product');

-- --------------------------------------------------------

--
-- Table structure for table `COUPON`
--

CREATE TABLE `COUPON` (
  `code` varchar(65) NOT NULL,
  `discountedPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `COUPON` (`code`,`discountedPrice` ) VALUES
('test',5),
('Jay',10),
('Holiday',15),
('asdf',20);
-- --------------------------------------------------------

--
-- Table structure for table `EARRINGS`
--

CREATE TABLE `EARRINGS` (
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EARRINGS`
--

INSERT INTO `EARRINGS` (`productID`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `EVERYDAYJEWELRY`
--

CREATE TABLE `EVERYDAYJEWELRY` (
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EVERYDAYJEWELRY`
--

INSERT INTO `EVERYDAYJEWELRY` (`productID`) VALUES
(3),
(13),
(24);

-- --------------------------------------------------------

--
-- Table structure for table `GMBRACELETS`
--

CREATE TABLE `GMBRACELETS` (
  `productID` int(11) NOT NULL,
  `option1` varchar(65) DEFAULT NULL,
  `option2` varchar(65) DEFAULT NULL,
  `option1Price` int(11) DEFAULT NULL,
  `option2Price` int(11) DEFAULT NULL,
  `option1Cost` int(11) DEFAULT NULL,
  `option2Cost` int(11) DEFAULT NULL,
  `option1Inventory` int(11) DEFAULT NULL,
  `option2Inventory` int(11) DEFAULT NULL,
  `option1Stock` int(11) DEFAULT NULL,
  `option2Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GMBRACELETS`
--

INSERT INTO `GMBRACELETS` (`productID`, `option1`, `option2`, `option1Price`, `option2Price`, `option1Cost`, `option2Cost`, `option1Inventory`, `option2Inventory`, `option1Stock`, `option2Stock`) VALUES
(16, 'Gold Metal', 'Silver Metal', 80, 50, 60, 35, 12, 12, 12, 12),
(17, 'Gold Metal', 'Silver Metal', 80, 50, 60, 35, 7, 7, 7, 7),
(18, 'Gold Metal', 'Silver Metal', 80, 50, 60, 35, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `userID` int(11) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL DEFAULT 'password',
  `adminFlag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`userID`, `email`, `password`, `adminFlag`) VALUES
(2, 'admin@email.com', 'password', 1),
(1, 'jnpatel@umich.edu', 'password', 0),
(3, 'TestEmail@email.com', 'password', 0);

-- --------------------------------------------------------

--
-- Table structure for table `MOTHERBRACELETS`
--

CREATE TABLE `MOTHERBRACELETS` (
  `productID` int(11) NOT NULL,
  `option1` varchar(65) DEFAULT NULL,
  `option2` varchar(65) DEFAULT NULL,
  `option3` varchar(65) DEFAULT NULL,
  `option4` varchar(65) DEFAULT NULL,
  `option1Price` int(11) DEFAULT NULL,
  `option2Price` int(11) DEFAULT NULL,
  `option3Price` int(11) DEFAULT NULL,
  `option4Price` int(11) DEFAULT NULL,
  `option1Cost` int(11) DEFAULT NULL,
  `option2Cost` int(11) DEFAULT NULL,
  `option3Cost` int(11) DEFAULT NULL,
  `option4Cost` int(11) DEFAULT NULL,
  `option1Inventory` int(11) DEFAULT NULL,
  `option2Inventory` int(11) DEFAULT NULL,
  `option3Inventory` int(11) DEFAULT NULL,
  `option4Inventory` int(11) DEFAULT NULL,
  `option1Stock` int(11) DEFAULT NULL,
  `option2Stock` int(11) DEFAULT NULL,
  `option3Stock` int(11) DEFAULT NULL,
  `option4Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MOTHERBRACELETS`
--

INSERT INTO `MOTHERBRACELETS` (`productID`, `option1`, `option2`, `option3`, `option4`, `option1Price`, `option2Price`, `option3Price`, `option4Price`, `option1Cost`, `option2Cost`, `option3Cost`, `option4Cost`, `option1Inventory`, `option2Inventory`, `option3Inventory`, `option4Inventory`, `option1Stock`, `option2Stock`, `option3Stock`, `option4Stock`) VALUES
(10, 'Garnet', 'Amethyst', 'Aquamarine', 'Diamond', 20, 30, 50, 80, 10, 20, 40, 60, 4, 4, 4, 4, 4, 4, 4, 4),
(11, 'Garnet', 'Amethyst', 'Aquamarine', 'Diamond', 20, 30, 50, 80, 10, 20, 40, 60, 5, 5, 5, 5, 5, 5, 5, 5),
(12, 'Garnet', 'Amethyst', 'Aquamarine', 'Diamond', 20, 30, 50, 80, 10, 20, 40, 60, 3, 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `NECKLACES`
--

CREATE TABLE `NECKLACES` (
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NECKLACES`
--

INSERT INTO `NECKLACES` (`productID`) VALUES
(22),
(23),
(24);

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `productID` int(11) NOT NULL,
  `pname` varchar(65) NOT NULL,
  `ptype` varchar(65) NOT NULL,
  `price` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `pCost` int(11) NOT NULL,
  `inventoryDate` varchar(65) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `PRODUCT` (`productID`, `pname`, `ptype`, `price`, `inventory`, `pCost`, `inventoryDate`, `stock`, `image`) VALUES
(1, 'Dimond', 'Earring', 7, 20, 3, '11/29/2018', 17, 'er1.jpg'),
(2, 'Loop', 'Earring', 16, 15, 10, '11/29/2018', 14, 'er2.jpg'),
(3, 'Flower', 'Earring', 25, 15, 18, '11/29/2018', 15, 'er3.jpg'),
(4, 'Classic', 'Baby Bracelet', 17, 4, 12, '11/29/2018', 4, 'cb1.jpg'),
(5, 'Cultured', 'Baby Bracelet', 25, 16, 20, '11/29/2018', 11, 'cb2.jpg'),
(6, 'Sweet Classic', 'Baby Bracelet', 35, 24, 28, '11/30/2018', 23, 'cb3.jpg'),
(10, 'Classic', 'Mother Bracelet', 17, 16, 11, '11/30/2018', 16, 'mb1.jpg'),
(11, 'Perl', 'Mother Bracelet', 117, 20, 100, '11/29/2018', 20, 'mb2.jpg'),
(12, 'Birthstone', 'Mother Bracelet', 127, 12, 115, '11/29/2018', 12, 'mb3.jpg'),
(13, 'Hart', 'Set', 217, 15, 200, '11/27/2018', 15, 's3.jpg'),
(14, 'Butterfly', 'Set', 50, 25, 35, '11/27/2018', 18, 's2.jpg'),
(15, 'Quartz', 'Set', 75, 18, 60, '11/29/2018', 18, 's1.jpg'),
(16, 'Wish', 'GM Bracelet', 65, 24, 45, '11/30/2018', 24, 'gm1.jpg'),
(17, 'Gemstone', 'GM Bracelet', 125, 14, 95, '11/27/2018', 14, 'gm2.jpg'),
(18, 'Remembrance', 'GM Bracelet', 125, 20, 95, '11/29/2018', 20, 'gm3.jpg'),
(19, 'Classic Dimond', 'Wedding Bracelet', 135, 12, 110, '11/29/2018', 9, 'W1.jpg'),
(20, 'Classic Perl', 'Wedding Bracelet', 99, 16, 70, '11/23/2018', 16, 'W2.jpg'),
(21, 'Classic Band', 'Wedding Bracelet', 123, 16, 120, '11/29/2018', 16, 'W3.jpg'),
(22, 'Double Hart', 'Necklace', 22, 12, 13, '11/30/2018', 12, 'n1.jpg'),
(23, 'Round Dimond', 'Necklace', 20, 11, 15, '11/30/2018', 11, 'n2.jpg'),
(24, 'Leaf', 'Necklace', 24, 15, 18, '11/30/2018', 14, 'n3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `SETS`
--

CREATE TABLE `SETS` (
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SETS`
--

INSERT INTO `SETS` (`productID`) VALUES
(13),
(14),
(15);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `userID` int(11) NOT NULL,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `creditCard` varchar(65) NOT NULL,
  `address1` varchar(65) NOT NULL,
  `address2` varchar(65) DEFAULT NULL,
  `city` varchar(65) NOT NULL,
  `state` int(22) NOT NULL,
  `zip` int(22) NOT NULL,
  `country` varchar(65) NOT NULL,
  `date` varchar(65) NOT NULL,
  `markingEmailFlag` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`userID`, `fname`, `lname`, `email`, `creditCard`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `date`, `markingEmailFlag`, `rating`) VALUES
(1, 'Jim', 'Pam', 'jnpatel@umich.edu', '1234567887654321', '123 home street', '342 APT', 'Canton', 33, 41881, 'USA', '2018-06-13 08:20:44pm', 0, 0),
(2, 'Jay', 'Patel', 'admin@email.com', '1234567887654321', '42422 Test Dr', '', 'Canton', 33, 48188, 'USA', '2018-06-13 08:53:22pm', 1, 5),
(3, 'TestF', 'TestL', 'TestEmail@email.com', '1234567812345678', 'Test Address 123', '123 APT', 'Test City', 2, 12345, 'USA', '2018-12-16 02:04:17am', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `WEDDINGBRACELETS`
--

CREATE TABLE `WEDDINGBRACELETS` (
  `productID` int(11) NOT NULL,
  `option1` varchar(65) DEFAULT NULL,
  `option2` varchar(65) DEFAULT NULL,
  `option3` varchar(65) DEFAULT NULL,
  `option4` varchar(65) DEFAULT NULL,
  `option1Price` int(11) DEFAULT NULL,
  `option2Price` int(11) DEFAULT NULL,
  `option3Price` int(11) DEFAULT NULL,
  `option4Price` int(11) DEFAULT NULL,
  `option1Cost` int(11) DEFAULT NULL,
  `option2Cost` int(11) DEFAULT NULL,
  `option3Cost` int(11) DEFAULT NULL,
  `option4Cost` int(11) DEFAULT NULL,
  `option1Inventory` int(11) DEFAULT NULL,
  `option2Inventory` int(11) DEFAULT NULL,
  `option3Inventory` int(11) DEFAULT NULL,
  `option4Inventory` int(11) DEFAULT NULL,
  `option1Stock` int(11) DEFAULT NULL,
  `option2Stock` int(11) DEFAULT NULL,
  `option3Stock` int(11) DEFAULT NULL,
  `option4Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `WEDDINGBRACELETS`
--

INSERT INTO `WEDDINGBRACELETS` (`productID`, `option1`, `option2`, `option3`, `option4`, `option1Price`, `option2Price`, `option3Price`, `option4Price`, `option1Cost`, `option2Cost`, `option3Cost`, `option4Cost`, `option1Inventory`, `option2Inventory`, `option3Inventory`, `option4Inventory`, `option1Stock`, `option2Stock`, `option3Stock`, `option4Stock`) VALUES
(19, '1 Strand', '2 Strands', '3 Strands', '4 Strands', 20, 40, 60, 80, 10, 30, 50, 70, 3, 3, 3, 3, 2, 2, 2, 3),
(20, '1 Strand', '2 Strands', '3 Strands', '4 Strands', 20, 40, 60, 80, 10, 30, 50, 70, 4, 4, 4, 4, 4, 4, 4, 4),
(21, '1 Strand', '2 Strands', '3 Strands', '4 Strands', 20, 40, 60, 80, 10, 30, 50, 70, 4, 4, 4, 4, 4, 4, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BABYBRACELETS`
--
ALTER TABLE `BABYBRACELETS`
  ADD KEY `BABYproductIDFK` (`productID`);

--
-- Indexes for table `CART`
--
ALTER TABLE `CART`
  ADD PRIMARY KEY (`purchaseID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `COMPLAIN`
--
ALTER TABLE `COMPLAIN`
  ADD PRIMARY KEY (`complainID`),
  ADD KEY `COMPLAINPRODUCTproductIDFK` (`productID`),
  ADD KEY `COMPLAINUSERuserIDFK` (`userID`),
  ADD KEY `COMPLAINCARTpurchaseIDFK` (`purchaseID`);

--
-- Indexes for table `EARRINGS`
--
ALTER TABLE `EARRINGS`
  ADD KEY `EARRINGSproductIDFK` (`productID`);

--
-- Indexes for table `EVERYDAYJEWELRY`
--
ALTER TABLE `EVERYDAYJEWELRY`
  ADD KEY `EVERYDAYproductIDFK` (`productID`);

--
-- Indexes for table `GMBRACELETS`
--
ALTER TABLE `GMBRACELETS`
  ADD KEY `GMBRACELETSproductIDFK` (`productID`);

--
-- Indexes for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD PRIMARY KEY (`email`),
  ADD KEY `LoginUserFK` (`userID`);

--
-- Indexes for table `MOTHERBRACELETS`
--
ALTER TABLE `MOTHERBRACELETS`
  ADD KEY `MOTHERSproductIDFK` (`productID`);

--
-- Indexes for table `NECKLACES`
--
ALTER TABLE `NECKLACES`
  ADD KEY `NECKLACESproductIDFK` (`productID`);

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `SETS`
--
ALTER TABLE `SETS`
  ADD KEY `SETSproductIDFK` (`productID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `WEDDINGBRACELETS`
--
ALTER TABLE `WEDDINGBRACELETS`
  ADD KEY `WEDDINGproductIDFK` (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CART`
--
ALTER TABLE `CART`
  MODIFY `purchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `COMPLAIN`
--
ALTER TABLE `COMPLAIN`
  MODIFY `complainID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BABYBRACELETS`
--
ALTER TABLE `BABYBRACELETS`
  ADD CONSTRAINT `BABYproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `CART`
--
ALTER TABLE `CART`
  ADD CONSTRAINT `CART_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CART_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `USER` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `COMPLAIN`
--
ALTER TABLE `COMPLAIN`
  ADD CONSTRAINT `COMPLAINCARTpurchaseIDFK` FOREIGN KEY (`purchaseID`) REFERENCES `CART` (`purchaseID`),
  ADD CONSTRAINT `COMPLAINPRODUCTproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`),
  ADD CONSTRAINT `COMPLAINUSERuserIDFK` FOREIGN KEY (`userID`) REFERENCES `USER` (`userID`);

--
-- Constraints for table `EARRINGS`
--
ALTER TABLE `EARRINGS`
  ADD CONSTRAINT `EARRINGSproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `EVERYDAYJEWELRY`
--
ALTER TABLE `EVERYDAYJEWELRY`
  ADD CONSTRAINT `EVERYDAYproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `GMBRACELETS`
--
ALTER TABLE `GMBRACELETS`
  ADD CONSTRAINT `GMBRACELETSproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD CONSTRAINT `LoginUserFK` FOREIGN KEY (`userID`) REFERENCES `USER` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `MOTHERBRACELETS`
--
ALTER TABLE `MOTHERBRACELETS`
  ADD CONSTRAINT `MOTHERSproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `NECKLACES`
--
ALTER TABLE `NECKLACES`
  ADD CONSTRAINT `NECKLACESproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SETS`
--
ALTER TABLE `SETS`
  ADD CONSTRAINT `SETSproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `WEDDINGBRACELETS`
--
ALTER TABLE `WEDDINGBRACELETS`
  ADD CONSTRAINT `WEDDINGproductIDFK` FOREIGN KEY (`productID`) REFERENCES `PRODUCT` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


CREATE TABLE IF NOT EXISTS `ZipCode` (
  `ZipID` int NOT NULL AUTO_INCREMENT,
  `StateName` varchar(65),
  `StateAbbreviation` varchar(65),
  `ZipMinimum` int NOT NULL,
  `ZipMaximum` int NOT NULL,
  `ShippingCost` int NOT NULL DEFAULT 0,
    CONSTRAINT ZipCodeZipIDPK
  PRIMARY KEY(`ZipID`)
  );

INSERT INTO `ZipCode` 
(`ZipID`,`StateName`,`StateAbbreviation`,`ZipMinimum`,`ZipMaximum`,`ShippingCost`) 
VALUES
(1, "Alaska", "(AK)" ,99501, 99950, 35),
(2, "Alabama", "(AL)", 35004, 36925, 18),
(3, "Arkansas", "(AR)", 71601, 72959, 18),
(4, "Arkansas", "(AR)", 75502, 75502, 18),
(5, "Arizona", "(AZ)", 85001, 86556,25),
(6, "California", "(CA)", 90001, 96162,28),
(7, "Colorado", "(CO)", 80001, 81658, 19),
(8, "Connecticut", "(CT)", 06001, 06389, 12),
(9, "Connecticut", "(CT)", 06401, 06928, 12),
(10,  "District of Columbia", "(DC)", 20001, 20039,30),
(11,  "District of Columbia", "(DC)", 20042, 20599,30),
(12,  "District of Columbia", "(DC)", 20799, 20799,30),
(13,  "Delaware", "(DE)", 19701, 19980, 15),
(14,  "Florida", "(FL)", 32004, 34997, 20),
(15,  "Georgia", "(GA)", 30001, 31999, 18),
(16,  "Georga", "(GA)", 39901, 39901, 18),
(17, "Hawaii", "(HI)", 96701, 96898,35),
(18,  "Iowa", "(IA)", 50001, 52809, 13),
(19, "Iowa", "(IA)", 68119, 68120, 13),
(20,  "Idaho", "(ID)", 83201, 83876,22),
(21, "Illinois", "(IL)", 60001, 62999, 10),
(22,  "Indiana", "(IN)", 46001, 47997, 10),
(23,  "Kansas", "(KS)", 66002, 67954, 18),
(24,  "Kentucky", "(KY)", 40003, 42788, 15),
(25,  "Louisiana", "(LA)", 70001, 71232, 19),
(26,  "Louisiana", "(LA)", 71234, 71497, 19),
(27,  "Massachusetts", "(MA)", 01001, 02791, 13),
(28,  "Massachusetts", "(MA)", 05501, 05544, 13),
(29,  "Maryland", "(MD)", 20331, 20331, 13),
(30,  "Maryland", "(MD)", 20335, 20797, 13),
(31,  "Maryland", "(MD)", 20812, 21930, 13),
(32, "Maine", "(ME)", 03901, 04992, 12),
(33,  "Michigan", "(MI)", 48001, 49971, 5),
(34,  "Minnesota", "(MN)", 55001, 56763, 15),
(36,  "Mississippi", "(MS)", 38601, 39776, 18),
(37,  "Mississippi", "(MS)",  71233, 71233, 18),
(38,  "Montana", "(MT)", 59001, 59937, 19),
(39,  "North Carolina", "(NC)", 27006, 28909, 16),
(40,  "North Dakota", "(ND)", 58001, 58856, 18),
(41,  "Nebraska", "(NB)", 68001, 68118, 18),
(42,  "Nebraska", "(NB)", 68122, 69367, 18),
(43,  "New Hampshire", "(NH)", 03031, 03897, 12),
(44,  "New Jersey", "(NJ)", 07001, 08989, 13),
(45,  "New Mexico", "(NM)", 87001, 88441, 22),
(46,  "Nevada", "(NV)", 88901, 89883, 25),
(47,  "New York", "(NY)",  06390, 06390, 12),
(48,  "New York", "(NY)", 10001, 14975, 10),
(49,  "Ohio", "(OH)", 43001, 45999, 10),
(50,  "Oklahoma", "(OK)", 73001, 73199, 18),
(51,  "Oklahoma", "(OK)", 73401, 74966, 18),
(52,  "Oregon", "(OR)", 97001, 97920, 25),
(53,  "Pennsylvania", "(PN)", 15001, 19640, 10),
(54,  "Puerto Rico", "(PR)", 0, 0, 0),
(55,  "Rhode Island", "(RI)", 02801, 02940, 13),
(56,  "South Carolina", "(SC)", 29001, 29948, 17),
(57,  "South Dakota", "(SD)", 57001, 57799, 18),
(58,  "Tennessee", "(TN)", 37010, 38589, 16),
(59,  "Texas", "(TX)", 73301, 73301, 19),
(60,  "Texas", "(TX)", 75001, 75501, 19),
(61, "Texas", "(TX)", 75503, 79999, 19),
(62, "Texas", "(TX)", 88510, 88589, 19),
(63, "Utah", "(UT)", 84001, 84784,22),
(64, "Virginia", "(VA)", 20040, 20041, 13),
(65, "Virginia", "(VA)", 20040, 20167, 13),
(66, "Virginia", "(VA)", 20042, 20042, 13),
(67, "Virginia", "(VA)", 22001, 24658, 13),
(68, "Vermont", "(VT)", 05001, 05495, 10),
(69, "Vermont", "(VT)", 05601, 05907, 10),
(70, "Washington", "(WA)", 98001, 99403,22),
(71, "Wisconsin", "(WI)", 53001, 54990, 10),
(72, "West Virginia", "(WV)",  24701, 26886, 14),
(73, "Wyoming", "(WY)", 82001, 83128, 19);