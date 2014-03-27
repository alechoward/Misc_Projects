CREATE DATABASE 'harrisonhoward' DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE 'harrisonhoward'

CREATE TABLE IF NOT EXISTS 'paintings' (
'name' varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
'img' varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
'price' decimal(10,2) DEFAULT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLAGE=utf8_unicode_ci;