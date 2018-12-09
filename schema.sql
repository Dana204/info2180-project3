DROP DATABASE IF EXISTS hireMe;
CREATE DATABASE IF NOT EXISTS hireMe;

USE hireMe;
CREATE TABLE Users (
   id INT NOT NULL AUTO_INCREMENT,
   firstname VARCHAR(64) NOT NULL default '',
   lastname VARCHAR(64) NOT NULL default '',
   password VARCHAR(64) NOT NULL default '',
   telephone VARCHAR(64) NOT NULL,
   email VARCHAR(64) NOT NULL default '',
   date_joined timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY(id));
   
-- change date joined to date 
DROP TABLE IF EXISTS `Jobs`;
CREATE TABLE Jobs (
   id INT NOT NULL AUTO_INCREMENT,
   job_title VARCHAR(64) NOT NULL default '',
   job_description VARCHAR(255) NOT NULL default '',
   category VARCHAR(64) NOT NULL default '',
   company_name VARCHAR(64) NOT NULL default '',
   company_location VARCHAR(255) NOT NULL default '',
   date_posted VARCHAR(20)timestamp NOT NULL default CURRENT_TIMESTAMP,
   PRIMARY KEY(id));

DROP TABLE IF EXISTS `Jobs Applied For`;
CREATE TABLE Jobs Applied For (
   id INT NOT NULL AUTO_INCREMENT,
   job_id VARCHAR(30),
   user_id VARCHAR(10),
   date_applied VARCHAR(20) timestamp NOT NULL default CURRENT_TIMESTAMP,
   PRIMARY KEY(id));
   
INSERT INTO Users (first_name, last_name, password, telephone, email, date_joined)
 VALUES ('Rene', 'Picard', 'tinybird988', '876-549-4444', 'rene.picard@example.com.jm');
 
 