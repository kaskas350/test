-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `city` (
  `id_city` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (37,'admin'),(42,'Ярославль'),(43,'trew'),(44,'Гаврилов Ям');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL,
  `id_posts` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `text_comment` text,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (4,51,8,'2019-02-06','первый комментарий нового поста'),(5,51,8,'2019-02-06','второй комментарий нового поста'),(6,51,9,'2019-02-06','первый комментарий поста 2'),(7,50,8,'2019-02-06','третий комментарий нового поста'),(8,50,9,'2019-02-06','второй комментарий второго поста'),(9,51,8,'2019-02-06','уаыавф'),(10,51,8,'2019-02-06','цукцау'),(11,50,8,'2019-02-06','fdsfs'),(12,50,8,'2019-02-06','jghjgh'),(13,50,8,'2019-02-06','djj'),(14,50,12,'2019-02-06','нвпвпв'),(15,50,13,'2019-02-06','tewreg'),(16,50,13,'2019-02-06','bgefga'),(17,50,13,'2019-02-06','gdfgasf');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_users`
--

DROP TABLE IF EXISTS `data_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `data_users` (
  `name` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lastname` text CHARACTER SET utf8 COLLATE utf8_bin,
  `id_city` int(11) DEFAULT NULL,
  `email` text,
  `age` int(11) DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_users`
--

LOCK TABLES `data_users` WRITE;
/*!40000 ALTER TABLE `data_users` DISABLE KEYS */;
INSERT INTO `data_users` VALUES ('admin','admin',37,'serge-kopytov@yandex.ru',18,47),('сергей','копытов',42,'serge-kopytov@yandex.ru',22,49),('trew','trew',43,'trew',18,50),('Сергей','Копытов',44,'serge-kopytov@yandex.ru',18,51);
/*!40000 ALTER TABLE `data_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `feedback` (
  `name` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lastname` text CHARACTER SET utf8 COLLATE utf8_bin,
  `email` text,
  `text` text CHARACTER SET utf8 COLLATE utf8_bin,
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES ('sergey','kopytov','serge-kopytov@yandex.ru','text',24),('sergey','rjgsdfs','serge-kopytov@yandex.ru','text',25),('sergey','kopytov','serge-kopytov@yandex.ru','text',26),('sergey','kopytov','serge-kopytov@yandex.ru','text',27);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pictures` (
  `link_pictures` text,
  `id_picture` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_picture`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES ('image/DSC01158.JPG',53),('image/DSC01158.JPG',54),('image/DSC01126.JPG',55),('image/',56),('image/DSC01127.JPG',57),('image/DSC01127.JPG',58),('image/DSC01127.JPG',59),('image/DSC01158.JPG',60),('image/DSC01126.JPG',61),('image/DSC01127.JPG',62),('image/DSC01126.JPG',63),('image/DSC01126.JPG',64),('image/DSC01126.JPG',65),('image/DSC01158.JPG',66),('image/DSC01158.JPG',67),('image/DSC01127.JPG',68),('image/DSC01127.JPG',69),('image/DSC01126.JPG',70);
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `posts` (
  `Title` text CHARACTER SET utf8 COLLATE utf8_bin,
  `preview` text CHARACTER SET utf8 COLLATE utf8_bin,
  `Text` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pictures_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_posts` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_posts`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES ('Новый пост','Краткое описание','Текст поста',55,'2019-02-05',8),('Пост2','Кратакое описание поста 2','Текст поста 2',57,'2019-02-06',9),('пост3','краткое описание поста 3','текст поста3',55,'2019-02-06',10),('пост4','краткое описание поста 4','текст поста 4',55,'2019-02-06',11),('Пост5','краткое описание поста 5','текст поста 5',55,'2019-02-06',12),('пост 6','краткое описание поста 6','текст поста 6',53,'2019-02-06',13),('пятый пост','описание пятого поста','текст пятого поста',53,'2019-02-06',14),('Шестой пост','описание 6 поста','текст 6 поста',57,'2019-02-06',15),('7 пост','7пост','7пост',57,'2019-02-06',16),('8пост','8пост','8пост',55,'2019-02-06',17);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_user`
--

DROP TABLE IF EXISTS `posts_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `posts_user` (
  `id_posts` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_posts`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_user`
--

LOCK TABLES `posts_user` WRITE;
/*!40000 ALTER TABLE `posts_user` DISABLE KEYS */;
INSERT INTO `posts_user` VALUES (8,47),(9,50),(10,50),(11,50),(12,51),(13,51),(14,50),(15,50),(16,50),(17,50);
/*!40000 ALTER TABLE `posts_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `login` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3',47),('kre','7cf64379eb6f29a4d25c4b6a2df713e4',49),('trew','fa33bb8306889dfb13889a04e62915c1',50),('kas','7cf64379eb6f29a4d25c4b6a2df713e4',51);
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

-- Dump completed on 2019-02-07 12:31:03
