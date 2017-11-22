CREATE DATABASE IF NOT EXISTS test78;

use test78;

CREATE TABLE testtab
(
id INTEGER AUTO_INCREMENT,
name TEXT,
PRIMARY KEY (id)
) COMMENT='this is my test table';

INSERT INTO `testtab` VALUES (10,'Batman');
INSERT INTO `testtab` VALUES (11,'Robin');
INSERT INTO `testtab` VALUES (12,'Superman');
