CREATE DATABASE 'php_company' /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

CREATE TABLE 'com_admin' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'login_name' varchar(45) COLLATE utf8_bin NOT NULL,
  'password' varchar(45) COLLATE utf8_bin NOT NULL,
  'user_name' varchar(45) COLLATE utf8_bin NOT NULL,
  'grade' varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/* 插入管理员数据 */
INSERT INTO com_admin
(
login_name,
password,
user_name,
grade)
VALUES
(
'admin',
'123456',
'西门崔雪',
1);


CREATE TABLE 'com_category' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'category_name' varchar(45) COLLATE utf8_bin NOT NULL,
  'parent_id' int(11) NOT NULL,
  'content' varchar(45) COLLATE utf8_bin DEFAULT NULL,
  'rank' int(11) NOT NULL,
  'path' varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


CREATE TABLE 'com_news' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'news_title' varchar(45) COLLATE utf8_bin NOT NULL,
  'news_content' varchar(45) COLLATE utf8_bin NOT NULL,
  'news_category' varchar(45) COLLATE utf8_bin NOT NULL,
  'news_poster' varchar(45) COLLATE utf8_bin DEFAULT NULL,
  'news_date' datetime NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


CREATE TABLE 'com_news_category' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'category_name' varchar(45) COLLATE utf8_bin NOT NULL,
  'category_desc' varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


CREATE TABLE 'com_product' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'product_category' varchar(45) COLLATE utf8_bin NOT NULL,
  'product_name' varchar(45) COLLATE utf8_bin NOT NULL,
  'product_image' varchar(45) COLLATE utf8_bin DEFAULT NULL,
  'product_desc' varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



