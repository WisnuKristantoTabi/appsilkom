-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: appsilkomjs
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `beasiswa`
--

DROP TABLE IF EXISTS `beasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `masuk` date NOT NULL,
  `keluar` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beasiswa`
--

LOCK TABLES `beasiswa` WRITE;
/*!40000 ALTER TABLE `beasiswa` DISABLE KEYS */;
INSERT INTO `beasiswa` VALUES (6,'Raynaldy Arief','H071181310','2','1','2147483647','raynaldya@gmail.com','pongtiku','2019-11-08','2019-11-30','1'),(7,'Cecilia','H071181002','2','2','082343900222','cecilia@gmail.com','maros','2019-11-01','2019-11-30','1');
/*!40000 ALTER TABLE `beasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelamin`
--

DROP TABLE IF EXISTS `kelamin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelamin`
--

LOCK TABLES `kelamin` WRITE;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` VALUES (1,'Laki - Laki'),(2,'Perempuan');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodi`
--

LOCK TABLES `prodi` WRITE;
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` VALUES (1,'Matematika'),(2,'Ilmu Komputer'),(3,'Aktuaria');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Belum Kawin'),(2,'Kawin'),(3,'Lajang');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tdosen`
--

DROP TABLE IF EXISTS `tdosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tdosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tdosen`
--

LOCK TABLES `tdosen` WRITE;
/*!40000 ALTER TABLE `tdosen` DISABLE KEYS */;
INSERT INTO `tdosen` VALUES (2,'8131001','Supri Bin Hj Amir, S.Si, M.Eng'),(3,'132133693','Armin Lawi, Dr. Eng'),(4,'131289844','Loeky Haryanto, Dr, M.S., M.Sc., M.A.T'),(5,'197601022002121001','Hendra, Dr, S.Si, M.Kom'),(6,'199012282018031001','Andi Muhammad Anwar, S.Si,M.Si'),(7,'132050973','Nur Erawati, Dra, M.Si'),(8,'811101','Edy Saputra Rusi, S.Si, M.Si'),(9,'131846397','Muhammad Hasbi, Drs, M.Sc'),(10,'12345678901234569','Rozalina Amran, ST., M.Eng');
/*!40000 ALTER TABLE `tdosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmatakuliah`
--

DROP TABLE IF EXISTS `tmatakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmatakuliah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mk` varchar(50) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `status` enum('Wajib','Pilihan') NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `deskripsi_mk` varchar(500) NOT NULL,
  `id_dosen2` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_semester` (`id_semester`),
  KEY `id_dosen` (`id_dosen`),
  CONSTRAINT `tmatakuliah_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `tsemester` (`id`),
  CONSTRAINT `tmatakuliah_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tdosen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmatakuliah`
--

LOCK TABLES `tmatakuliah` WRITE;
/*!40000 ALTER TABLE `tmatakuliah` DISABLE KEYS */;
INSERT INTO `tmatakuliah` VALUES (1,'18H07120603','Pemrograman Web','Wajib',3,5,'',2),(2,'18H07120103','Aljabar Terapan','Wajib',3,7,'                                          ',4),(3,'18H07120903','Pemrograman Jaringan Komputer','Pilihan',3,5,'',5),(4,'18H07120403','Desain dan Analisis Algoritma','Wajib',3,8,'       ',3),(9,'18Y02110203','Matematika Dasar 1','Wajib',1,3,'',3),(10,'18H07110103','Pengantar Pemrograman','Wajib',1,10,'',3),(11,'18Y02110303','Matematika Dasar 2','Wajib',2,3,'',3),(12,'18H07110203','Logika Komputer','Wajib',2,6,'',3),(13,'18H07110303','Pemrograman Berorientasi Obyek','Wajib',2,2,'',2),(14,'18H07110603','Jaringan Komputer','Pilihan',2,10,'',10),(15,'18H07120203','Struktur Diskrit','Wajib',3,6,'',3),(16,'18H07120503','Sistem Basis Data 1','Wajib',3,9,'',10);
/*!40000 ALTER TABLE `tmatakuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsemester`
--

DROP TABLE IF EXISTS `tsemester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsemester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_semester` enum('1','2','3','4','5','6','7','8') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsemester`
--

LOCK TABLES `tsemester` WRITE;
/*!40000 ALTER TABLE `tsemester` DISABLE KEYS */;
INSERT INTO `tsemester` VALUES (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8');
/*!40000 ALTER TABLE `tsemester` ENABLE KEYS */;
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
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (28,'cecil','ceciliatania03@gmail.com','default.jpg','$2y$10$HEbtQumeOcCRVoUWoU33/OV4L/YmH35z79X6vWgvo8B58jQXY8HjC',1,1,1576023212),(29,'user','keziabtr84@gmail.com','default.jpg','$2y$10$A/Xg6HJUIVgmzLE/LQJ6o.1lwJTqo2L6WWYzNAGg4uNjWawN7I6XS',2,1,1576023384);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_access_menu`
--

DROP TABLE IF EXISTS `user_access_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_access_menu`
--

LOCK TABLES `user_access_menu` WRITE;
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
INSERT INTO `user_access_menu` VALUES (1,1,1),(3,2,2),(14,1,2),(15,1,3),(18,1,4);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_menu`
--

DROP TABLE IF EXISTS `user_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_menu`
--

LOCK TABLES `user_menu` WRITE;
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
INSERT INTO `user_menu` VALUES (1,'Admin'),(2,'User'),(3,'Menu'),(4,'Courses');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'Administrator'),(2,'Member');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_sub_menu`
--

DROP TABLE IF EXISTS `user_sub_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_sub_menu`
--

LOCK TABLES `user_sub_menu` WRITE;
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
INSERT INTO `user_sub_menu` VALUES (1,1,'Dashboard','admin','fas fa-fw fa-tachometer-alt',1),(2,2,'My Profile','user','fas fa-fw fa-user',1),(3,2,'Edit Profile','user/edit','fas fa-fw fa-user-edit',1),(4,3,'Menu Management','menu','fas fa-fw fa-folder',1),(5,3,'Submenu Management','menu/submenu','fas fa-fw fa-folder-open',1),(7,1,'Role','admin/role','fas fa-fw fa-user-tie',1),(8,2,'Change Password','user/changepassword','fas fa-fw fa-key',1),(10,2,'Beasiswa','user/beasiswa','fas fa-fw fa-pencil-ruler',1),(12,4,'Semester','semester','fas fa-fw fa-book-open',1),(14,4,'Dosen','dosen','fas fa-fw fa-portrait',1),(15,4,'Matakuliah','matakuliah','fas fa-fw fa-book',1),(16,2,'Daftar Matakuliah','daftarmatakuliah','far fa-fw fa-list-alt',1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_token`
--

DROP TABLE IF EXISTS `user_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_token`
--

LOCK TABLES `user_token` WRITE;
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
INSERT INTO `user_token` VALUES (15,'raynaldya25@gmail.com','7jOVg8OFMypZu5w6IwUkLB8lQhVIdtbHn0IoqdR4eME=',1574952523),(16,'raynaldya25@gmail.com','bRdlSPbn/YQTrHfkE1KO3ox6Db6HdXzQb59Se5VgfOg=',1574952685),(17,'raynaldya25@gmail.com','FT4yP6W5CmKuUEnHHDh4gfZ2zKiGrWK45i8j7BD/dI8=',1574952758),(24,'rendyna273@gmail.com','b4e+R5vgvnyNqfkqzVHNFhgGs2io/geHWoz5IOc84Z8=',1574953934),(25,'rendyna273@gmail.com','TKHCozC4fjXuM/sI8j2Ajsl5gDuxgUJMKM6bqlOpDK8=',1574954399),(26,'rendyna273@gmail.com','VJD2Js1KfxdFSGKWyiV/dJJ68mvXXNhp4hp42AJQYq0=',1574954440),(27,'rendyna273@gmail.com','XsZeQQWnoM/v/CygSsg3JbcGi4yXpMroGlH7S2QqePo=',1574954487),(28,'rendyna273@gmail.com','v6eVNXds9JCdkrWZWNhx7pZbO5aQW9xV4scXXhMUIP4=',1574954518),(29,'rendyna273@gmail.com','3rkmiZrwzmq1cvl8kJ7PfyN9wKjkCzzHy3+mKKElPTk=',1574954579),(30,'raynaldya25@gmail.com','ZdWXmOLDxIc6iLP4itlqxawo3SYGDxdzd+iVC64SZBA=',1574954603),(31,'rendyna273@gmail.com','N6ntWxfcud1oYQDrvU3S1CC3in1JZTtNEF20FDYt9f8=',1574954609),(32,'rendyna273@gmail.com','U6DBTtx+Hv+E9jsl4GS6UpEoltVlOPP6Mxaonr6sd+g=',1574955337),(33,'rendyna273@gmail.com','9UJUDFTB1rh14lwvmcySsxAcLfTDeVb6UZ8ZWHBO81M=',1574955530),(34,'rendyna273@gmail.com','mNsWdwr70r0E8sG7F8mLW0NDUlbQt9hAB0ZxUE/gePY=',1574955611),(35,'rendyna273@gmail.com','hvN3cZsDzBx4l86RnSF5drLB79FTfDbmM8Yh9VEAIOQ=',1574955686),(36,'rendyna273@gmail.com','bpmhdTm8xSe9YnTvDWk+/RDwF19+9EcoA4JmJYgwtyk=',1574955740),(37,'rendyna273@gmail.com','AXs4k1JPUy+OR63Rq/yIPY8QzVzQtoJGAOi5P9gIN9M=',1575285136);
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-11  8:47:41
