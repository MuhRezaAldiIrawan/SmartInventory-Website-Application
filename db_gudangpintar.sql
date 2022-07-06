-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gudangpintar
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `stok` int(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barangkeluar`
--

DROP TABLE IF EXISTS `barangkeluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barangkeluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangkeluar`
--

LOCK TABLES `barangkeluar` WRITE;
/*!40000 ALTER TABLE `barangkeluar` DISABLE KEYS */;
INSERT INTO `barangkeluar` VALUES (1,'ikan',10000,12,'anime_girl_lov-___CLgKvlUBrLN___-6.jpg'),(2,'laptop',100000,1,'anime_girl_lov-___CKQBeMphkgd___-4.jpg'),(3,'Fd',130000,12,'akneemei-___CJpKjiDhjLP___-1.jpg');
/*!40000 ALTER TABLE `barangkeluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barangmasuk`
--

DROP TABLE IF EXISTS `barangmasuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barangmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `jumlah` int(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barangmasuk`
--

LOCK TABLES `barangmasuk` WRITE;
/*!40000 ALTER TABLE `barangmasuk` DISABLE KEYS */;
INSERT INTO `barangmasuk` VALUES (2,'laptop Hp',12000000,1,'akneemei-___CJpKjiDhjLP___-.jpg');
/*!40000 ALTER TABLE `barangmasuk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `databarang`
--

DROP TABLE IF EXISTS `databarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `databarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `stok` int(128) NOT NULL,
  `produsen` varchar(128) NOT NULL,
  `detail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `databarang`
--

LOCK TABLES `databarang` WRITE;
/*!40000 ALTER TABLE `databarang` DISABLE KEYS */;
INSERT INTO `databarang` VALUES (1,'Ikan dua',10000,1,'FishBox','Ikan merupakan Hewan Laut yang banyak dikonsumsi saat ini');
/*!40000 ALTER TABLE `databarang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota`
--

DROP TABLE IF EXISTS `nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(128) NOT NULL,
  `produsen` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
INSERT INTO `nota` VALUES (1,'5','SakanaBox','Beras 100 Kg',10,10000000,'default2.jpg'),(2,'05 oktober 2021','FishBox nota','ikan',1,10000,'a.png'),(3,'01 juli 2021','Nvideo','RTX',1,1200000,'anime_girl_lov-___CJ3sp_phT9B___-31.jpg'),(4,'02 agustus 2021','Hp','Laptop Omen',10,100000000,'akneemei-___CJveGw8h0Bt___-.jpg');
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notabarang`
--

DROP TABLE IF EXISTS `notabarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notabarang` (
  `tanggal` int(128) NOT NULL,
  `order_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notabarang`
--

LOCK TABLES `notabarang` WRITE;
/*!40000 ALTER TABLE `notabarang` DISABLE KEYS */;
INSERT INTO `notabarang` VALUES (27102021,165211,'Laptop Hp Omen',15000000,2,30000000),(222222,232323,'EEEEEE',11112,22,222);
/*!40000 ALTER TABLE `notabarang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produsen`
--

DROP TABLE IF EXISTS `produsen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produsen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produsen`
--

LOCK TABLES `produsen` WRITE;
/*!40000 ALTER TABLE `produsen` DISABLE KEYS */;
INSERT INTO `produsen` VALUES (5,'FishBox','Makassar','FishBox@gmail.com','animee_pixiv-___CLCDGy7h8CF___-1.jpg','Aktif'),(6,'Reza','Makassar','Reza2@gmail.com','kawaii___anime_girl-___CKysFFoh4ZO___-5.jpg','Aktif');
/*!40000 ALTER TABLE `produsen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (19,'reza','reza@gmail.com','default.jpg','$2y$10$K1BDTn8EUaL4seUISQTDK.nIm/7k9mq1/Lc7CYVqBuEWotKS4kwsW',2,1,1624973292),(20,'ace','ace@gmail.com','default.jpg','$2y$10$fPLs5KBkECc8nQlrbfB6j..yX45eUKf4TYwY.guCJTHlgP4q7TpWW',2,1,1624973667),(21,'tama','tama@gmail.com','default.jpg','$2y$10$xpQuQGzLHaMVKy0AtvGQr.Co292DUTNrAd9e8o3DJrVR0ewMTS0DS',2,1,1624973932),(22,'nisa','nisa@gmail.com','default.jpg','$2y$10$NnuNIbgDy5EDH/r/.b8EbO0h.v6VdJqepZnjHeDSYa80Z8rmw1dPq',2,1,1625195064),(23,'one','one@gmail.com','default.jpg','$2y$10$RmzKuQrY0d/EIJ.wQF1hk.v7iyflx.vEzd7LL802hBa/RSOzyuxG2',2,1,1625212854),(24,'Muh Reza Aldi Irawan','RezaAldi@gmail.com','default.jpg','$2y$10$bwDI/DBYZAGiER0e1aHdFuabQOgyrD45bEgrGSE4DalKymOI8LwHe',2,1,1627874996),(25,'oni','oni@gmail.com','default.jpg','$2y$10$4BF5qJ1gVwGLzNaiImZx3.VD4Snjgo9c0ciGhfcFbnhVrwyqNpwhO',2,1,1628035122);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-04 15:57:30
