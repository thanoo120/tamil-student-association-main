/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 : Database - tsauok
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tsauok` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `tsauok`;

/*Table structure for table `achievements` */

DROP TABLE IF EXISTS `achievements`;

CREATE TABLE `achievements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) DEFAULT NULL,
  `image` longtext,
  `achievement` longtext,
  `added_by` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `achievements` */

insert  into `achievements`(`id`,`heading`,`image`,`achievement`,`added_by`,`created_at`,`updated_at`) values 
(2,'தை பிரீமியர் லீக் 2023 - ஆண்கள்','1681810480.jpg','2023 ஆம் ஆண்டிற்கான தை பிரீமியர் லீக் ஆண்களுக்கான துடுப்பாட்ட சுற்றுப்போட்டியில் முதலாவது இடத்தை <b>\"SKY FORCE\"</b> அணியினர் பெற்றுக்கொண்டனர்.','Sarujan','2023-04-18 09:34:40','2023-04-18 09:34:40'),
(3,'தை பிரீமியர் லீக் 2023 - பெண்கள்','1681810523.jpg','2023 ஆம் ஆண்டிற்கான தை பிரீமியர் லீக் பெண்களுக்கான துடுப்பாட்ட சுற்றுப்போட்டியில் முதலாவது இடத்தை <b>\"SINGA PENGAL\"</b> அணியினர் பெற்றுக்கொண்டனர்.','Sarujan','2023-04-18 09:35:23','2023-04-18 09:35:23');

/*Table structure for table `batches` */

DROP TABLE IF EXISTS `batches`;

CREATE TABLE `batches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `added_by` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `batches` */

insert  into `batches`(`id`,`year`,`image`,`added_by`,`created_at`,`updated_at`) values 
(12,'முதலாம் வருட மாணவர்கள்','1681816977.jpg','Sarujan','2023-04-18 11:22:57','2023-04-18 11:22:57'),
(13,'இரண்டாம் வருட மாணவர்கள்','1681817014.jpg','Sarujan','2023-04-18 11:23:34','2023-04-18 11:23:34'),
(14,'மூன்றாம் வருட மாணவர்கள்','1681817038.jpg','Sarujan','2023-04-18 11:23:58','2023-04-18 11:23:58'),
(16,'நான்காம் வருட மாணவர்கள்','1681817083.jpg','Sarujan','2023-04-18 11:24:43','2023-04-18 11:24:43');

/*Table structure for table `competitions` */

DROP TABLE IF EXISTS `competitions`;

CREATE TABLE `competitions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) DEFAULT NULL,
  `image` longtext,
  `competition` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `added_by` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `competitions` */

insert  into `competitions`(`id`,`heading`,`image`,`competition`,`added_by`,`created_at`,`updated_at`) values 
(2,'சப்தம்','1681810090.jpg','மணிச்சலங்கையின் சிணுங்கல் கேட்டு மண்மகளின் மனம் ஆடுது கூத்து பசியை மறந்து ரசித்தேன் உன்னை - நீ அசையும் இசையில் மறந்தேன் என்னை நெஞ்சுரம் கொண்டு.','Sarujan','2023-04-18 09:28:10','2023-04-18 09:28:10'),
(3,'தை பிரீமியர் லீக்','1681810142.jpg','அனல் பறக்கும் ஆக்ரோசங்களுடன் விண்ணை வீழ்த்தும் வியூகங்கொண்டு  அதிரடி ஆட்டங்களால் அசரவைக்க களம் காணுகிறார்கள் களனி மண்ணின் கனவான்கள்.','Sarujan','2023-04-18 09:29:02','2023-04-18 09:29:02'),
(4,'கபடி விளையாட்டு','1681810204.jpg','தமிழரின் ஓர் வீர விளையாட்டு. எல்லைக்கோட்டிற்குள் தம் உடல் வலிமையுடன், மன வலிமையையும் பயன்படுத்தி மைதானத்தை விறுவிறுப்பாக்கும் கபடி போட்டி.','Sarujan','2023-04-18 09:30:04','2023-04-18 09:30:04'),
(5,'பட்டிமண்டப போட்டி','1681810242.jpg','மதுகை  நிகழ்வின் ஒரு அங்கமான போட்டியாக நடைபெறுகின்ற வாத விவாதிகளின் சொல்லாற்றலால் வில்தொடுக்க வருகின்றது பட்டிமண்டப போட்டி.','Sarujan','2023-04-18 09:30:42','2023-04-18 09:30:42');

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `contacts` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` longtext,
  `event` longtext,
  `added_by` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `events` */

insert  into `events`(`id`,`heading`,`image`,`event`,`added_by`,`created_at`,`updated_at`) values 
(3,'தைப்பொங்கல்','1681809475.jpg','மார்கழி கழிந்து தத்தி தத்தி வந்த தைமாதத்தில் தித்திக்கும் வெல்லத்தில் பொங்கல் வைத்து மகிழ்ச்சி வெள்ளம் பொங்க தரணியை தழைக்கச் செய்யும் தை மாதப்பிறப்பிற்கும் உணவு தந்த உழவருக்கும் நன்றி கூறும் திருநாள்.','Sarujan P','2023-04-18 09:17:55','2023-04-18 09:17:55'),
(5,'வாணிவிழா','1681809611.jpg','இந்து சமயத்தை பின்பற்றுகின்ற மக்களால் வெகு விமர்சையாக அனுஸ்டிக்கப்படும் விரதங்களில் ஒன்றாக நவராத்திரி காணப்படுகிறது. சக்திக்காக அனுஸ்டிக்கப்படும் ஒன்பது இரவுகள் என்பது இதன் பொருளாகும்.','Sarujan','2023-04-18 09:20:11','2023-04-18 09:20:11'),
(6,'மதுகை','1681809653.jpg','வருடாவருடம் தமிழர் கலை கலாசார பண்பாடுகளை பேணி கொண்டாடும் முகமாக களனிப்பல்கலைக்கழக தமிழ் மாணவர் ஒன்றியத்தினால்  சீருஞ்சிறப்புமாக நடாத்தப்படும் மதுகை நிகழ்வு வருடாந்தம் நடந்து வருகின்றது.','Sarujan','2023-04-18 09:20:53','2023-04-18 09:20:53'),
(7,'சாரல்','1681809692.jpg','தேமதுரத் தமிழோசை உலகமெலாம் பரவும் வகை செய்தல் வேண்டும் சேமமுற வேண்டுமெனில் தெருவெல்லாம் தமிழ் முழக்கம் செழிக்கச் செய்யும் மதுகையின்  ஒரு பகுதியான சாரல் வெளியீட்டு விழா.','Sarujan','2023-04-18 09:21:32','2023-04-18 09:21:32'),
(8,'வருபுனல்','1681809721.jpg','களனிப் பல்கலைக்கழக தமிழ் மாணவர் ஒன்றியத்தினால் நடாத்தப்படும்  முதலாமாண்டு மாணவர்களுக்கான வரவேற்பு நிகழ்வான  \'வருபுனல்\' ஆண்டுதோரும்  சிறப்பாக நடைபெறும்.','Sarujan','2023-04-18 09:22:01','2023-04-18 09:22:01'),
(9,'தடம்','1681809750.jpg','களனிப் பல்கலைக்கழக தமிழ் மாணவர் ஒன்றியத்தினால் வருடாந்தம் நடாத்தப்படும் இறுதியாண்டு மாணவர் பிரியாவிடை நிகழ்வான \'தடம்\'  சிறப்பாக நடைபெறும்.','Sarujan','2023-04-18 09:22:30','2023-04-18 09:22:30');

/*Table structure for table `faculties` */

DROP TABLE IF EXISTS `faculties`;

CREATE TABLE `faculties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `boys` int DEFAULT NULL,
  `girls` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `faculties` */

insert  into `faculties`(`id`,`name`,`boys`,`girls`,`total`,`color`,`created_at`,`updated_at`) values 
(1,'FCMS',17,27,44,'bg-blue','2023-01-05 15:10:09','2024-02-22 02:11:51'),
(2,'FCT',12,19,31,'bg-green','2023-01-05 15:10:14',NULL),
(3,'FOH',5,24,29,'bg-orange','2023-01-05 15:10:19',NULL),
(4,'FOM',31,15,46,'bg-red','2023-01-05 15:10:24',NULL),
(5,'FOS',26,6,32,'bg-magenta','2023-01-05 15:10:28',NULL),
(6,'FOSS',15,24,39,'bg-red-1','2023-01-05 15:10:31',NULL),
(7,'LECTURERS',18,25,43,'bg-blue-1','2023-01-05 15:10:35','2023-04-18 08:26:32'),
(8,'TOTAL',15,19,34,'bg-green-1','2023-01-05 15:30:02',NULL);

/*Table structure for table `lecturers` */

DROP TABLE IF EXISTS `lecturers`;

CREATE TABLE `lecturers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `nic` varchar(15) DEFAULT NULL,
  `dob` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `district` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` longtext,
  `bio` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `lecturers` */

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `bio` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `whatsapp` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `linkedin` varchar(250) DEFAULT NULL,
  `image` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `members` */

insert  into `members`(`id`,`name`,`phone`,`designation`,`bio`,`email`,`whatsapp`,`facebook`,`linkedin`,`image`,`created_at`,`updated_at`) values 
(5,'Sarujan P','+94775428041','Super Admin','BSc(Hons) in Computer Science.','saru.contacts@gmail.com','https://whatsapp.com','https://facebook.com','https://linkedin.com','1681818058.jpg','2023-04-18 11:40:58','2023-04-18 11:40:58');

/*Table structure for table `notices` */

DROP TABLE IF EXISTS `notices`;

CREATE TABLE `notices` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` VARCHAR(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert data into `notices`
INSERT INTO `notices` (`id`, `uid`, `notice`, `description`, `created_at`, `updated_at`) VALUES 
(2, '1',
'தரணியெங்கும் தமிழ்  
மணக்கச்செய்யும்  
தைத்திருநாள் கொண்டாட்டம்.  
கலாசாரமும் திறமையும்  
ஒன்றுசேரும் பெரும்  
விழாதனைக்காண  
உங்கள் அனைவருக்கும்  
அன்பான அழைப்பு.',
'இடம் : சைபே மைதானம்  
காலம் : 28.01.2023  
நேரம் : காலை 11 மணி',
'2023-04-18 09:50:17', '2023-04-18 10:08:04');


/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) DEFAULT NULL,
  `image` longtext,
  `service` longtext,
  `added_by` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `services` */

insert  into `services`(`id`,`heading`,`image`,`service`,`added_by`,`created_at`,`updated_at`) values 
(2,'புத்தக நன்கொடை','1681810941.jpg','2018/19 மாணவர் பிரிவில் கல்வி கற்று மறைந்தாலும் எம்  நினைவில் என்றும் வாழ்ந்து கொண்டிருக்கின்ற யதீஷா அவர்களின் தந்தையால் வழங்கப்பட்ட சுமார் 35,000 ரூபாய் பெறுமதி வாய்ந்த புத்தகங்கள் எமது களனி பல்கலைக்கழக தமிழ் மாணவர் ஒன்றியம் சார்பாக எமது நூலகத்திற்கு வழங்கப்பட்டது.\r\n','Sarujan','2023-04-18 09:42:21','2023-04-18 09:42:21'),
(3,'நிவாரண கற்றல் உதவிகள்','1681810992.jpg','கிளிநொச்சி மற்றும் முல்லைத்தீவு மாவட்டங்களில் ஏற்பட்ட வெள்ளப்பெருக்கின் காரணமாகப் பாதிக்கப்பட்ட எமது இரத்த உறவுகளுக்கு  களனிப் பல்கலைக் கழக தமிழ் மாணவர்கள் சார்பாக கற்றல் உபகரணங்கள் வழங்கப்பட்டது.','Sarujan','2023-04-18 09:43:12','2023-04-18 09:43:12'),
(4,'வழிகாட்டல் கருத்தரங்கு','1681811034.jpg','களனி பல்கலைக்கழக தமிழ் மாணவர் ஒன்றியத்தின் ஏற்பாட்டில்  (17/05/2022) மன்/ஆண்டாங்குளம் றோமன் கத்தோலிக்க அரசினர் தமிழ் கலவன் பாடசாலையில்  க.பொ.த சாதாரண தர மாணவர்களுக்கான கணிதம் மற்றும் விஞ்ஞான பாடங்களுக்கான வழிகாட்டல் கருத்தரங்கு நடைபெற்றது.','Sarujan','2023-04-18 09:43:54','2023-04-18 09:43:54');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `facebook` longtext,
  `instagram` longtext,
  `twitter` longtext,
  `linkedin` longtext,
  `about_left` longtext,
  `about_right` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`phone`,`email`,`facebook`,`instagram`,`twitter`,`linkedin`,`about_left`,`about_right`,`created_at`,`updated_at`) values 
(2,'+94775428041','saru.contacts@gmail.com','https://facebook.com','https://instagram.com','https://twitter.com','https://linkedin.com','எமது தாய்த்தமிழ் மொழியினையும் தமிழர் தம் உன்னத கலாச்சாரத்தினையும் உலகர் தம் அரங்கிற்கு எடுத்துச்செல்வதும் , உலக அரங்கில் அவற்றின் தொல்பெருமைகளை பறைசாற்றுவதும் எமது தூர நோக்காகும்!','உலகின் முதற்தர பண்பாடு மற்றும் கலாசாரத்தில் தொல்மொழியாம் நம் தமிழ்மொழியின் நிலையை தக்கவைத்தல் .\nதமிழ் கலாச்சார  செயற்பாடுகள், பண்பாட்டு நிகழ்வுகளை இன்றைய இளைஞர்கள் மத்தியில் அதன் தொண்மை மாறாமல் சரியான முறையில் கொண்டு சேர்த்தல் . அனைத்து செயற்பாடுகளும் சகல இன மக்களையும் மையப்படுத்தியதாக அமைதலும், அவர்களோடு ஒன்றிணைந்து  செயற்பட்டு உலகில் அனைத்து மொழி, கலை, கலாசாரத்தின் ஒற்றுமையை விரிவுபடுத்தல் . உலக அளவில் தமிழ் மொழிக்கானதும் தமிழ் மக்களுக்கானதுமான உறுதியான, உயரிய அங்கீகாரத்தைப் பெற்றெடுத்தலும் தமிழ் மக்களுக்கென தனியான, தனித்துவமான சுய முகவரியை வென்றெடுத்தலும்.','2023-04-17 22:31:51','2023-04-20 07:40:21');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `stu_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `student_mail` varchar(150) DEFAULT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dob` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `faculty` varchar(150) DEFAULT NULL,
  `course` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `father_name` varchar(250) DEFAULT NULL,
  `mother_name` varchar(250) DEFAULT NULL,
  `father_job` varchar(250) DEFAULT NULL,
  `mother_job` varchar(250) DEFAULT NULL,
  `sibiling` varchar(250) DEFAULT NULL,
  `district` varchar(250) DEFAULT NULL,
  `ag_office_division` varchar(250) DEFAULT NULL,
  `gs_office_division` varchar(250) DEFAULT NULL,
  `address` longtext,
  `comment` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `students` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `profile` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`designation`,`email`,`phone`,`username`,`password`,`profile`,`created_at`,`updated_at`) values 
(1,'Sarujan P','Super Admin','saru.contacts@gmail.com','0775428041','sarujan','$2y$10$xi5lQWYtFdtO50KekB5q2.kI6G77p8jOX548YRjlh.1tYu4bi17Yq','1681811918.jpg','2023-01-05 08:56:10','2023-04-18 09:58:38');

/*Table structure for table `years` */

DROP TABLE IF EXISTS `years`;

CREATE TABLE `years` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(250) DEFAULT NULL,
  `boys` int DEFAULT NULL,
  `girls` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `years` */

insert  into `years`(`id`,`year`,`boys`,`girls`,`total`,`color`,`created_at`,`updated_at`) values 
(5,'1',15,20,35,'bg-green','2023-04-17 21:51:29',NULL),
(6,'2',10,17,37,'bg-orange','2023-04-17 21:51:33',NULL),
(7,'3',25,15,40,'bg-magenta','2023-04-17 21:51:37',NULL),
(8,'4',23,32,55,'bg-blue','2023-04-17 21:51:42',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
