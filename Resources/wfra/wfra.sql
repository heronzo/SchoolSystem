-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: wfra
-- ------------------------------------------------------
-- Server version	5.5.43

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `markers`
--

DROP TABLE IF EXISTS `markers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `markers`
--

LOCK TABLES `markers` WRITE;
/*!40000 ALTER TABLE `markers` DISABLE KEYS */;
INSERT INTO `markers` VALUES (1,'United States',44.427963,-110.588455),(2,'Canada',56.130367,-106.346771),(3,'Mexico',23.634501,-102.552788),(4,'Brazil',-14.235004,-51.925282),(5,'Colombia',4.570868,-74.297333),(6,'Argentina',-38.416096,-63.616673),(7,'Uruguay',-32.522778,-55.765835),(8,'Chile',-35.675148,-71.542969),(9,'Panama',8.537981,-80.782127),(10,'European Union',42.678692,23.321737),(11,'South Africa',-30.559483,22.937506),(12,'Dubai and UAE',25.204849,55.270782),(13,'Israel',31.046051,34.851612),(14,'Russia',61.524010,105.318756),(15,'Saudi Arabia',23.885942,45.079163),(16,'Japan',36.204823,138.252930),(17,'Singapore',1.352083,103.819839),(18,'Taiwan',23.697809,120.960518),(19,'Hong Kong',22.396427,114.109497),(20,'Australia',-25.274399,133.775131),(21,'China',35.861660,104.195396),(22,'Thailand',15.870032,100.992538);
/*!40000 ALTER TABLE `markers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sp_regions`
--

DROP TABLE IF EXISTS `sp_regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_regions` (
  `sp_region_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `jurisdiction` varchar(25) NOT NULL,
  `regulator` varchar(25) NOT NULL,
  `regulator_name` varchar(200) NOT NULL,
  `regulator_address` varchar(200) DEFAULT NULL,
  `website` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `commencement_year` year(4) NOT NULL,
  PRIMARY KEY (`sp_region_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sp_regions`
--

LOCK TABLES `sp_regions` WRITE;
/*!40000 ALTER TABLE `sp_regions` DISABLE KEYS */;
INSERT INTO `sp_regions` VALUES (1,'North America','United States','SEC','Securities and Exchange Commission','200 Vesey St #400, New York, NY 10285 ','https://www.sec.gov/','Standard & Poor’s Financial Services LLC',2006),(2,'North America','Canada','OSC','Ontario Securities Commission','20 Queen St W, Toronto, ON M5H 3S8, Canada','http://www.osc.gov.on.ca/ ','Standard & Poor\'s Ratings Services (Canada)',2012),(3,'LATAM','Mexico','CNBV','Comisión Nacional Bancaria y de Valores ','Insurgentes Sur 1971, Álvaro Obregón, Guadalupe Inn, 01020 Ciudad de México, CDMX, Mexico ','http://www.cnbv.gob.mx/ ','Standard & Poor\'s, S.A. de C.V.',1993),(4,'LATAM','Brazil','CVM','Comissão de Valores Mobiliários ','Edifício Cidade do Carmo - R. Sete de Setembro, 111 - Centro, Rio de Janeiro - RJ, 20050-006, Brazil ','http://www.cvm.gov.br/ ','Standard & Poor\'s Ratings Ratings do Brasil Ltda.',2013),(5,'LATAM','Colombia','SFC','Superintendencia Financiera de Colombia ','Calle 7 #4-49, Bogotá, Colombia ','http://superfinanciera.gov.co/ ','BRC Investor Services, S.A., Sociedad Calificadora de Valores ',2002),(6,'LATAM','Argentina','CNV','Comisión Nacional de Valores','25 de Mayo 175, 1002 CABA, Argentina ','http://www.cnv.gob.ar/ ','Standard & Poor\'s Ratings Argentina, S.R.L. ACR',1997),(7,'LATAM','Uruguay','BCU','Banco Central del Uruguay ','Diagonal Fabini 777, 11100 Montevideo, Uruguay ','http://www.bcu.gub.uy/ ','Standard & Poor\'s International Ratings Services LLC',2002),(8,'LATAM','Chile','SBIF','Seguros Superintendencia de Bancos e Instituciones Financieras ','Moneda 1123, Santiago, Región Metropolitana, Chile','http://www.sbif.cl/ ','Standard & Poor\'s Ratings Chile Clasificadora de Riesgo Ltda.',2016),(9,'LATAM','Panama','BDV','Bolsa de Valores','Avenida Federico Boyd & Calle 49, Panamá, Panama','http://www.panabolsa.com/ ','BRC Investor Services, S.A., Sociedad Calificadora de Valores ',2014),(10,'EMEA','European Union','ESMA','European Securities and Markets Authority ','103 Rue de Grenelle, 75007 Paris, France ','http://www.esma.europa.eu/','CMS Europe, CMS France, CMS Italy',2010),(11,'EMEA','South Africa','FSB','Financial Services Board','41 Matroosberg Rd, Pretoria, 0002, South Africa ','https://www.fsb.co.za/','Branch of CMS Europe',2014),(12,'EMEA ','Dubai and UAE','DFSA','Dubai Financial Services Authority','Dubai DIFC The Gate Bldg. 11th Floor, West Wing - Dubai - United Arab Emirates','https://www.dfsa.ae/','Branch of CMS Europe',2012),(13,'EMEA','Israel','ISA','Israel Securities Authority','22 Kanfei Nesharim St., Jerusalem 95464','http://www.isa.gov.il/ ','Standard & Poor\'s Maalot Ltd',2016),(14,'EMEA','Russia','CBR','Central Bank of the Russian Federation','','http://www.cbr.ru/eng/','Branch of CMS Europe',2016),(15,'EMEA','Saudi Arabia','CMA','Capital Markets Authority','Al Aqiq, Riyadh 13511, Saudi Arabia','http://www.cma.org.sa/en/','Branch of CMS Europe',2016),(16,'APAC','japan','FSA','Financial Services Agency',NULL,'http://www.fsa.go.jp/en/','Standard & Poor’s Ratings Japan K.K. ',2010),(17,'APAC','Singapore','MAS','Monetary Authority of Singapore','10 Shenton Way, Singapore 079117 ','http://www.mas.gov.sg/ ','Standard & Poor’s Ratings Singapore Pte Ltd',2012),(18,'APAC','Taiwan','FSC','Financial Supervisory Commission – Securities & Futures Bureau',NULL,'http://www.fsa.go.jp/en/','Taiwan Ratings Corp',1999),(19,'APAC','Hongkong','HKSFC','Hong Kong Securities and Futures Commission','Hong Kong, Central, 35/F Cheung Kong Center ','http://www.sfc.hk/ ','Standard & Poor’s Hong Kong Limited',2011),(20,'APAC','Australia','ASIC','Australian Securities and Investments Commission','100 Market St, Sydney NSW 2000, Australia ','http://www.asic.gov.au/ ','Standard & Poor’s Ratings Services (Australia) Pty Ltd',2010),(21,'APAC','China','CIRC','Chinese Insurance Regulatory Commission','105 Tiyuchang Rd, ZhongGuo SiChouCheng, Xiacheng Qu, Hangzhou Shi, Zhejiang Sheng, China, 310000 ','http://www.circ.gov.cn/ ','Standard & Poor’s Ratings China',2016),(22,'APAC','Thailand','TSEC','Securities and Exchange Commission, Thailand','333/3, 333/3 Vibhavadi Rangsit Rd, Chom Phon, Chatuchak, Bangkok 10900, Thailand ','http://www.sec.or.th/ ','TRIS Rating Co., Ltd (S&P Global 49% ownership)',2016);
/*!40000 ALTER TABLE `sp_regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'lwambo','frankelance1988@yahoo.com','3cf3fe3a9ce6ecf5287f2a12489ae160');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-07 13:35:04
