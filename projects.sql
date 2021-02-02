DROP TABLE IF EXISTS `project_course_choices`;

CREATE TABLE `project_course_choices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `text` text,
  `jumpto` bigint NOT NULL DEFAULT '-1',
  `grade` smallint NOT NULL DEFAULT '0',
  `score` bigint NOT NULL DEFAULT '0',
  `response` longtext,
  `responseformat` tinyint NOT NULL DEFAULT '1',
  `moodle_id` bigint DEFAULT NULL,
  `is_updated` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_course_question`;

CREATE TABLE `project_course_question` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `type` tinyint DEFAULT NULL,
  `qoption` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_course_question_to_page`;

CREATE TABLE `project_course_question_to_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `page_id` int NOT NULL,
  `sort_id` int NOT NULL,
  `moodle_id` bigint DEFAULT NULL,
  `is_updated` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_data`;

CREATE TABLE `project_data` (
  `project_data_id` int NOT NULL AUTO_INCREMENT,
  `project_data_date_entry` date DEFAULT NULL,
  `project_data_employee_id` int DEFAULT NULL,
  `project_data_project_id` int DEFAULT NULL,
  `project_data_relation_id` int DEFAULT NULL,
  `project_data_document_id` int DEFAULT NULL,
  PRIMARY KEY (`project_data_id`),
  KEY `project_data_project_id` (`project_data_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `project_data_items`;

CREATE TABLE `project_data_items` (
  `project_data_item_id` int NOT NULL AUTO_INCREMENT,
  `project_data_id` int DEFAULT NULL,
  `project_data_label_id` int DEFAULT NULL,
  `project_data_label_data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`project_data_item_id`),
  KEY `project_data_label_id SI` (`project_data_label_id`),
  KEY `project_data_id` (`project_data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `project_map_privileges`;
CREATE TABLE `project_map_privileges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `map_access` tinyint DEFAULT NULL,
  `doc_access` tinyint DEFAULT NULL,
  `file_access` tinyint DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_map_project_employee_index` (`project_id`,`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `project_map_privileges` VALUES ('1', '1', '15683', '1', null, null, null);

DROP TABLE IF EXISTS `project_privileges`;
CREATE TABLE `project_privileges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `contact_id` int DEFAULT NULL,
  `privileges` smallint DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `default_privilege` varchar(100) DEFAULT '0',
  `E` smallint DEFAULT '0',
  `S` smallint DEFAULT '0',
  `A` smallint DEFAULT '0',
  `is_dir` smallint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `project_properties`;

CREATE TABLE `project_properties` (
  `label_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `document_id` int DEFAULT NULL,
  `label_name` varchar(30) DEFAULT NULL,
  `variable_name` varchar(30) DEFAULT NULL,
  `sort_id` int DEFAULT NULL,
  `information` mediumtext,
  PRIMARY KEY (`label_id`),
  KEY `Project ID SI` (`project_id`),
  KEY `Document ID SI` (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `project_specification`;

CREATE TABLE `project_specification` (
  `project_spec_id` int DEFAULT NULL,
  `project_tpl_id` int DEFAULT NULL,
  `project_value` varchar(255) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_to_branch`;

CREATE TABLE `project_to_branch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `branch_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_to_branch` (`project_id`,`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_to_relation`;

CREATE TABLE `project_to_relation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `relation_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_to_spreadsheet`;

CREATE TABLE `project_to_spreadsheet` (
  `project_id` int NOT NULL,
  `sheet_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`project_id`,`sheet_id`),
  UNIQUE KEY `project_sheet` (`project_id`,`sheet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `project_to_user`;

CREATE TABLE `project_to_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `user_id` int NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `level_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `project_type`;

CREATE TABLE `project_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `type_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_type_index` (`project_id`,`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `project_type` VALUES ('1', '1', '3');

DROP TABLE IF EXISTS `project_user_privileges`;

CREATE TABLE `project_user_privileges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `read_privilege` tinyint DEFAULT NULL,
  `write_privilege` tinyint DEFAULT NULL,
  `create_privilege` tinyint DEFAULT NULL,
  `delete_privilege` tinyint DEFAULT NULL,
  `change_template` tinyint DEFAULT NULL,
  `create_maps` tinyint DEFAULT NULL,
  `rename_maps` tinyint DEFAULT NULL,
  `delete_maps` tinyint DEFAULT NULL,
  `default_new_read` tinyint DEFAULT NULL,
  `default_new_write` tinyint DEFAULT NULL,
  `default_new_create` tinyint DEFAULT NULL,
  `default_new_delete` tinyint DEFAULT NULL,
  `default_new_change_template` tinyint DEFAULT NULL,
  `default_self_read` tinyint DEFAULT NULL,
  `default_self_write` tinyint DEFAULT NULL,
  `default_self_create` tinyint DEFAULT NULL,
  `default_self_delete` tinyint DEFAULT NULL,
  `default_self_change_template` tinyint DEFAULT NULL,
  `master_rights` tinyint DEFAULT NULL,
  `new_location` tinyint DEFAULT NULL,
  `new_own_location` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_program_item` (`user_id`,`item_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `projects_dir`;

CREATE TABLE `projects_dir` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `project_name` varchar(200) DEFAULT NULL,
  `sort_id` int DEFAULT NULL,
  `spec_tpl_cat` int DEFAULT NULL,
  `proj_uID` varchar(200) DEFAULT NULL,
  `archive` tinyint NOT NULL DEFAULT '0',
  `has_training` tinyint DEFAULT NULL,
  `description` text,
  `comments` mediumtext,
  `duration` int DEFAULT NULL,
  `has_moodle` tinyint DEFAULT '0',
  `has_project` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `projects_dir` VALUES (1,0,'Test',1,NULL,'15683,131,9392',0,NULL,NULL,NULL,NULL,0,0);

DROP TABLE IF EXISTS `projects_dir_translation`;

CREATE TABLE `projects_dir_translation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `language_id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_dir_trans_ind` (`project_id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `projects_object_translation`;

CREATE TABLE `projects_object_translation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `object_description` longtext,
  `language_id` smallint DEFAULT NULL,
  `object_name` varchar(40) DEFAULT NULL,
  `tree_id` int DEFAULT NULL,
  `object_title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `projects_objects`;

CREATE TABLE `projects_objects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `o_name` varchar(20) DEFAULT NULL,
  `o_table_field` varchar(100) DEFAULT NULL,
  `o_type` varchar(20) DEFAULT NULL,
  `o_values` varchar(100) DEFAULT NULL,
  `o_description` tinytext,
  `o_requirements` mediumtext,
  `o_status` smallint DEFAULT NULL,
  `o_parent` int DEFAULT NULL,
  `o_sorting` smallint DEFAULT NULL,
  `o_tree_id` smallint DEFAULT NULL,
  `o_help_info` mediumtext,
  `o_shortcut` tinytext,
  `xpos` decimal(10,2) DEFAULT NULL,
  `ypos` decimal(10,2) DEFAULT NULL,
  `o_width` decimal(10,2) DEFAULT NULL,
  `o_usage` mediumtext,
  `o_results` mediumtext,
  `o_data_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `projects_planning`;

CREATE TABLE `projects_planning` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent` int DEFAULT NULL,
  `event_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `projects_to_documents`;

CREATE TABLE `projects_to_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `report_id` int DEFAULT NULL,
  `default_report` tinyint DEFAULT '0',
  `is_active` tinyint DEFAULT '1',
  `is_deleted` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_document` (`project_id`,`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `projects_to_procedures`;

CREATE TABLE `projects_to_procedures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `doc_id` int NOT NULL,
  `project_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_doc` (`doc_id`,`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `projects_uploads`;

CREATE TABLE `projects_uploads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_name` text,
  `file_type` varchar(100) DEFAULT NULL,
  `file_parent` int DEFAULT NULL,
  `designer_code` varchar(30) DEFAULT NULL,
  `visible` smallint DEFAULT '1',
  `file_upload_date` datetime DEFAULT NULL,
  `file_size` mediumint DEFAULT NULL,
  `file_uploader` int DEFAULT NULL,
  `file_description` varchar(255) DEFAULT NULL,
  `language_id` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_lang_index` (`id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `projects_uploads_to_branch`;

CREATE TABLE `projects_uploads_to_branch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_id` int NOT NULL,
  `branch_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file_branch_ind` (`file_id`,`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `relation`;

CREATE TABLE `relation` (
  `relation_id` int NOT NULL DEFAULT '0',
  `search_code` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `relation_company` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `COC` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `VAT_ID` int DEFAULT NULL,
  `Language_ID` int DEFAULT NULL,
  `Cred_BankID` int DEFAULT NULL,
  `BankID` int DEFAULT NULL,
  `CustomerID` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Relation_Info` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `Relation_Notes` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `StatusID` int DEFAULT NULL,
  `URL` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Cred_URL` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Cred_Login` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Cred_Password` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Telephone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Main_Address` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `Post_Address` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `Address_ID` int DEFAULT NULL,
  `Post_Address_ID` int DEFAULT NULL,
  `Contact_ID` int NOT NULL DEFAULT '0',
  `RelCountryId` int NOT NULL DEFAULT '150',
  `RelDate` date DEFAULT NULL,
  `RelCurrency` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
  `last_eid` int DEFAULT NULL,
  `relation_tag` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `relation_pcs` int DEFAULT '7610',
  `relation_employees` int DEFAULT '7610',
  `website` varchar(200) DEFAULT NULL,
  `relation_students` int DEFAULT NULL,
  `wants_invoice_post` smallint DEFAULT NULL,
  PRIMARY KEY (`relation_id`),
  KEY `RelCountryId` (`RelCountryId`),
  KEY `lastdate` (`last_date`),
  KEY `mID` (`relation_id`,`relation_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `relation_address`;

CREATE TABLE `relation_address` (
  `Relation_ID` int NOT NULL DEFAULT '0',
  `Relation_Address_ID` int NOT NULL DEFAULT '0',
  `Relation_Address_PDA` char(2) DEFAULT '11',
  `Relation_Address_Company` varchar(40) DEFAULT NULL,
  `Relation_Address_Attendant` varchar(40) DEFAULT NULL,
  `Relation_Address_Row1` varchar(40) DEFAULT NULL,
  `Relation_Address_Row2` varchar(40) DEFAULT NULL,
  `Relation_Address_Row3` varchar(40) DEFAULT NULL,
  `Relation_Address_Zipcode` varchar(10) DEFAULT NULL,
  `Relation_Address_City` varchar(40) DEFAULT NULL,
  `Relation_Address_Country` int DEFAULT NULL,
  `Relation_Address_Date_In` date DEFAULT NULL,
  `Relation_Address_Date_Out` date DEFAULT NULL,
  `Address_Status_ID` smallint DEFAULT NULL,
  `VATNumber` varchar(20) DEFAULT NULL,
  `contact_id` int DEFAULT NULL,
  `PAf` smallint DEFAULT NULL,
  `DAf` smallint DEFAULT NULL,
  `Longitude` decimal(11,5) DEFAULT '0.00000',
  `Latitude` decimal(11,5) DEFAULT '0.00000',
  PRIMARY KEY (`Relation_ID`,`Relation_Address_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `relation_contact`;

CREATE TABLE `relation_contact` (
  `contact_sort_id` int DEFAULT NULL,
  `relation_id` int NOT NULL DEFAULT '0',
  `contact_id` int NOT NULL DEFAULT '0',
  `contact_user_id` int DEFAULT NULL,
  `contact_firstname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `contact_secondname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `contact_lastname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `contact_initials` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `contact_gender` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'm',
  `contact_status_id` int NOT NULL DEFAULT '0',
  `contact_language_id` int NOT NULL DEFAULT '0',
  `contact_attendent` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_birthday` date DEFAULT NULL,
  `contact_function` varchar(40) NOT NULL DEFAULT '9001',
  `contact_nts_eid_1` int NOT NULL DEFAULT '0',
  `contact_nts_eid_2` int NOT NULL DEFAULT '0',
  `contact_hobbies` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_info` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_date_in` datetime DEFAULT NULL,
  `contact_date_out` datetime DEFAULT NULL,
  `def_postaddress_id` int DEFAULT '0',
  `def_deliveryaddress_id` int DEFAULT '0',
  `email` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email2` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_telephone` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_telephone2` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_fax` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_mobile` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_msn` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_yahoo` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_aol` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_skype` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_sip` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_teamviewer` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_permission` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `actkey` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pass` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rank` int DEFAULT NULL,
  `level` int DEFAULT NULL,
  `contact_subscription` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact_nomail` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `referer` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `category_list` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `brand_list` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `min_price_eur` int DEFAULT NULL,
  `min_tot_val` int DEFAULT NULL,
  `contact_communication` smallint DEFAULT '14014',
  `initiative_africa` int DEFAULT NULL,
  `contact_pin` varchar(50) DEFAULT NULL,
  `contact_branch_settings` varchar(255) DEFAULT NULL,
  `contact_program_settings` varchar(255) DEFAULT NULL,
  `contact_nts_eid_3` int DEFAULT NULL,
  `delivery_conditions` tinyint DEFAULT '0',
  `frequency` varchar(12) DEFAULT NULL,
  `whatsapp` varchar(500) DEFAULT NULL,
  `wants_invoice` smallint DEFAULT NULL,
  `contact_cisco` bigint DEFAULT NULL,
  `contact_anydesk` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`relation_id`,`contact_id`),
  UNIQUE KEY `ContactId_RelationID` (`relation_id`,`contact_id`),
  KEY `Contact_Function_1` (`contact_function`),
  KEY `Contact_ID` (`contact_id`),
  KEY `Relation_ID` (`relation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `relation_contact` VALUES (68,1,2,NULL,'Frank','','Kuipers','F.','m',11401,4,'Dhr. F. Kuipers','1983-09-11','9055',20196,0,'','',NULL,NULL,0,0,'frank@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3d2b35928434420c37c3ff24c18b724c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(58,1,8,NULL,'','','','','m',11401,1,'',NULL,'9010',131,0,'','','2018-12-17 11:35:33',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(94,1,54,NULL,'Margaret','Mali','Kyende','','s',11401,1,'Ms. M. Kyende','1993-05-08','9010',0,0,'','','2020-02-24 10:07:12',NULL,0,0,'margaret@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'764b1284a3e013e3a4d0d5c8a9ee8719',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(70,1,101,NULL,'','','','','m',11401,1,'',NULL,'9010',9392,0,'','','2019-02-26 13:48:33',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(57,1,131,NULL,'Kisuk','','Lodeweges','K.S.','m',11401,1,'Mr. K.S. Lodeweges','1972-01-30','9001',131,0,'','',NULL,NULL,0,0,'kisuk@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'d0b9afc6da47327e564ae95f0dbad42a',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(3,1,1946,NULL,'Erik','de','Jong','E.','m',11401,4,'Dhr. E. de Jong','1973-08-04','9083',0,0,'','','2009-03-08 00:00:00',NULL,0,0,'erik@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5f17f30041fac4afee27da4c01622f9b',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(4,1,1952,NULL,'Jaco','','Mol','J.','m',11401,4,'Dhr. J. Mol','1977-06-01','9022',0,0,'','','2009-03-10 00:00:00',NULL,0,0,'jaco@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'795b5a8f49ce2f76cfc4c9003900f4b0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(5,1,1953,NULL,'Dennis','','Bosch','D.','m',11401,4,'Dhr. D. Bosch','1970-06-25','9021',1954,0,'','Dennis Bosch\nAccount Manager\n\nemail: dennis@nts.nl\nskype:\nTel.','2009-03-10 00:00:00',NULL,0,0,'dbosch@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15a546e80a7185a1f00e8649ce64b650',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(6,1,1954,NULL,'Alex','','Kauffmann','A.','m',11401,1,'Mr. A. Kauffmann','1986-04-09','9021',1954,0,'','','2009-03-10 00:00:00',NULL,0,0,'alex@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9ddae68129077d099031e437069e929c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(7,1,1958,NULL,'Christoph','','Herrmann','C.','m',11401,4,'Dhr. C. Herrmann','1984-03-04','9081',0,0,'','','2009-03-11 00:00:00',NULL,0,0,'chris@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5b99d0a9f19045a9f0f6bd31fc1a4729',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(8,1,1959,NULL,'Christiaan','','Koning','C.','m',11401,4,'Dhr. C. Koning','1982-07-25','9055',20196,0,'','','2009-03-11 00:00:00',NULL,0,0,'christiaan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6b177b70fc851c70dfad196e860c5c84',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(2,1,1961,NULL,'Milene','','Rozenthal','M.','f',11401,4,'Mevr. Rozenthal','1991-07-31','9010',0,0,'','','2009-03-11 00:00:00',NULL,0,0,'milene@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'88d1ca1144254d726be88e8af14ddb8e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(1,1,2015,NULL,'Rene','v/d','Slik','R.','m',11401,4,'Dhr. R. Slik','1981-09-10','9055',20196,0,'','','2009-03-27 00:00:00',NULL,0,0,'Rene@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5b99d0a9f19045a9f0f6bd31fc1a4729',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(9,1,2467,NULL,'Annah','','Wanjiku','A.','f',11401,1,'Mrs. Wanjiku','1970-02-20','0',0,0,'','','2009-11-21 00:00:00',NULL,0,0,'annah@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'aeef4ee564760dd8e311a29d630508b5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(11,1,3446,NULL,'Jane','','Muthoni','','f',11401,1,'Mrs. Muthoni','1968-11-18','0',0,0,'','','2011-05-16 00:00:00',NULL,0,0,'jane@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'e3395c04bc7cc38b919a4b005cd231cd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(10,1,6780,NULL,'Shaillindra','','Ramautar','S.','m',11401,4,'Dhr. S. Ramautar','1984-09-23','9080',0,0,'','','2011-04-10 23:07:03',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ea92fbb1afe0e5c6537e09bc4a148721',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(12,1,6781,NULL,'Marcel','','Jugooa','M.','m',11401,4,'Dhr. M. Jugooa','1982-02-26','9080',0,0,'','','2011-04-10 23:08:02',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'reset blank',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(13,1,9068,NULL,'Albert','','Karubiu','A.','m',11401,1,'Mr. A. Karubiu','1986-09-15','9030',0,0,'','','2011-10-11 13:19:48',NULL,0,0,'albert@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BD5EFD20660E5DBB53B426359CBEB5BC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(14,1,9392,NULL,'Martin','Mundia ','Mugambi','M.','m',11401,1,'Mr. M. Mugambi','1988-07-02','9010',9392,0,'','tested','2012-02-16 22:12:35',NULL,0,0,'martin@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'d5977bed9b4df1c5afdabc82865304b5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(15,1,9436,NULL,'Alfred','Githinji','Ng\'ang\'a','A.','m',11401,1,'Mr. A. Ng\'ang\'a','1985-10-14','9099',0,0,'','','2012-03-04 23:59:39',NULL,0,0,'alfred@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9d609662918a215de6cb11472a6cd32d',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(16,1,9656,NULL,'Martin ','Ndegwa','Moche','M.','m',11401,1,'Mr. M. Moche','1985-02-17','9099',0,0,'','','2012-07-02 00:35:09',NULL,0,0,'moche@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'8e658d6d57f0dfcbc54d2dcbae2ac24c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(17,1,10330,NULL,'John','J.','Njenga','J.','m',11401,1,'Mr. J. Njenga','1983-01-02','9010',0,8,'','','2013-04-05 00:00:00',NULL,0,0,'john@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7e4d2079dcda5e544eedf082c9d0be9b',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(18,1,10455,NULL,'Glenda','G','Avilla Castillo','','m',11401,7,'Herr G. Avilla Castillo','1965-04-24','9010',131,0,'','','2013-04-29 00:00:00',NULL,0,0,'glenda@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'531aaea27fe1345973d922b068ff6371',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(19,1,15683,NULL,'Daniel','Mkony','Obilo','D','m',11401,1,'Mr. D Obilo','1989-08-22','9099',0,0,'','','2012-02-07 08:01:54',NULL,0,0,'daniel@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2eeea6ef166701845218e7bd974db939',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(20,1,15767,NULL,'Gilbert','','Gesora','G','m',11401,1,'Dhr. G Gesora','1986-01-24','9010',0,8,'','Designer','2012-02-25 09:45:46',NULL,0,0,'gilbert@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'44de55795bcc7fb90a97fb4fb0444116',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(21,1,15803,NULL,'Eunice','','Osano','E','f',11401,1,'Mrs. E Osano','1988-08-10','9010',0,5448,'','','2012-03-03 16:03:50',NULL,0,0,'eunice@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'034b90fc63685bf9ea5395005491a491',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(22,1,16448,NULL,'Michael','van','Eijk','M.','m',11401,4,'Dhr. M.  van Eijk','1983-11-19','9080',0,0,'','','2014-03-29 13:26:26',NULL,0,0,'michael_van_eijk@hotmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'f5c9cdf954fbdb3c84e2e917bddcf10a',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(24,1,16455,NULL,'Glenda','','Avila','C.','m',11401,4,'',NULL,'9010',0,0,'','','2014-03-31 15:38:59',NULL,0,0,'christiaan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dab84745a9b4752dfd678751ff3c029e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(23,1,16630,NULL,'Jos ','V','Vens','','m',11402,4,'Dhr. J. Vens',NULL,'9010',0,0,'','','2014-04-30 13:12:12',NULL,0,0,'jos@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'df19d0117b94533732b319194dc621de',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(25,1,16700,NULL,'Paul','','Mutunga','','m',11401,4,'Dhr. P. Mutunga','1978-10-08','9010',0,0,'','','2014-05-09 14:48:04',NULL,0,0,'paul@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'93b50ead88fdd1f6d31ce6dced5c8add',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(26,1,17184,NULL,'Esther','Wairimu','Muchara','','f',11401,1,'Mrs. E. Muchara','1992-09-01','9010',0,0,'','','2014-07-22 09:15:38',NULL,0,0,'esther@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a5b8ddf74da99d4f129f8b8227e8255b',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(27,1,17187,NULL,'Esther','Wairimu','Muchara','E.','f',11401,1,'Mrs. E. Muchara','1970-01-01','9010',2467,5448,'','','2014-07-22 13:20:01',NULL,0,0,'mucharaesther@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(28,1,17284,NULL,'Annah','','Mwanzia','A.','f',11401,1,'Mevrouw A. Mwanzia','1995-09-09','9010',0,0,'','birthday 10-9, son 25-4','2014-08-20 10:58:31',NULL,0,0,'annamwanzia@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5026da51a3274ec39db694b53aabc671',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(29,1,17372,NULL,'Winstons ','','kipngeno','','m',11401,1,'Mr. W. kipngeno','1990-12-04','9010',9392,0,'','','2014-09-03 16:01:16',NULL,0,0,'winston@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'53c16f25ec59504645133637162f26cc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(30,1,17398,NULL,'Winston','','M','','m',11401,1,'Mr. W. M',NULL,'9010',0,0,'','','2014-09-06 09:52:15',NULL,0,0,'winston@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'22bb63573aa47b3b10ef90a8378f4b38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(32,1,17629,NULL,'Alex','','Mwangi','','m',11401,1,'Mr. A. Mwangi','1990-10-28','9010',0,0,'','','2014-09-29 10:45:00',NULL,0,0,'mwangi@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'534b44a19bf18d20b71ecc4eb77c572f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(31,1,17630,NULL,'Margaret','','Wathiga','','f',11401,1,'Mrs. M. Wathiga','1989-08-23','9010',0,0,'','','2014-09-29 10:46:48',NULL,0,0,'Margaret@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'f68bd020ce3db8e5dcb5e49297c22343',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(33,1,18728,NULL,'Gidi ','','van Gastel','','m',11401,4,'Dhr. G. van Gastel',NULL,'9010',0,0,'','','2015-01-26 09:33:22',NULL,0,0,'gidi@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7a595eb88cc12eeee24e03241367f8e9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(35,1,20093,NULL,'Nicholas','Kyalo','Mutua','N','m',11401,4,'Dhr. N Mutua','1990-08-18','9010',0,0,'','','2015-06-05 08:29:42',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30570d7e2a8365fdfe32128bb16f2b24',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(34,1,20196,NULL,'Kennan','','Obura','','m',11401,4,'Dhr. K. Obura','1988-03-14','9055',20196,0,'','','2015-06-15 10:28:37',NULL,0,0,'kennan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'589028661f3d13cd0f04a3f757f8f584',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(36,1,20851,NULL,'Christine','','Wairimu','','f',11401,4,'Mevrouw C. Wairimu','1992-03-08','9010',0,0,'','','2015-08-05 08:31:05',NULL,0,0,'christine@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a56dbd3d7c6340886c1f287c95914666',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(37,1,23746,NULL,'Ine','Dorst','Dekkers','','m',11401,4,'Dhr. I. Dekkers','1970-01-01','9010',9392,0,'','','2016-02-12 11:34:06',NULL,0,0,'ine@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'036f0151f9ddec0eb8c096ec5c105527',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(38,1,24384,NULL,'Jarno','','Bol','','m',11401,4,'Dhr. J. Bol','1996-05-13','9010',9392,0,'','','2016-03-30 10:15:19',NULL,0,0,'jarno@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'fe155728a77948392f7cd7d9cd6a8e3e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(39,1,25481,NULL,'Granville','','Cheruiyot','','m',11401,4,'Dhr. G. Cheruiyot','1991-01-17','9010',9392,0,'','','2016-07-11 11:30:06',NULL,0,0,'granville@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6af52f641ead01c7e658c633c0937ba5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(40,1,26611,NULL,'Raymen','','Gijzen','','m',11401,4,'Dhr. R. Gijzen','2019-02-25','9010',9392,0,'','','2016-09-02 16:45:25',NULL,0,0,'raymen@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'266e7057b1b2e809562aa85c1c946214',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(41,1,29367,NULL,'Peter','Murage','Chege','','m',11401,4,'Dhr. P. Chege',NULL,'9010',9392,0,'','','2017-01-18 14:18:58',NULL,0,0,'mutunga@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(44,1,29410,NULL,'Mathew','','Migiwi','','m',11401,4,'Dhr. M. Migiwi','2018-02-12','9010',9392,0,'','','2017-01-23 10:18:55',NULL,0,0,'mathew@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(43,1,29411,NULL,'Geoffrey','Mwaura','Wanjiru','','m',11401,4,'Dhr. G. Wanjiru',NULL,'9010',9392,0,'','','2017-01-23 10:20:26',NULL,0,0,'geoffrey@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(53,1,29412,NULL,'Josphat','','Njogu','','m',11401,4,'Dhr. J. Njogu',NULL,'9010',9392,0,'','','2017-01-23 10:21:14',NULL,0,0,'josphat@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(52,1,29413,NULL,'Kelvin','','Kamau','','m',11401,4,'Dhr. K. Kamau',NULL,'9010',9392,0,'','','2017-01-23 10:21:54',NULL,0,0,'kevin@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(51,1,29414,NULL,'Elijah','','Kimondo','','m',11401,4,'Dhr. E. Kimondo',NULL,'9010',9392,0,'','','2017-01-23 10:22:47',NULL,0,0,'elijah@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(50,1,29489,NULL,'Farid','','Chouiter','','m',11401,4,'Dhr. F. Chouiter',NULL,'9010',9392,0,'','','2017-02-01 09:31:18',NULL,0,0,'farid@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'03fca2861e4aeb117e1a83567042cace',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(49,1,30521,NULL,'Sidra','','Hussain','','s',11401,4,' S. Hussain',NULL,'9010',131,0,'','','2017-03-08 09:56:50',NULL,0,0,'sidra@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'407ad1d9273bd6a1a3a876be5ec97c94',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(48,1,31033,NULL,'Stella','M.','Wangui','','f',11401,1,'Mrs. S. Wangui',NULL,'9010',2467,0,'','','2017-03-30 11:49:00',NULL,0,0,'stella@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'430244540aa38ff181545cb0d539f038',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(42,1,31306,NULL,'David','','Mooij ','','m',11401,1,'Mr. D. Mooij ','1970-01-01','9010',131,0,'','','2017-04-18 14:33:50',NULL,0,0,'david@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'87d4daf7b7f083695e01c9a038bcbb26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(47,1,31590,NULL,'Dennis','','Kimanthi','','m',11401,1,'Mr. D. Kimanthi','1989-08-05','9010',9392,0,'','','2017-05-09 08:57:57',NULL,0,0,'njeru@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'39bf7432001c2ca6c275a733b1dc0d31',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(46,1,32234,NULL,'Mathijs','','Rokx','','m',11401,1,'Mr. M. Rokx','2018-02-12','9010',9392,0,'','','2017-06-30 09:22:34',NULL,0,0,'mathijs@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'22da2ab282f5603d0036d5b997079ff5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(45,1,32926,NULL,'John','','Dwayne','','m',11401,1,'Mr. J. Dwayne','1995-03-12','9010',9392,0,'','','2017-08-30 11:30:13',NULL,0,0,'johndwayne@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'8a1f434c00ff1401881aa84492563ea9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(54,1,34881,NULL,'Vince','','Anand','','m',11401,1,'Mr. V. Anand',NULL,'9010',9392,0,'','','2018-01-13 13:55:41',NULL,0,0,'vince@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'165c30f726f949fe456ad4192d2dcc23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(55,1,35702,NULL,'Kaan','Sefa','Cifci','','f',11401,1,'Mrs. K. Cifci','1970-01-01','9010',9392,0,'','','2018-02-15 09:11:52',NULL,0,0,'kaan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dc995f3a3ce6eac2f8a8717daf37e4fc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(59,1,38089,NULL,'Geoffrey','Imbisi','Ayiego','Mr.','m',11401,4,'Dhr. Mr. Ayiego','1994-01-25','9010',9392,0,'','','2018-05-23 09:28:08',NULL,0,0,'geoffrey@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5d125e48c494b2176031f5d2aeae0f18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(60,1,39015,NULL,'Esther','Wambui','Kariuki','','f',11401,1,'Mrs. E. Kariuki','1993-03-30','9010',9392,0,'','','2018-07-30 09:08:56',NULL,0,0,'wambui@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c0d8715c406fec3cd3f0d0abe434c410',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(61,1,39273,NULL,'Jordi','','Nollen','','f',11401,1,'Mrs. J. Nollen','2019-02-25','9010',9392,0,'','','2018-08-14 09:24:13',NULL,0,0,'jordi@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'603f76337e63483fd4b9b19805220406',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(62,1,39422,NULL,'Nick','','Smits','','m',11401,1,'Mr. N. Smits','2019-02-26','9010',9392,0,'','','2018-08-27 10:38:28',NULL,0,0,'nick@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6be8cc71b056ffd67025b3bf31bb5fc7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(63,1,39519,NULL,'Lesley ','van der','Elst','','f',11401,1,'Mr. L.  van der Elst','2019-07-29','9010',131,0,'','','2018-09-06 09:38:16',NULL,0,0,'lesley@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9b01f04c0c069a9ec00a6d17fc8bc1aa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(64,1,39554,NULL,'Kaan','','Cifci','','m',11401,1,'Mr. K. Cifci',NULL,'9010',131,0,'','','2018-09-11 08:49:54',NULL,0,0,'kaan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'208c940f310378df97ea13f46372a046',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(65,1,39589,NULL,'Antony','Mawia','Munyao','','m',11401,1,'Mr. A. Munyao','1995-01-21','9010',2467,0,'','','2018-09-13 09:24:19',NULL,0,0,'antony@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1729a690f96f41a5ff6d5927a0894e6d',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(66,1,39814,NULL,'Jordi ','van den ','Kieboom','','m',11401,1,'Mr. J. Kieboom','2019-02-26','9010',1961,0,'','','2018-10-22 10:29:15',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(67,1,39823,NULL,'Niels ','','Alblas','','m',11401,1,'Mr. N. Alblas','2019-02-26','9010',1961,0,'','','2018-10-23 11:30:43',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(69,1,41456,NULL,'Rivaldo','','Kousbroek','','m',11401,4,'Dhr. R. Kousbroek',NULL,'9090',2015,0,'','','2019-02-06 15:59:22',NULL,0,0,'rivaldo@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'db7394a35a7a9e5071c175a465de9114',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(71,1,42054,NULL,'Kouters','','','Marijn ','m',11401,1,'Mr. Marijn  ',NULL,'9010',1961,0,'','','2019-03-14 10:39:46',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(72,1,42145,NULL,'Marijn','','Kouters','','m',11401,1,'Mr. M. Kouters',NULL,'9010',26611,0,'','','2019-03-21 10:34:38',NULL,0,0,'marijn.kouters@outlook.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(73,1,42146,NULL,'Joost','Van Der ','Heijden','','m',11401,1,'Mr. J. Heijden',NULL,'9010',26611,0,'','','2019-03-21 10:35:53',NULL,0,0,'joostvanderheijden@home.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(74,1,42147,NULL,'','','','','m',11401,1,'',NULL,'9010',26611,0,'','','2019-03-21 10:36:09',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(75,1,42148,NULL,'Mitchell','','Visser','','m',11401,1,'Mr. M. Visser',NULL,'9010',26611,0,'','','2019-03-21 10:37:27',NULL,0,0,'Mitchell-V@hotmail.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(76,1,42616,NULL,'Michael','van','Eijk','','m',11401,1,'Mr. M.  van Eijk',NULL,'9010',9392,0,'','','2019-04-25 14:27:17',NULL,0,0,'michael@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5b99d0a9f19045a9f0f6bd31fc1a4729',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(77,1,42727,NULL,'Elizabeth ','Wangui','Kariuki','','f',11401,1,'Mrs. E. Kariuki','1995-10-13','9010',131,0,'','','2019-05-03 08:43:21',NULL,0,0,'elizabeth@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3051a7ff9686214fe2f57a83077a7e41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(78,1,43548,NULL,'Kevin','','Muranda','','m',11401,1,'Mr. K. Muranda','1991-04-21','9010',9392,0,'','','2019-07-03 11:04:20',NULL,0,0,'kevin@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'85038463c77ec05e03bdde8d9496bf4d',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(79,1,43549,NULL,'Abdallah','','Bosire','','m',11401,1,'Mr. A. Bosire','1985-05-08','9010',9392,0,'','','2019-07-03 11:04:22',NULL,0,0,'abdallah@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'007c8c97f697233cf63ab78f515c9540',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(80,1,45596,NULL,'Robert','','Ubachs','','m',11401,1,'Mr. R. Ubachs','1995-09-10','9099',2,131,'','','2019-09-10 15:20:48',NULL,0,0,'robertubachs@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'37d6a80597e4b83bc17ce6ddc03b0816',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(81,1,45687,NULL,'Claudio','','Lima','','m',11401,1,'Mr. C. Lima',NULL,'9099',30651,0,'','Dirkslandstraat 2\n3086CK, Rotterdam','2019-09-13 05:37:46',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'f6a47a638824180d57f0a561fd5843c6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(82,1,45765,NULL,'Mark ','','Oudshoorn','M','m',11401,4,'Dhr. M Oudshoorn','1970-01-01','9099',0,0,'','','2019-09-17 14:32:56',NULL,0,0,'mark@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'e7ac53ebc88fe3224bfadbeb44308057',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(83,1,45766,NULL,'Timothy Ferdinand Paul Sellier','Ferdinand Paul','Sellier','T','m',11401,1,'Mr. T Sellier','1970-01-01','9099',0,0,'','Logistiek 2 jaar','2019-09-17 14:38:24',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c0610ace49b95476802d14f72865c97c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(84,1,46490,NULL,'Mohamed','El','Morahit','','m',11401,1,'Mr. M. Morahit','1970-01-01','9010',131,0,'','','2019-10-11 10:33:35',NULL,0,0,'morahit@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'8c11568107d6f5bf44921d8fb7b175d3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(85,1,46491,NULL,'Yasin','','Okutan','','m',11401,1,'Mr. Y. Okutan','1970-01-01','9010',0,0,'','','2019-10-11 10:35:59',NULL,0,0,'yasin@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'eaba93a258a1c49b7411c7b36110ec86',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(86,1,46495,NULL,'Jeffrey','','Barzilaij','','m',11401,1,'Mr. J. Barzilaij',NULL,'9010',0,0,'','','2019-10-11 10:51:25',NULL,0,0,'jeffrey@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'6aa8d4d501a7e1d67c6dbf8c8138b897',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(87,1,47404,NULL,'Dave','van der','Zande','','m',11401,1,'Mr. D.  van der Zande','1970-01-01','9010',0,0,'','','2019-12-03 11:06:30',NULL,0,0,'dave@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'8fb6ecbe4b1a13bbc8778e1a99722e3b',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(88,1,47565,NULL,'Sander','','Bonhof','','m',11401,1,'Mr. S. Bonhof','1970-01-01','9010',0,0,'','','2019-12-18 17:04:57',NULL,0,0,'sander@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'43f916c5201cfd2944835326f5635640',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(89,1,47697,NULL,'Dylan','van','Halteren','','m',11401,1,'Mr. D.  van Halteren',NULL,'9099',30651,0,'','Gestenberg 21 \n4714CM sprundel\n','2020-01-06 10:05:00',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(90,1,47862,NULL,'Matas','','Magila','Mr.','m',11401,1,'','1970-01-01','9010',0,0,'','','2020-01-14 13:32:08',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4614d2c776d6975bc112d5cdfd198349',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(91,1,47863,NULL,'Huy','','Tran','','m',11401,1,'Mr. H. Tran','1970-01-01','9010',0,0,'','','2020-01-14 13:33:53',NULL,0,0,'tran@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'31509afaefd35ff7cfa9f9a4ba04f25f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(92,1,47864,NULL,'Robbin','','Stroop','','m',11401,1,'Mr. R. Stroop','1970-01-01','9010',0,0,'','','2020-01-14 13:34:47',NULL,0,0,'robbin@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a3c19536178a5fba0f585a4e830151a7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(93,1,48189,NULL,'Joseph','Mutunga','Mutua','','m',11401,1,'Mr. J. Mutua','1999-03-08','9010',0,0,'','','2020-02-17 14:23:26',NULL,0,0,'joseph@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'b475f5bd47ce7f234e5bb6ed65dd4300',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(95,1,49124,NULL,'Delano','','Valentijn','','m',11401,1,'Mr. D. Valentijn',NULL,'9099',30651,0,'','Bremstraat 9  \n4711CD St. Willebrord','2020-05-05 06:44:32',NULL,0,0,'delano792@gmail',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(96,1,49534,NULL,'Mart','Danen','','M.','m',11401,11,' M. ',NULL,'9010',1961,0,'','','2020-06-08 13:30:16',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(97,1,50355,NULL,'Fridah ','Njeri ','Nyaga','','f',11401,11,' F. Nyaga',NULL,'9010',9392,0,'','','2020-07-15 11:59:12',NULL,0,0,'fridah@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'60aa4e8df7dabe2f2946355566de436a',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(98,1,50356,NULL,'Justus','Wachira','Maina','','m',11401,11,' J. Maina',NULL,'9010',9392,0,'','','2020-07-15 11:59:58',NULL,0,0,'justus@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3b7d512fc716f4848319d0a0856a2d5f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(99,1,50895,NULL,'James','Kagiri','Kibiru','','m',11401,11,' J. Kibiru',NULL,'9010',9392,0,'','','2020-08-03 11:07:49',NULL,0,0,'kagiri@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'d6835622c24ea76a9876c97407ad4feb',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(100,1,52025,NULL,'Obada','','Jlaylati ','','m',11401,11,' O. Jlaylati ',NULL,'9099',26611,0,'','Messchertstraat 26 \n3023 TJ Rotterdam ','2020-09-10 10:48:32',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(101,1,52027,NULL,'Delano','','Valentijn','','m',11401,11,' D. Valentijn',NULL,'9010',26611,0,'','st williebrand \nBremstraat 9 \n4711CD St. Willebrord','2020-09-10 11:03:31',NULL,0,0,'Delano792@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(102,1,52028,NULL,'Delano','','','','m',11401,11,' D. ',NULL,'9010',26611,0,'','','2020-09-10 11:06:11',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(103,1,52029,NULL,'Delano','','','','m',11401,11,' D. ',NULL,'9010',26611,0,'','','2020-09-10 11:10:14',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(104,1,52030,NULL,'Delano','','','','m',11401,11,' D. ',NULL,'9010',26611,0,'','','2020-09-10 11:10:36',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(105,1,52043,NULL,'','','','','m',11401,11,'',NULL,'9010',26611,0,'','','2020-09-10 13:13:32',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(106,1,52251,NULL,'Bryan','','Helbertina','','m',11401,11,' B. Helbertina',NULL,'9010',131,0,'','','2020-09-18 17:44:32',NULL,0,0,'bryan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5992940cab533f02b846c16157110768',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(107,1,52454,NULL,'Claudio','','Lima','','m',11401,11,' C. Lima',NULL,'9010',131,0,'','','2020-09-29 08:30:44',NULL,0,0,'claudio@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'f6a47a638824180d57f0a561fd5843c6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(108,1,52480,NULL,'','','','','m',11401,11,'',NULL,'9010',50356,0,'','','2020-09-29 15:59:43',NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(109,1,52779,NULL,'Cha','Hsuan','Liu','','s',11401,11,' C. Liu',NULL,'9010',9392,0,'','','2020-10-12 14:28:20',NULL,0,0,'hsuan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'a630c420e1d7532cc6fc25ef052de4a4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(56,1,123456789,NULL,'Accountant','','Accountant','','m',11401,4,'',NULL,'9001',0,0,'','',NULL,NULL,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14014,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL);

DROP TABLE IF EXISTS `tasks_to_planning`;

CREATE TABLE `tasks_to_planning` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task_id` int DEFAULT NULL,
  `event_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tasks_to_projects`;

CREATE TABLE `tasks_to_projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `event_id` int NOT NULL,
  `project_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tbdocuments`;

CREATE TABLE `tbdocuments` (
  `doc_id` int NOT NULL DEFAULT '0',
  `doc_lang_id` smallint NOT NULL DEFAULT '0',
  `doc_datetime` datetime DEFAULT NULL,
  `doc_author_id` int DEFAULT NULL,
  `doc_version_id` int DEFAULT NULL,
  `doc_ranking` int DEFAULT NULL,
  `doc_department` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `doc_employee` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `doc_topic` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `doc_tags` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `doc_content` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `doc_comments` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `doc_level` smallint DEFAULT NULL,
  `doc_status` varchar(4) DEFAULT NULL,
  `doc_uID` varchar(200) DEFAULT NULL,
  `doc_branches` varchar(100) DEFAULT NULL,
  `expl_inputs` tinytext,
  `expl_outputs` tinytext,
  `expl_customers` tinytext,
  `expl_criteria` tinytext,
  `doc_iso` tinyint DEFAULT NULL,
  `expl_kpi` tinytext,
  PRIMARY KEY (`doc_id`,`doc_lang_id`),
  KEY `level SI` (`doc_level`),
  FULLTEXT KEY `topic` (`doc_topic`),
  FULLTEXT KEY `tags` (`doc_tags`),
  FULLTEXT KEY `content` (`doc_content`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tbdocuments_history`;

CREATE TABLE `tbdocuments_history` (
  `doc_id` int NOT NULL AUTO_INCREMENT,
  `doc_lang_id` smallint NOT NULL DEFAULT '0',
  `doc_datetime` datetime DEFAULT NULL,
  `doc_author_id` int DEFAULT NULL,
  `doc_version_id` int DEFAULT NULL,
  `doc_ranking` int DEFAULT NULL,
  `doc_department` varchar(200) DEFAULT NULL,
  `doc_employee` varchar(200) DEFAULT NULL,
  `doc_topic` varchar(200) DEFAULT NULL,
  `doc_tags` varchar(200) DEFAULT NULL,
  `doc_content` longtext,
  `doc_comments` mediumtext,
  `doc_level` smallint DEFAULT '1',
  `doc_parent_id` int DEFAULT NULL,
  `doc_revised_by` int DEFAULT NULL,
  `doc_visible` smallint DEFAULT NULL,
  PRIMARY KEY (`doc_id`,`doc_lang_id`),
  KEY `Rel Lang SI` (`doc_tags`,`doc_lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tbdocuments_privileges`;

CREATE TABLE `tbdocuments_privileges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `doc_id` int DEFAULT NULL,
  `contact_id` int DEFAULT NULL,
  `lang_id` int DEFAULT NULL,
  `branch_id` int DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `default_privilege` varchar(100) DEFAULT '0',
  `E` smallint DEFAULT NULL,
  `S` smallint DEFAULT NULL,
  `A` smallint DEFAULT NULL,
  `planning` smallint DEFAULT NULL,
  `event_id` int DEFAULT NULL,
  `is_dir` smallint DEFAULT NULL,
  `responsibility` int DEFAULT '1',
  `sort_id` int DEFAULT NULL,
  `privileges` smallint DEFAULT NULL,
  `is_active` tinyint DEFAULT '1',
  `parent` varchar(40) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `subcategory` varchar(40) DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `contact_id` (`contact_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tradestar_report_frequency`;

CREATE TABLE `tradestar_report_frequency` (
  `id` int NOT NULL,
  `description` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tradestar_reports`;

CREATE TABLE `tradestar_reports` (
  `Report_ID` int NOT NULL AUTO_INCREMENT,
  `Report_Date` datetime DEFAULT NULL,
  `Report_Employee_ID` int NOT NULL,
  `Report_Body` longtext NOT NULL,
  `Report_Category` varchar(30) DEFAULT NULL,
  `Report_Subject` varchar(100) DEFAULT NULL,
  `Report_Author` varchar(20) DEFAULT NULL,
  `Report_BranchID` int DEFAULT NULL,
  `PrId` int DEFAULT NULL,
  `PackagingId` int DEFAULT NULL,
  `Is_Visible` smallint DEFAULT NULL,
  `Doc_ID` int DEFAULT NULL,
  `Report_Type` int DEFAULT '0',
  `visible_in_projects` tinyint DEFAULT '1',
  `language_id` int DEFAULT NULL,
  `explorer_id` int DEFAULT NULL,
  `accordion` tinyint DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `template_id` int DEFAULT NULL,
  `goal` mediumtext,
  `scope` mediumtext,
  `supervisor` varchar(30) DEFAULT NULL,
  `doc_input` mediumtext,
  `doc_output` mediumtext,
  `doc_frequency` int DEFAULT NULL,
  `toc_id` int DEFAULT NULL,
  PRIMARY KEY (`Report_ID`),
  UNIQUE KEY `report_language_index` (`Report_ID`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tradestar_reports_archive`;

CREATE TABLE `tradestar_reports_archive` (
  `History_ID` int NOT NULL AUTO_INCREMENT,
  `History_Date` datetime DEFAULT NULL,
  `History_Report_ID` int NOT NULL,
  `History_Body` longtext NOT NULL,
  `History_Category` varchar(30) DEFAULT NULL,
  `History_Subject` varchar(100) DEFAULT NULL,
  `History_Author` varchar(255) DEFAULT NULL,
  `Report_Category` int DEFAULT NULL,
  PRIMARY KEY (`History_ID`),
  KEY `History_Report_ID` (`History_Report_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tradestar_reports_category`;

CREATE TABLE `tradestar_reports_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tradestar_reports_to_employees`;

CREATE TABLE `tradestar_reports_to_employees` (
  `report_id` int NOT NULL,
  `employee_id` int NOT NULL,
  PRIMARY KEY (`report_id`,`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `trainees`;

CREATE TABLE `trainees` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `status_id` int DEFAULT NULL,
  `branch_id` int NOT NULL,
  `FirstName` varchar(40) DEFAULT NULL,
  `SecondName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `Sales` int DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `DateIn` date DEFAULT NULL,
  `DayOfBirth` date DEFAULT NULL,
  `Position` varchar(40) DEFAULT NULL,
  `PrivateEmail` varchar(40) DEFAULT NULL,
  `From` varchar(80) DEFAULT NULL,
  `CompanyEmail` varchar(40) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Sip` varchar(20) DEFAULT NULL,
  `AIM` varchar(20) DEFAULT NULL,
  `Skype` varchar(20) DEFAULT NULL,
  `Teamviewer` varchar(20) DEFAULT NULL,
  `Paypal` varchar(20) DEFAULT NULL,
  `VOIP` varchar(20) DEFAULT NULL,
  `XLite` varchar(20) DEFAULT NULL,
  `IntranetID` int DEFAULT NULL,
  `startpageID` int DEFAULT NULL,
  `ParadoxId` int DEFAULT NULL,
  `SallandId` int DEFAULT '0',
  PRIMARY KEY (`ID`,`branch_id`),
  KEY `Sales SI` (`Sales`),
  KEY `IntranetID SI` (`IntranetID`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `trainees` VALUES (1,1,6,'Annah','','',0,'f',NULL,NULL,'Marketing','ntsannah@hotmail.com','Annah','annah@nts.nl','+254 67202512 ','+31 722 312147','ntsannah','ntsannah',NULL,'573 831 545','','',' +31 854010614 ',2467,10175,NULL,0),(2,1,1,'Dennis','','Bosch',0,'m',NULL,NULL,'Sales','dgbnts@gmail.com',NULL,'dbosch@nts.nl','0857843299','+31 (6)-24312999','dgbnts','Dennis Bosch NTS',NULL,'618 589 454','','','',1953,NULL,68,0),(7,1,1,'Kisuk','','Lodeweges',0,'m',NULL,'1972-01-30','Management','kisuk4@hotmail.com','Kisuk Lodeweges','kisuk@nts.nl','+31 (0)165-319126 be','06-24644283','nts_nl','Kisuk NTS',NULL,'575 314 572','pass: seinhuis12','+31857850192 begin_o','',131,NULL,8,0),(8,1,1,'Jaco','','Mol',0,'m',NULL,NULL,'Sales','','Jaco Mol','jaco@nts.nl','','','','JacoMolNTS',NULL,NULL,NULL,NULL,NULL,1952,NULL,1786,0),(10,1,2,'Robert','','Bezemer',0,'m',NULL,NULL,'LOC','',NULL,'','','','','',NULL,'','','','',19461,10176,NULL,0),(12,1,6,'Jane','Muthoni','',0,'m',NULL,NULL,'Logistics','jane@nts.nl','jane@nts.nl','jane@nts.nl','+254708685891','','','ntsjane1',NULL,'454 608 105','','','',3446,NULL,NULL,0),(13,1,1,'Christiaan','','Koning',0,'m',NULL,NULL,'Warehouse','chris@nts.nl',NULL,'chris@nts.nl','','','','christiaan nts',NULL,'','','','',1959,NULL,NULL,0),(14,1,1,'Rene','van der','Slik',0,'m',NULL,NULL,'TD','ntsrene@aol.nl',NULL,'rene@nts.nl','','','','ntsrene@aol.nl',NULL,'','','','',2015,NULL,NULL,0),(15,1,1,'Erik','de','Jong',0,'m',NULL,NULL,'R & D','edej@hotmail.com',NULL,'erik@nts.nl','010-4046262','06-55364961','','ntserik@aol.nl',NULL,'','','','',1946,NULL,NULL,424),(16,1,1,'Frank','','Kuipers',0,'m',NULL,NULL,'R & D','namknarf@gmail.com',NULL,'','','','','',NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,0),(17,1,1,'Chris','','',0,'m',NULL,NULL,'TD','',NULL,'','','','','tdntsrdam@aol.nl',NULL,'754 243 875','','','',1958,NULL,NULL,0),(18,1,1,'Michael','','',0,'m',NULL,NULL,'TD','',NULL,'','','','','',NULL,NULL,NULL,NULL,NULL,42616,NULL,1121,0),(20,1,1,'Shaillindra','','Eamautar',0,'m',NULL,NULL,'TD','',NULL,'','','','','',NULL,NULL,NULL,NULL,NULL,6780,NULL,NULL,0),(21,1,1,'Marcel','','',0,'m',NULL,NULL,'TD','',NULL,'','','','','',NULL,NULL,NULL,NULL,NULL,6781,NULL,NULL,0),(25,1,1,'Glenda','','',0,'',NULL,NULL,'','',NULL,'','','','','',NULL,'','','','',10455,10455,NULL,0),(31,1,1,'Albert',NULL,NULL,0,'m',NULL,NULL,NULL,'albert@nts.nl',NULL,'albert@nts.nl','+254723779406',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9068,10175,NULL,0),(35,1,1,'Alex','','Kauffmann',0,'',NULL,NULL,'','alex@nts.nl','Alex','alex@nts.nl','','','','',NULL,'','','','',1954,10176,1000,0),(44,1,6,'Albert','','',0,'m',NULL,NULL,'','albert@nts.nl',NULL,'albert@nts.nl','+254723779406','','','',NULL,'','','','',9068,10175,NULL,0),(45,1,6,'Martin','','Mugambi',0,'m',NULL,NULL,NULL,'martin@nts.nl',NULL,'martin@nts.nl','+254727310743',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9392,10175,NULL,0),(46,1,6,'Alfred','',NULL,0,'m',NULL,NULL,NULL,'afred@nts.nl',NULL,'alfred@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9436,10175,NULL,0),(49,1,6,'Moche','',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9656,10175,NULL,0),(50,1,1,'Milene','Rozenthal',NULL,0,NULL,NULL,NULL,NULL,'milene@nts.nl',NULL,'milene@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1961,NULL,6,0),(58,1,1,'John N.',NULL,'Njenga',0,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10330,10175,10330,0),(59,1,6,'John N.','Njenga',NULL,0,'m',NULL,NULL,NULL,'john@nts.nl',NULL,'john@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10330,10175,10330,0),(61,1,11,'Khacho','Danieljans','',0,'m',NULL,NULL,NULL,NULL,NULL,'danieljans@salland.eu','0570-626250',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11214,14012,NULL,84),(62,1,11,'Wilco','','Nijkamp',0,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11215,NULL,NULL,32),(65,1,11,'Sander','','Bonhof',0,'m',NULL,NULL,NULL,NULL,NULL,'verkoop@salland.eu','0570-626250',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11218,14012,NULL,99),(487,1,6,'Daniel',NULL,'Obilo',0,'m',NULL,NULL,NULL,NULL,NULL,'daniel@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15683,10175,NULL,0),(488,1,6,'Gesora',NULL,'Gilbert',0,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15767,NULL,NULL,0),(489,1,6,'Eunice','O','Osano',0,'f',NULL,NULL,NULL,'eunice@nts.nl',NULL,'eunice@nts.nl','+254771350512',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15803,NULL,4,0),(495,1,1,'Esther M.',NULL,'Muchara',0,'f','2017-09-08','2017-09-08',NULL,NULL,NULL,'esther@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17184,10175,NULL,0),(495,1,6,'Esther M.',NULL,'Muchara',0,'f','2017-09-08','2017-09-08',NULL,NULL,NULL,'esther@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,171848,NULL,NULL,0),(495,1,11,'Esther M','','Muchara',NULL,'f',NULL,NULL,'','','','esther@nts.nl','','','','','','','','','',17184,10175,NULL,0),(496,1,2,'Rick',NULL,'Hoogenboom',0,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17218,NULL,NULL,0),(506,1,8,'Mohd','F.','Firdaus',0,NULL,'2014-09-02','2014-09-02',NULL,'firdaus@nts.nl',NULL,'firdaus@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,17366,NULL,NULL,0),(508,1,6,'Winston',NULL,'Kipngeno',0,'m',NULL,NULL,NULL,'winston.nts.nl',NULL,'winston.nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17372,NULL,NULL,0),(535,1,6,'Nicholas','','Kyalo',0,'','2015-06-13','2015-06-13','','','','kyalo@nts.nl','','','','',NULL,'','','','',20093,NULL,NULL,0),(536,1,6,'Kenan',NULL,'Obura',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20196,NULL,NULL,0),(557,1,8,'Muhammad','Syafiq bin Abd','Karim',0,'m','2016-05-03','2016-05-03',NULL,'muhammad@nts.nl',NULL,'muhammad@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,24642,NULL,NULL,0),(558,1,13,'Audax',NULL,'Onesmo',0,'m',NULL,NULL,'Sales','onesmoaudax7891@gmail','Audax','onesmoaudax7891@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22185,0,NULL,0),(568,1,6,'Granville',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25481,NULL,NULL,0),(572,1,11,'Tufan',NULL,'Orduoglu',0,NULL,NULL,NULL,NULL,'tufan@salland.eu',NULL,'tufan@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25948,NULL,NULL,0),(578,1,1,'Raymen',NULL,'Gijzen',0,'m','2016-09-05','2016-09-05',NULL,'raymen@nts.nl',NULL,'raymen@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26611,NULL,NULL,0),(580,1,6,'Paul ',NULL,'Mutunga',0,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16700,NULL,NULL,0),(581,1,6,'Peter','Murage','Chege',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29367,NULL,NULL,0),(582,1,6,'Mathew',NULL,'Migiwi',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29410,NULL,NULL,0),(583,1,6,'Mwaura ','Geoffrey','Wanjiru',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29411,NULL,NULL,0),(584,1,6,'Jonathan','Njogu',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29412,NULL,NULL,0),(585,1,6,'Kelvin',NULL,'Kamau',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29413,NULL,NULL,0),(586,1,6,'Elijah',NULL,'Kimondo',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29414,NULL,NULL,0),(587,1,6,'Steve','','',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29416,NULL,NULL,0),(590,1,11,'Remon ',NULL,'Lammerink',0,'m','2017-01-27','2017-01-27',NULL,'remon@salland.eu',NULL,'remon@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29459,NULL,NULL,0),(593,1,6,'Susan',NULL,NULL,0,'f','2017-02-07','2017-02-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29564,NULL,NULL,0),(594,1,6,'Bendor Casual',NULL,NULL,0,'f','2017-02-07','2017-02-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29565,NULL,NULL,0),(595,1,1,'Glenda','','',0,'m','2017-02-18','2017-02-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16455,NULL,NULL,0),(596,1,1,'Sidra',NULL,'Hussain',0,'m','2017-03-08','2017-03-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30521,NULL,NULL,0),(597,1,8,'Intan Fareesha','Nur','Razzie Binti Roslan',0,'f','2017-03-15','2017-03-15',NULL,'fareesha@nts.nl',NULL,'fareesha@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,30651,NULL,NULL,0),(600,1,6,'Anne',NULL,'Mbogo',0,'f','2017-04-03','2017-04-03',NULL,'anne@nts.nl',NULL,'anne@nts.nl','+254746623610',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17665,NULL,NULL,0),(602,1,1,'Jarno',NULL,'Bol',0,'m','2017-04-13','2017-04-13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,24384,NULL,NULL,0),(604,1,1,'David',NULL,'Mooij',0,'m','2017-04-19','2017-04-19',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31306,NULL,NULL,0),(606,1,8,'Nurul','Atikha','Aidi',0,'f','2017-05-22','2017-05-22',NULL,'nurul@nts.nl',NULL,'nurul@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,31764,NULL,NULL,0),(614,1,11,'Jochem',NULL,'Beunk',0,'m','2017-08-18','2017-08-18',NULL,'joechem@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32856,NULL,NULL,0),(501336,1,11,'Nick',NULL,'Bakker',0,'m','2017-02-18','2017-02-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25946,NULL,NULL,0),(501358,1,1,'Vishwant ',NULL,'Sobnath',0,'m','2017-09-27','2017-09-27',NULL,'vishwant@nts.nl',NULL,'vishwant@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,33182,NULL,NULL,0),(501380,1,1,'Kaan','Cifci','Sefa',0,'m','2018-02-15','2018-02-15',NULL,'kaan@nts.nl',NULL,'kaan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35702,NULL,NULL,0),(501386,1,8,'Muhamad Hairil ','Hanif','Daud',0,'m','2018-03-08','2018-03-08',NULL,'hairil@nts.nl',NULL,'hairil@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,36300,NULL,NULL,0),(501388,1,6,'Imbisi','','Ayiego',0,'m','2018-05-23','2018-05-23',NULL,'geoffrey@nts.nl',NULL,'geoffrey@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,38089,NULL,NULL,0),(501391,1,11,'Antje',NULL,'Mentink- Akkerman',0,'m','2018-06-07',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,33153,NULL,NULL,0),(501398,1,1,'Esther K.','','Kariuki',0,'f',NULL,NULL,'','','','','','','','','','','','','',39015,NULL,NULL,0),(501398,1,6,'Wambui','Esther','Kariuki',0,'f','2018-07-30',NULL,NULL,'wambui@nts.nl',NULL,'wambui@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39015,NULL,NULL,0),(501404,1,11,'Bryan',NULL,'',0,'m','2018-08-15',NULL,NULL,'arda@nts.nl',NULL,'arda@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39299,NULL,NULL,0),(501412,1,11,'Steven',NULL,'Korten',0,'m','2018-08-30',NULL,NULL,'steven@salland.eu',NULL,'steven@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39473,NULL,NULL,0),(501421,1,1,'Femke','van','Wijngaarden ',1,'f','2018-09-26','2018-09-26',NULL,'femke@nts.nl',NULL,'femke@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39669,NULL,NULL,0),(501425,1,1,'Niels',NULL,'Alblas',0,'m',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39823,NULL,NULL,0),(501429,1,11,'Femke','van','Wijngaarden ',1,'f','2018-09-26','2018-09-26',NULL,'femke@nts.nl',NULL,'femke@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39669,NULL,NULL,0),(501436,1,11,'Mitchell',NULL,'Visser',0,NULL,'2019-03-21','2019-03-21',NULL,'mitchell@salland.eu',NULL,'mitchell@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42151,NULL,NULL,0),(501438,1,11,'Joost','van der','Heijden',0,NULL,'2019-03-21','2019-03-21',NULL,'joost@salland.eu',NULL,'joost@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42152,NULL,NULL,0),(501440,1,11,'Owen ',NULL,'Elshof',0,NULL,'2019-03-21','2019-03-21',NULL,'owen@salland.eu',NULL,'owen@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42153,NULL,NULL,0),(501443,1,11,'Milene','Rozenthal',NULL,0,NULL,NULL,NULL,NULL,'milene@nts.nl',NULL,'milene@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1961,NULL,6,0),(501444,1,6,'Elizabeth','Wangui','Kariuki',0,'f','2019-05-03','2019-05-03',NULL,'elizabeth@nts.nl',NULL,'elizabeth@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42727,NULL,NULL,0),(501445,1,1,'Kaan','Cifci','Cifci',0,'m','2019-05-29','2019-05-29',NULL,'kaan@nts.nl',NULL,'kaan@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39554,NULL,NULL,0),(501447,1,11,'Jaco',NULL,'Mol',0,'m',NULL,NULL,'Sales',NULL,'Jaco Mol','jaco@nts.nl',NULL,NULL,NULL,'JacoMolNTS',NULL,NULL,NULL,NULL,NULL,19461,10176,NULL,0),(501449,1,1,'Kevin',NULL,'Muranda',1,'m','2019-07-03','2019-07-03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43548,NULL,NULL,0),(501451,1,1,'Abdallah',NULL,'Bosire',1,'m','2019-07-03','2019-07-03',NULL,'abdallah@nts.nl',NULL,'abdallah@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43549,NULL,NULL,0),(501452,1,6,'Kevin',NULL,'Muranda',0,'m','2019-07-05','2019-07-05',NULL,'muranda@nts.nl',NULL,'muranda@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43548,NULL,NULL,0),(501453,1,6,'Abdallah',NULL,'Bosire',0,NULL,'2019-07-05','2019-07-05',NULL,'abdallah@nts.nl',NULL,'abdallah@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43549,NULL,NULL,0),(501455,1,11,'Dennis',NULL,'Bosch',0,'m',NULL,NULL,'Sales','dgbnts@gmail.com',NULL,'dbosch@nts.nl','0857843299','+31 (6)-24312999','dgbnts','Dennis Bosch NTS',NULL,'618 589 454',NULL,NULL,NULL,1953,NULL,NULL,0),(501456,1,11,'Ahmet ','Hazer ','Arman',0,NULL,NULL,NULL,NULL,'ahmet@salland.eu',NULL,'ahmet@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,23754,NULL,NULL,0),(501457,1,11,'Sebastiaan',NULL,'Bomhof',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45355,NULL,NULL,0),(501458,1,11,'Dawid ',NULL,'Krikkie',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45356,NULL,NULL,0),(501459,1,11,'Jesse',NULL,'Jesse',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45357,NULL,NULL,0),(501462,1,1,'Mark ',NULL,'Oudshoorn',0,'m',NULL,'2000-06-17','','markoudshoorn123@gmail.com',NULL,'mark@nts.nl',NULL,'06 57614829',NULL,NULL,NULL,NULL,NULL,NULL,NULL,45765,NULL,NULL,0),(501464,1,1,'Timothy','Ferdinand Paul','Sellier',0,'f',NULL,'1991-06-01',NULL,NULL,NULL,NULL,NULL,'0645757199  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,45766,NULL,NULL,0),(501466,1,1,'Mohamed','El','Morahit',0,'m',NULL,'2019-10-11',NULL,'moharit@nts.nl',NULL,'moharit@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46490,NULL,NULL,0),(501468,1,1,'Yasin',NULL,'Okutan',0,'m',NULL,'2019-10-11',NULL,'yasin@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46491,NULL,NULL,0),(501470,1,1,'Jeffrey',NULL,'Barzilaij',0,NULL,NULL,'2019-10-11',NULL,'barzilaij@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46495,NULL,NULL,0),(501472,1,1,'Sander',NULL,'Bonhof',0,'m',NULL,NULL,NULL,NULL,NULL,'sander@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,47565,NULL,NULL,0),(501474,1,8,'Mohammad Nor','Firdaus Bin','Mohammad Ripin',0,'m','2020-01-13',NULL,NULL,'mohammadnor@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,47843,NULL,NULL,0),(501475,1,1,'Matas','','Magila',NULL,'m','2020-01-14','2020-01-14','','magila@nts.nl','','magila@nts.nl','','','','','','','','','',47862,NULL,NULL,0),(501476,1,1,'Huy','','Tran',NULL,'m','2020-01-14','2020-01-14','','tran@nts.nl','','tran@nts.nl','','','','','','','','','',47863,NULL,NULL,0),(501477,1,1,'Robbin','','Stroop',NULL,'m','2020-01-14','2020-01-14','','stroop@nts.nl','','stroop@nts.nl','','','','','','','','','',47864,NULL,NULL,0),(501486,1,11,'Lisa',NULL,'Isfordink ',0,'f',NULL,NULL,NULL,'lisa@salland.eu',NULL,'lisa@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51726,NULL,NULL,0),(501487,1,1,'Lisa',NULL,'Isfordink ',0,'f',NULL,NULL,NULL,'lisa@salland.eu',NULL,'lisa@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51726,NULL,NULL,0),(501488,1,11,'Daan','Van','Beerendonk ',0,'m',NULL,NULL,NULL,'daan@salland.eu',NULL,'daan@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51727,NULL,NULL,0),(501489,1,1,'Daan','Van','Beerendonk ',0,'m',NULL,NULL,NULL,'daan@salland.eu',NULL,'daan@salland.eu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51727,NULL,NULL,0),(501490,1,1,'Bryan','','Helbertina',NULL,'',NULL,NULL,'','bryan@nts.nl','','bryan@nts.nl','','','','','','','','','',52251,NULL,NULL,0),(501491,1,1,'Claudio','','Lima',NULL,'','2020-09-29','2020-09-29','','caludio@nts.nl','','claudio@nts.nl','','','','','','','','','',45687,NULL,NULL,0),(501492,1,1,'Cha','Hsuan','Liu',NULL,'',NULL,NULL,'','hsuan@nts.nl','','hsuan@nts.nl','','','','','','','','','',52779,NULL,NULL,0),(495234250,1,6,'Joseph','Mutunga','Mutua',NULL,'m','2020-02-17','2020-02-17','','joseph@nts.nl','','joseph@nts.nl','','','','','','','','','',48189,NULL,NULL,0),(495234252,1,8,'Sayed','Abdul','Rahman',0,'m','2020-02-18','2020-02-18',NULL,'rahman@nts.nl',NULL,'rahman@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,48205,NULL,NULL,0),(495234255,1,1,'Mali','Margaret','Kyende',NULL,'f','2020-03-03','2020-03-03','','mali@nts.nl','','mali@nts.nl','','','','','','','','','',54,NULL,NULL,0),(495234262,1,1,'Muhammad Khairul',NULL,'Azmi bin Mohd Nasir',0,'f',NULL,NULL,NULL,'khairul@nts.nl',NULL,'khairul@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50311,NULL,NULL,0),(495234266,1,6,'Justus','Wachira','Maina',0,NULL,NULL,NULL,NULL,'justus@nts.nl',NULL,'justus@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50356,NULL,NULL,0),(495234268,1,6,'James ','Kagiri ','Kibiru',0,'m',NULL,NULL,NULL,'kagiri@nts.nl',NULL,'kagiri@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50895,NULL,NULL,0),(495234270,1,8,'Muhammad Khairul',NULL,'Azmi bin Mohd Nasir',0,'f',NULL,NULL,NULL,'khairul@nts.nl',NULL,'khairul@nts.nl','+6011 3544 2045','+6011 3544 2045',NULL,NULL,NULL,NULL,NULL,NULL,NULL,50311,NULL,NULL,0),(495234278,1,1,'Justus','Wachira','Maina',0,'m',NULL,NULL,NULL,'justus@nts.nl',NULL,'justus@nts.nl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50356,NULL,NULL,0);

DROP TABLE IF EXISTS `branch`;
CREATE TABLE `branch` (
  `Branch_ID` int(11) NOT NULL DEFAULT '0',
  `visible_in_projects` tinyint(4) DEFAULT '1',
  `Branch_Name` varchar(40) DEFAULT NULL,
  `Branch_City` varchar(40) DEFAULT NULL,
  `Branch_Country_ID` smallint(6) DEFAULT NULL,
  `BraCurrency` varchar(15) DEFAULT NULL,
  `BraLanguageId` smallint(4) DEFAULT NULL,
  `BraPostAttendant` varchar(40) DEFAULT NULL,
  `BraPostAddress1` varchar(40) DEFAULT NULL,
  `BraPostAddress2` varchar(40) DEFAULT NULL,
  `BraPostAddress3` varchar(40) DEFAULT NULL,
  `BraPostZipcode` varchar(20) DEFAULT NULL,
  `BraPostCity` varchar(40) DEFAULT NULL,
  `BraPostCountryId` smallint(6) DEFAULT NULL,
  `BraDeliveryAttendant` varchar(40) DEFAULT NULL,
  `BraDeliveryAddress1` varchar(40) DEFAULT NULL,
  `BraDeliveryAddress2` varchar(40) DEFAULT NULL,
  `BraDeliveryAddress3` varchar(40) DEFAULT NULL,
  `BraDeliveryZipcode` varchar(20) DEFAULT NULL,
  `BraDeliveryCity` varchar(40) DEFAULT NULL,
  `BraDeliveryCountryId` smallint(6) DEFAULT NULL,
  `BraTelephone` varchar(20) DEFAULT NULL,
  `BraFax` varchar(20) DEFAULT NULL,
  `BraUrl` varchar(50) DEFAULT NULL,
  `BraVatnumber` varchar(20) DEFAULT NULL,
  `BraTax` decimal(10,4) DEFAULT NULL,
  `BraBankInfo` mediumtext,
  `BraPurchaseHeader` mediumtext,
  `Visible` smallint(1) DEFAULT NULL,
  `BraExchangeRate` decimal(10,2) DEFAULT '1.00',
  `webshopTax` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Branch_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(4) NOT NULL,
  `toc_id` int(11) DEFAULT NULL,
  `event_name` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `details` text NOT NULL,
  `completed` smallint(1) NOT NULL DEFAULT '0',
  `target` int(11) DEFAULT NULL,
  `result` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `rec_type` text,
  `event_length` varchar(11) DEFAULT NULL,
  `event_pid` int(6) DEFAULT NULL,
  `event_pjd` bigint(20) DEFAULT NULL,
  `entered_by` int(6) DEFAULT NULL,
  `cat_id` int(2) DEFAULT NULL,
  `is_variable` int(2) DEFAULT NULL,
  `assigned_eid` tinytext,
  `sort_id` int(3) DEFAULT NULL,
  `map` smallint(1) DEFAULT NULL,
  `masterrecord` smallint(1) DEFAULT NULL,
  `visible` int(3) DEFAULT '1',
  `approved_by` tinytext,
  `info` text,
  `employee_name` varchar(100) DEFAULT NULL,
  `reoccur_map` smallint(1) DEFAULT NULL,
  `document_id` varchar(100) DEFAULT NULL,
  `personal` smallint(1) DEFAULT '1',
  `protection` smallint(1) DEFAULT '1',
  `duration` int(11) DEFAULT '60',
  `progress` float DEFAULT '0',
  `sortorder` int(11) DEFAULT NULL,
  `task_id` bigint(20) DEFAULT '0',
  `multiuser` tinyint(4) DEFAULT '0',
  `emp_list` varchar(20) DEFAULT NULL,
  `checked` tinyint(4) DEFAULT NULL,
  `subject` tinytext,
  `workrate` int(11) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `kpi_value` varchar(255) DEFAULT NULL,
  `main_task` tinyint(4) DEFAULT '1',
  `comment` mediumtext,
  `is_active` tinyint(4) DEFAULT '1',
  `doc_id` int(11) DEFAULT NULL,
  `libraries_id` int(11) DEFAULT NULL,
  `time_ready_verification` time DEFAULT NULL,
  `datetime_done_verification` datetime DEFAULT NULL,
  `employee_verification` int(11) DEFAULT '0',
  `datetime_done_packing` datetime DEFAULT NULL,
  `employee_packing` int(11) DEFAULT '0',
  `datetime_done_shipment` datetime DEFAULT NULL,
  `employee_shipment` int(11) DEFAULT '0',
  `demontage_id` int(11) DEFAULT '0',
  `is_procedure` tinyint(4) DEFAULT '0',
  `trainees_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`event_id`,`employee_id`),
  UNIQUE KEY `event_to_employee` (`event_id`,`employee_id`),
  UNIQUE KEY `event_toc_id` (`event_id`,`employee_id`,`toc_id`),
  KEY `employee_id SI` (`employee_id`),
  KEY `tag_id SI` (`tag_id`),
  KEY `Start Date SI` (`start_date`),
  KEY `End Date SI` (`end_date`),
  KEY `event_pid SI` (`event_pid`),
  KEY `event_pjd SI` (`event_pjd`),
  KEY `entered_by` (`entered_by`),
  KEY `completed SI` (`completed`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `projects_monitoring`;
CREATE TABLE `projects_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` date DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `observation` mediumtext,
  `solution` mediumtext,
  `problems` mediumtext,
  `toc_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `procedure_id` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `chapter` varchar(255) DEFAULT NULL,
  `procedure_date` date DEFAULT NULL,
  `bom` date DEFAULT NULL,
  `bought` date DEFAULT NULL,
  `delivered` date DEFAULT NULL,
  `completed` date DEFAULT NULL,
  `verified` tinyint(4) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `types` VALUES ('1', 'Video');
INSERT INTO `types` VALUES ('2', 'Moodle');
INSERT INTO `types` VALUES ('3', 'Project');

DROP TABLE IF EXISTS `xoops_shop_languages`;
CREATE TABLE `xoops_shop_languages` (
    `languages_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(32) NOT NULL DEFAULT '',
    `code` char(2) NOT NULL DEFAULT '',
    `image` varchar(64) DEFAULT NULL,
    `directory` varchar(32) DEFAULT NULL,
    `sort_order` int(3) DEFAULT NULL,
    `preferences` varchar(20) DEFAULT NULL,
    PRIMARY KEY (`languages_id`),
    KEY `IDX_LANGUAGES_NAME` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `xoops_shop_languages` VALUES (1,'English','en','icon.gif','english',2,'1,4'),(7,'German','ge','icon.gif','german',3,'7,1,4'),(4,'Dutch','nl','icon.gif','dutch',1,'4,1'),(6,'French','fr','icon.gif','french',4,'6,1,4'),(8,'Swahili','sw','icon.gif','swahili',5,'8'),(9,'Spanish','sp','icon.gif','spanish',6,'9'),(5,'Malaysia','my','icon.gif','malaysia',7,'5');


DROP TABLE IF EXISTS `lookuptable`;
CREATE TABLE `lookuptable` (
  `Item_ID` int(11) NOT NULL DEFAULT '0',
  `Language_ID` int(11) NOT NULL DEFAULT '1',
  `Item_name` varchar(60) DEFAULT NULL,
  `Sort_ID` int(11) DEFAULT '0',
  `Item_Value` decimal(11,4) DEFAULT NULL,
  `Item_Value2` decimal(11,4) DEFAULT NULL,
  `String_Value` varchar(10) DEFAULT NULL,
  `String_Value_Long` varchar(40) DEFAULT NULL,
  `BranchId` smallint(3) DEFAULT NULL,
  PRIMARY KEY (`Item_ID`,`Language_ID`),
  KEY `Sort_ID` (`Sort_ID`),
  KEY `Item_Val` (`Item_Value`,`Language_ID`,`Sort_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `document_toc`;

CREATE TABLE `document_toc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `doc_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `topics` mediumtext,
  `comments` mediumtext,
  `content` mediumtext,
  `status` varchar(30) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`,`parent_id`,`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `document_toc_content`;

CREATE TABLE `document_toc_content` (
  `document_id` int(11) NOT NULL,
  `document_content` longtext,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `document_toc_history`;

CREATE TABLE `document_toc_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `toc_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `date_edited` datetime DEFAULT NULL,
  `content` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `document_toc_plan`;

CREATE TABLE `document_toc_plan` (
  `project_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `toc_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`report_id`,`toc_id`,`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `documents_comments`;

CREATE TABLE `documents_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_date` datetime DEFAULT NULL,
  `eid` int(11) DEFAULT '0',
  `details` mediumtext,
  `chapter_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `captivate`;

CREATE TABLE `captivate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `starttime` datetime DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject_id` bigint(20) unsigned NOT NULL,
  `institution_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `old_temp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modules_id_subject_id_index` (`id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `modules_copy`;

CREATE TABLE `modules_copy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject_id` bigint(20) unsigned NOT NULL,
  `institution_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `old_temp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modules_id_subject_id_index` (`id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `st_audio_file`;

CREATE TABLE `st_audio_file` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `text_languageID` tinyint(4) DEFAULT NULL,
  `SortID` tinyint(4) DEFAULT NULL,
  `BeginTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `Content` longtext,
  `Status` tinyint(4) DEFAULT NULL,
  `Author` int(11) DEFAULT NULL,
  `Updated` datetime DEFAULT NULL,
  `FileAlias` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_audio_language`;

CREATE TABLE `st_audio_language` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `videoID` int(11) DEFAULT NULL,
  `languageID` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `lang_vid` (`videoID`,`languageID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `st_audiomovie`;

CREATE TABLE `st_audiomovie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LanguageID` int(11) NOT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `Size` int(11) DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `lang` (`LanguageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `st_captiontime`;

CREATE TABLE `st_captiontime` (
  `time_ID` int(11) NOT NULL AUTO_INCREMENT,
  `end` varchar(50) DEFAULT NULL,
  `begin` varchar(50) DEFAULT NULL,
  `fileID` int(11) DEFAULT NULL,
  PRIMARY KEY (`time_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_course`;

CREATE TABLE `st_course` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(200) DEFAULT NULL,
  `Description` longtext,
  `Modules` varchar(200) DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  `Comment` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_media`;

CREATE TABLE `st_media` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(200) DEFAULT NULL,
  `Alias` varchar(20) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Module` int(11) DEFAULT NULL,
  `fileType` varchar(20) DEFAULT NULL,
  `fileSize` varchar(20) DEFAULT NULL,
  `uploadDate` datetime DEFAULT NULL,
  `comments` longtext,
  `Sort` tinyint(4) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_media_copy`;

CREATE TABLE `st_media_copy` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(200) DEFAULT NULL,
  `Alias` varchar(20) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Module` int(11) DEFAULT NULL,
  `fileType` varchar(20) DEFAULT NULL,
  `fileSize` varchar(20) DEFAULT NULL,
  `uploadDate` datetime DEFAULT NULL,
  `comments` longtext,
  `Sort` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_module`;

CREATE TABLE `st_module` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ModuleName` varchar(255) DEFAULT NULL,
  `Description` longtext,
  `Subject` int(11) DEFAULT NULL,
  `Sort` tinyint(4) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `comment` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_procedures`;

CREATE TABLE `st_procedures` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Procedure` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_scripts`;

CREATE TABLE `st_scripts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `media_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_id` (`media_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_subject`;

CREATE TABLE `st_subject` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(200) DEFAULT NULL,
  `Description` longtext,
  `Modules` varchar(200) DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_subtitle_properties`;

CREATE TABLE `st_subtitle_properties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `font` varchar(100) DEFAULT NULL,
  `font_size` varchar(100) DEFAULT NULL,
  `background` varchar(100) DEFAULT NULL,
  `text_position` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `mediaID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `media_properties` (`mediaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_text_files`;

CREATE TABLE `st_text_files` (
  `sub_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `language_id` tinyint(4) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `sub_title` longtext,
  `overlaying_text` longtext,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `video_language` (`language_id`,`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_translations`;

CREATE TABLE `st_translations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(100) DEFAULT NULL,
  `translations` longtext,
  `time_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `lang_time` (`language`,`time_ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `st_user_preview_stat`;

CREATE TABLE `st_user_preview_stat` (
  `UserId` varchar(250) NOT NULL,
  `viewed_time` varchar(100) DEFAULT NULL,
  `host_device` varchar(100) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `playback_position` int(50) DEFAULT NULL,
  `total_playback` int(50) DEFAULT NULL,
  UNIQUE KEY `user_media` (`UserId`,`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `institution_id` int(10) unsigned DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `trs_metadata`;

CREATE TABLE `trs_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `file_name` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL,
  `update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `project_id` int(11) DEFAULT NULL,
  `is_new` tinyint(4) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `uploads`;

CREATE TABLE `uploads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumbnailLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videoLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` tinyint(1) DEFAULT '0',
  `subject_id` bigint(20) DEFAULT NULL,
  `module_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uploads_id_user_id_index` (`id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));




-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 83.98.243.187    Database: moodle_doc_db
-- ------------------------------------------------------
-- Server version 5.7.13-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `archive_documents`
--

DROP TABLE IF EXISTS `archive_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `archive_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(50) DEFAULT NULL,
  `content` longtext,
  `moodle_courseI_ID` int(11) DEFAULT NULL,
  `bUpdate` tinyint(4) DEFAULT NULL,
  `bChanged` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`doc_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `archived_toc`
--

DROP TABLE IF EXISTS `archived_toc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `archived_toc` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL,
  `doc_name` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `chapter_id` varchar(50) DEFAULT '""',
  `chapter` text,
  `parent_id` varchar(50) DEFAULT NULL,
  `content` longtext,
  `type` varchar(50) DEFAULT NULL,
  `charVal` longtext,
  `level_id` varchar(50) DEFAULT '""',
  `uppercss` longtext,
  `lowercss` longtext,
  `section_id` tinyint(4) DEFAULT NULL,
  `toUpdate` tinyint(4) DEFAULT NULL,
  `moodle_id` varchar(50) DEFAULT NULL,
  `lesson_id` varchar(50) DEFAULT NULL,
  `module_id` varchar(50) DEFAULT NULL,
  `binsert` tinyint(4) DEFAULT NULL,
  `bUpdate` tinyint(4) DEFAULT NULL,
  `bDelete` tinyint(4) DEFAULT NULL,
  `bContent_update` tinyint(4) DEFAULT NULL,
  `bChanged` tinyint(4) DEFAULT NULL,
  `hasQuestion` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`a_id`),
  UNIQUE KEY `Index 2` (`chapter_id`,`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=684718 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `course_server`
--

DROP TABLE IF EXISTS `course_server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` varchar(50) DEFAULT NULL,
  `moodle_course_id` varchar(50) DEFAULT NULL,
  `server_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`document_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1458 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `course_versions`
--

DROP TABLE IF EXISTS `course_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_versions` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `version_name` varchar(50) DEFAULT NULL,
  `file_names` varchar(50) DEFAULT NULL,
  `Date_Time` varchar(50) DEFAULT NULL,
  `docid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `document_questions`
--

DROP TABLE IF EXISTS `document_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `document_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `text` text,
  `qtype` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `qoption` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`title`,`document_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2012 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(50) DEFAULT NULL,
  `content` longtext,
  `moodle_courseI_ID` int(11) DEFAULT NULL,
  `bUpdate` tinyint(4) DEFAULT NULL,
  `bChanged` tinyint(4) DEFAULT NULL,
  `server_id` varchar(50) DEFAULT NULL,
  `document_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`doc_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3588 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `google_docs`
--

DROP TABLE IF EXISTS `google_docs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `google_docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(50) DEFAULT NULL,
  `sort_id` int(20) DEFAULT NULL,
  `last_revised` varchar(50) DEFAULT NULL,
  `parent_id` int(20) DEFAULT NULL,
  `level` int(20) DEFAULT NULL,
  `toc_chapter` varchar(50) DEFAULT NULL,
  `toc_name` varchar(50) DEFAULT NULL,
  `content_html` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`sort_id`,`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48362 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moodle_content`
--

DROP TABLE IF EXISTS `moodle_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `moodle_content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `toc_id` int(11) DEFAULT NULL,
  `content_name` varchar(200) NOT NULL DEFAULT '',
  `content_html` longtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32607 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moodle_documents`
--

DROP TABLE IF EXISTS `moodle_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `moodle_documents` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_code` varchar(20) DEFAULT NULL,
  `doc_name` varchar(200) DEFAULT NULL,
  `last_revised` varchar(50) DEFAULT NULL,
  `revision_number` int(11) DEFAULT NULL,
  `import_raw` longtext,
  `toc_raw` longtext,
  `content_raw` longtext,
  `moodle_course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`doc_id`),
  UNIQUE KEY `Index 2` (`doc_code`)
) ENGINE=InnoDB AUTO_INCREMENT=329 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moodle_toc`
--

DROP TABLE IF EXISTS `moodle_toc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `moodle_toc` (
  `toc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` varchar(50) NOT NULL DEFAULT '0',
  `sort_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `toc_chapter` varchar(40) NOT NULL DEFAULT '0',
  `toc_name` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`toc_id`),
  UNIQUE KEY `Index 2` (`sort_id`,`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24607 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `question_responces`
--

DROP TABLE IF EXISTS `question_responces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question_responces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `text` text,
  `jumpto` bigint(20) DEFAULT '-1',
  `grade` smallint(6) DEFAULT NULL,
  `score` bigint(20) DEFAULT NULL,
  `response` longtext,
  `responseformat` tinyint(4) DEFAULT '1',
  `moodle_id` bigint(20) DEFAULT NULL,
  `is_updated` tinyint(4) DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`sort_id`,`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3918 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `server`
--


DROP TABLE IF EXISTS `moodle_servers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `moodle_servers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`domain`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date_time` char(50) DEFAULT NULL,
  `Content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `toc`
--

DROP TABLE IF EXISTS `toc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `toc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL,
  `doc_name` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `chapter_id` varchar(50) DEFAULT '""',
  `chapter` text,
  `parent_id` varchar(50) DEFAULT NULL,
  `content` longtext,
  `type` varchar(50) DEFAULT NULL,
  `charVal` longtext,
  `level_id` varchar(50) DEFAULT '""',
  `uppercss` longtext,
  `lowercss` longtext,
  `section_id` int(11) DEFAULT NULL,
  `toUpdate` smallint(6) DEFAULT '0',
  `moodle_id` varchar(50) DEFAULT NULL,
  `lesson_id` varchar(50) DEFAULT NULL,
  `module_id` varchar(50) DEFAULT NULL,
  `binsert` tinyint(4) DEFAULT '0',
  `bUpdate` tinyint(4) DEFAULT '0',
  `bDelete` tinyint(4) DEFAULT '0',
  `bContent_update` tinyint(4) DEFAULT '0',
  `bChanged` smallint(6) DEFAULT '0',
  `hasQuestion` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`chapter_id`,`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=586700 DEFAULT CHARSET=utf8;

