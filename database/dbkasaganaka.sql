/*
SQLyog Ultimate v8.55 
MySQL - 5.0.45-community-nt : Database - dbkasaganaka
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbkasaganaka` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbkasaganaka`;

/*Table structure for table `tblboardt` */

DROP TABLE IF EXISTS `tblboardt`;

CREATE TABLE `tblboardt` (
  `boardId` bigint(20) NOT NULL auto_increment,
  `boardPics` varchar(255) default NULL,
  `BoardName` varchar(255) default NULL,
  `boardPosition` varchar(255) default NULL,
  `boardCompany` varchar(255) default NULL,
  PRIMARY KEY  (`boardId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tblboardt` */

insert  into `tblboardt`(`boardId`,`boardPics`,`BoardName`,`boardPosition`,`boardCompany`) values (1,'01.jpg','Dr. Fernando T. Aldaba','Chairman of the Board','Ateneo de Manila,Economics Department'),(3,NULL,'Mr. Arturo M. Hilado','Vice President,Managing Director','Cyan Management Corporation'),(4,NULL,'Ms. Leticia Rodriguez','	Member,KDCI Member-Leader,Ex-Chairperson','Kasagana-Ka Mutual Benifit Association'),(5,NULL,'Ms. Wenifreda Rodriguez','Member,KDCI Member-Leader,Ex-Treasurer','Kasagana-Ka Mutual Benefit Association'),(6,NULL,'Mr. Garth Noel P. Tolentino','Member,e-Methods for Business Management,Chairman of the Board','Philippine National Construction Corporation'),(7,NULL,'Mr. Jaime E. Varela','Member,Social Development Worker,Consultant','Quezon City Government'),(8,NULL,'Ms. Maria Alexander B. Pura ','	Member,Social Development Worker','	OXFAM East Asia Regional Centre Gender Expert'),(9,NULL,'Atty. Eduardo M. Pangan','Member,Lawyer','	Kasagana-Ka Development Center Inc'),(10,NULL,'Mr. Romeo S. Santos, Jr.','Certified Public Accountant','TAO Corporation'),(11,NULL,'Mr. Felipe Ramiro, Jr.','Member Social Development Worker','OXFAM East Asia Regional Cente Business Development Expert'),(12,NULL,'Atty. Henry Li Yusingco, Jr.','Corporate Secretary Lawyer','Kasagana-Ka Development Center Inc');

/*Table structure for table `tblbranch_categ` */

DROP TABLE IF EXISTS `tblbranch_categ`;

CREATE TABLE `tblbranch_categ` (
  `branchCategId` bigint(20) NOT NULL auto_increment,
  `branchCategDesc` varchar(100) default NULL,
  `bcode` varchar(100) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`branchCategId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tblbranch_categ` */

insert  into `tblbranch_categ`(`branchCategId`,`branchCategDesc`,`bcode`,`status`) values (1,'Head Office','ho','1'),(2,'National Capital Region','ncr','0'),(3,'Bulacan Area','ba','0'),(4,'Rizal Area','ra','0'),(5,'South Area','sa','0');

/*Table structure for table `tblbranch_desc` */

DROP TABLE IF EXISTS `tblbranch_desc`;

CREATE TABLE `tblbranch_desc` (
  `branch_desc` bigint(20) NOT NULL auto_increment,
  `branchCategId` bigint(20) default NULL,
  `branchTile` varchar(100) default NULL,
  `fldMngr` varchar(100) default NULL,
  `brgy` varchar(255) default NULL,
  `addr` text,
  `telnum` varchar(15) default NULL,
  `celnum` varchar(15) default NULL,
  PRIMARY KEY  (`branch_desc`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tblbranch_desc` */

insert  into `tblbranch_desc`(`branch_desc`,`branchCategId`,`branchTile`,`fldMngr`,`brgy`,`addr`,`telnum`,`celnum`) values (1,2,'Bagong Silang','Anthony S. Serrano','`','1033 Capt. Samano St., Area A Libis, Camarin, Brgy. 175 Caloocan City','903-3539','0929-1390625'),(2,2,'Batasan','Ronaldo P. Reyes',NULL,'Blk 4 lot 16 A. Bonifacio St., New Capitol Estate 1, Quezon City','384-8465','0920-2871922'),(3,2,'Camarin','Benito Talastas Jr.',NULL,'Block 1 Lot 8 Almar Subdivision, (Camarin) Barangay 177, Caloocan City','903-3534','0915-8393962'),(4,2,'Fairview','Dondon Dinglasan',NULL,'72-E Regalado Ave., Fairview Park Subd., Quezon City','430-6349','0905-4163594'),(5,2,'Novaliches','Ryan Anthony Capili',NULL,'1164 Quirino Highway, Brgy. Kaligayahan, Novaliches, Quezon City','418-4919','0925-8393916'),(6,2,'Tandang Sora','Marimar A. Picardal',NULL,'Tandang Sora Ave., Brgy. Talipapa, Quezon City','921-5312','0932-8803529'),(7,3,'Bocaue','Kanneth P. Morota',NULL,'824 Bunlo, Bocaue, Bulacan','N/A','0925-8221502'),(8,3,'Marilao','Camille Velasco',NULL,'8 DMC Bldg., McArthur Highway, Poblacion 2, Marilao Bulacan','044-815-4464','0923-6591428'),(9,3,'Meycauayan','Joseph Lopez',NULL,'2F Ramsay Building, Brgy. Saluysoy, Meycauayan, Bulacan',NULL,NULL),(10,3,'Norzagaray','Sandy Busuego',NULL,'Prince Ken Building, Poblacion, Norzagaray, Bulacan',NULL,'0905-4163662'),(11,3,'Sapang Palay','Jessica R. Tica',NULL,'47 Lawang Pare, City of San Jose del Monte, Bulacan','044-815-6793','0927-8742206'),(12,3,'Tungko','Whilmelita V. Pableo',NULL,'Blk 5 Lot 24 Emerald St., Pecsonville Subd., Tungkong Mangga, City of San Jose del Monte, Bulacan',NULL,'0915-8393963'),(13,4,'Masinag','Dennis B. Villanueva',NULL,'241 F. Crisostomo Bldg., Sumulong Highway, Mayamot, Antipolo City, Rizal','646-5776','0925-8101625'),(14,4,'Montalban','Cyril M. Pableo',NULL,'L. Bugarin Bldg., E. Rodriguez Highway, Manggahan, Rodriguez, Rizal','919-2791','0925-8291981'),(15,4,'Padilla','Melrose L. Luces',NULL,'Block 52 Lot 2 Phase 2, Brgy. San Isidro, Antipolo City','639-5575','0925-8791017'),(16,4,'Pasig','McQuen Abellano',NULL,'Rm. 215, 2F Jemco Bldg., 1188 Bernal St. cor. C. Raymundo Ave., Brgy. Rosario, Pasig City',NULL,'0923-7487532'),(17,4,'San Mateo','Jayson L. Belga',NULL,'Rm. 2 2F Domicile Bldg., 66 J.P Rizal St., Nangka, Marikina City','934-4163','0939-9137294'),(18,4,'Sumulong','Expemarie T. Mediavillo',NULL,'Unit 1 Femar Commercial, F. Asuncion St., Brgy. Dela Paz, Antipolo City','234-1942','0927-7941718'),(19,4,'Taytay','Brenda F. Lumbao',NULL,'No. 2 Kadalagahan St., Dolores, Taytay, Rizal',NULL,'0922-5473940'),(20,5,'Binan','Richard L. Monteron',NULL,'Unit 4 6 Brgy. Canlalay, Binan City, Laguna',NULL,'0930-7710618'),(21,5,'Dasmarinas','Alberto C. Sicujan Jr.',NULL,'112 Placido Campos, San Agustine 2, Dasmarinas, Cavite','044-4760439','0915-8394075'),(24,5,'Las Pinas','Bennie G. Lafuerza',NULL,'59 Yellow Bell St., Pillar Village, Las Pinas City','511-7167','0915-9595138'),(25,5,'Trece Martires','Edmar P. Sarmiento',NULL,'Saluysoy Road, Brgy. San Agustin, Trece Martires, Cavite City',NULL,'0927-7983378'),(26,1,'Head Office',NULL,NULL,'\r\n#5 Don Francisco St., Don Enrique Heights, Commonwealth Avenue, Quezon City','931-4335',NULL);

/*Table structure for table `tblcertificate` */

DROP TABLE IF EXISTS `tblcertificate`;

CREATE TABLE `tblcertificate` (
  `certId` bigint(20) NOT NULL auto_increment,
  `cerpic` varchar(255) default NULL,
  `cerTitle` varchar(255) default NULL,
  `cerdesc` varchar(255) default NULL,
  `dateRecieve` varchar(255) default NULL,
  PRIMARY KEY  (`certId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tblcertificate` */

insert  into `tblcertificate`(`certId`,`cerpic`,`cerTitle`,`cerdesc`,`dateRecieve`) values (1,'BIR (COR).jpg','Certificate of Registration','BUREAU OF INTENAL REVENUE(BIR)','2/12/2011'),(2,'BIR Cert of Reg as Donee Institution (2011).jpg','Certificate of Registration','BUREAU OF INTENAL REVENUEBir','9/1/2011'),(3,'ca.jpg','Certificate of Accreditation','DSWD','10/20/2013'),(4,'cpt(KDCI).JPG','Certificate of Pricing Trasparency','mftransparency.org','12/1/2011'),(5,'KSK-Certificate of Filing of Amended Articles of Inc Jan 20, 2011).jpg','Certificate of Filing Amended Articles of Incorporation','SECURITIES AND EXCHANGE COMMISSION(SEC)','1/20/2011'),(6,'KSK-Certificate of Filing of Amended By-Laws (SEC-Apr 20, 2012).jpg','Certificate of Filing Amended by-Laws','SECURITIES AND EXCHANGE COMMISSION(SEC)','1/20/2011'),(7,'ma.jpg','Certificate of Appreciation','mcpi','7/26/203'),(8,'nsdwcc.jpg','Certificate of Appreciation','NSDWCC','10/12/2010'),(9,'Philssa.jpg','Certificate of Recognation','PHILSSA','6/24/2010');

/*Table structure for table `tblcontactus` */

DROP TABLE IF EXISTS `tblcontactus`;

CREATE TABLE `tblcontactus` (
  `contact_id` bigint(11) NOT NULL auto_increment,
  `e_add` varchar(50) NOT NULL,
  `e_num` int(11) NOT NULL,
  `e_address` text NOT NULL,
  `lookup_d` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tblcontactus` */

/*Table structure for table `tblcorevalues` */

DROP TABLE IF EXISTS `tblcorevalues`;

CREATE TABLE `tblcorevalues` (
  `coreId` bigint(20) NOT NULL auto_increment,
  `coreDesc` text,
  PRIMARY KEY  (`coreId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tblcorevalues` */

insert  into `tblcorevalues`(`coreId`,`coreDesc`) values (1,'<ul style=\" font-family:Arial, Helvetica, sans-serif;font-size:25px\">\r\n				          	<li style=\" margin-bottom:15px\">Pagkamasipag</li>\r\n				          	<li style=\" margin-bottom:15px\">Pagkamatapat</li>\r\n				          	<li style=\" margin-bottom:15px\">Pagkamasikap</li>\r\n				          	<li style=\" margin-bottom:15px\">Pagkamatulungin</li>\r\n				          	<li style=\" margin-bottom:15px\">Pagkamaunawain</li>\r\n				          	<li style=\" margin-bottom:15px\">Pagkamasinop</li>\r\n				          \r\n				          </ul>');

/*Table structure for table `tblemployee` */

DROP TABLE IF EXISTS `tblemployee`;

CREATE TABLE `tblemployee` (
  `empId` bigint(20) NOT NULL auto_increment,
  `fname` varchar(255) default NULL,
  `mi` varchar(255) default NULL,
  `lname` varchar(255) default NULL,
  `ulevel` varbinary(255) default 'administrator',
  PRIMARY KEY  (`empId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tblemployee` */

insert  into `tblemployee`(`empId`,`fname`,`mi`,`lname`,`ulevel`) values (1,'jef','d','Drilon1','administrator'),(2,'jef','das','dsa','administrator'),(3,'jef','das','dsa','administrator'),(4,'fds','fds','fds','administrator'),(5,'jef','d','Drilon','administrator'),(6,'jef','d','Drilon1','administrator');

/*Table structure for table `tblevent` */

DROP TABLE IF EXISTS `tblevent`;

CREATE TABLE `tblevent` (
  `eventId` bigint(20) NOT NULL auto_increment,
  `event_title` varchar(255) default NULL,
  `event_date` varchar(255) default NULL,
  `event_desc` text,
  `event_pics` varchar(100) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`eventId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tblevent` */

insert  into `tblevent`(`eventId`,`event_title`,`event_date`,`event_desc`,`event_pics`,`status`) values (1,'Kasagana-Ka Kiddie Kaloka-Kalokalike','11/13/2013','<p>Ang iyo bang anak ay mayroong <b>Kalokalike</b> na sikat na artista, public figure o di kaya ay cartoon character?</p>\r\n\r\n<p>Siya na nga ang maari mong isali sa Kasagana-Ka Kiddie Kaloka-Kalokalike!</p>\r\n\r\n<p><b>Mechanics:</b></p>\r\n\r\n<p>1.) Isang anak bawat isang empleyado lang ang maaring isali (Kahit mag-asawang empleyado)</p>\r\n<p>2.) Hanggang pitong (7) taong gulang lamang ang pinapayagang sumali.</p>\r\n<p>3.) Pumili ng artista/cartoon character na kalook-alike niya sa hitsura, porma, kilos at pananalita.</p>\r\n\r\n<p><b>Criteria for Judging</b></p>\r\n\r\n<p>1.) K na K (Kalook-alike na Kalook-alike) ---     30%</p>\r\n<p>2.) F na F (Feel na Feel)                              ---     30%</p>\r\n<p>3.) Creativity                                                ---     20%</p>\r\n<p>4.) Audience Impact                                     ---     20%</p>\r\n   <p><b>      TOTAL              </b>                                 ---     100%</p>\r\n\r\n<p>Kaya naman iready na ang inyong mga anak at isali na sila sa rampa sa darating na Disyembre 13, 2013.</p>\r\n\r\n<p>Kitakits!</p>\r\n','Kalokalike.jpg','0'),(2,'Isang araw sa Labing Isang taon ng Kasagana-Ka','9/27/2013','<p>Facebook, Twitter, Instagram, puro sa mga website mo lang ba naipapakita ang </p><p>iyong mga obra? Kung sa iyong palagay ay may kakaiba kang husay sa pagkuha ng larawan, pagkakataon mo ng ipagmalaki ito sa lahat.</p>\r\n\r\n<p><b>Mechanics:</b></p>\r\n\r\n<p>	Ang lahat ng empleyado na nasa probationary at regular status ay maaring sumali maliban sa mga nasa HRMDS Department.<p>\r\n<p>	Ang larawan ay dapat nagpapakita ng isang sandali/kaganapan sa buhay ng Kasagana-Ka at sa komunidad na ating pinaglilingkuran at nakapaloob sa kasalukuyang tema ng organisasyon na K.I.L.O.S (Kalusugan, Innovation, Leadership, Outreach, SPM)</p>\r\n<p>	Ang empleyadong kasali ay maaaring magpasa ng 1-2 entries</p>\r\n<p>	Ang larawan dapat ay orihinal na pagmamay-ari ng empleyadong magpapasa nito, walang watermarks, date stamp at pangalan ng may-ari sa mismong larawan.</p>\r\n<p>	Ang major editing gamit ang anumang photo enhancement computer programs (Adobe Photoshop, Paint.Net, GIMP etc.) ay HINDI pinahihintulutan, maari lamang itong gamitin para sa mga minor editing (contrast, cropping, sharpening etc.)</p>\r\n\r\n<p><b>Submission of entries:</b></p>\r\n<p>	Ang ipapasang larawan ay naka-print sa 8R size at nakalagay sa isang brown envelope. Ang pamagat ng larawan at pangalan ng empleyado ay dapat naka-label sa labas ng envelope.</p>\r\n<p>	Hanggang dalawang larawan lamang ang maaring ipasa ng isang empleyado.</p>\r\n<p>	Ang deadline ng submission ay sa ika-16 ng Setyembre, 2013, 5 PM. (Lunes)</p>\r\n<p><b>Selection of winning entries:</b></p>\r\n<p>	Mula sa lahat ng ipinasang larawan ay magkakaroon ng preliminary screening at pipili ng labing-isa (11) na makakasama sa gaganaping photo exhibit sa ikalabing-isang anibersaryo ng Kasagana-Ka sa Setyembre 27, 2013.</p>\r\n<p>	Ang pagboto ay sa pamamagitan ng paghulog ng smiley, sa kahon na nasa tapat ng bawat larawan.</p>\r\n<p>	Ang pagpili sa mananalo ay base sa larawan na may pinakamaraming boto sa mismong araw ng photo exhibit.</p>\r\n<p>	Nararapat lang na ang desisyon sa pagboto ng larawan ay nakapaloob sa ating criteria for judging: </p>\r\n<p>1.	Relevance sa tema- Kaugnayan ng larawan sa ating tema na K.I.L.O.S    40%</p>\r\n<p>2.	Creativity and Originality- Ang larawan ay nagpapakita ng kakaibang istilo at pagkamalikhain ng photographer    30%</p>\r\n<p>3.	Technical Aspects- Kalinawan, organisasyon at quality ng larawan.        30%</p>\r\n<p>Kabuuan= 100%</p>\r\n\r\n<p>Ang mga mananalo ay magkakamit ng mga sumusunod na gantimpala:</p>\r\n\r\n<p><b>Over-all winner    Php 5000 </b></p>\r\n<p>10 Consolation    Php 1000 each</p>\r\n\r\n','Ka.Larawan Teaser.jpg','0'),(3,'Ka. Boses','9/27/2013','\r\n<p>Mga kasama, kayo ba ay may naitatagong galing sa pag-awit? May nakakaakit na tinig?</p>\r\n\r\n<p>Baka ikaw na ang maaring mag-uwi ng limang libong piso! </p>\r\n\r\n<p>Kung ikaw ay interesado, narito ang mechanics:</p>\r\n\r\n <p><b>Mga paghahanda bago ang kompetisyon:</b></p>\r\n \r\n<p>    Bawat Cluster ay magkakaroon ng isang representative.</p>\r\n<p>  Ang bawat representative ay maghahanda ng isang kanta na dapat ay hindi lalagpas sa 3-4 mins. </p>\r\n<p> Dapat ay ihanda din ng representative ang audio (minus 1 o instrumentals) para sa kanta niya. </p>\r\n<p>Kailangang maipasa sa HR ang mga pangalan ng sasali hanggang Sept. 16, 2013 kasama na ang audio (minus 1 o instrumental) para sa kanta niya.</p>\r\n<p>Mahalagang HINDI malaman ng mga taga-ibang cluster kung sino ang representative ng isang cluster.</p>\r\n\r\n<p><b>Sa araw ng kompetisyon:</b></p>\r\n \r\n<p>Ang bawat contestant ay magpeperform ng kantang hinanda nila habang nasa likod ng kurtina.</p>\r\n<p>Pagkatapos ng kanta ng bawat contestant, magbibigay ng score ang 4 hurado. </p>\r\n<p> Bago ipakita kung sino ang kumanta, kailangang nakapagbigay muna ng score ang lahat ng hurado (rate 1-10, kung saan 10 ang pinakamataas). Ipapakita ang score na binigay ng isa sa mga hurado subalit ang tatlong score ay hindi muna ipapakita.</p>\r\n<p>Sa pagkakataong may mag-tie, maghahati sa premyo ang mga nag-tie na contestant.</p>\r\n\r\n','Ka.Boses.jpg','0');

/*Table structure for table `tblgallery` */

DROP TABLE IF EXISTS `tblgallery`;

CREATE TABLE `tblgallery` (
  `gallery_id` bigint(20) NOT NULL auto_increment,
  `gallery_desc` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY  (`gallery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tblgallery` */

/*Table structure for table `tblhistory` */

DROP TABLE IF EXISTS `tblhistory`;

CREATE TABLE `tblhistory` (
  `historyId` bigint(20) NOT NULL auto_increment,
  `historyDesc` text,
  PRIMARY KEY  (`historyId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tblhistory` */

insert  into `tblhistory`(`historyId`,`historyDesc`) values (1,'<p><b>Kasagana-Ka Development Center\\\'s</b>, Inc. is a social development non-government organization. At the core of its operation is direct and multiple services to its beneficiaries aimed at creating vibrant economic and social infra-structures in urban poor communities. KDCI uses microfinance as a key strategy in providing additional livelihood opportunities to disadvantaged and vulnerable families in Metro Manila and neighboring urban areas. As a service organization, it is guided by a perspective that uplifting the conditions of the urban poor is a multifaceted undertaking. It has thus bundled its savings and loan activities with services that offer fundamental social protection, including microinsurance, education, health, and shelter. Women comprise KDCI\\\'s main beneficiaries but members of these women\\\'s families, particularly school-age children, also directly benefit from the various products and services it offers.</p>\r\n\r\n<p>KDCI traces its history from the Foundation for Development Alternatives, an NGO formed in 1985 in response to the critical need to address the concerns of the urban poor. As a complement to its work on land tenure security and shelter development, FDA also implemented an economic program targeting urban poor women. In time, the loan and savings program expanded and was established as a separate entity, which was named KDCI.</p>\r\n\r\n<p>Registered with the Securities and Exchange Commission as a nonstock, nonsectarian, not-for-profit NGO in 2002, KDCI has received certification from the Philippine Council for NGO Certification. It is also registered with and licensed by the Department of Social Welfare and Development. It is a member of national and international networks, including MCPI (Microfinance Council of the Philippines), PHILSSA (Partnership of Philippine Support Service Agencies), PinoyME (Filipino Micro Enterprise), and MFTransparency.</p>\r\n\r\n<p>KDCI uses a methodology which it calls GRASYA, a Pilipino term for blessing or grace. The term is also an acronym that emphasizes its inspiration from the combined strength of the methodologies popularized by the Grameen Bank and ASA (Association for Social Advancement; Asa is also a Bengali word for hope). While maintaining its centers or group formation, KDCI gives out individual loans through a guarantor system, instead of engaging in group lending.</p>\r\n\r\n<p>Kasagana-ka is an acronym for Kabuhayan sa Ganap na Kasarinlan (livelihood for genuine self-reliance) and has become KDCI rallying phrase. It is an exhortation to being one with others in achieving well-being and development. Thus, from its initial loan (K-Negosyo) and savings (K-Impok) programs, KDCI has included microinsurance services (K-Seguro) as well as education (K-Edukasyon), health (K-Kalusugan), and shelter (K-Bahay) programs. KDCI also takes care of its staff members though its K-Kaagapay services. All these constitute essential elements in forming dynamic development-convergent links and infrastructures for urban poor families and their communities. Each is matched with services and products, which address such concerns as the women-beneficiaries` values affirmation, capability-building, emergency assistance, and routine necessities.</p>\r\n\r\n<p>From its initial 200 women-beneficiaries, KDCI has expanded its outreach to nearly 18,000 women as it approaches its 10th anniversary in 2012. It has over 1,000 centers in three Metro Manila cities (Caloocan City, Marikina City, and Quezon City) and in six municipalities and a city in the provinces of Bulacan (Marilao and San Jose del Monte) and Rizal (Antipolo City, Cainta, Taytay, San Mateo, and Rodriquez).</p>\r\n\r\n<p>A center is composed of 14 to 40 members residing in a contiguous neigh-borhood, and receives direct technical support from a socioeconomic officer. Responsible for two or more centers with a total of at least 250 members, the socioeconomic officer attends not only to the loan processing needs of members but, more important, to the capability-building requirements of the centers. The socioeconomic officer reports to a field office manager, who supervises at least 50 centers. Representing, KDCI`s physical presence in its areas of operation, each of the 18 field offices have facilities located close to the centers. These field offices are grouped into clusters, supervised by a cluster manager. KDCI`s current total outreach is grouped into six clusters, which are in turn organized into three areas, namely: Quezon City (northeast)-Caloocan City, Rizal-Antipolo City, and Quezon City (northwest)-Bulacan headed by an area manager.</p>\r\n\r\n<p>KDCI\\\'s executive director, along with the area managers and members of the financial, internal audit, human resources management, and administrative staffs, holds office at its main facility in Quezon City. Led by the executive director, the unit and area managers comprise KDCI`s Steering Committee; this group together with the field managers and selected finance staff members constitutes the Management Committee. A twelve-person Board of Trustees completes KDCI`s leadership roster.</p>');

/*Table structure for table `tbljobs` */

DROP TABLE IF EXISTS `tbljobs`;

CREATE TABLE `tbljobs` (
  `jobId` bigint(20) NOT NULL auto_increment,
  `img` varchar(255) default NULL,
  `jobTitle` varchar(255) default NULL,
  `jobDesc` varchar(255) default NULL,
  `jobFile` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`jobId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbljobs` */

insert  into `tbljobs`(`jobId`,`img`,`jobTitle`,`jobDesc`,`jobFile`,`status`) values (3,NULL,'dasd','04/04/2014','ld3rdquarter.pdf','0'),(4,NULL,'dasd','03/26/2014','','0'),(5,NULL,'d','Mar 25, 2014','websiteftp.txt','0'),(8,NULL,'jef','03/26/2014','report.txt','0'),(9,NULL,'drilon1','03/26/2014','computation.txt','0'),(10,NULL,'jjef','03/31/2014','Calculating Transparent Prices, v2.10-1.xls','0'),(11,NULL,'dsadsad','04/04/2014',NULL,'0');

/*Table structure for table `tblkupdate` */

DROP TABLE IF EXISTS `tblkupdate`;

CREATE TABLE `tblkupdate` (
  `kupdateId` bigint(20) NOT NULL auto_increment,
  `NumberClients` varchar(255) NOT NULL default '',
  `NumberCenter` varchar(255) NOT NULL default '',
  `NumberBrgy` varchar(255) default NULL,
  `NumberFO` varchar(255) default NULL,
  `NumberStaff` varchar(255) default NULL,
  `TotalPort` varchar(255) default NULL,
  `RepaymentRate` varchar(255) default NULL,
  `PARrate` varchar(255) default NULL,
  `PesoRating` varchar(255) default NULL,
  `Kmonth` varchar(255) default NULL,
  `status` varchar(255) default '0',
  PRIMARY KEY  (`kupdateId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tblkupdate` */

insert  into `tblkupdate`(`kupdateId`,`NumberClients`,`NumberCenter`,`NumberBrgy`,`NumberFO`,`NumberStaff`,`TotalPort`,`RepaymentRate`,`PARrate`,`PesoRating`,`Kmonth`,`status`) values (1,'22,419','1,135','284','23','180','128,468,901.68','99.37','2.38','94','September 2013','1'),(10,'23','100','22','33','44','55','66','77','88','Septembers 2013','1'),(11,'22,419','1,135','284','23','180','128,468,901.68','99.37','2.38','94','September 2013','0');

/*Table structure for table `tbllaksangdiwa` */

DROP TABLE IF EXISTS `tbllaksangdiwa`;

CREATE TABLE `tbllaksangdiwa` (
  `laksangDiwaId` bigint(20) NOT NULL auto_increment,
  `laksangdiwa_file` varchar(255) default NULL,
  `laksangdiwa_title` varchar(255) default NULL,
  `laksangdiwa_desc` varchar(255) default NULL,
  `laksangdiwa_dpub` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`laksangDiwaId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbllaksangdiwa` */

insert  into `tbllaksangdiwa`(`laksangDiwaId`,`laksangdiwa_file`,`laksangdiwa_title`,`laksangdiwa_desc`,`laksangdiwa_dpub`,`status`) values (1,'ldenero.pdf','Laksang Diwa Enero','dsadas(NULdasdL)','Enero 8,2013','0'),(2,'ldjuly.pdf','Laksang Diwa July','asdas','July 2,2013','0'),(3,'ld3rdquarter.pdf','Laksang Diwa 3rd quarter','dsadas','Nobyembre 3,2013','0');

/*Table structure for table `tblmarcelo` */

DROP TABLE IF EXISTS `tblmarcelo`;

CREATE TABLE `tblmarcelo` (
  `marceloId` bigint(20) NOT NULL auto_increment,
  `M` varchar(255) NOT NULL default '',
  `A` varchar(255) default NULL,
  `R` varchar(255) default NULL,
  `C` varchar(255) default NULL,
  `E` varchar(255) default NULL,
  `L` varchar(255) default NULL,
  `O` varchar(255) default NULL,
  PRIMARY KEY  (`marceloId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tblmarcelo` */

insert  into `tblmarcelo`(`marceloId`,`M`,`A`,`R`,`C`,`E`,`L`,`O`) values (9,'anagings','lleviation','espect','ollaboration','mpowerment','earning','pportunity');

/*Table structure for table `tblmenu` */

DROP TABLE IF EXISTS `tblmenu`;

CREATE TABLE `tblmenu` (
  `id_menu` bigint(20) NOT NULL auto_increment,
  `desc` varchar(200) NOT NULL,
  `Status` varchar(255) NOT NULL,
  PRIMARY KEY  (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tblmenu` */

insert  into `tblmenu`(`id_menu`,`desc`,`Status`) values (1,'home',''),(2,'about us',''),(3,'products',''),(4,'affiliates',''),(5,'news',''),(6,'career',''),(7,'gallery',''),(8,'contact us','');

/*Table structure for table `tblmvc_desc` */

DROP TABLE IF EXISTS `tblmvc_desc`;

CREATE TABLE `tblmvc_desc` (
  `aboutId1` bigint(20) NOT NULL auto_increment,
  `mvcId_code` bigint(20) default NULL,
  `mvcdesc_eng` text,
  `mvcdesc_tag` text,
  PRIMARY KEY  (`aboutId1`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tblmvc_desc` */

insert  into `tblmvc_desc`(`aboutId1`,`mvcId_code`,`mvcdesc_eng`,`mvcdesc_tag`) values (1,1,'<p>We envision creating empowered Filipino communities where its members have a decent and stable livelihood, and development opportunities where they support one another. These can be seen in vibrant social and economic networks in the communities.</p>','<p>Mga pamayanang Pilipino na may pagpapahalaga sa karapatang pantao, may marangal at matatag na pamumuhay, at nagtutulungan tungo sa ganap na kasarinlan. Nakikita ito sa mga buhay na buhay na ugnayang panlipunan at pangkabuhayan.</p>'),(2,2,'<p>A social development organization whose core business is service. It gives hope, guidance, and opportunities to improve the economic conditions and develop the total well-being of urban poor women, their families and their communities.</p>','<p>Isang tulong-institusyon na nagbibigay ng pag-asa, gabay at pagkakataon upang maiangat ang antas ng pamumuhay at malinang ang pagkatao ng maralitang pamayanang Pilipino. Our mission is service.</p>'),(3,3,'<p>Main vehicle is microfinance and related services for its niche market (urban poor women), membership outreach, bundling of services; consortium-building and networking with other stakeholders.</p>','<p>Ang pangunahing pamamaraan ay microfinance o pagpapautang at mga kaugnay na serbisyo para sa mga kababaihang maralitang taga-lungsod. Kasama na rito ang pag papalawak, pag bubugkos ng mga serbisyo at pakikipag-ugnayan sa ibat’t ibang samahan at institu'),(4,4,'','Pagkamasipags'),(5,4,'','Pagkamatapat'),(6,4,'','Pagkamasikap'),(7,4,'','Pagkamatulungin'),(8,4,'','Pagkamaunawain'),(9,4,'','Pagkamasinop'),(10,5,'<b>M</b>anaging with Prudence',''),(11,5,'<b>A</b>lleviation of Poverty',''),(12,5,'<b>R</b>espect',''),(13,5,'<b>C</b>ollaboration and Cooperation',''),(14,5,'<b>E</b>mpowerment',''),(15,5,'<b>L</b>earning Together',''),(16,5,'<b>O</b>pportunity for Growth',''),(18,6,'<p>I commit myself to you, my peer and colleagues, </p>\r\n<p>and in the name of my family,</p>\r\n<p>That I will do my utmost best to be a model member; </p>\r\n<p>To be industrious in all my work; </p>\r\n<p>To be striving in our vision and mission; </p>\r\n<p>To be prudent with our resources; </p>\r\n<p>To be understanding to those who need it; </p>\r\n<p>To be helpful always; </p>\r\n<p>And most of all, to be authentic to myself, my family</p>\r\n <p>and my colleagues.</p>\r\n<p>May the Lord Almighty bless me. </p>','<p>Ako’y nangangako sa harap ng aking mga kasama,</p>\r\n<p>Sa ngalan ng aking pamilya,</p>\r\n<p>na gagawin ko ang lahat upang maging</p>\r\n<p>isang ulirang kasapi.</p>\r\n<p>Maging masipag sa lahat ng gawain;</p>\r\n<p>Maging masikap sa adhikain;</p>\r\n<p>Maging masinop sa tanging yaman;</p>\r\n<p>Maging maunawain sa nangangailangan;</p>\r\n<p>Maging matulungin sa lahat ng oras;</p>\r\n<p>Maging matulungin sa lahat ng oras;</p>\r\n<p>At higit sa lahat, maging matapat sa aking sarili, </p>\r\n<p>sa aking pamilya at sa aking mga kasama.</p>\r\n<p>Pagpalain nawa ako ng Poong Maykapal.</p>\r\n													<p>Sa ngalan ng aking pamilya,</p>\';\r\n																<p>na gagawin ko ang lahat upang maging</p>\';\r\n																<p>isang ulirang kasapi.</p>\';\r\n																<p>Maging masipag sa lahat ng gawain;</p>\';\r\n																<p>Maging masikap sa adhikain;</p>\';\r\n																<p>Maging masinop sa tanging yaman;</p>\';\r\n																<p>Maging maunawain sa nangangailangan;</p>\';\r\n																<p>Maging matulungin sa lahat ng oras;</p>\';\r\n																<p>At higit sa lahat, maging matapat sa aking sarili, </p>\';\r\n																<p>sa aking pamilya at sa aking mga kasama.</p>\';\r\n																<p>Pagpalain nawa ako ng Poong Maykapal.</p>\';\r\n');

/*Table structure for table `tblmvccode` */

DROP TABLE IF EXISTS `tblmvccode`;

CREATE TABLE `tblmvccode` (
  `mvcId_Code` bigint(20) NOT NULL auto_increment,
  `mvcEng` varchar(100) default NULL,
  `mvcTag` varchar(100) default NULL,
  PRIMARY KEY  (`mvcId_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tblmvccode` */

insert  into `tblmvccode`(`mvcId_Code`,`mvcEng`,`mvcTag`) values (1,'VISION','Tinatanaw'),(2,'MISSION','Gawain'),(3,'STRATEGY','Pamamaraan'),(4,'Core Values','Pagpapahalaga'),(5,'M.A.R.C.E.L.O','Guiding Principal'),(6,'Pledge','Pangako sa Pagtataya');

/*Table structure for table `tblnews` */

DROP TABLE IF EXISTS `tblnews`;

CREATE TABLE `tblnews` (
  `newsId` bigint(20) NOT NULL auto_increment,
  `news_title` varchar(255) default NULL,
  `news_desc` text,
  `news_date` varchar(100) default NULL,
  `news_pics` varchar(100) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`newsId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblnews` */

insert  into `tblnews`(`newsId`,`news_title`,`news_desc`,`news_date`,`news_pics`,`status`) values (1,'Isang Araw sa Labing Isang taons','<i><p><i>Simple: Iyan ang salitang maglalarawan kung paano ipinagdiwang \r\nng Kasagana-Ka Development Center, Inc. (KDCI) ang ikalabing-isang taon \r\nnitong anibersaryo noong Setyembre 27, 2013 sa DEHHA Club House, Quezon \r\nCity.</i></p>\r\n<p>Ang anibersaryo ay sinimulan sa \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Kapihan\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" kasama ang Board of \r\nTrustees ng KDCI at ilang representatives mula sa mga partner \r\norganization tulad ng Bayan Academy, HealthDev, Violence against Women \r\n(VAW), Social Security System (SSS) at iba pa. Sinundan ito ng misa sa \r\npangunguna ni Fr. Ij Chan-Gonzaga, SJ.</p>\r\n<p>Ang programa ay sinimulan ng pagbati mula sa Chief Operating Officer \r\nna si Ate Judy, Chief Executive Officer na si Ate Mean at Member of the \r\nBoard na si Sir Noel Tolentino. Sinundan din ito ng Inspirational Talk \r\nni Fr. Obet Cabrillas na ang binigyang diin ay ang leadership. </p>\r\n<p>Sa anibersaryo din ginanap ang kauna-unahang Ka.Boses. Isang \r\nkompetisyon kung saan ang mga kalahok ay kakanta na ang kanilang \r\nsilhouette lamang ang nakikita. Lalabas lamang ang kalahok kapag lahat \r\nng hurado ay tapos ng magbigay ng kanilang mga puntos at ito ay makikita\r\n sa pamamagitan ng pagpapailaw ng bumbilya na nasa upuan ng bawat \r\nhurado. Pitong empleyado ang nakilahok sa kompetisyong ito. Ang nakakuha\r\n ng 3rd place ay ang representative ng East 1 na si Leonard Galarde. Ang\r\n nakasungkit naman ng 2nd place ay mula sa Head Office na si June Robin \r\nFernandez. Ang nagkampeon ay mula sa South  na si John Carlo Moina. </p>\r\n<p>Bahagi na ng pagdiriwang ay ang pagbibigay ng Natatanging \r\nSocio-Economic Officer (SO) at Bookkeeper (BK). Para sa taong ito, \r\ndalawa ang kinilala bilang Natatanging SO, mula sa Taytay Field Office \r\n(FO) na si Sarah Flordeliza at si Jayson Dunghit mula sa Trece Martires \r\nFO. Ang kinilala bilang Natatanging BK ay si Criscel Busuego mula sa \r\nNovaliches FO.</p>\r\n<p>Para sa taong ito ay mayroong dalawampu\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'t walo (28) na empleyado ang \r\ntumanggap ng Loyalty Award. Dalawampu\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'t anim (26) ang 5 years in service\r\n at dalawa (2) ang 10 years in service.\r\nAng masasabing highlight ng anibersaryo ay ang 11 items raffle para sa \r\nmga empleyado. Bawat isang empleyado ay may tag at doon nila isusulat \r\nang kanilang mga ID number. Mula sa mga tag na iyon ay doon bubunutin \r\nang mananalo. Ang items na napanalunan sa raffle ay ang mga sumusunod: 2\r\n Adidas Bag, 2 Portable FM Radio/MP3 Player, 1 Multimedia Speaker, 1 \r\nSamsung E220 phone, 1 Samsung Galaxy Star, 1 Philips DVD Player, 1 Corby\r\n Tablet, 1 Canon Digital Camera at para sa Grand Prize ay Samsung Galaxy\r\n Tab 7.0.\r\n</p>\r\n<p>Ang pagdiriwang ng anibersaryo ay pagkakataon upang muling \r\nmagkasama-sama ang lahat ng empleyado ng KDCI. Sa taong ito, bagama\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\'t \r\nsimple ang naging selebrasyon ay paniguradong nag-iwan pa din ito ng \r\nmarka sa bawat isang empleyado at bawat isang dumalo.\r\nMaligayang ika-labing isang taon, Kasagana-Ka!\r\n</p></i>','09/27/2013','k11.jpg','0'),(2,'3kT Training of Trainers','<i><p>\\\"Malusog na katawan ay ingatan, Labtest  ay kailangan nang sakit maagapan.\\\"<br>\r\nIyan ang isa sa tatlong slogan na sama-samang pinag-isipan ng \r\nlabing-anim (16) na K-Kalusugan Kadet Trainers (3KT) sa nakaraang 3KT \r\ntraining of trainers noong Hunyo 27-29 at Hulyo 11-12, 2013 sa Femar \r\nResort and Convention Center, Antipolo<br>\r\n<b>Ang pinagmulan</b>\r\n</p><p>Noong Marso 2011, sa pakikipagtulungan ng Kasagana-Ka Development\r\n Center, Inc. (KDCI) at ng Kasagana-Ka Mutual Benefit Association, Inc. \r\n(KMBA) sa HealthDev Institute, Inc. ay nagkaroon ng Health Cadets \r\nTraining. Ang mga Health Cadet ay nagmula sa piling Client Beneficiaries\r\n ng KDCI. Ang kanilang tungkulin ay nakapaloob sa tatlong bahagi: 1.) \r\nTagapagpaalala- Tagapagbigay ng impormasyon sa kanilang mga kasamahan sa\r\n sentro tungkol sa mga programang pangkalusugan ng KDCI at \r\ntagapagpaalala ng regular na pagkonsulta ukol sa kalusugan ng pamilya \r\n2.) Tagasubaybay- Pagsubaybay sa BP ng mga may altapresyon, blood sugar \r\nlevel ng mga diabetic, pag-inom ng gamot ng mga may TB at pagpunta sa \r\nHealth Center para sa kanilang \\\'Sputum follow-up\\\' at pag-unlad ng \r\ntimbang at kalusugan ng mga malnourished na bata. 3.) Tagapagsangguni- \r\nTagapag-ulat sa Health Center ng kaso ng tuberculosis, dengue, measles \r\nat iba pang nakahahawang sakit.</p>\r\n<p>Mula sa pitumpo (70) na sinanay upang maging Health Cadets noong \r\n2011, apatnaput tatlo (43) na lamang ang nagpatuloy bilang aktibong CBs.\r\n Mula sa natitirang Health Cadets ay nagkaroon ng pre-test upang matukoy\r\n kung sinu-sino ang maaring maging trainers. Tatlumput tatlong (33) \r\nHealth Cadets lamang ang kumuha ng pagsusulit at mula doon ay mayroong \r\nlabing-pito (17) na nakapasa upang maging trainers.</p>\r\n<p><b>3KT: Training of Trainers</b></p>\r\n<p>Labing-anim lamang na Health Cadets ang nakadalo sa naging training. \r\nDito ay nalaman nila ang tungkulin na dapat gampanan ng isang trainer. \r\nBilang trainer, sila ang mga taga-hatid ng impormasyon sa mga \r\nK-Kalusugan Kadet (KKK) at magsisilbing mentor at gabay ng mga KKK. Ang \r\nating mga trainer ay sina: Nora Magallanes, Dyeselene Magno, Jesus \r\nDoria, Nelida Graciadas, Criselda Oliva at Hermilita Ramos mula sa East 1\r\n cluster, mula naman sa East 2 cluster ay sina Corazon Cariaga at Mary \r\nLagata, sa North 1 cluster ay sina Ashley Gutirrez at Bernadeth Erni, \r\nsina Eva Alamag, Jesus Arabiana, Ma. Teresa Bucad naman ang mula sa \r\nNorth 2, sa Central 1 naman ay si Josephine Abugan at sina Angeles \r\nArboleda at Diana Dela Pena naman ang mula sa Central 2. </p>\r\n<p>Kasama din sa training na ito ang anim na Health Champions mula sa \r\nbawat cluster: Warlito Cabantog para sa North 1, Jonalyn Taduran para sa\r\n North 2, Christian Abaiza para sa Central 1, Ma. Fritzie Renegado para \r\nsa Central 2, Sarah Jean Flordeliza para sa East 1 at Carl Kenneth \r\nManombaga para sa East 2.</p>\r\n<p>Nagmula naman sa HealthDev Institute ang mga magtuturo at magbibigay \r\nng gabay sa ating mga trainer. Sa pagtatapos ng limang araw na training,\r\n inaasahan na ang mga trainer ay: malinaw na makapagtuturo ng mga \r\npaksang pangkalusugan, matukoy ang mga health hazard sa kanilang tahanan\r\n at komunidad na dapat pagtuunan ng pansin at kung ano ang mekanismo na \r\ndapat gawin upang tugunan ito, maunawaan na ang kahulugan ng kalusugan \r\nay ang pag-aadapt sa kalikasan at maunawaan ang lawak ng kanilang \r\ntungkulin bilang community health workers at kung kailan at saan dapat \r\nmag-refer ng pasyente.</p>\r\n<b>Training Days</b><br>\r\n<p>Sa loob ng limang araw ay sama-samang nag-aral at natuto ang ating \r\nmga trainer. Mayroong pitong module na tinalakay sa loob ng limang araw.\r\n Ang mga module ay ang mga sumusunod: Module 1: Konteksto ng K-Kalusugan\r\n Program, Module 2: Mga tungkulin ng K-Kalusugan Kadet at K3 Trainer, \r\nModule 3: Pagpapatupad sa K-Kalusugan Program, Module 4: Pag-unawa sa \r\nmga susing mensahe ukol sa karaniwang di-nakahahawa at nakahahawang \r\nsakit (NCD/CD), Module 5: Womens Health, Module 6:\\\"Ako bilang \r\nK-Kalusugan Kadet Trainer\\\" Isang pagninilay at Module 7: Pagsasanay sa \r\nBasic First Aid. Ang bawat araw ay naging produktibo sa ating mga \r\ntrainer dahil sila ay nabibigyan ng pagkakataon na \r\nmakapag-brainstorming, makapag-ulat, gumamit ng idea cards at maghayag \r\nng kanilang mga sariling karanasan pagdating sa usaping pangkalusugan. \r\nSa ikalawang araw ay gumawa ng slogan ang ating trainers tungkol sa \r\nK-Kalusugan Program window 1 at window 2 at K-Kalusugan Kadet. Sa ikatlo\r\n at ikaapat na araw ay nasubok ang kakayanan ng ating mga trainer na \r\nmagsalita at magturo sa harap ng kanilang mga kasama. Sa tulong ng \r\nkanilang visual aids ay naisagawa naman ito ng maayos ng mga trainer. Sa\r\n ikalimang araw naman ay naging interactive ang pag-aaral tungkol sa \r\nBasic First Aid. Masaya ding tinanggap ng bawat isa ang kanilang mga \r\nCertificate of Appreciation.</p>\r\n <b>Reflection</b>\r\n<p><i>\\\"Okay naman yung training, masaya at maraming dagdag na \r\nimpormasyon lalo na yung sa first aid kaya lang bitin yung topic, sana \r\nmas mahaba yung time.\\\"</i> - 3KT Trainer Dyeselene mula sa Montalban FO</p>\r\n<p><i>\\\"Sa ginawang training nadagdagan ang aking kaalaman, self-confidence at nakapag-relax na din.\\\" - 3KT Nora mula sa Montalban FO\r\n</i></p><p><i><i>\\\"Okay ang training, nadagdagan ang aking kaalaman sa \r\nfirst aid, naging mas confident na at kaunting practice pa sa \r\npagpapaliwanag sa harap ng maraming tao, maoovercome ko din ang medyo \r\nmadaling mainis.\\\"</i>- 3KT Jesusa mula sa Masinag FO.</i></p><i>\r\n<p><i>\\\"Naibabahagi ko ang natutunan ko sa aking mga member lalong lalo na ang tungkol sa sakit.\\\"</i> - 3KT  Criselda mula sa San Mateo FO.</p>\r\n<p>Tunay ngang ang mga ganitong training ay nagbibigay ng panibagong \r\nsigla at lakas ng loob para sa ating mga nanay. Nagiging daan din ito \r\npara sa pag-unlad ng kanilang mga kaalaman at naibabahagi pa nila ito sa\r\n iba nilang mga kasama.\r\nBilang gabay ng mga magiging K-Kalusugan Kadet, inaasahan na maayos na \r\nmaibabahagi ng mga trainer ang kanilang mga kaalaman at mga natutunan. \r\nSa kasalukuyan ay mayroon ng 124 Client Beneficiaries mula sa iba\\\'t \r\nibang cluster ang naturuan ng ating mga KKK Trainer.</p></i></i>','07/12/2013','3kt.jpg','0'),(4,'Bagong Buhay sa Ganda Nakasalalay','<i><p>Sa pagtutulungan ng Kasagana-Ka at ng Ang.Hortaleza Foundation, \r\nanimnaput dalawang mga nanay mula sa Montalban FO at National Housing \r\nAuthority (NHA) ang nagsipagtapos ng Basic Cosmetology Training na \r\nnagsimula noong Marso 18 hanggang Marso 22. </p>\r\n<p>Ang trainers na sina Arden Gordo, Rose Anne Rivero at Irene Castin \r\nkasama na din ang kanilang Program Officer na si Lel Mingoa ang nanguna \r\nsa nasabing training. Nahati sa dalawang grupo ang mga dumalo, mayroong \r\nAM at PM sessions. Ang unang araw ng training ay nakalaan para sa \r\npag-aaral at actual female haircutting, ang ikalawang araw ay pag-aaral \r\nat actual female and male haircutting, sa ikatlong araw ay male \r\nhaircutting, footspa, manicure, pedicure at hair perming, sa ikaapat na \r\naraw ay hot oil, hair coloring at highlighting at sa huling araw ay \r\nnagkaroon ng libreng gupitan sa umaga at sa tanghali naman ay ang \r\nkanilang pagtatapos.</p>\r\n<p>Matapos ang maikling pananalita at pagbati mula sa CEO ng Kasagana-Ka\r\n na si Ate Mean ay nagkaroon ng testimonies at natatanging bilang ang \r\nparticipants ng bawat session. </p>\r\n<p>Ang mga pangalan sa ibaba ay ang mga participant na nabigyan ng \r\npagkilala dahil sa kanilang ipinakitang galing sa iba\\\'t ibang kategorya.\r\nCategory	AM	PM<br>\r\nBest in Highlights: Ergie Fe Villarin, :	Snooky Artiago<br>\r\nBest in Male Haircutting:	Jennifer Bayos	:Aviguele Andrade<br>\r\nBest in Female Haircutting:	Bernadeth Guisadio: 	Ruthe Espanola<br>\r\nBest in Hot oil:	Mylene Tindugan, :	Jocelyn Aheza<br>\r\nBest in Pedicure:	Mary Anne Mapalad, :	Heredina Parado<br>\r\nBest in Footspa:	Analyn Manuel, :	Flory Mamal<br>\r\nBest in Coloring:	Kimberly Paguiding<br>\r\nBest in Manicure:	Catherine Villegas	Mary Ann Argonitas<br>\r\nBest in Perming: Winding	Mohini Morales, :Meliza Jaralbio<br>\r\n  \r\n	\\\"Laking tulong sa amin, dahil sa hirap ng buhay dapat may ibang trabaho\r\n kang alam\\\"wika ni Nanay Merlina Funa, isa sa mga dumalo sa nasabing \r\ntraining. \r\n	Ang lahat ng dumalo ay pinagkalooban ng Ang.Hortaleza Foundation ng kit\r\n na naglalaman ng mga gamit na maaring gamitin bilang panimula sa \r\nkanilang bagong negosyo. Ang bawat isang dumalo ay ay may pag-asa na sa \r\npagtatapos nilang iyon, bitbit ang lahat ng kanilang natutunan ay \r\nmagkakaroon sila ng magandang hanapbuhay.\r\n\r\n</p></i>','03/02/2013','splash.jpg','0');

/*Table structure for table `tblpartners` */

DROP TABLE IF EXISTS `tblpartners`;

CREATE TABLE `tblpartners` (
  `partnersId` bigint(20) NOT NULL auto_increment,
  `partnersName` varchar(255) default NULL,
  `partnersLogo` varchar(255) default 'default.jpg',
  `partnersUrl` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`partnersId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tblpartners` */

insert  into `tblpartners`(`partnersId`,`partnersName`,`partnersLogo`,`partnersUrl`,`status`) values (1,'FEMI','default.jpg','http://femiinc.wordpress.com/','0'),(2,'Splash Foundation, Inc.','Desert.jpg','http://www.splash.com.ph/','0');

/*Table structure for table `tblpicture` */

DROP TABLE IF EXISTS `tblpicture`;

CREATE TABLE `tblpicture` (
  `pic_id` bigint(20) NOT NULL auto_increment,
  `gallery_id` bigint(20) NOT NULL,
  `pics_title` varchar(50) NOT NULL,
  `pics_desc` varchar(50) NOT NULL,
  `pics_data` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY  (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tblpicture` */

/*Table structure for table `tblprodintro` */

DROP TABLE IF EXISTS `tblprodintro`;

CREATE TABLE `tblprodintro` (
  `prodDescId` bigint(20) NOT NULL auto_increment,
  `prodDescIntro` text,
  PRIMARY KEY  (`prodDescId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tblprodintro` */

insert  into `tblprodintro`(`prodDescId`,`prodDescIntro`) values (1,'<p><em>Sed mollis leo nec est tempor interdum et vulputate orci. Integer in erat nibh, nec volutpat nunc. Aliquam in congue ligula.</em></p>\r\n            <p><a href=\\\"http://www.templatemo.com\\\" target=\\\"_parent\\\">Green Jelly</a> is  free css template provided by <a href=\\\"http://www.templatemo.com\\\">templatemo.com</a> for your personal or commercial websites. Credit for Nivo Slider goes to <a href=\\\"http://nivo.dev7studios.com\\\" target=\\\"_blank\\\">Dev7studios</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta, sem vitae lacinia convallis, eros sapien euismod metus, quis ultricies arcu neque eu elit. Nam vel pellentesque nunc.</p>\r\n          <br class=\\\"cleaner h20\\\">\r\n            <ul class=\\\"templatemo_list\\\">\r\n                <li>Dictum eu pharetra quam semper</li><li>Fusce fermentum justo non libero</li>\r\n                <li>Placerat metus egestas sem dolor in lectus</li>\r\n                <li>Vivamus mollis, odio ut aliquam auctor</li>\r\n            </ul>\r\n              <ul class=\\\"templatemo_list\\\">\r\n                <li>Dictum eu pharetra quam semper</li>\r\n                <li>Fusce fermentum justo non libero</li>\r\n                <li>Placerat metus egestas sem dolor in lectus</li>\r\n                <li>Vivamus mollis, odio ut aliquam auctor</li>\r\n            </ul>\r\n             \r\n              <ul class=\\\"templatemo_list\\\">\r\n                <li>Dictum eu pharetra quam semper</li>\r\n                <li>Fusce fermentum justo non libero</li>\r\n                <li>Placerat metus egestas sem dolor in lectus</li>\r\n                <li>Vivamus mollis, odio ut aliquamd auctor</li></ul><p><br></p><p>gfdgdfgfd<br></p><ul class=\\\"templatemo_list\\\">\r\n            </ul>');

/*Table structure for table `tblproduct` */

DROP TABLE IF EXISTS `tblproduct`;

CREATE TABLE `tblproduct` (
  `prodDescId` bigint(20) NOT NULL auto_increment,
  `prodcategId` varchar(100) default NULL,
  `prodDesc` text,
  `prodPics` varchar(255) default 'default.jpg',
  `prodK` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`prodDescId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tblproduct` */

insert  into `tblproduct`(`prodDescId`,`prodcategId`,`prodDesc`,`prodPics`,`prodK`,`status`) values (1,'K-NEGOSYO','<p>Kasagana-Ka Development Center, Inc. initiates its services with \r\nmothers who are either breadwinners or wish to enhance their \r\ncontributions to their familys income. These mothers should have a \r\ndesire to engage in a small business enterprise, and be of sound body, \r\nmind, and moral values. They are organized into a center of 14 to a \r\nmaximum of 40 members, who have chosen each other from within the same \r\nurban poor locality. One of two required loan co-makers of a \r\nborrower-member has to come from among fellow members of a center; the \r\nother has to be a family member, either the spouse, an offspring of \r\nlegal age, a parent, or a sibling.</p>\r\n <p>Kasagana-Ka provides a centers first-time borrower with PHP3,000 \r\n5,000, depending on the results of a credit investigation and the \r\nagreement of the - co-makers. This amount may be increased by PHP3,000 -\r\n 5,000 every loan cycle. It may be doubled upon reaching PHP30,000 and \r\nmay reach a maximum of PHP150,000. The initial loan, which is provided \r\nunder <font color=\\\"007f33\\\"><i>K-Negosyo</i></font> Window 1, may be provided to a center member who has yet to start contributing to the capital build up, that is, to the <font color=\\\"007f33\\\">K-Impok </font>(savings)\r\n fund. A member who wishes to obtain a loan of PHP30,000 or more, \r\nhowever, should already be in the 8th loan cycle (which is generally \r\nequivalent to two years of center membership) and needs to maintain a \r\nsavings balance of at least 20 percent of the loan amount. This loan is \r\nprocessed under Window 2, which specifically assists \r\nclient-beneficiaries who have demonstrated good performance in their \r\nmicroenterprises, are active in center activities, and wish to expand \r\ntheir businesses or engage in another enterprise that requires a bigger \r\ncapital.\r\nWhether obtained through Window 1 or Window 2, a loan is charged an \r\ninterest rate of 2.5 percent a month and is payable in 15 or 25 weeks. A\r\n processing fee (2-3 percent) as well as contribution to a loan \r\nredemption fund (0.375-0.75 percent) and to the microinsurance of \r\nKasagana-Ka Mutual Benefit Association, Inc. is deducted from the loan \r\namount. Collections are made a day before the weekly center meetings. \r\nThe center meetings, thus, do not constitute as a loan repayment point \r\nbut an opportunity to develop solidarity and discipline among the \r\nmembers. More important, the center and its regular meetings serve as a \r\nmechanism through which other products and services flow. The center \r\nmeeting is attended by the Kasagana-Ka socioeconomic officer, who also \r\nserves as a loan officer.\r\nKasagana-Ka ensures that a loan is released 3-5 days after the borrower \r\nhas complied with all the requirements. During a center meeting a week \r\nafter the release of the loan, the borrower undergoes a loan utilization\r\n check and status reporting. Receipts of goods and other items purchased\r\n in connection with the business for which a loan was obtained are \r\npresented. The socioeconomic officer also visits the business location. \r\nExcept the co-makers, center members are not responsible for repaying \r\nthe loan of a defaulting member. They get involved, however, in the \\\" \r\nsit-down policy,\\\" during which members accompany their socioeconomic \r\nofficer to the home of a member who failed to make a weekly contribution\r\n and stay until a payment is made. \r\n</p>','k-negosyo.jpg',NULL,'0'),(2,'K-EDUKASYON','<p>Acknowledging the significant role of formal education in a familys \r\ntransition from a life of poverty, Kasagana-Ka has incorporated \r\neducational assistance as a vital component of its services to its \r\nclient-beneficiaries. It likewise recognizes that in seeking additional \r\nfamily income through their K-Negosyo loans, client-beneficiaries are \r\nalso driven by a desire to support the education of family members, and \r\nperhaps of themselves too.</p>\r\n<p>So that the client-beneficiaries goal of a formal education for \r\nfamily members, particularly for school-age children, can be realized at\r\n the appropriate time, Kasagana-Ka offers education loans to those who \r\nhave been center members for at least a year. With a maximum of \r\nPHP15,000, the education loan may be secured for the educational \r\nexpenses of the client-beneficiaries children, spouse, siblings, \r\nnephews, nieces, or grandchildren, and even for the center members \r\nthemselves. The specific amount that can be borrowed depends on the \r\nschool level of the student for whom the loan is being obtained. The \r\nloan includes a 2.5 percent monthly interest but does not involve a \r\nprocessing fee and loan redemption fund contribution.\r\n</p><p>Kasagana-Ka through its sister organization, K-MBA, also makes \r\navailable a scholarship program for children of client-beneficiaries who\r\n have shown loyalty and good performance for the past two years. An \r\nautonomous body governed by a board of trustees elected from among \r\ncenter members and Kasagana-Ka staff, K-MBA believes that part of the \r\nproceeds from its microinsurance program should benefit its own members.</p> \r\n<p>Started in 2007 for students who were in high school, the scholarship\r\n program was subsequently named Kuya Jun Scholarship Program, after \r\nKasagana-Kas first executive director, Severiano C. Marcelo, Jr., who \r\npassed away in 2008. The program has since included college students. \r\nApplicants to the scholarships are required to pass written \r\nexaminations; those who pass the qualifying marks go through background \r\ninvestigation. At present, each Kasagana-Ka branch may have a maximum of\r\n two scholars. To keep their scholarship, high school students should \r\nobtain a grade average of 82 while college scholars, a grade average of \r\n2.5 or its equivalent, with no failing marks and two grades of \r\n\\\"incomplete.\\\" Scholars who are in high school receive PHP3,000 for \r\ntuition fees each school year. Those in college get PHP3,000 to PHP5,000\r\n each semester, depending on the scholarship category, which considers \r\nnumber of siblings, course, and type of school (public or private). \r\nScholars are convened for regular semestral meetings, which are \r\nfacilitated by Kasagana-Kas human resource manager. Since the \r\nscholarship program was established, it has assisted in the completion \r\nof the studies of 22 high school students and 19 college students. \r\nKasagana-Ka has published a volume (Listen to Our Dreams, 2009) \r\nrecounting the thoughts of the first batch of scholars on their mothers \r\nand the struggles the latter have gone through in providing for a better\r\n future for their family.</p>','book launch (6).JPG',NULL,'0'),(3,'K-IMPOK','<p>The flipside of the K-Negosyo service of Kasagana-Ka is a capital \r\nbuild up program that is aimed at instilling among its \r\nclient-beneficiaries the value and discipline of saving for wealth \r\naccumulation and emergency needs, thus mitigating their vulnerability. \r\nCenter member-borrowers are required to put a capital build up \r\ncontribution of not less than PHP50 each week as they repay their loans.</p>\r\n<p>Considered as Window 1 of <font color=\\\"007f33\\\">K-Impok </font>, the \r\ncapital build up earns an interest of 5 percent a year, and also becomes\r\n a basis for center members access to other Kasagana-Ka products and \r\nservices. After the first loan cycle, the amount of the succeeding loans\r\n is determined by the amount of the capital build up contributions; the \r\ntotal capital build up should be equal to 20 percent of the intended \r\nloan amount.\r\n</p><p>Client-beneficiaries are provided a savings booklet or passbook \r\nin which their savings and interests earned are regularly recorded. The \r\ncapital build up contribution is collected with the loan repayments. \r\nCenter members either arrange to meet up or take their payments to the \r\ncenter leader for deposit to a commercial bank nearest to their field \r\noffice. This is done a day before the center meeting. The socioeconomic \r\nofficer collects the bank deposit slips and records the amounts \r\ndeposited in the centers logbook as well as updates the members \r\npassbooks. \r\n</p><p>The socioeconomic officers role beyond loan processing comes into\r\n play during a center meeting, which serves as Kasagana-Kas frontline \r\nmechanism for engendering collective support, idea generation, and \r\ninformation dissemination. Members attendance is taken during a center \r\nmeeting as this is likewise a consideration in assessing the members \r\nnext loan application. For centers with a trained health worker (called \r\nHealth Cadet), the members may have their vital signs taken. They \r\nlikewise discuss topics they deem important to their centers as well as \r\nindividual members further development and well-being (such as health \r\nconcerns or business status) or engage in demonstration sessions on \r\nmaking processed foods or other business skills. In case a member brings\r\n up a personal or family problem, other members pursue a discussion that\r\n will lay down various solutions to the problem, including their \r\nassistance, if needed. It is also during these center meetings that \r\nKasagana-Ka relays information about its programs, products, and \r\nservices, or about new developments that may impact on the members \r\nbusinesses and community.</p>\r\n<p>Kasagana-Ka is launching Window 2 of its capital build up and savings\r\n program. This will involve long-term or time deposits with interest \r\nrates approximating the rates charged by its external funders. In \r\noffering this window, Kasagana-Ka will bring to focus the capability of \r\nits client-beneficiaries to give attention to their needs for readily \r\navailable cash, particularly for further asset building. More important,\r\n it will provide not only an investment alternative to \r\nclient-beneficiaries but will offer them an opportunity to become \r\n\\\"investors\\\" in the further expansion of Kasagana-Kas operations.</p>','passbook001png.png',NULL,'0'),(4,'K-KALUSUGAN','At the core of Kasagana-Kas health program is the importance of \r\nattending to the physical well-being as well as related health needs of \r\nits centers members, the majority of whom are mothers. In center \r\nmeetings and other Kasagana-Ka group gatherings, client-beneficiaries \r\nare always enjoined to take care of themselves first so that they can, \r\nin turn, effectively fulfill their goals of looking after the welfare of\r\n their families. They are likewise often reminded that good health \r\ncontributes to productivity and ensures that incomes from their \r\nK-Negosyo will go to other basic necessities and asset-building \r\nendeavors.  \r\nIn 2010, Kasagana-Ka began to develop a data base on the health \r\nconditions of its client-beneficiaries. In partnership with the Health \r\nAlternatives for Total Human Development Institute (Healthdev \r\nInstitute), Healthdev Integrative Clinics, and K-MBA, Kasagana-Ka made \r\navailable laboratory and physical examinations to 1,300 \r\nclient-beneficiaries. The data were subsequently used for designing a \r\ncomprehensive health program, which was launched in 2011.\r\nTwo windows are offered under Kasagana-Kas health program. The first \r\nprovides loans for physical examinations and laboratory tests at \r\nHealthdev Clinics, which charge fees that are significantly lower than \r\nregular hospital rates. The health loan, with a PHP4,000 maximum amount,\r\n has a 2.5 percent interest per month and does not include a processing \r\nfee and loan redemption fund contribution. The second window makes \r\navailable loans to a maximum of PHP15,000, which can be used by \r\nclient-beneficiaries in need of denture, prescription eye-glasses, or \r\nmedical-surgical procedure. The loan likewise carries a 2.5 percent \r\ninterest per month and does not include a processing fee and loan \r\nredemption fund contribution. \r\nThe second health program window is linked to KMPI (Kapisanan ng \r\nManggagawang Pilipino, Inc.), an NGO implementing a botica ng barangay \r\n(village pharmacy) program. Through this partnership, center members are\r\n given access to a source of cheap quality medicines while, at the same \r\ntime, some members who operate sari-sari (small variety) stores are able\r\n to secure additional inventory. \r\nClient-beneficiaries who have gone through physical and laboratory \r\nexaminations at Healthdev Clinics are provided health booklets. While \r\ndirectly used in monitoring preventive and curative service needs of the\r\n client-beneficiaries, the booklets also serve as a constant reminder \r\nfor the center members to be attentive of their own health. Moreover, \r\nthose who have complete health records become eligible to be trained as \r\nhealth cadets (community health workers), who can serve their own \r\ncenters as well as their neighborhoods.  \r\nIn May 2011, Kasagana-Ka and Healthdev Institute completed the training \r\nof the first group of health cadets, who were also provided a health kit\r\n each, composed of weighing scale, thermometer, stethoscope, and \r\nsphygmomanometer. During center meetings, these cadets take members \r\nvital signs and are likewise on call to attend to members health \r\nemergency or first aid needs. ','K-KALUSUGAN.jpg',NULL,'0'),(5,'K-BAHAY','Kasagana-Ka firmly supports its client-beneficiaries dream of and basic \r\nrights to a secure and adequate shelter. It is not uncommon to hear many\r\n of its centers women-members expressing, time and again, their desire \r\nto either have their own home or improve their present dwelling unit. \r\nAnd they are hopeful that their small businesses supported by \r\nKasagana-Ka K-Negosyo loans as well as their K-Impok funds can \r\neventually provide them some of the resources for achieving their dream.\r\n	Begun in 2010 using internal resources, the Kasagana-Ka shelter program\r\n is also being designed to address the land tenure security and housing \r\nneeds of client-beneficiaries. Negotiations for partnerships with the \r\nNational Housing Authority (NHA), Pag-IBIG (Home Development Mutual \r\nFund), and socialized housing developers are currently being carried out\r\n so that the program can expand its financial coverage and client reach.\r\nKasagana-Ka offers shelter assistance to its existing \r\nclient-beneficiaries through three windows. While it directly confronts \r\nshelter needs, the program also has three embedded components. One is \r\nhelping client-beneficiaries mitigate personal and property risks from \r\nnatural disasters; the other is providing yet another asset for the \r\nclient-beneficiaries families to gain further financial stability, and \r\ntherefore contribute as well to housing production. Hence in orientation\r\n sessions concerning the shelter program, potential borrowers receive \r\ninputs on constructing natural-disaster-resilient homes as well as on \r\nthe possibility of building homes with rooms or annexes that can be \r\nrented out.\r\nThe first window available to existing client-beneficiaries that is, \r\ncenter members in good standing provides loans that can fund incremental\r\n house construction or improvement. With a maximum of PHP 50,000, the \r\nloan has a 2.5 percent interest rate per month, similar to K-Negosyo \r\nloans, but requires no processing fee for those with an existing loan. A\r\n contribution to the loan redemption fund is required. Member-borrowers \r\nwho have paid off their loans receive a 20 percent rebate on the \r\ninterest.\r\nThe second and third windows will be for lot acquisition and building a \r\nnew home, respectively. These will involve institutional partners and \r\ncover Pag-IBIG members among client-beneficiaries or their family \r\nmembers.','K-BAHAY.jpg',NULL,'0');

/*Table structure for table `tblqlinks` */

DROP TABLE IF EXISTS `tblqlinks`;

CREATE TABLE `tblqlinks` (
  `qlinkId` bigint(20) NOT NULL auto_increment,
  `qlink_desc` varchar(255) default NULL,
  `qlink_url` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`qlinkId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblqlinks` */

insert  into `tblqlinks`(`qlinkId`,`qlink_desc`,`qlink_url`,`status`) values (1,'K-MBA','#','0'),(2,'MIX UPDATE','http://www.mixmarket.org/','0'),(3,'JOB OPENING','career.php','0'),(4,'REFLECTION','reflection.php','0');

/*Table structure for table `tblsocial` */

DROP TABLE IF EXISTS `tblsocial`;

CREATE TABLE `tblsocial` (
  `socialId` bigint(20) NOT NULL auto_increment,
  `social_desk` varchar(255) default NULL,
  `social_url` varchar(255) default NULL,
  `social_pics` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`socialId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblsocial` */

insert  into `tblsocial`(`socialId`,`social_desk`,`social_url`,`social_pics`,`status`) values (1,'facebook','#','facebook.png','0'),(2,'Twitter','#','twitter.png','0'),(3,'Blog','#','blog.png','0'),(4,'Youtube','#','youtube.png','0');

/*Table structure for table `tblsteeringcom` */

DROP TABLE IF EXISTS `tblsteeringcom`;

CREATE TABLE `tblsteeringcom` (
  `SteerCom` bigint(20) NOT NULL auto_increment,
  `img` varchar(255) default NULL,
  `steerName` varchar(255) default NULL,
  `steerPosition` varchar(255) default NULL,
  PRIMARY KEY  (`SteerCom`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tblsteeringcom` */

insert  into `tblsteeringcom`(`SteerCom`,`img`,`steerName`,`steerPosition`) values (1,'images.jpg','Ms. Maria Anna de Rosas-Ignacio','Chief Executive Officer'),(2,NULL,'Ms. Judylyn Joven','Chief Operating Officer'),(3,NULL,'Mr. Dexter Flores','Senior Area Manager'),(4,NULL,'Mr. Generoso Quinto','Junior Area Manager'),(5,NULL,'Ms. Catherine Sabballegue','Chief Finance Officer'),(6,NULL,'Ms. Maria Marcela Dacallos','Senior Finance Officer'),(7,NULL,'Mr. Norman Los Anes','Human Resource Manager'),(8,NULL,'Mr. Ronnie Latinazo','MIS Manager'),(9,NULL,'Ms. Hazel Pamela Del Bando-Bonifacio','Internal Audit Manager'),(10,NULL,'Ms. Silvida Antiquera','General Manager-KMBA');

/*Table structure for table `tblstorydesc` */

DROP TABLE IF EXISTS `tblstorydesc`;

CREATE TABLE `tblstorydesc` (
  `storyId` bigint(20) NOT NULL auto_increment,
  `categ` varchar(50) default NULL,
  `storyTitle` varchar(100) default NULL,
  `storyTeller` varchar(100) default NULL,
  `storyDesc` text,
  `storyPics` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`storyId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tblstorydesc` */

insert  into `tblstorydesc`(`storyId`,`categ`,`storyTitle`,`storyTeller`,`storyDesc`,`storyPics`,`status`) values (1,'Member','Lakas Ng Loob','Fe Makilang','<p>Likas sa mga taong magsisimula pa lang sa negosyo ang\r\nmangamba sa kung ano ang posibleng kahihinatnan\r\nng kanilang negosyo. Pero mayroong mga tao na\r\nhandang harapin ang mga hamong ito, makamit lamang\r\nang tagumpay. Narito ang kwento ni <b>Fe Makilang</b> at kung\r\npaano naging matagumpay ang dati\\y takot sa pagnenegosyo.</p>\r\n<p><b>Ang Paglago ng Negosyo</b></p>\r\n<p>Glass and Aluminum Supply ang unang naging negosyo ni\r\nFe. Sa tulong rin ng kanyang asawa na mayroon nang alam\r\nsa ganitong klase ng negosyo at ng kaniyang anak, nagawa\r\nnilang simulan ang negosyo sa kanilang sariling tahanan.\r\nHumiram siya ng halagang P4,000 sa Kasagana-Ka ngunit\r\nhindi niya ito agad nagamit sa pagne-negosyo sa takot na\r\nbaka walang patunguhan ang negosyo. Ngunit noong 2005,\r\nnagkaroon ng lakas ng loob si Fe. Humiram siyang muli\r\nng puhunan sa Kasagana-Ka at bumili ng isang welding\r\nmachine at grinder.</p>\r\n<p>Pinag-aralan niya nang mabuti ang pamamahala ng\r\nkanilang sariling negosyo – simula sa pagku-kwenta\r\nhanggang sa tamang pagpili ng mga materyales para\r\nsa kanilang mga produkto. Hindi nagtagal, lumaki ang\r\nkanilang negosyo at nakapag-renta sila ng isang espasyo sa\r\nSan Jose del Monte, Bulacan</p>\r\n<p>sinimulan naman ni Fe ang rag-making noong 2009. Noong\r\nuna ay mga kapitbahay lang rin niya ang tumatangkilik sa\r\nkaniyang mga basahan. Pero kinalaunan, mas dumami ang\r\nkaniyang mga customer. Ang kaniyang rag-making business\r\nay kumikita ng P1,000 araw-araw.\r\nNagawa ring ibahagi ni Fe sa komunidad ang tagumpay na\r\nkanyang tinatamasa. Nakakapagbigay si Fe ng trabaho sa\r\nlabindalawang (12) lalaki at limang (5) babaeng kapitbahay\r\nna tumutulong sa kaniyang mga negosyo.</p>\r\n<p><b>Sikreto ng Tagumpay</b></p>\r\n<p>pera. Halimbawa sa shop, kung gusto kong bumili ng\r\npanibagong kagamitan, doon ko kinukuha sa loan ko sa\r\nKasagana-Ka,” ayon kay Fe.Sa ngayon, mayroon na siyang\r\nanim na welding machine at tatlong high-speed na makina.\r\nPero hindi lang sa pagbibigay ng puhunan nakakatulong\r\nang Kasagana-Ka. Ipinapadala rin siya sa mga\r\ntrainings at seminars tulad ng Foundation\r\nfor Enterpreneurial Management Inc.\r\n(FEMI) seminars, Pinoy Me Convention\r\nat Citi-Bayan Entrep-Eskwela Program.\r\n“Marami rin akong natutunan na\r\nnagamit ko naman sa negosyo.\r\nGinagawa ko talaga sa negosyo ‘yung\r\ntinuturo nila,” saad ni Fe.</p>\r\n<p>Dagdag pa rito, ang pagkakaroon ng lakas ng loob at\r\ntamang pangangalaga sa mga empleyado ang naging\r\nmalaking susi sa kaniyang tagumpay. “Mabait ako sa\r\nmga tao ko. Itinuturing ko silang kapamilya. Kaya nga\r\nmula noong magbukas ang shop ko at magpa-hanggang\r\nngayon, kami-kami pa rin ang magkakasama,” kwento ni\r\nFe. Wala rin siyang alam sa pagne-negosyo noong una pero\r\nnagsikap siyang pag-aralan ang lahat ng tungkol sa negosyo\r\nat nagawa niyang magkaroon ng lakas ng loob upang\r\npasukin at magpatuloy sa mundo ng pagne-negosyo. Kaya\r\nnaman panatag ang loob ni Fe na mas mapapalago pa ang\r\nparehong negosyo sa hinaharap dahil sa mga karanasang\r\nnagturo sa kaniya ng tamang pagne-negosyo. Sa ngayon,\r\npinaplano niyang bumili ng mas maraming makina,\r\nmagdagdag ng mga manggagawa ng basahan at magrenta\r\nng mas malaking espasyo para sa kaniyang mga tindahan.\r\nPara kay Fe, ang pagkakaroon ng lakas ng loob ay unang\r\nhakbang lamang. Mahalagang sundan ito ng sipag, tiyaga\r\nat determinasyon upang magpatuloy ang bawat hakbang\r\ntungo sa tagumpay.</p>','te_fe.jpg','0'),(2,' Field Manager ng San Mateo Branch','SINAING ','Kanneth Morota','<p>Bago pa lang ako noon sa Kasagana-Ka. Noon, maraming hindi nakakapag-bayad sa San Mateo. Ang mga Socio- Economic Officer (SO) naman, ginagawa ang lahat para lang makasingil. </p>\r\n<p>Kanneth: Tao po! </p>\r\n<p>Bata: Wala po si nanay eh. </p>\r\n<p>Kanneth: (pabulong) Nasaan ang mama mo? </p>\r\n<p>Bata: (pabulong din) Wala, wala po (sabay lingon sa loob ng bahay) </p>\r\n<p>Kanneth: (napatingin din sa loob ng bahay, nakita na may sinaing at napaisip) May sinaing pero wala naman ‘yung mama niya? </p>\r\n<p>Kanneth: (bumalik ang tingin ko sa bata at napaisip) Hindi pa naman ito makakapag-saing a, maliit pa ito. </p>\r\n<p>Levi: Titingnan ko po sa likod ng bahay. </p>\r\n<p>Kanneth: (pasigaw) Ate, sunog na po ang sinaing niyo! </p>\r\n<p>Biglang lumabas ang nanay. Wala siyang ibang nagawa kung hindi harapin kami! </p>\r\n','te_fe.jpg','0'),(3,' Cluster Manager ng Quezon City','KUTSARA O TINIDOR ','Ma. Angeline Bataller','<p>Papunta kami noon sa Tagaytay para sa isang retreat. Huminto ang sasakyan namin sa ATM ng BPI para mag-withdraw. Sinubukan na namin ‘yung ibang ATM pero out-of-order ito. Habang nagwi-withdraw sina Ate Judy, Cathy, at Hazel, nagulat na lang kami kasi inaatake na pala ng epilepsy ‘yung driver namin. Nataranta kaming lahat kaya bumaba kami ng sasakyan. Si Kuya Norman ang katabi ng driver kaya siya ‘yung tarantang-taranta. </p>\r\n<p>Kuya Norman: Wala na ‘to, patay na ‘to! </p>\r\n<p>May sumigaw: lagyan ninyo ng kutsara o tinidor ang bibig ng driver! </p>\r\n<p>Tumawag din kami ng MMDA para humingi ng tulong. Nang nahimasmasan na ‘yung driver, parang wala na tuloy gusto pang sumakay kahit okay na siya. Hanggang sa lahat kami ay tawa na lang ng tawa. Imbes na kabahan kami kasi lahat kami na nakasakay doon ay mga signatory, siyempre wala ng pipirma sa tseke. </p>\r\n<p>Sabi pa ni Ate Me-An nang ikwento namin sa kaniya ang pangyayari… </p>\r\n<p>Ate Me-An: Ang maganda sa karanasang iyon ay blessed pa din kayo. Isipin ninyo, madami na kayong napuntahan na ATM pero out-of-order lahat. Tapos nagkataon na kung kailan nakahinto ‘yung sasakyan, doon inatake ‘yung driver. Kung inatake siya habang nasa biyahe kayo, sigurong may nangyari na sa inyong lahat. </p>\r\n<p>Tunay ngang mahal ng Panginoon ang Kasagana-Ka. </p>\r\n','te_fe.jpg','0'),(4,' Senior Area Manager, South Team','PISO ','Dexter Flores','<p>May pinuntahan akong nanay noon sa bahay para alamin kung bakit hindi siya nakakapag-hulog. Pagdating doon... </p>\r\n<p>Dexter: Bata, nasaan ang nanay mo? </p>\r\n<p>Bata: Wala po siya dito </p>\r\n<p>Dexter: (hindi agad naniwala kaya binilang kung ilan ang anak ni nanay, tapos binilang ang tsinelas na nasa labas ng pintuan) Anim lang lahat ng anak na nasa loob ng bahay, pero pito ‘yung mga tsinelas na nasa labas? </p>\r\n<p>Dexter: (binigyan ng piso ang bata sabay sabi ng pabulong) Sa’yo na ito, sabihin mo lang kung nasaan ang nanay mo. </p>\r\n<p>Bata: (natuwa sa piso, sabay tawag sa nanay niya) ‘Nay! May naghahanap po sa inyo! </p>\r\n<p>Lumabas ang nanay sabay palo sa anak sa puwet </p>\r\n<p>Nanay: Diba sinabi ko na sa iyo na sabihin mong wala ako! </p>\r\n','te_fe.jpg','0'),(5,'Member','sample','sample','sdsdsadasd\r\n\r\n','te_fe.jpg','1'),(6,NULL,NULL,NULL,NULL,NULL,'0');

/*Table structure for table `tblsubmenu` */

DROP TABLE IF EXISTS `tblsubmenu`;

CREATE TABLE `tblsubmenu` (
  `sub_id` bigint(11) NOT NULL auto_increment,
  `id_menu` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY  (`sub_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tblsubmenu` */

/*Table structure for table `tblsupport` */

DROP TABLE IF EXISTS `tblsupport`;

CREATE TABLE `tblsupport` (
  `supportid` bigint(20) NOT NULL auto_increment,
  `logo` varchar(255) NOT NULL,
  `footer` varchar(2) NOT NULL default '0',
  PRIMARY KEY  (`supportid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tblsupport` */

insert  into `tblsupport`(`supportid`,`logo`,`footer`) values (1,'ax.jpg','0');

/*Table structure for table `tbluser` */

DROP TABLE IF EXISTS `tbluser`;

CREATE TABLE `tbluser` (
  `userId` bigint(20) NOT NULL auto_increment,
  `empId` bigint(20) default NULL,
  `uname` varchar(255) default NULL,
  `pw` varchar(255) default NULL,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbluser` */

insert  into `tbluser`(`userId`,`empId`,`uname`,`pw`,`status`) values (1,1,'jef','drilon','0'),(2,2,'dsadadsa','dsasa','0');

/*Table structure for table `tblvmc` */

DROP TABLE IF EXISTS `tblvmc`;

CREATE TABLE `tblvmc` (
  `vmcId` bigint(20) NOT NULL auto_increment,
  `category` varchar(255) default NULL,
  `vmcEng` text,
  `vmcTag` text,
  `status` varchar(2) default '0',
  PRIMARY KEY  (`vmcId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblvmc` */

insert  into `tblvmc`(`vmcId`,`category`,`vmcEng`,`vmcTag`,`status`) values (1,'Vision','We envision creating empowered Filipino communities where its members\r\nhave a decent and stable livelihood, and development opportunities where\r\nthey support one another. These can be seen in vibrant social and \r\neconomic networks in the communities.\r\n','Mga pamayanang Pilipino na may pagpapahalaga sa karapatang pantao, \r\nmay marangal at matatag na pamumuhay, at nagtutulungan tungo sa\r\nganap na kasarinlan. Nakikita ito sa mga buhay na buhay na ugnayang \r\npanlipunan at pangkabuhayan.\r\n\r\n','0'),(2,'Mission','A social development organization whose core business is service. It gives \r\nhope, guidance, and opportunities to improve the economic conditions \r\nand develop the total well-being of urban poor women, their families and \r\ntheir communities.\r\n','Isang tulong-institusyon na nagbibigay ng pag-asa, gabay at pagkakataon\r\nupang maiangat ang antas ng pamumuhay at malinang ang pagkatao ng\r\nmaralitang pamayanang Pilipino. Our mission is service.','0'),(3,'Strategy','Main vehicle is microfinance and related services for its niche market (urban\r\npoor women), membership outreach, bundling of services; consortium-\r\nbuilding and networking with other stakeholders.','Ang pangunahing pamamaraan ay microfinance o pagpapautang at mga\r\nkaugnay na serbisyo para sa mga kababaihang maralitang taga-lungsod.\r\nKasama na rito ang pag papalawak, pag bubugkos ng mga serbisyo at \r\npakikipag-ugnayan sa ibat?t ibang samahan at institution','0'),(4,'Pangako sa Pagtataya','<p>I commit myself to you, my peer and colleagues, </p>\r\n<p>and in the name of my family,</p>\r\n<p>That I will do my utmost best to be a model member; </p>\r\n<p>To be industrious in all my work;</p>\r\n<p>To be striving in our vision and mission; </p>\r\n<p>To be prudent with our resources; </p>\r\n<p>To be understanding to those who need it; </p>\r\n<p>To be helpful always; </p>\r\n<p>And most of all, to be authentic to myself, my family </p>\r\n<p>and my colleagues.</p>\r\n<p>May the Lord Almighty bless me. </p>\r\n\r\n','<p>Akoy nangangako sa harap ng aking mga kasama,</p>\r\n<p>Sa ngalan ng aking pamilya,</p>\r\n<p>na gagawin ko ang lahat upang maging</p>\r\n<p>isang ulirang kasapi.</p>\r\n<p>Maging masipag sa lahat ng gawain;</p>\r\n<p>Maging masikap sa adhikain;</p>\r\n<p>Maging masinop sa tanging yaman;</p>\r\n<p>Maging maunawain sa nangangailangan;</p>\r\n<p>Maging matulungin sa lahat ng oras;</p>\r\n<p>At higit sa lahat, maging matapat sa aking sarili, </p>\r\n<p>sa aking pamilya at sa aking mga kasama.</p>\r\n<p>Pagpalain nawa ako ng Poong Maykapal.</p>','0');

/*Table structure for table `tblwelcome` */

DROP TABLE IF EXISTS `tblwelcome`;

CREATE TABLE `tblwelcome` (
  `lookup_id` bigint(20) NOT NULL auto_increment,
  `desc_d` text NOT NULL,
  `by` varchar(255) default '`',
  `wposition` varchar(255) default '`',
  `wPics` varchar(255) default '`',
  `titlew` varchar(255) default '`',
  `status` varchar(2) default '0',
  PRIMARY KEY  (`lookup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tblwelcome` */

insert  into `tblwelcome`(`lookup_id`,`desc_d`,`by`,`wposition`,`wPics`,`titlew`,`status`) values (1,'<p>kasagana-Ka is a developmental organization for the urban poor communities. It offers a holistic range of products and services to meet the needs and bring positive change to the lives of the urban poor and their communities. Along with credit for livelihood activities and micro entrepreneurship, Kasagana-Ka also provides our members with support in the field of housing, health, education and microinsurance. Every product is delivered with utmost dedication and respect in the capacity of the urban poor to realize their full potentials towards attainment of sufficiency and responsibility. </p>\r\n<p>At the board, we recognize strong leadership as key to what Kasagana-Ka has accomplished in a decade on which we aspire for continuing growth and service. We take pride, for instance, that the board consists of both the nanays or the member representatives and professionals. We have two client - beneficiary representatives, Weni and Letty, who bring important perspectives of the urban poor community to relevant issues; the professionals bring their experience in business and technical know-how on the economy, and other relevant fields. This variety in backgrounds brings balance to policy-making for more grounded decision-making in the organization. </p>\r\n<p>The management team, headed by Me-An show their commitment to the mission by professionally running the organization. Systems have been installed to ensure efficiency in service-delivery. Strategic partnerships have been forged to increase our effectiveness in providing a broader range of products and services for the urban poor. </p>\r\n\r\n<p>Our committed staff, supported by the center leaders, demonstrate good management of their respective client centers through the smooth flow of transactions and good cooperation between staff and client - beneficiaries. For their commitment and hard work, Kasagana-Ka takes good care of the staff. We pay them well and we provide them appropriate training to build capacity and open up opportunities to grow in the organization. </p>\r\n<p>Over the years, we exercised prudence with the resources entrusted to us. We focused our efforts at building institutional capacity and explored and piloted models and approaches to come up with a compelling mix of products and services tailor-fitted to the needs and aspirations of the urban poor. I am confident that all the work, sacrifices and creativity employed in the first decade of operations of Kasagana-Ka will do well to usher us to the next decade of greater service. There are many more urban poor communities beyond Metro Manila and we foresee a future that entails expansion of our services in other urban poor communities as well.</p>\r\n','Fernando Aldaba','Chairman of the Board','sample.jpg','Lifelong Commitment to Holistic Service for Urban Poor','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
