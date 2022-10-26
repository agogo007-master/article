/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 5.6.24 : Database - article
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`article` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `article`;

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `category` varchar(100) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) DEFAULT NULL COMMENT 'Publish | Draft | Thrash',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`content`,`category`,`created_date`,`update_date`,`status`) values 
(4,'Contoh Blog Pribadi Inspiratif Untuk Kamu Yang Mau Belajar Jadi Blogger Pemula!','<p>Mungkin kamu perlu contoh blog pribadi untuk ide sebelum mulai membuat blog?</p>\r\n\r\n<p>Disini bloggerpi akan berbagi beberapa blog yang mungkin bisa memberi kamu ide dan gambaran seperti apa sih blog pribadi yang mungkin bisa kamu buat itu.</p>\r\n\r\n<p>Tentu saja bloggerpi akan berbagi beberapa blog dari berbagai topik atau niche.</p>\r\n\r\n<p>Sebenarnya ada cukup banyak niche atau topik yang bisa kamu pakai untuk mulai membuat blog pribadi. Seperti misalnya&nbsp;<a href=\"https://sobatcloud.com/\" target=\"_blank\">blog dengan topik teknologi</a>, wisata, dan lainnya.</p>\r\n\r\n<p>Namun disini bloggerpi akan membagikan bebrapa contoh blog pribadi dengan niche yang cukup populer untuk dibuat blog.</p>\r\n\r\n<p>Akan dibahas juga beberapa hal menarik mengenai blog tesebut. Sementara ini totalnya ada 9 blog pribadi yang diulas disini.</p>\r\n\r\n<p>Namun tentu saja kedepannya bloggerpi.com akan melakukan penambahan atau update contoh blog pribadi keren yang mungkin akan ditemukan lagi dimasa depan.</p>\r\n\r\n<p>Atau, kamu juga bisa merekomendasikan blog yang menurut kamu keren untuk diulas dikolom komentar dibawah ya.</p>\r\n\r\n<p>Kalau memang bagus dan layak buat diulas, akan bloggerpi ulas di tulisan ini.</p>\r\n\r\n<p>Nah, sekarang lanjut ya&hellip;</p>\r\n','Blogger','2022-10-26 18:31:50','0000-00-00 00:00:00','Draft');

/*Table structure for table `tbl_pengguna` */

DROP TABLE IF EXISTS `tbl_pengguna`;

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL,
  `pengguna_member_id` int(10) DEFAULT NULL,
  `pengguna_dept_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pengguna` */

insert  into `tbl_pengguna`(`pengguna_id`,`pengguna_nama`,`pengguna_moto`,`pengguna_jenkel`,`pengguna_username`,`pengguna_password`,`pengguna_tentang`,`pengguna_email`,`pengguna_nohp`,`pengguna_facebook`,`pengguna_twitter`,`pengguna_linkdin`,`pengguna_google_plus`,`pengguna_status`,`pengguna_level`,`pengguna_register`,`pengguna_photo`,`pengguna_member_id`,`pengguna_dept_id`) values 
(5,'it',NULL,'L','it','658a91497f51f07a56f643e9e4f54358',NULL,'it@gmail.com','087820327959',NULL,NULL,NULL,NULL,1,'2','2021-10-01 08:39:00','bb1739b02f07296778faed6c18bd6dda.jpg',NULL,NULL),
(6,'Admin',NULL,'L','admin','e10adc3949ba59abbe56e057f20f883e',NULL,'abay007.kkb@gmail.com','0896',NULL,NULL,NULL,NULL,1,'1','2021-10-29 21:31:04','5530e81f985b83bb4f5dff0e641200ee.jpg',NULL,5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
