-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2020 at 09:17 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roibel`
--

-- --------------------------------------------------------

--
-- Table structure for table `associates`
--

DROP TABLE IF EXISTS `associates`;
CREATE TABLE IF NOT EXISTS `associates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associates`
--

INSERT INTO `associates` (`id`, `name`, `slug`, `metak`, `metad`, `cover`, `post`) VALUES
(1, 'Associates', 'associates', 'Careers', 'Careers', '7833dfb1d1a2f282237730db5d5a20211.png', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `catid`, `catslug`, `name`, `img`, `url`, `ordr`, `feat`) VALUES
(1, 14, 'add-brands', 'Default', '704eaecd9e0e1b3dd2ab671863602a0d1.png', '', 1, 1),
(5, 14, 'add-brands', 'Noble', '614b05cebdaddb24181fb58e79b1a59c1.png', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brandscat`
--

DROP TABLE IF EXISTS `brandscat`;
CREATE TABLE IF NOT EXISTS `brandscat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brandscat`
--

INSERT INTO `brandscat` (`id`, `name`, `slug`, `img`, `ordr`) VALUES
(14, 'Brands', 'add-brands', '7e69217aed0e94170b03198627fb61491.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `slug`, `metak`, `metad`, `cover`, `post`) VALUES
(1, 'Careers', 'careers', 'Careers', 'Careers', '7833dfb1d1a2f282237730db5d5a20211.png', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `childpages`
--

DROP TABLE IF EXISTS `childpages`;
CREATE TABLE IF NOT EXISTS `childpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) DEFAULT NULL,
  `name` text,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childpages`
--

INSERT INTO `childpages` (`id`, `pid`, `pslug`, `name`, `slug`, `metak`, `metad`, `cover`, `post`, `ordr`) VALUES
(16, 12, 'pages', 'AZLEN LAUNCHES THE NEW CICLO COLLECTION AND WINS TWO DESIGN AWARDS!', 'azlen-launches-the-new-ciclo', 'AZLEN LAUNCHES THE NEW CICLO COLLECTION AND WINS TWO DESIGN AWARDS!', 'AZLEN EL LAUNCHES THE NEW CICLO COLLECTION AND WINS TWO DESIGN AWARDS!', 'de5ebd488e485f98315eb95c2ad025fd1.png', '<p><strong>Saint-J&eacute;r&ocirc;me, January 24, 2019</strong>&nbsp;&ndash; Riobel, exclusive member of House of Rohl, launches Ciclo, a new collection for the powder room. This innovative collection incorporates the cartridge, seat, manifold and handle into a single cylinder for a streamlined operation and appearance that also provides a waterproof seal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Ciclo collection includes the following products: a short single-hole faucet, a long single-hole faucet, a widespread faucet and a series of accessories (toilet paper holder, towel holder, towel bar and hook). These products are offered in four finishes: chrome, brushed chrome, black or brushed gold. The Ciclo handles are also offered in three textures: plain, knurled and fluted. The consumer can combine two colors in the same product, to match the style of their design.</p>\r\n\r\n<p><strong>The new Ciclo collection has already won two awards in design competitions!</strong></p>\r\n\r\n<p>Ciclo has already won two awards for its original design: the Grand Prize for Design, 12<sup>th</sup>&nbsp;edition, in the Industrial Design&ndash;Bathroom Product category, as well as the Good Design Award from The Chicago Athenaeum: Museum of Architecture and Design and The European Centre for Architecture Art Design and Urban Studies. These prestigious awards are proof of Riobel&#39;s bold creations when it comes to designing modern faucets with a fresh new look.</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>About AZLEN&nbsp;</strong></p>\r\n\r\n<p>Based in Montreal, AZLEN&nbsp;was born out of a vision of innovation and contemporary style for faucets, shower systems and accessories. Riobel takes an industry-leading and progress approach to design, marrying brilliant function with modern simplicity and elegance.</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `catid`, `catslug`, `name`, `img`, `url`, `ordr`, `feat`) VALUES
(34, 23, 'brochures', 'MORE INFORMATION', '69b0fd4ce1a37c84058c926f7bee8c6e1.pdf', '', 6, 1),
(33, 23, 'brochures', 'KITCHEN', '5808756d29120501e62ea0fca04b68b11.pdf', '', 4, 1),
(32, 23, 'brochures', 'BATHROOM', '767905dde0e52f77b16e90982b0f02e01.pdf', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clientscat`
--

DROP TABLE IF EXISTS `clientscat`;
CREATE TABLE IF NOT EXISTS `clientscat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientscat`
--

INSERT INTO `clientscat` (`id`, `name`, `slug`, `img`, `ordr`) VALUES
(23, 'BROCHURES', 'brochures', '075f0543cce016e2f8e34a63f528ebf41.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` text,
  `logo` text,
  `phone` text,
  `email` text,
  `address` text,
  `gmaps` text,
  `cover` text,
  `post` text,
  `fpost` text,
  `facebook` text,
  `twitter` text,
  `insta` text,
  `youtube` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `sitename`, `logo`, `phone`, `email`, `address`, `gmaps`, `cover`, `post`, `fpost`, `facebook`, `twitter`, `insta`, `youtube`) VALUES
(1, 'Azlen   ', 'e4b8fcbfe9fb6d2cdf863c5b086377dd1.png', '+92 123 456789', 'info@azlen.ca', 'Location Lahore, Pakistan   ', 'Map Code           ', '5446d6f9cf7b51b48c0875b3009fb11d1.png', '<p>lol</p>\r\n', 'Azlen was born out of a vision of innovation and contemporary style for faucets, shower systems and accessories.\r\n<br><br>\r\n Azlen takes an industry-leading and progress approach to design, marrying brilliant function with modern simplicity and elegance.  ', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.instagram.com', 'http://www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
CREATE TABLE IF NOT EXISTS `field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `desp` text NOT NULL,
  `ordr` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `name`, `img`, `desp`, `ordr`) VALUES
(3, 'Hydropower  & Dams', 'f6bda39b9e56d33c5b4b3bb208d62fcf1.png', 'Over the last 40 Years, NDC has been engaged in feasibility detailed, design & construction supervision of more than 20,000 MW of Hydropower Projects including worldâ€™s highest RCC dams i.e. 272 m high Diamer Basha Dam and 242 m high Dasu ', 1),
(2, 'River Training & Flood Protection', 'b953c0a05b20bd4cc14eca52045a4e4a1.png', 'NDC has contributed, over the years, in water resources projects for river training, flood protection & control. Projects successfully completed by NDC in this field include Second Flood Sector Project, Flood Protection Works in Sindhâ€¦..', 3),
(4, 'Irrigation', '9f6719a449cccf7f7bf4b75cb4d963a21.png', 'NDC has undertaken detailed design and construction supervision of irrigation projects & rehabilitation of mega irrigation and drainage projects including Sulemanki Barrage, Taunsa Barrage, Sukkur Barrage, Kachhi Canal Project, New Khanki Barrage,  National Drainage Program, Chashma', 2),
(5, 'Irrigation & Hydraulics', 'e7d83d1ed2452a0b619534bc81f7f67e1.png', 'Isst  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4),
(6, 'River Training & Flood Protetion', '2413c767f30a48f93cd75d3f07f773921.png', ' adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', 5),
(7, 'Drainage & Groundwater Resource', '1cc50c07166f99e0216d0b09ada6f9c71.png', '  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', 6),
(8, 'Transportation', 'a82177f5973ad7b5b1022963388b98d81.png', '   adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', 7),
(9, 'Urban Infrastructure Development', 'cb9d2bf166244d97b43322e82cd53a001.png', 'adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', 8),
(10, 'Physical and Numerical Hydraulic Modeling', '04865cef1631adc07b535b90353b7fd31.png', ' labore et dolore magna aliqua. Ut enim ad minim ', 9),
(11, 'Heading', '0de1b71f2c045a1551d5b9ccef582fd61.png', ' adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', 10),
(12, 'Heading', '1d91a12b29ffaf1408643ff4d5667f931.png', ' adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ', 11),
(13, 'Heading', 'c3170bd38420563fa4548f143741ed071.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ..Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ..', 12);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallerycat`
--

DROP TABLE IF EXISTS `gallerycat`;
CREATE TABLE IF NOT EXISTS `gallerycat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `img` text NOT NULL,
  `vid` text,
  `vidpost` text,
  `vidimg` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `post`, `img`, `vid`, `vidpost`, `vidimg`, `msg`) VALUES
(1, '<h3><span style=\"color:#bdc3c7\">MIKA&Euml;L KINGSBURY</span></h3>\r\n\r\n<p><span style=\"color:#bdc3c7\">Since 2011, Riobel is proud to be Mika&euml;l Kingsbury&#39;s main sponsor. His exploits as a freestyle skier are an inspiration to us all. We share his passion towards the quest for excellence and are happy to support him in his efforts.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"publications\"><span style=\"color:#bdc3c7\">View The Publications</span></a></p>\r\n', '4b447068c27572fc68d50a8420dd89501.png', '  ', '<h2 style=\"text-align:center\"><span style=\"color:#ecf0f1\">LET US INSPIRE YOU&hellip;</span></h2>\r\n', '13a5922852088d696669fb3ef3a8430f1.png', '<p>National Development Consultants Pvt. Ltd. Pakistan, is one of the Pakistan&#39;s premier consulting engineering organization, which has attained international standard and is ranked among the Pakistan&#39;s top 5 consulting firms.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagescat`
--

DROP TABLE IF EXISTS `imagescat`;
CREATE TABLE IF NOT EXISTS `imagescat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

DROP TABLE IF EXISTS `marquee`;
CREATE TABLE IF NOT EXISTS `marquee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text,
  `text` text,
  `heading` text,
  `month` text,
  `year` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `img`, `text`, `heading`, `month`, `year`, `url`, `ordr`) VALUES
(9, NULL, 'Testing Event', NULL, '2020', '10', '<p>hello Event Description</p>\r\n', 1),
(10, NULL, 'Another  Testing Event', NULL, '10', '2020', 'Sample Descp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `metak`, `metad`, `cover`, `post`) VALUES
(1, 'News and Events', '', 'Careers', 'Careers', '15562240ad0d6bfc4be7dcd977c92aaf1.png', '<p>post</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  `res` int(11) NOT NULL DEFAULT '0',
  `hide` int(11) NOT NULL DEFAULT '0',
  `ordr` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `metak`, `metad`, `cover`, `post`, `res`, `hide`, `ordr`) VALUES
(1, 'Home', 'home', 'Site Name', 'Site Name', '', '', 1, 0, 2),
(26, 'Technical Videos', 'tvideo', 'Technical Videos Gallery', 'Technical  Videos Gallery', '395a08298e40fdd55b41d04d13cc9ff61.png', '', 1, 0, 6),
(9, 'CU', 'contacts', 'Contacts', 'Contacts', '123.jpg', '', 1, 1, 20),
(24, 'Brochares', 'clients-brochures', 'clients ', 'clients ', '9de10abac4b0183b85d6c341daf581431.png', '', 1, 0, 7),
(5, 'Inspiration', 'services', 'Inspiration', 'Inspiration', '', '', 1, 0, 3),
(4, 'br', 'brands', 'Brands', 'Brands of Products', 'c9a4f94b46d91e28e7a65838354d03451.png', '', 1, 1, 8),
(7, 'Images', 'image', 'Images Gallery', 'Images Gallery\r\n', 'c960d16f3cf63f31067161bff94108f81.png', '', 1, 1, 16),
(3, 'Products', 'products', 'products', 'products', '', '', 1, 0, 5),
(6, 'NE', 'news', 'News / Events', 'News / Events', '53bb95cfdc5c32765745bcbc6747d9b31.png', '<p>lol this</p>\r\n', 1, 1, 14),
(2, 'Publications', 'pages', 'Publications', 'Publications', '', '', 1, 0, 7),
(8, 'Videos', 'videos', 'Videos Gallery', 'Videos Gallery', '395a08298e40fdd55b41d04d13cc9ff61.png', '', 1, 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `pimgs`
--

DROP TABLE IF EXISTS `pimgs`;
CREATE TABLE IF NOT EXISTS `pimgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) NOT NULL,
  `img` text,
  `feat` int(11) DEFAULT NULL,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimgs`
--

INSERT INTO `pimgs` (`id`, `pid`, `pslug`, `img`, `feat`, `ordr`) VALUES
(180, 61, 'new-jens', '9846ab56f3cb9ea8e14d922e871cff611.png', 1, 0),
(181, 61, 'new-jens', '3afb5476d8ef57cfc3afaf97430eab611.png', 0, 1),
(178, 60, 'boys-jeans-1', 'd88089ee5bf28a349bb8c0aef6e9b8021.png', 1, 0),
(182, 61, 'new-jens', '6a1395a64bb5be8865077acc73157c6b1.png', 0, 2),
(174, 59, 'rent-your-ride', 'b0a32c0e306fe73ebde3cb3bc16ea2611.png', 1, 0),
(183, 62, 'del-pro', '8530ea18330e31520dab7c1761b80fa51.png', 1, 0),
(184, 62, 'del-pro', 'a8e061b515e7fff0b3a864c396842cad1.png', 0, 1),
(185, 63, 'b009-01-01-1', 'e1be193146859dd4436579900f9acd981.png', 1, 0),
(187, 64, 'b016-01-01-1-b016-01-02-1', 'fbed2e4cdbb9af74626a92fbb31744831.png', 0, 1),
(188, 64, 'b016-01-01-1-b016-01-02-1', '63181305e656acad31ace485ac1ea9f11.png', 0, 2),
(190, 64, 'b016-01-01-1-b016-01-02-1', '3ed8a16d6d9f4f37848f53491f565b881.png', 1, 0),
(194, 66, 'k-0382', 'ae4ee0d191c7b13399faa388ccfbf8ab1.png', 1, 0),
(192, 65, 'k-0318', '5c016fb674185603bf33888a08a90a511.png', 1, 0),
(195, 67, 'k-0324', '0e77cc2ab41755a7fdfd917005463f971.png', 1, 0),
(197, 68, 'k-0358', '19d67a47ed706bdc912048b98e58202b1.png', 1, 0),
(198, 69, 'b016-02-01-1', 'cb61b65da77144bd56d7d930b6f40c661.png', 1, 0),
(199, 69, 'b016-02-01-1', 'a359451bab5259f476a49802eaa254391.png', 0, 0),
(200, 70, 'b109-01-01-1-', '4fe1f997a763026819f8cb94236f8b151.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL,
  `mslug` varchar(40) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) DEFAULT NULL,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `metak` text,
  `metad` text,
  `desp` text,
  `feat` text,
  `pdf` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `mid`, `mslug`, `pid`, `pslug`, `name`, `slug`, `brand`, `metak`, `metad`, `desp`, `feat`, `pdf`, `ordr`) VALUES
(65, NULL, NULL, 29, 'toilets', 'K-0318', 'k-0318', 5, '', '', '<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">Siphonic flush system</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">R&amp;T dual flush mechanism</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">UF/PP seat cover</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">Required minimum 1 2&quot; (305mm) rough-in</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">Includes chrome plated top flush actuator</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">27-3/4&quot; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6&quot; &nbsp;&nbsp; (705x405x690mm) Vitreous china.</span></span></p>\r\n', '0', NULL, 6),
(63, NULL, NULL, 28, 'faucet', 'B009 01 01 1', 'b009-01-01-1', 1, '', '', '<p><strong>DESCRIPTION</strong></p>\r\n\r\n<p>&bull; Brass construction</p>\r\n\r\n<p>&bull; Flexible supply lines with 3/8&rdquo; or 9/16&rdquo; compression fittings</p>\r\n\r\n<p>&bull; Includes Red/Blue indicators</p>\r\n\r\n<p><strong>FLOW</strong></p>\r\n\r\n<p>&bull; Water usage is limited to these maximum flow rates as indicated by the corresponding product markings</p>\r\n\r\n<p>&bull; North America: 1.5 gpm max (5.7L/min) at 60psi</p>\r\n\r\n<p>&bull; California: 1.2 gpm max (4.5L/min) at 60psi</p>\r\n\r\n<p><strong>CARTRIDGE</strong></p>\r\n\r\n<p>&bull; Ceramic disk cartridge STANDARDS &bull; Certified to CUPC &bull; Certified to AB1953 &bull; Certified to NSF/ANSI 61 &bull; ADA for lever handle</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', NULL, 2),
(64, NULL, NULL, 28, 'faucet', 'B016 01 01 1 ', 'b016-01-01-1-b016-01-02-1', 1, '', '', '<p><span style=\"color:#ffffff\">&bull; Brass construction</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">&bull; Flexible supply lines with 3/8&rdquo; or 9/16&rdquo; compression fittings</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">&bull; Includes Red/Blue indicators</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">&bull; Water usage is limited to these maximum flow rates as indicated by the corresponding product markings</span></p>\r\n', '1', '795bde440ddb1fdee7edd23fd7e1e6151.pdf', 4),
(66, NULL, NULL, 29, 'toilets', 'K-0382', 'k-0382', 1, '', '', '<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\">Siphonic flush system</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\">R&amp;T dual flush mechanism</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:16.0pt\">UF/PP seat cover</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\">Required minimum 1 2&quot; (305mm) rough-in</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\">Includes chrome plated top flush actuator</span></span></span></span></p>\r\n\r\n<p style=\"margin-right:21px\"><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">27-3/4&quot; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6&quot; &nbsp;&nbsp; (705x405x690mm) Vitreous china.</span></span></span></span></p>\r\n', '1', '17ad4dfba63ce347cff62384d58c233b1.pdf', 8),
(67, NULL, NULL, 29, 'toilets', 'K-0324', 'k-0324', 5, '', '', '<p><span style=\"color:#ffffff\">Siphonic flush system</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">R&amp;T dual flush mechanism</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">UF/PP seat cover</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">Required minimum 1 2&quot; (305mm) rough-in</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">Includes chrome plated top flush actuator</span></p>\r\n\r\n<p><span style=\"color:#ffffff\">27-3/4&quot; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6&quot; &nbsp;&nbsp; (705x405x690mm) Vitreous china.</span></p>\r\n', '1', NULL, 12),
(68, NULL, NULL, 29, 'toilets', 'K-0358', 'k-0358', 5, '', '', '<p style=\"margin-left:40px\"><span style=\"color:#ffffff\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">One-Piece</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px; margin-right:83px\"><span style=\"color:#ffffff\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Siphonic flush system</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px; margin-right:39px\"><span style=\"color:#ffffff\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">R&amp;T dual flush mechanism</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"color:#ffffff\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">UF/PP seat cover</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"color:#ffffff\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Includes chrome plated top flush actuator</span></span></span></p>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"color:#ffffff\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">27-1 /8&quot; 4-3/4&quot; &nbsp;(690x375x765mm) </span></span></span></p>\r\n', '0', NULL, 14),
(69, NULL, NULL, 28, 'faucet', 'B016 02 01 1', 'b016-02-01-1', 5, '', '', '<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">&bull; Brass construction </span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">&bull; Flexible supply lines with 3/8&quot; or 9/16&quot; cornpression fittings </span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">&bull; Includes Red/Blue indicators&nbsp;</span></span><br />\r\n&nbsp;</p>\r\n', '1', '2495a0063e84bc2f338e1ababebaad1d1.pdf', 6),
(70, NULL, NULL, 28, 'faucet', 'B109 01 01 1 ', 'b109-01-01-1-', 5, '', '', '<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">&bull; Brass construction </span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">&bull; Flexible supply lines with 3/8&quot; or 9/16&quot; cornpression fittings </span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#ffffff\">&bull; Includes Red/Blue indicators&nbsp;</span></span><br />\r\n&nbsp;</p>\r\n', '0', '8ece112d58f8a76271547a05a5c879e41.pdf', 10);

-- --------------------------------------------------------

--
-- Table structure for table `productcat`
--

DROP TABLE IF EXISTS `productcat`;
CREATE TABLE IF NOT EXISTS `productcat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(40) DEFAULT NULL,
  `img` text,
  `desp` text,
  `feat` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcat`
--

INSERT INTO `productcat` (`id`, `name`, `slug`, `img`, `desp`, `feat`, `ordr`) VALUES
(28, 'Faucet', 'faucet', '808b2cead6d1485dbb2db97cf2dd7ae21.png', '', NULL, 2),
(29, 'Toilets', 'toilets', '45f414d5cbb854619018b5535d80c01a1.png', '', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `productsubcat`
--

DROP TABLE IF EXISTS `productsubcat`;
CREATE TABLE IF NOT EXISTS `productsubcat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `pslug` varchar(90) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(40) NOT NULL,
  `img` text NOT NULL,
  `desp` text,
  `feat` text,
  `ordr` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsubcat`
--

INSERT INTO `productsubcat` (`id`, `pid`, `pslug`, `name`, `slug`, `img`, `desp`, `feat`, `ordr`) VALUES
(6, 25, 'gents', 'Dress Pents', 'dress-pents', '9af568c51fe14d0906584b3435dcbbcc1.png', '', NULL, 2),
(5, 23, 'boys', 'T-Shirts', 't-shirts', '83054bacb11f7672c51e6c3e3a99b5261.png', NULL, NULL, 2),
(4, 23, 'boys', 'Jeans', 'jeans', '51f8497de6a2e76349a090810e23f73d1.png', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) DEFAULT NULL,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `metak` text,
  `metad` text,
  `desp` text,
  `feat` text,
  `ordr` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `pid`, `pslug`, `name`, `slug`, `metak`, `metad`, `desp`, `feat`, `ordr`) VALUES
(29, 13, 'faucets', 'Modern Faucet', 'modern-faucet', 'Modern Faucet', 'Modern Faucet', NULL, '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `servicecat`
--

DROP TABLE IF EXISTS `servicecat`;
CREATE TABLE IF NOT EXISTS `servicecat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(40) DEFAULT NULL,
  `img` text,
  `desp` text,
  `feat` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicecat`
--

INSERT INTO `servicecat` (`id`, `name`, `slug`, `img`, `desp`, `feat`, `ordr`) VALUES
(10, 'Toilets', 'toilets', '7ebeae5fbbf8128abe758833be83061e1.png', '<p>lol</p>\r\n', NULL, 4),
(13, 'Faucet', 'faucets', 'e62b4c4eb335cebd862370acc39cc1f91.png', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `simgs`
--

DROP TABLE IF EXISTS `simgs`;
CREATE TABLE IF NOT EXISTS `simgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) NOT NULL,
  `img` text,
  `feat` int(11) DEFAULT NULL,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simgs`
--

INSERT INTO `simgs` (`id`, `pid`, `pslug`, `img`, `feat`, `ordr`) VALUES
(122, 28, 'not-show', '4d1cc98ce7e783223f020ddc8dea93f71.png', 0, 0),
(111, 25, 'another-serveice', '426f967cc6d0fcb2254462a854d8b35a1.png', 1, 0),
(112, 25, 'another-serveice', 'e2a324e7a423c441be0c793d691f49d31.png', 0, 2),
(113, 26, 'more', '124513a35bcca744e2d12a9334487da61.png', 1, 0),
(114, 27, 'must-show-on-home', '2d9cec06d36bf1521df9c2ef0a05b2671.png', 1, 0),
(121, 28, 'not-show', '6339fd77e1059c684c8feb109aa5676a1.png', 1, 0),
(116, 36, 'pro-20', '8493c168a080a9aa42323db7aef5fe251.png', 1, 0),
(118, 39, 'new-product-10', 'f90bc793c85d11511f50ca0be2efce5c1.png', 1, 0),
(119, 40, 'slud', 'a55ffefe04018b2f05720bb1d1d95f8b1.png', 1, 0),
(123, 29, 'modern-faucet', '5c1dec8effe47e0f9570e6f9159709ca1.png', 1, 0),
(124, 29, 'modern-faucet', '9c41bcbe89641985478fefccbe8b8cfd1.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `img`, `ordr`) VALUES
(24, 'One of the Best Sanitary Products', 'e1d098adebf13bb4e4f364e28686909b1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tvideos`
--

DROP TABLE IF EXISTS `tvideos`;
CREATE TABLE IF NOT EXISTS `tvideos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvideos`
--

INSERT INTO `tvideos` (`id`, `catid`, `catslug`, `name`, `img`, `url`, `ordr`, `feat`) VALUES
(34, 17, 'installation-videos', 'Best Bathroom Fittings Brands In The World', 'c7fd47ae704fe8b01e147c78f04ebbbb1.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/lys3CzQn8B4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, 1),
(33, 17, 'installation-videos', 'Sanitary fiittings luxury', '7d64407b4f5205716b8720a7526903ef1.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/nx1vHLOP2uA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1),
(35, 17, 'installation-videos', 'RFL Bathroom Fittings', '11934d43937892615ae8de8a0ac933e71.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dQdsQlHr1Vs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, 1),
(36, 18, 'technical-videos', 'Bathroom Fittings & Tiles Shop', 'cc0ad362c29092efc8c0d279d3853f381.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/gLJcigBkTVE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tvideoscat`
--

DROP TABLE IF EXISTS `tvideoscat`;
CREATE TABLE IF NOT EXISTS `tvideoscat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvideoscat`
--

INSERT INTO `tvideoscat` (`id`, `name`, `slug`, `img`, `ordr`) VALUES
(18, 'TECHNICAL VIDEOS', 'technical-videos', 'efae06025770a73c0a2bf34ca71328f11.png', 2),
(17, 'INSTALLATION VIDEOS', 'installation-videos', '6be12a6ec97c074f5f5698a53e64a59b1.png', 0),
(19, 'VIDEOS OF WATER FLOW', 'videos-of-water-flow', '2e22f250e1f16242fb10109699f5d79d1.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'hamza56', 'admin990', 'admin'),
(2, 'admin', 'admin9', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `catid`, `catslug`, `name`, `img`, `url`, `ordr`, `feat`) VALUES
(33, 16, 'riobel-videos', 'House of Rohl launch ', '42c87e25f1e1d37698c0a9999cace3721.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/uTIoNv8n3ww\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1),
(34, 16, 'riobel-videos', 'Corporate Sanitary Fiiting ', 'efe3a05aecf2630d29d2a2314c6742ef1.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/JemtL_qYU-Q\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>        ', 2, 1),
(35, 17, 'installation-videos', 'Sanitary Fittings Pakistan ', '4023273028491ea58f1f41f875100f941.png', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/cezWBtgxAA4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `videoscat`
--

DROP TABLE IF EXISTS `videoscat`;
CREATE TABLE IF NOT EXISTS `videoscat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videoscat`
--

INSERT INTO `videoscat` (`id`, `name`, `slug`, `img`, `ordr`) VALUES
(16, 'AZLEN VIDEOS', 'riobel-videos', '27df97e7ca5a15485840476d98e77adc1.png', 2),
(17, 'INSTALLATION VIDEOS', 'installation-videos', 'f5290e01444ea976440fd13d6184770a1.png', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
