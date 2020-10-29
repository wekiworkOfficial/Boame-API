CREATE TABLE IF NOT EXISTS `accounts` (
	accountid BIGINT(20) auto_increment primary key, 
	firstname VARCHAR(255) , 
	lastname VARCHAR(255) , 
	email VARCHAR(300) , 
	telephone VARCHAR(255) null, 
	accounttypeid INT , 
	display_image VARCHAR(255) null
);

DROP TABLE `authentication`;
CREATE TABLE IF NOT EXISTS `authentication` (
	authenticationid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	token TEXT , 
	last_seen VARCHAR(255) , 
	date_created VARCHAR(255)
);
DROP TABLE `accounts`;
ALTER TABLE `accounts` ADD verified TINYINT default 0 AFTER display_image;
CREATE TABLE IF NOT EXISTS `accounts` (
	accountid BIGINT(20) auto_increment primary key, 
	firstname VARCHAR(255) , 
	lastname VARCHAR(255) , 
	email VARCHAR(300) , 
	telephone VARCHAR(255) null, 
	accounttypeid INT , 
	display_image VARCHAR(255) null, 
	verified TINYINT default 0
);
DROP TABLE `password_hash`;
CREATE TABLE IF NOT EXISTS `password_hash` (
	passwordhashid BIGINT(20) auto_increment primary key, 
	authenticationid BIGINT , 
	password_salt VARCHAR(255)
);
DROP TABLE `password_hash`;
ALTER TABLE `password_hash` CHANGE COLUMN passwordhash passwordhash VARCHAR(255) AFTER password_salt;
ALTER TABLE `password_hash` ADD password_salt VARCHAR(255) AFTER passwordhash;
CREATE TABLE IF NOT EXISTS `password_hash` (
	passwordhashid BIGINT(20) auto_increment primary key, 
	authenticationid BIGINT , 
	passwordhash VARCHAR(255) , 
	password_salt VARCHAR(255)
);
DROP TABLE `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
	volunteerid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	residential_address VARCHAR(255) , 
	cv_address TEXT , 
	biography LONGTEXT , 
	date_created VARCHAR(255) , 
	approved TINYINT default 0, 
	date_approved VARCHAR(255) , 
	approved_by BIGINT , 
	comment LONGTEXT
);
DROP TABLE `accounts`;
ALTER TABLE `accounts` ADD addedby BIGINT default 0 AFTER verified;
CREATE TABLE IF NOT EXISTS `accounts` (
	accountid BIGINT(20) auto_increment primary key, 
	firstname VARCHAR(255) , 
	lastname VARCHAR(255) , 
	email VARCHAR(300) , 
	telephone VARCHAR(255) null, 
	accounttypeid INT , 
	display_image VARCHAR(255) null, 
	verified TINYINT default 0, 
	addedby BIGINT default 0
);
DROP TABLE `volunteers`;
ALTER TABLE `volunteers` CHANGE COLUMN volunteerpositionid volunteerpositionid INT AFTER residential_address;
ALTER TABLE `volunteers` CHANGE COLUMN residential_address residential_address VARCHAR(255) AFTER cv_address;
ALTER TABLE `volunteers` CHANGE COLUMN cv_address cv_address TEXT AFTER biography;
ALTER TABLE `volunteers` CHANGE COLUMN biography biography LONGTEXT AFTER date_created;
ALTER TABLE `volunteers` CHANGE COLUMN date_created date_created VARCHAR(255) AFTER approved;
ALTER TABLE `volunteers` CHANGE COLUMN approved approved TINYINT default 0 AFTER date_approved;
ALTER TABLE `volunteers` CHANGE COLUMN date_approved date_approved VARCHAR(255) AFTER approved_by;
ALTER TABLE `volunteers` CHANGE COLUMN approved_by approved_by BIGINT AFTER comment;
ALTER TABLE `volunteers` ADD comment LONGTEXT AFTER approved_by;
CREATE TABLE IF NOT EXISTS `volunteers` (
	volunteerid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	volunteerpositionid INT , 
	residential_address VARCHAR(255) , 
	cv_address TEXT , 
	biography LONGTEXT , 
	date_created VARCHAR(255) , 
	approved TINYINT default 0, 
	date_approved VARCHAR(255) , 
	approved_by BIGINT , 
	comment LONGTEXT
);
CREATE TABLE IF NOT EXISTS `jobs` (
	jobid BIGINT(20) auto_increment primary key, 
	job_name VARCHAR(255) , 
	job_body VARCHAR(255) , 
	job_status VARCHAR(255) , 
	time_queued VARCHAR(255) , 
	time_completed VARCHAR(255)
);
DROP TABLE `jobs`;
ALTER TABLE `jobs` CHANGE COLUMN job_body job_body LONGTEXT;
CREATE TABLE IF NOT EXISTS `jobs` (
	jobid BIGINT(20) auto_increment primary key, 
	job_name VARCHAR(255) , 
	job_body LONGTEXT , 
	job_status VARCHAR(255) , 
	time_queued VARCHAR(255) , 
	time_completed VARCHAR(255)
);
DROP TABLE `video_attached`;
CREATE TABLE IF NOT EXISTS `video_attached` (
	videoattachedid BIGINT(20) auto_increment primary key, 
	casesreportedid BIGINT default 0 comment 'Can be a video uploaded by a reporter', 
	video_address TEXT , 
	video_frame_address VARCHAR(300) , 
	total_views BIGINT , 
	total_likes BIGINT , 
	total_dislikes BIGINT , 
	video_caption LONGTEXT , 
	date_created VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS `password_reset_vault` (
	password_reset_vaultid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	password VARCHAR(255) , 
	reset_code VARCHAR(255) , 
	date_created VARCHAR(255)
);
DROP TABLE `password_reset_vault`;
ALTER TABLE `password_reset_vault` ADD expire_date VARCHAR(255) AFTER date_created;
CREATE TABLE IF NOT EXISTS `password_reset_vault` (
	password_reset_vaultid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	password VARCHAR(255) , 
	reset_code VARCHAR(255) , 
	date_created VARCHAR(255) , 
	expire_date VARCHAR(255)
);
DROP TABLE `password_reset_vault`;
ALTER TABLE `password_reset_vault` CHANGE COLUMN password_salt password_salt VARCHAR(255) AFTER reset_code;
ALTER TABLE `password_reset_vault` CHANGE COLUMN reset_code reset_code VARCHAR(255) AFTER date_created;
ALTER TABLE `password_reset_vault` CHANGE COLUMN date_created date_created VARCHAR(255) AFTER expire_date;
ALTER TABLE `password_reset_vault` ADD expire_date VARCHAR(255) AFTER date_created;
CREATE TABLE IF NOT EXISTS `password_reset_vault` (
	password_reset_vaultid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	password VARCHAR(255) , 
	password_salt VARCHAR(255) , 
	reset_code VARCHAR(255) , 
	date_created VARCHAR(255) , 
	expire_date VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS `configuration` (
	configurationid BIGINT(20) auto_increment primary key, 
	storage_url VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS `chatconnection` (
	chatlistid BIGINT(20) auto_increment primary key, 
	accountid BIGINT , 
	accountid2 BIGINT , 
	allowed INT default 1, 
	conversation LONGTEXT , 
	unread INT default 0
);
CREATE TABLE IF NOT EXISTS `app_usage` (
	app_usageid BIGINT(20) auto_increment primary key, 
	year INT , 
	month INT , 
	weekid INT comment 'from 1 to 4' default 1, 
	monday INT , 
	tuesday INT , 
	wednesday INT , 
	thursday INT , 
	friday INT , 
	saturday INT , 
	sunday INT
);
CREATE TABLE IF NOT EXISTS `services_requested` (
	requestid BIGINT(20) auto_increment primary key, 
	nav_tag VARCHAR(255) , 
	accountid BIGINT default 0, 
	date_created VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS `feedback_replies` (
	feedbackreplyid BIGINT(20) auto_increment primary key, 
	feedbackid BIGINT , 
	accountid BIGINT , 
	device_hash VARCHAR(255) null, 
	feedback TEXT
);